@extends('layout.main')
@section('category')

    <center><h2>data</h2></center>


    <table class="table table-hover">
        <thead>
        <tr>
            <th>image</th>
            <th>title</th>
            <th>user</th>
            <th>name</th>
            <th>description</th>

        </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{ $post->image }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->user }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->description }}</td>
                <td>

                    <form action="/postupdate/{{ $post->id }}" method="get">

                        @csrf
                        <input type="submit" class="btn btn-danger" value="edit"/>
                    </form>

                    <form action="/postdelete/{{ $post->id }}" method="get">

                        @csrf
                        <input type="submit" class="btn btn-danger" value="Delete"/>
                    </form>

                </td>
            </tr>

        </tbody>
    </table>

@endsection
