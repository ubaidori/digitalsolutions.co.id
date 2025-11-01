<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;

Route::get('/', function () {
    return view('home');
});

//invitations index
Route::get('/invitation/fitri_and_dimas', [InvitationController::class,'index'])->name('invitations.fitri_and_dimas.index');