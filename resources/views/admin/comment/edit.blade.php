@extends('layouts.master')
@section('title','Comment Replay')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">Add Comment Reply
            <a href="{{ url('admin/comments') }}" class="btn btn-danger float-end">Back</a>
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

            <form action="{{ url('admin/view-comment') }}" method="POST">
                @csrf
                @method('PUT')  
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="">Category Name</label>
                    <input type="text" name="name" value="" class="form-control" disabled>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="">Description</label>
                    <textarea  name="description" value="" rows="2" class="form-control" disabled></textarea>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="">Reply Comment</label>
                    <textarea  name="replyComment"   rows="2" class="form-control"></textarea>
                </div>
            </div>
                    </div>
                        <button type="submit" class="btn btn-primary">Add Comment</button>
            </form>
        </div>
    </div>
</div>

@endsection