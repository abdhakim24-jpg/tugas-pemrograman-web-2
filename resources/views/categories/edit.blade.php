@extends('layouts.app')

@section('content')

<h1>Edit Category</h1>

<form action="{{ route('categories.update', $category->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <input type="text"
           name="name"
           value="{{ $category->name }}"
           class="form-control mb-2">

    <input type="text"
           name="code"
           value="{{ $category->code }}"
           class="form-control mb-2">

    <textarea name="description"
              class="form-control mb-2">{{ $category->description }}</textarea>

    <button class="btn btn-primary">
        Update
    </button>

</form>

@endsection