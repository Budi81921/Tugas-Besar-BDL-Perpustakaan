<?php

namespace App\Http\Controllers;
use App\Models\koleksi;
use App\Models\peminjaman;
use ConsoleTVs\Charts\Classes\C3\Chart;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use ConsoleTVs\Charts\Facades\Charts;

// use Charts;

class AdminController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $koleksi = Koleksi::all();

        //render view with posts
        return view('admin.index', compact('koleksi'));
    }

        /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'judul_koleksi'     => 'required|min:5',
            'deskripsi_koleksi'   => 'required|min:10'
        ]);


        //create post
        Koleksi::create([
            'judul_koleksi'     => $request->judul_koleksi,
            'deskripsi_koleksi'   => $request->deskripsi_koleksi
        ]);

        //redirect to index
        return redirect()->route('admin.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

        /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get koleksi by ID
        $koleksi = koleksi::findOrFail($id);

        //render view with post
        return view('admin.show', compact('koleksi'));
    }


        /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $koleksi = Koleksi::findOrFail($id);

        //render view with post
        return view('admin.edit', compact('koleksi'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'judul_koleksi'     => 'required|min:5',
            'deskripsi_koleksi'   => 'required|min:10'
        ]);

        //get post by ID
        $koleksi = Koleksi::findOrFail($id);

        //update post without image
        $koleksi->update([
            'judul_koleksi'     => $request->judul_koleksi,
            'deskripsi_koleksi'   => $request->deskripsi_koleksi
        ]);

        //redirect to index
        return redirect()->route('admin.index')->with(['success' => 'Data Berhasil Diubah!']);
    }


        /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $koleksi = koleksi::findOrFail($id);

        //delete post
        $koleksi->delete();

        //redirect to index
        return redirect()->route('admin.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function peminjaman()
    {
        $listpeminjaman = DB::table('koleksis')
        ->join('peminjaman', 'koleksis.id', '=', 'peminjaman.id_koleksi')
        ->join('users', 'peminjaman.id_user', '=', 'users.id')
        ->select('koleksis.*', 'peminjaman.*', 'users.*')
        ->get();
        return view('admin.peminjaman', compact('listpeminjaman'));
    }


    public function statistikPeminjaman()
    {
        // Retrieve data peminjaman dari database
        $peminjaman = peminjaman::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('count', 'month_name');

        $labels = $peminjaman->keys();
        $data = $peminjaman->values();
        // Tampilkan view dengan chart
        return view('admin.statistik', compact('chart'));
    }



}





