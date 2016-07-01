@extends('app')


@section('title')
    Posts
@endsection

@section('content')
    <h1>Posts</h1>
    <ul>
        @foreach($array as $post)
            <br />
            <textarea readonly="true" class="form-control" rows="3">{{$post[1]}}</textarea>
             Autor:  {{$post[0]}}
             <br />
        @endforeach
        
    </ul>
@endsection
    