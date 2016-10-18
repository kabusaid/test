@extends('layouts.product')


@section('content')

<h1>Add Product</h1>

@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/products" method="post">
    {{ csrf_field() }}
    Product Name:
    <div class="form-group{{$errors->has('title') ? ' has-error' : ''}}">
        <input class="form-control" type="text" name="title" value="{{old('title')}}" />
    </div>
    Product Description:
    <div class="form-group{{$errors->has('title') ? ' has-error' : ''}}">
        <input class="form-control" type="text" name="description" value="{{old('description')}}" />
    </div>
    Product Price:
    <div class="form-group{{$errors->has('price') ? ' has-error' : ''}}">
        <input class="form-control" type="text" name="price" value="{{old('price')}}" />
    </div>
    <br/>
    <input class="btn btn-primary" type="submit" value="Add Product" />
</form>

@endsection