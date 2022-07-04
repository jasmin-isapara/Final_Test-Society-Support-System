<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Complain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\ComplainFormRequest;

class ComplainController extends Controller
{
    public function index()
    {
        $complains = Complain::all();
        return view('admin.complain.index',compact('complains'));
    }

    public function create()
    {
        $category = Category::where('status','0')->get();
        return view('admin.complain.create',compact('category'));
    }

    public function store(ComplainFormRequest $request)
    {
        $data = $request->validated();

        $complain = new Complain;
        $complain->category_id = $data['category_id'];
        $complain->name = $data['name'];
        $complain->slug = $data['slug'];
        $complain->description = $data['description'];
        $complain->Complain_Date = $data['date'];
        $complain->status = $request->status == true ? '1':'0';
        $complain->created_by =Auth::user()->id;
        $complain->save();

        return redirect('admin/complains')->with('message','Complain Added Successfully');

    }

    public function edit($complain_id)
    {
        $category = Category::where('status','0')->get();
        $complains = Complain::find($complain_id);
        return view('admin.complain.edit',compact('complains','category'));
    }

    public function update(ComplainFormRequest $request,$complain_id)
    {
        $data = $request->validated();

        $complain = Complain::find($complain_id);
        $complain->category_id = $data['category_id'];
        $complain->name = $data['name'];
        $complain->slug = $data['slug'];
        $complain->description = $data['description'];
        $complain->status = $request->status == true ? '1':'0';
        $complain->created_by =Auth::user()->id;
        $complain->update();

        return redirect('admin/complains')->with('message','Complain Updated Successfully');
    }

    public function destroy($complain_id)
    {
        $complain = Complain::find($complain_id);
        $complain->delete();
        return redirect('admin/complains')->with('message','Complain Deleted Successfully'); 
    }
}
