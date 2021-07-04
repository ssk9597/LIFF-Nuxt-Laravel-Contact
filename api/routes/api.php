<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::get("/", function () {
  return "Hello World!";
});

// contacts
// Route::get("/contacts/index", "ContactController@index");
Route::post("/contacts", "ContactController@store");
Route::get("/contacts/index", function () {
  Log::info("OK");
  return "Hello World!";
});
// Route::resource('contacts', "ContactController", ["only" => ["index", "store"]]);
