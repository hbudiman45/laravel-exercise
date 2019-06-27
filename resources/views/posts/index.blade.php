@extends('layout.layout')

@section('title')
Blog Post
@endsection

@section('content')
<div>
    <h1>Posts</h1>
    <a href="/posts/create" class="btn btn-dark">Create Post</a>
</div>

@if (count($posts) > 0)
@foreach ($posts as $post)
<div class="row my-2 justify-content-center">
    <div class="card col-12">
        <div class="card-body">
            <h3 class="card-title card-link"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <p class="card-text">{{$post->body}}</p>
            <hr>
            <p class='card-text text-muted font-weight-light'>Written on {{$post->created_at}}</p>
        </div>
    </div>
</div>
@endforeach
{{-- for pagination  --}}
{{$posts->links()}}
@endif

@endsection