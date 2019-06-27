@extends('layout/layout')

@section('title')
Edit Customer {{$customer->name}}
@endsection

@section('content')

<h1>Edit Customer {{$customer->name}}</h1>

<form action="/customers/{{$customer->id}}" method="POST" class="my-2" style="width: 40%">
    @method('PATCH')
    @include('customers.form')
    <button type="submit" class="btn btn-primary">Save Customer</button>
</form>

@endsection