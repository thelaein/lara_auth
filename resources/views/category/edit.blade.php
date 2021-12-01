@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{route('category.update',$category->id)}}" method="post">
                @csrf
                @method('put')
                <div class="col-12 col-lg-4">
                    <label for="" class="form-label">Category Name</label>
                </div>
                <div class="col-12 col-lg-4">
                    <input type="text" class="form-control" name="title" value="{{$category->title}}">
                </div>
                <div class="col-12 col-lg-4">
                    <button class="btn btn-outline-primary">Update</button>
                </div>
            </form>
            @include('category.list')
        </div>
    </div>
</div>
@endsection
