<?php

// File.php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FileDoc extends Model
{
    // use SoftDeletes;

    protected $fillable = [
      'title',
      'user_id',
      'overview',
      'price',
      'categories',
      'publish',
      'file_name',
    ];
    protected $table = 'files';

    public function user()
    {
      return $this->belongsTo('App\Users');
    }
}