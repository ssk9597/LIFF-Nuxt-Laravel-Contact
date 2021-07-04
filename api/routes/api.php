<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
// contacts
Route::get("/contacts/index", "ContactController@index");
Route::post("/contacts", "ContactController@store");
