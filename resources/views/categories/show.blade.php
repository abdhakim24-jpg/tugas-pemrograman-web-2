@extends('layouts.app')

@section('content')

<h1>Detail Category</h1>

<table class="table table-bordered">

    <tr>
        <th>Name</th>
        <td>{{ $category->name }}</td>
    </tr>

    <tr>
        <th>Code</th>
        <td>{{ $category->code }}</td>
    </tr>

    <tr>
        <th>Description</th>
        <td>{{ $category->description }}</td>
    </tr>

</table>

<h3>Daftar Product</h3>

<table class="table table-bordered">

    <tr>
        <th>Name</th>
        <th>Brand</th>
        <th>Price</th>
    </tr>

    @foreach ($products as $product)

    <tr>

        <td>{{ $product->name }}</td>

        <td>{{ $product->brand }}</td>

        <td>{{ $product->price }}</td>

    </tr>

    @endforeach

</table>

@endsection