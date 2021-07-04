<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::get("/", function () {
  return "Hello World!";
});

// contacts
Route::get("/contacts/index", "ContactController@index");
Route::post("/contacts", "ContactController@store");
// Route::resource('contacts', "ContactController", ["only" => ["index", "store"]]);
