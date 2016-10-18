@extends('layouts.product')

@section('content')

    <a class="btn btn-primary" href="/products/create"> Add Product </a> <br/><br/>

    <table class="table table-striped table-bordered" >
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Price</th>
            <th>Edit</th>
            <th>Show</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td> {{$product->id }} </td>
                <td> {{$product->title }} </td>
                <td> {{$product->price }}</td>
                <td> <a class="btn btn-xs btn-info" href="/products/{{$product->id }}/edit/"> Edit </a> </td>
                <td> <a class="btn btn-xs btn-success" href="/products/{{$product->id }}"> Show </a> </td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <input class="btn btn-xs btn-danger" type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $products->links() }}

@endsection