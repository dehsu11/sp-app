<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Welcome')->name('home');
Route::inertia('/awareness', 'Awareness')->name('awareness');
Route::inertia('/support', 'Support')->name('support');
Route::inertia('/resources', 'Resources')->name('resources');
Route::inertia('/hope', 'Hope')->name('hope');
