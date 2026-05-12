@extends('layouts.app')

@section('content')

<h1>Tambah Product</h1>

<form action="{{ route('products.store') }}"
      method="POST">

    @csrf

    <select name="category_id"
            class="form-control mb-2">

        <option value="">
            Pilih Category
        </option>

        @foreach ($categories as $category)

        <option value="{{ $category->id }}">

            {{ $category->name }}

        </option>

        @endforeach

    </select>

    <input type="text"
           name="name"
           class="form-control mb-2"
           placeholder="Nama Product">

    <input type="text"
           name="brand"
           class="form-control mb-2"
           placeholder="Brand">

    <input type="number"
           name="price"
           class="form-control mb-2"
           placeholder="Price">

    <input type="number"
           name="stock"
           class="form-control mb-2"
           placeholder="Stock">

    <textarea name="description"
              class="form-control mb-2"
              placeholder="Description"></textarea>

    <button class="btn btn-success">
        Simpan
    </button>

</form>

@endsection