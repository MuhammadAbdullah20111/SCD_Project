@extends('layouts.admin')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}" required>
        </div>
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" name="brand" class="form-control" value="{{ $product->brand }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
        </div>
        <div class="form-group">
            <label for="picture">Product Picture</label>
            <input type="file" name="picture" class="form-control">
            @if($product->picture)
                <img src="{{ asset('images/'.$product->picture) }}" alt="Product Image" width="100">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
@endsection
