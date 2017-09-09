<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function () {
    return response()->json([
       'user' => [
           'name' => 'Asif Ali',
           'email' => 'shea786@live.co.uk'
       ]
    ]);
});
