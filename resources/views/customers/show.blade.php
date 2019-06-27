@extends('layout/layout')

@section('title')
Details for {{$customer->name}}
@endsection

@section('content')

<h1>Details for {{$customer->name}}</h1>
<div class="row">
    <div class="col-12">
        <p><strong>Name: </strong>{{$customer->name}}</p>
        <p><strong>Email: </strong>{{$customer->email}}</p>
        <p><strong>Status: </strong>{{$customer->status ? 'Active' : 'Inactive'}}</p>
        <p><strong>Company: </strong>{{$customer->company->name}}</p>
        <p><a href="/customers/{{$customer->id}}/edit">Edit</a></p>
        <form action="/customers/{{$customer->id}}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger">DELETE</button>
        </form>
    </div>
</div>
{{-- $error are variable provided by Laravel to handle an --}}


{{-- src="https://lorempixel.com/300/200/people" --}}
<!-- for cleaner code use blade syntax -->
@endsection