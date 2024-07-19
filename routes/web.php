<?php

use App\Livewire\Attendence;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('attendence', Attendence::class)->name('attendence');
});
