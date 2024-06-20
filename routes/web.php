<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AboutMeController;
use App\http\Controllers\SkillsController;
use App\http\Controllers\HobbiesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-me', function () {
    return view('components/about-me');
});

Route::get('/skills', function () {
    return view('components/skills');
});

Route::get('/hobby', function () {
    return view('components/hobbies');
});