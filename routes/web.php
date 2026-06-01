<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portofolio.index');
});

Route::get('/projects/hospital-management', function () {
    return view('projects.hospital');
});

Route::get('/projects/furniture-dashboard', function () {
    return view('projects.dashboard');
});