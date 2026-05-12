@extends('layouts.app')

@section('content')

<h1>Tambah Produk</h1>

<form action="{{ route('products.store') }}"
      method="POST">

    @csrf

    <input type="text"
           name="name"
           class="form-control mb-2"
           placeholder="Nama Produk">

    <input type="text"
           name="brand"
           class="form-control mb-2"
           placeholder="Brand">

    <input type="text"
           name="category"
           class="form-control mb-2"
           placeholder="Kategori">

    <input type="number"
           name="price"
           class="form-control mb-2"
           placeholder="Harga">

    <input type="number"
           name="stock"
           class="form-control mb-2"
           placeholder="Stok">

    <textarea name="description"
              class="form-control mb-2"
              placeholder="Deskripsi"></textarea>

    <button class="btn btn-success">
        Simpan
    </button>

</form>

@endsection