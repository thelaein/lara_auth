@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <h4>Article List</h4>
            @foreach($articles as $article)
                <div class="card">
                    <div class="card-body">
                        <h4>{{$article->title}}</h4>
{{--                        <p class="badge bg-primary">{{\App\Models\Article::find($article->id)->title}}</p>--}}
                        <p class="badge  bg-primary">{{$article->category->title}}</p>

                        <p>{{Str::words($article->description,20)}}</p>
                        <a href="{{route('article.show',$article->id)}}" class="btn btn-outline-warning">See More</a>
                        <a href="{{route('article.edit',$article->id)}}" class="btn btn-outline-success">Edit</a>
                        <form action="{{route('article.destroy',$article->id)}}" class="d-inline-block" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger">Del</button>
                        </form>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
