<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    protected $table = "posts";
    //Primarykey
    public $Primarykey = "id";

    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }


}
