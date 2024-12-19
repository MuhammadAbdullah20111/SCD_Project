@extends('layouts.admin')

@section('content')
    <h1>Add New Product</h1>
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" name="product_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" name="brand" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="picture">Product Picture</label>
            <input type="file" name="picture" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Add Product</button>
    </form>
@endsection
