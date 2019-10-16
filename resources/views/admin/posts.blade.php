@extends("layout")

@section("content")
<div class="container-fluid">
    <div class="row">
        <div class="col-8 mt-4">
            <form action="{{url('/insertpost')}}" method="Post">
            @csrf
            <input type="hidden" name="userid" value="{{Auth::user()->id}}">
            <div class="form-group row">
                <label for="title" class="col-2">Title Post</label>
                <div class="col-10">
                <input id="title" type="text" name="title" value="{{ old('title') }}" class="form-control"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-2">content Post</label>
                <div class="col-10">
                <input id="content" type="text" name="content" value="{{ old('content') }}"  class="form-control"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-2">Category Post</label>
                <div class="col-10">
                    <select class="form-control" name="catid">
                        <option value="">choosen....</option>
                        @foreach($categories as $category )
                        <option value="{{$category->cat_id}}">{{$category->cat_name}}</option>

                        @endforeach

                    /select>
                </div>
            </div>
            <input type="submit" class="btn btn-primary mt-3">
            </form> 
        </div>
        <div class="col-12">
            @foreach($errors->all() as $err)
                <div class="alert alert-danger mt-4">
                {{$err}}
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection