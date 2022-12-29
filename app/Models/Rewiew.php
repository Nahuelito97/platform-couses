<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rewiew extends Model
{
    use HasFactory;

    //relacion 1 a muchos inversa


    public function users(){
        return $this->belongsTo('App\Model\User');
    }

    public function course(){
        return $this->belongsTo('App\Model\Course');
    }

}
