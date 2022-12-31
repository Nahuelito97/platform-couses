<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //relacion 1 a muchois

    public function course(){
        return $this->hashMany('App\Models\Course');
    }
}
