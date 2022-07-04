@extends('layouts.master')
@section('title','View Comments')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">

        
        <div class="card-header">
            <h4>View Comments
                {{-- <a href="{{ url('admin/comments') }}" class="btn btn-primary float-end">Add Commets</a> --}}
            </h4>
        </div>
        <div class="card-body">
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        
        <div class="table-responsive">
        <table id="myDataTable" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>User Id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($complains as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->category->name }}</td>                 
                    <td>{{ $item->description }}</td>
                    <td><img src="{{ asset('uploads/category/'.$item->image) }} " width="75px" height="75px" alt="Img"></td>
                    <td>{{ $item->user_id }}</td>
                    <td>
                        <a href="{{ url('admin/view-comment/' . $item->id) }}" class="btn btn-success">Reply</a>
                        <a href="{{ url('admin/delete-comment/' . $item->id) }}" class="btn btn-danger">Delete</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    </div>
</div>

@endsection