@extends('layouts.product')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <h1>Show Product</h1>

    <div class="jumbotron">
        <p>
            <strong>Title:</strong> {{ $product->title }} <br>
            <strong>Description:</strong> {{ $product->description }} <br>
            <strong>Price:</strong> {{ $product->price }}
        </p>
    </div>

@endsection