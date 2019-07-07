<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

    protected $table = 'task';

    protected $dates = ['createdAt'];

    public $timestamps = false;

    public function category() {

       return $this->belongsTo(Category::class,'category');
    }

}
