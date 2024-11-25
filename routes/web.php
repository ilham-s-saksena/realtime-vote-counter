<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;

Route::controller(CandidateController::class)->group(function(){
    Route::get('/', 'index');
});

Route::get('/vote', function () {
    return view('vote');
});

Route::controller(VoteController::class)->group(function() {
    Route::post('addVote', 'addVote')->name('addVote');
});
