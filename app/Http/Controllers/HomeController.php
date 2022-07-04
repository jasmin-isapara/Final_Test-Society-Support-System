<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminHome()
    {
        return view('adminHome');
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }

    // public function captchaValidate(Request $request)
    // {
    //     $request ->validate([
    //         'name' => 'required',
    //         'email' => 'require|email',
    //         'password' => 'required|min:8',
    //         'captcha' => 'require|captcha',

    //     ]);
    //     return view('home');
    // }
    // public function refreshCaptcha()
    // {
    //     return response()->json(['captcha' => captcha_img()]);
    // }
}
