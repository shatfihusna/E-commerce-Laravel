@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if(session('message'))
            <div class="alert alert-success" >{{session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Product</h3>
                <a href="{{ url ("admin/products/create") }}" class="btn btn-primary btn-sm  text-white float-end">Add Product</a>
            </div>
            <div class="card-body">
            </div>
        </div>
    </div>
</div>

@endsection
