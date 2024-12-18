@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-md-4">
            <input type="text" id="searchInput" class="form-control" placeholder="Search by phone name...">
        </div>
        <div class="col-md-4">
            <select id="brandFilter" class="form-control">
                <option value="all">All Brands</option>
                <option value="iphone">iPhone</option>
                <option value="realme">Realme</option>
                <option value="redmi">Redmi</option>
                <option value="vivo">Vivo</option>
                <option value="tecno">Tecno</option>
            </select>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4" id="productGrid">
    @foreach ($products as $product)
    <div class="col product-card" data-brand="{{ strtolower($product->brand) }}">
        <div class="card h-100">
            <!-- Assuming the 'picture' column contains the image URL -->
            <img src="{{ $product->picture }}" class="card-img-top" alt="{{ $product->product_name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $product->product_name }}</h5>
                <p class="card-text">${{ $product->price }}</p>
            </div>
        </div>
    </div>
@endforeach
    
<script src="{{ asset('Js/product.js') }}"></script>
    </div>
</div>
        

@endsection
