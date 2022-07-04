@extends('layouts.master')

@section('title','Add Complain')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
        @endif

        <div class="card-header">
            <h4>Add Complain
                <a href="{{ url('admin/complains') }}" class="btn btn-danger float-end">Back</a>
            </h4>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/add-complain') }}" method="POST">
                @csrf
                <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="">Category</label>
                    <select name="category_id" class="form-control">
                        @foreach ($category as $cateitem)
                            <option value="{{ $cateitem->id }}">{{ $cateitem->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 col-md-6" >
                    <label for="">Complain Name</label>
                    <input type="text" name="name" class="form-control"/>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="">Description</label>
                    <textarea name="description"  rows="3" class="form-control"></textarea>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="">Slug</label>
                    <input type="text" name="slug" class="form-control"/>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="">Complain_Date</label>
                    <input type="date" name="date" class="form-control"/>
                </div>

                </div>
                <div class="col-md-2 mb-3">
                    <input type="checkbox" name="status" />
                    <label for="">Status</label>
                </div>
                <button type="submit" class="btn btn-primary">Save Complain</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
