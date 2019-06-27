@extends('layout.layout')

@section('title')
{{$post->title}}
@endsection

@section('content')
<a href="/posts" class="btn btn-warning ">Back</a>
<h3>{{$post->title}}</h3>
<small class="text-muted font-weight-light">Writen On {{$post->created_at}}</small>
<hr>
<p>{{$post->body}}</p>
@endsection