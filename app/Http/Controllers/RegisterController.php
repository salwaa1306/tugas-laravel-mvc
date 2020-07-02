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
        $namaAwal = $request["namaAwal"];
        $namaAkhir = $request["namaAkhir"];
        return view('welcome', ['namaAwal' => $namaAwal, 'namaAkhir' => $namaAkhir]);
    }

}
