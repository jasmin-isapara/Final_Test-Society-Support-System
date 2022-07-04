@extends("layouts.app")

@section("title","About Us")


@section("content")
<div class="jumbotron rounded-0 clearfix w-100 m-0 about" id="complain" >
    <h1 class="h1 text-center">My Complains</h1>
    <div class="card-group">


    @foreach ($userComplain as $complain)
    {{-- {{dump($complain)}} --}}
        @if ($complain->user_id == Auth::user()->id)


        <div class="card" style="margin:0 3px">
            {{-- <img class="card-img-top" src="" alt="Card image cap"> --}}
            <div class="card-body">
              <h5 class="card-title">{{$complain->category->name}}</h5>
              <p class="card-text">{{$complain->description}}</p>
              <button id="btn-add" name="btn-add" data-categoryid = "category_{{$complain->id}}" class="btn btn-primary btn-xs">Show Details</button>
            </div>
        </div>

        @endif
    @endforeach
    </div>
    <div class="modal fade" id="linkEditorModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="linkEditorModalLabel">Complain Box</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <span class="font-weight-bold">Problem Category : </span>
                        <span class="category"></span>
                    </div>
                    <div class="mt-3">
                        <span class="font-weight-bold">Description : </span>
                        <p class="description"></p>
                    </div>
                    {{-- <form id="modalFormData" name="modalFormData" class="form-horizontal" novalidate="">

                        <div class="form-group">
                            <label for="inputLink" class="col-sm-2 control-label">Category</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="category" name="category"
                                        value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Complain</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="description" name="description" value="">
                            </div>
                        </div>
                    </form> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btn-save" value="add">Show Details
                    </button>
                    <input type="hidden" id="link_id" name="link_id" value="0">
                </div>
            </div>
        </div>
    </div>

</div>


@endsection

@section('script')
<script type="text/javascript">
    // console.log(@json($complains));
    var complainsData = @json($userComplain);
    // var complainsData = @json($complains);


    $(document).ready(function(){

////----- Open the modal to CREATE a link -----////
$(document).on('click', '#btn-add', function () {
    // alert('sdaslkjdlas');
    var complainId = $(this).data('categoryid');

    $.each(complainsData, function (index, value) {
        let cmoId = 'category_'+value.id;
        if (cmoId == complainId ) {
            //     console.log(value);
            // console.log(value.category.name);

            // $('#category').val(value.category.name);
            // $('#description').val(value.description);

            $('.category').text(value.category.name);
            $('.description').text(value.description);


        }
    });
    // alert('here');
    // $('#btn-save').val("add");
    // $('#modalFormData').trigger("reset");
    $('#linkEditorModal').modal('show');

});



});

</script>
@endsection

