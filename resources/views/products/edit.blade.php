@extends('layouts.app')

@section('content')

<h1>Edit Product</h1>

<form action="{{ route('products.update', $product->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <select name="category_id"
            class="form-control mb-2">

        @foreach ($categories as $category)

        <option value="{{ $category->id }}"

            {{ $product->category_id == $category->id ? 'selected' : '' }}>

            {{ $category->name }}

        </option>

        @endforeach

    </select>

    <input type="text"
           name="name"
           value="{{ $product->name }}"
           class="form-control mb-2">

    <input type="text"
           name="brand"
           value="{{ $product->brand }}"
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