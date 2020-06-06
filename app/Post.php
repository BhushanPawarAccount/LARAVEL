<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Custom Table
    protected $table = 'posts';
    //Primary Key
    public $primaryKey = 'id';
    //Time Stamps
    public $timeStamp = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
