<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;



    //Relacion 1 a 1 inversa

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
