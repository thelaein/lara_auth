<table class="table-bordered table mt-3">
    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Control</th>
        <th>Created_at</th>
    </tr>
    </thead>
    <tbody>
    @foreach(\App\Models\Category::all() as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->title}}</td>
            <td>
                <a href="{{route('category.edit',$c->id)}}" class="btn btn-outline-success">Edit</a>
                <form action="{{route('category.destroy',$c->id)}}" class="d-inline-block" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-outline-danger">Del</button>
                </form>
            </td>
            <td>{{$c->created_at}}</td>


        </tr>
    @endforeach
    </tbody>
</table>
