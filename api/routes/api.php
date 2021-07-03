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
Route::post("/contacts", "ContactController@store");
// Route::resource('contacts', "ContactController", ["only" => ["index", "store"]]);
