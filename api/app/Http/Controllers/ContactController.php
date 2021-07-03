<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Contact;

// Validation
use App\Http\Requests\StoreContact;

class ContactController extends Controller
{
  public function index()
  {
    //
  }

  public function store(StoreContact $request)
  {
    // インスタンス化
    $contact = new Contact;

    // 値をDBに保存する
    $contact->fill($request->all())->save();
  }
}
