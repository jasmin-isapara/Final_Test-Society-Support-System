<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Complain;
use App\Models\UserComplain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function index()
    {
        $complains =UserComplain::all();
        return view('admin.comment.index',compact('complains'));
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'replyComment' => 'required|string'
        ]);
        if($validator->fails())
        {
            return redirect()->back()->with('message','Comment Area Is Mandatory');
        }

        $category = Category::where('slug',$request->category_slug)->where('status','0')->first();
        
        if($category)
        {
            Comment::create([
                'replyComment' => $request->replyComment,
            ]);
            return redirect()->back()->with('message','Comment Reply Successfully');
        }
    }

    public function edit($id)
    {
        $user_complains = UserComplain::with('category')->find($id);
        $category = Category::all();
        // dd($category);
        // dd($user_complains->description);
        return view('admin.comment.edit',compact('user_complains'));
        
    }


    public function destroy($comment_id)
    {
        $complains = UserComplain::find($comment_id);
        $complains->delete();
        return redirect('admin/comments')->with('message','Comment Deleted Successfully'); 
    }
}
