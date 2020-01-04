<?php

// File.php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    // use SoftDeletes;

    protected $table = 'users';
    public $fillable = [
        'name', 'email', 'password','type',
    ];
    public function files()
    {
      return $this->Hasmany('App\FileDoc');
    }
}