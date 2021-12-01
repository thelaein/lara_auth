@extends('master')
@section('title')
    Photo Upload
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <form action="{{route('photo.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="">
                        <label for="" class="form-label">Upload Photo</label>
                        <input type="file" name="photo[]" accept="image/jpeg" class="form-control" multiple>
                    </div>
                    <button class="btn btn-primary mt-3">Upload</button>
                </form>

{{--                {{asset('storage/images/61a5d83140bf7_photo.jpg')}}--}}

            </div>
        </div>
    </div>
@endsection
