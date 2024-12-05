<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function order(){
        return view('order');
    }

    public function menu(){
        return view('menu');
    }

    public function contact(){
        return view('contact');
    }

    public function cart(){
        return view('cart');
    }


    public function submitContact(Request $request)
    {
        // Validasi data form
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Lakukan pengolahan data form, misalnya kirim email atau simpan ke database

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
