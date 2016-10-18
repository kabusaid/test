@extends('layouts.product')


@section('content')

<h1>Update Product</h1>

@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.update', $product->id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('put') }}
    Product Name:
    <div class="form-group{{$errors->has('title') ? ' has-error' : ''}}">
        <input class="form-control" type="text" name="title" value="{{$product->title}}" />
    </div>
    Product Description:
    <div class="form-group{{$errors->has('title') ? ' has-error' : ''}}">
        <input class="form-control" type="text" name="description" value="{{$product->description}}" />
    </div>
    Product Price:
    <div class="form-group{{$errors->has('price') ? ' has-error' : ''}}">
        <input class="form-control" type="text" name="price" value="{{$product->price}}" />
    </div>
    <br/>
    <input class="btn btn-primary" type="submit" value="Update Product" />
</form>

@endsection