@extends('layouts.master')

@section('content')
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
        {{-- Product Cards --}}
        <div class="col product-card" data-brand="iphone">
            <div class="card h-100">
                <img src="https://picsum.photos/seed/iphone/512" class="card-img-top" alt="iPhone 14 Pro">
                <div class="card-body">
                    <h5 class="card-title">iPhone 14 Pro</h5>
                    <p class="card-text">$1099</p>
                </div>
            </div>
        </div>

        <div class="col product-card" data-brand="realme">
            <div class="card h-100">
                <img src="https://picsum.photos/seed/realme/512" class="card-img-top" alt="Realme GT Neo 5">
                <div class="card-body">
                    <h5 class="card-title">Realme GT Neo 5</h5>
                    <p class="card-text">$599</p>
                </div>
            </div>
        </div>

        <div class="col product-card" data-brand="redmi">
            <div class="card h-100">
                <img src="https://picsum.photos/seed/redmi/512" class="card-img-top" alt="Redmi Note 12">
                <div class="card-body">
                    <h5 class="card-title">Redmi Note 12</h5>
                    <p class="card-text">$249</p>
                </div>
            </div>
        </div>

        {{-- Add other product cards here --}}
    </div>
</div>
@endsection
