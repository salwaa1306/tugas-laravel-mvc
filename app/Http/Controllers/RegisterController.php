<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form() {
      return view('form');
    }

    public function welcome() {
      return "Haloo php";
    }

    public function welcome_post(Request $request) {
        $nama = $request["nama"];
        return view('welcome', ['nama' => $nama]);
    }

}
