@extends('layouts.app')

@section('content')

<h1>Edit Produk</h1>

<form action="{{ route('products.update', $product->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <input type="text"
           name="name"
           value="{{ $product->name }}"
           class="form-control mb-2">

    <input type="text"
           name="brand"
           value="{{ $product->brand }}"
           class="form-control mb-2">

    <input type="text"
           name="category"
           value="{{ $product->category }}"
           class="form-control mb-2">

    <input type="number"
           name="price"
           value="{{ $product->price }}"
           class="form-control mb-2">

    <input type="number"
           name="stock"
           value="{{ $product->stock }}"
           class="form-control mb-2">

    <textarea name="description"
              class="form-control mb-2">{{ $product->description }}</textarea>

    <button class="btn btn-primary">
        Update
    </button>

</form>

@endsection