@extends('layout/layout')

@section('title')
Customer Lists
@endsection

@section('content')

<h1>Customers</h1>
<a href="/customers/create" class="btn btn-primary">Add Customer</a>

{{-- $error are variable provided by Laravel to handle an --}}


{{-- src="https://lorempixel.com/300/200/people" --}}
<!-- for cleaner code use blade syntax -->
<div class="row">
    @foreach ($customers as $customer)
    <div class="col-4 my-3">
        <div class="card">
            <div class="card-body">
                <p class="card-text text-center font-weight-bold text-dark"><a
                        href="/customers/{{$customer->id}}">{{$customer->name}}</a></p>
                <p class="card-text text-center font-weight-light text-muted">{{$customer->email}}</p>
                <p class="card-text text-center font-weight-light text-muted">{{$customer->company->name}}</p>
                @if ($customer->status == 1)
                <p class="card-text text-center font-weight-light text-muted">Active</p>
                @else
                <p class="card-text text-center font-weight-light text-muted">Inactive</p>
                @endif
            </div>
        </div>
    </div>

    @endforeach

</div>

<div class="row col-12">
    @foreach ($companies as $company)
    <h3>{{$company->name}}</h3>
    <ul>
        @foreach ($company-> customers as $customer)
        <li>{{$customer->name}}</li>
        @endforeach
    </ul>
    @endforeach
</div>
@endsection