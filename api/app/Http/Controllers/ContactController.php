<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 後から消す
use Illuminate\Support\Facades\Log;

// Models
use App\Models\Contact;

// Validation
use App\Http\Requests\StoreContact;

class ContactController extends Controller
{
  public function index()
  {
    Log::info("OK");
    return "Hello World!";
  }

  public function store(StoreContact $request)
  {
    Log::info("叩く");
    // インスタンス化
    $contact = new Contact;

    // 値をDBに保存する
    $contact->fill($request->all())->save();
  }
}
