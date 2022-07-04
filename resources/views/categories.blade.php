@extends("layouts.app")

@section("title","About Us")


@section("content")
<main class="container">

    <div class="row mb-2">
        @foreach ($category as $cateitem )

        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0">{{$cateitem->name}}</h3>
                <p class="mb-auto">{{$cateitem->description}}</p>
                <a href="add-complain" class="stretched-link">Add Complain</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img class="bd-placeholder-img" src="{{ asset('uploads/category/'.$cateitem->image) }} " width="200" height="250"  role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"/>

            </div>
            </div>
        </div>
        @endforeach

    </div>

  </main>
@endsection
