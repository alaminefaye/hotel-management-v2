<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\RoomManagement;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rooms', RoomManagement::class)->name('rooms.index');
