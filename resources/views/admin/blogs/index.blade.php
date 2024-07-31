@extends('admin.layout.master')
@section('content')
<h1>Blog</h1>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>author</th>
                <th>content</th>

            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td>{{ $blog->author }}</td>
                <td>{{ $blog->content }}</td>


            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
