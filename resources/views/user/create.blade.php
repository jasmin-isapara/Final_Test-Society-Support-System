
<div>
    @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
        @endif

<div class="form-group">
    <form action="{{ url('add-complain') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="mb-3 col-md-6">
            <label for="">Category</label>
            <select name="category_id" class="form-control">
                @foreach ($category as $cateitem)
                    <option value="{{ $cateitem->id }}">{{ $cateitem->name }}</option>
                @endforeach
            </select>
        </div><br>
        {{-- <div class="mb-3 col-md-6" >
            <label for="">Complain Name</label>
            <input type="text" name="name" class="form-control"/>
        </div> --}}
        <div class="mb-3 col-md-6">
            <label for="">Description</label>
            <textarea name="description"  rows="3" class="form-control"></textarea>
        </div><br>
        <div>
            <label for="">Image</label>
            <input type="file" name="image" required class="form-control">
        </div><br>
        {{-- <div class="mb-3 col-md-6">
            <label for="">Complain_Date</label>
            <input type="date" name="date" class="form-control">
        </div> --}}

        </div>
        <button type="submit"  class="btn btn-primary">Save Complain</button>
        </div>
    </form>
</div>
</div>

