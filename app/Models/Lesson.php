<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;


    //relacion 1 a 1

    public function description(){
        return $this->hasOne('App\Models\Descroption');
    }


    //relacion 1  a mchos inversa
    public function section(){
        return $this->belongsTo('App\Models\Section');
    }

    public function platforms(){
        return $this->belongsTo('App\Models\Platforms');
    }

    //relacion mucos a muchos
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }


}
