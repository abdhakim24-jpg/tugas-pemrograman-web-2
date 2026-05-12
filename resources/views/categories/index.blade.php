@extends('layouts.app')

@section('content')

<h1>Data Product</h1>

<form action="{{ route('products.index') }}"
      method="GET"
      class="mb-3">

    <div class="row">

        <div class="col-md-4">

            <input type="text"
                   name="search"
                   class="form-control"
                   placeholder="Cari product...">

        </div>

        <div class="col-md-4">

            <select name="category"
                    class="form-control">

                <option value="">
                    Semua Category
                </option>

                @foreach ($categories as $category)

                <option value="{{ $category->id }}">

                    {{ $category->name }}

                </option>

                @endforeach

            </select>

        </div>

        <div class="col-md-2">

            <button class="btn btn-primary">
                Filter
            </button>

        </div>

    </div>

</form>

<a href="{{ route('products.create') }}"
   class="btn btn-success mb-3">
   Tambah Product
</a>

<table class="table table-bordered">

    <tr>

        <th>No</th>

        <th>Category</th>

        <th>Name</th>

        <th>Brand</th>

        <th>Price</th>

        <th>Stock</th>

        <th>Aksi</th>

    </tr>

    @foreach ($products as $product)

    <tr>

        <td>{{ $loop->iteration }}</td>

        <td>{{ $product->category->name }}</td>

        <td>{{ $product->name }}</td>

        <td>{{ $product->brand }}</td>

        <td>{{ $product->price }}</td>

        <td>{{ $product->stock }}</td>

        <td>

            <a href="{{ route('products.show', $product->id) }}"
               class="btn btn-info btn-sm">
               Detail
            </a>

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

{{ $products->links() }}

@endsection