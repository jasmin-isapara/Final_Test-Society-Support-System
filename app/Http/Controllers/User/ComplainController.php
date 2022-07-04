<?php

namespace App\Http\Controllers\User;

use App\Models\Category;
use App\Models\Complain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserComplain;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Mail\Mailable;

class ComplainController extends Controller
{
    public function index()
    {
        $complains = Complain::all();
        $category = Category::all();
        $userComplain = UserComplain::all();
        return view('user.create',compact('complains', 'category', 'userComplain'));
    }
    public function complainList()
    {
        $complains = Complain::all();
        $userComplain = UserComplain::all();
        return view('complain',compact('complains','userComplain'));
    }


    public function create()
    {
        $category = Category::where('status','0')->get();
        return view('user.create',compact('category'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $complain = new UserComplain();
        $complain->category_id = $data['category_id'];
        $complain->description = $data['description'];
        // $complain->Complain_Date = $data['date'];
        // $complain->status = $request->status == true ? '1':'0';
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = time() . '.' .$file->getClientOriginalExtension();
            $file->move('uploads/category/',$filename);
            $complain->image = $filename; 
        }
        $complain->user_id =Auth::user()->id;
        // dd($complain->image);
        $complain->save();



        return redirect('/complain')->with('message','Complain Added Successfully');

    }

}
