<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Authenticatable
{
    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
      ];

      public function setPasswordAttribute($value)
      {
        $this->attributes['password'] = bcrypt($value);
      }
}
