@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{route('category.store')}}" method="post" >
                @csrf
                <div class="col-12 col-lg-4">
                    <label for="" class="form-label">Category Name</label>
                </div>
                <div class="col-12 col-lg-4">
                    <input type="text" class="form-control" name="title">
                </div>

                <div class="col-12 col-lg-4">
                    <button class="btn btn-outline-primary">Create</button>
                </div>
            </form>
            @include('category.list')
        </div>
    </div>
</div>
@endsection
