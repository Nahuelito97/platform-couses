<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeCOntroller;

Route::get('', [HomeCOntroller::class, 'index']);
