<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Complain;
use App\Models\UserComplain;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $complains =UserComplain::all();
        return view('admin.comment.index',compact('complains'));
    }

    public function edit($id)
    {
        $user_complains = UserComplain::with('category')->find($id);
        $category = Category::all();
        // dd($user_complains->description);
        return view('admin.comment.edit',compact('user_complains','category'));
    }


    public function destroy($comment_id)
    {
        $complains = UserComplain::find($comment_id);
        $complains->delete();
        return redirect('admin/comments')->with('message','Comment Deleted Successfully'); 
    }
}
