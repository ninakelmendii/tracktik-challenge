<?php

use Illuminate\Support\Facades\Route;

Route::post('/first-identity-provider', 'EmployeeController@sendToTrackTikApiByFirstProvider');
Route::post('/second-identity-provider', 'EmployeeController@sendToTrackTikApiBySecondProvider');
