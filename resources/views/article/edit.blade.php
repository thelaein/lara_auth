@extends('layouts.app')

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

            <form action="{{route('article.update',$article->id)}}" method="post">
                @csrf
                @method('put')
                <div class="col-lg-4">
                    <label for="" class="form-label">Article Title</label>
                    <input type="text" name="title" class="form-control" value="{{old('title',$article->title)}}">
                </div>
                <div class="col-lg-4">
                    <label for="" class="form-label">Category Id</label>
                    <select name="category" id="" class="form-select">
                        @foreach(\App\Models\Category::all() as $c)
                            <option value="{{$c->id}}"{{$c->id == $article->category_id?"selected":""}}>{{$c->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-lg-4">
                    <label for="" class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="5">{{$article->description}}</textarea>
                </div>
                <button class="btn btn-outline-primary">Create Article</button>
            </form>
        </div>
    </div>
</div>
@endsection
