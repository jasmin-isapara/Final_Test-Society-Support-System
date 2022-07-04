@extends('layouts.master')

@section('title','Edit Complain')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">

        

        <div class="card-header">
            <h4>Edit Complain
                <a href="{{ url('admin/complains') }}" class="btn btn-danger float-end">Back</a>
            </h4>
        </div>
        <div class="card-body">
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
        @endif
            <form action="{{ url('admin/update-complain/' .$complains->id) }}" method="POST">
                @csrf
                @method('PUT')
        <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="">Category</label>
                    <select name="category_id" required class="form-control">
                        <option value="">-- Select Category --</option>
                        @foreach($category as $cateitem)
                            <option value="{{ $cateitem->id }}" {{ $complains->category_id == $cateitem->id ? 'selected':'' }}>
                                {{ $cateitem->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="">Complain Name</label>
                    <input type="text" name="name" value="{{ $complains->name }}" class="form-control"/>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="">Description</label>
                    <textarea name="description"  rows="5" class="form-control">{!! $complains->description !!}</textarea> 
                </div>
                <div class="mb-3 col-md-6">
                    <label for="">Slug</label>
                    <input type="text" name="slug" value="{{ $complains->slug }}" class="form-control"/>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="">Complain_Date</label>
                    <input type="date" name="date"  value="{{ $complains->complain_date }}" class="form-control"/>
                </div>
                
                </div>
                    <div class="col-md-4 mb-3">
                            <input type="checkbox" name="status" {{ $complains->status == '1' ? 'checked':'' }}/>
                            <label for="">Status</label>
                    </div>
                   
                            <button type="submit" class="btn btn-primary">Update Complain</button>
                       
                </div>
            </form>
        </div>
    </div>
</div>

@endsection