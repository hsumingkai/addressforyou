@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 1)
        @foreach ($posts as $post)
            
            <div class="well">
                <h3>{{$post->title}}</h3>
                <small>{{$post->created_at}}</small>
            </div>
        @endforeach

    @else
        <p>no posts founds</p>
    @endif
@endsection