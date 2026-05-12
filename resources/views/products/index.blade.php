@extends('layouts.app')

@section('content')

<h1>Data Produk</h1>

<a href="{{ route('products.create') }}"
   class="btn btn-primary mb-3">
   Tambah Produk
</a>

<table class="table table-bordered">

    <tr>
        <th>Nama</th>
        <th>Brand</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    @foreach ($products as $product)

    <tr>

        <td>{{ $product->name }}</td>
        <td>{{ $product->brand }}</td>
        <td>{{ $product->category }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->stock }}</td>

        <td>

            <a href="{{ route('products.edit', $product->id) }}"
               class="btn btn-warning btn-sm">
               Edit
            </a>

            <form action="{{ route('products.destroy', $product->id) }}"
                  method="POST"
                  style="display:inline">

                @csrf
                @method('DELETE')

                <button class="btn btn-danger btn-sm">
                    Hapus
                </button>

            </form>

        </td>

    </tr>

    @endforeach

</table>

@endsection