@extends('layouts.app')
@section('title')
    Article Create
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{route('article.store')}}" enctype="multipart/form-data " method="post">
                @csrf
                <div class="col-lg-4">
                    <label for="" class="form-label">Article Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
                    @error('title') <small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="col-lg-4">
                    <label for="" class="form-label">Category Id</label>
                    <select name="category" id="" class="form-select">
                        @foreach(\App\Models\Category::all() as $c)
                            <option value="{{$c->id}}" {{$c->id == old('category') ? "selected":""}}>{{$c->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-lg-4">
                    <label for="" class="form-label">Upload Photo</label>
                    <input type="file" name="photo[]" accept="image/jpeg" class="form-control" multiple>
                </div>

                <div class="col-lg-4">
                    <label for="" class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="5">{{old('description')}}</textarea>
                </div>
                <button class="btn btn-outline-primary">Create Article</button>
            </form>
        </div>
    </div>
</div>
@endsection

