@extends('layout/layout')

@section('title')
Customer Lists
@endsection

@section('content')

<h1>Add Customers</h1>

<form action="/customers" method="POST" class="my-2" style="width: 40%">
    @include('customers.form')
    <button type="submit" class="btn btn-primary">Add Customer</button>
</form>
{{-- $error are variable provided by Laravel to handle an --}}


{{-- src="https://lorempixel.com/300/200/people" --}}
<!-- for cleaner code use blade syntax -->
@endsection