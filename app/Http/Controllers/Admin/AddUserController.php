<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AddUserController extends Controller
{
    public function index()
    {
        return view('admin.user.addUser');
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }

    public function create(Request $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            // 'confirmation_token' => str_random(64),
            'password' => Hash::make($data['password']),
        ]);

        $email_data = array(
            'name' => $data['name'],
            'email' => $data['email'],
        );
    

        Mail::send('emails.welcome', $email_data, function ($message) use ($email_data) {
            $message->to($email_data['email'], $email_data['name'])
                ->subject('Welcome to Society Support System')
                ->from('jasmin.arsenaltech@gmail.com');
        });
        return redirect('admin/users')->with('message','User Added Successfully');
    }
}
