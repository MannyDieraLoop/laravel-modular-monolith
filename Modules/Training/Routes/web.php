<?php

use Illuminate\Support\Facades\Route;

Route::prefix('training')->group(function() {
    Route::get('/', 'TrainingController@index');
});
