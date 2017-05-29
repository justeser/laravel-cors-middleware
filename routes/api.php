<?php

use Illuminate\Http\Request;

Route::get('test', function(){
    return response([1,2,3,4], 200);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
