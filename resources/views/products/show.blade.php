@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products.index', ['category' => $product->category->slug]) }}">{{ $product->category->name }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row mb-5">
        <!-- Product Image -->
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm product-detail-img overflow-hidden">
                @if(Str::contains($product->name, 'Smartphone'))
                    <img src="https://images.unsplash.com/photo-1598327105666-5b89351aff97?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1227&q=80" class="img-fluid" alt="{{ $product->name }}">
                @elseif(Str::contains($product->name, 'Laptop'))
                    <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80" class="img-fluid" alt="{{ $product->name }}">
                @elseif(Str::contains($product->name, 'Earbuds'))
                    <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80" class="img-fluid" alt="{{ $product->name }}">
                @elseif(Str::contains($product->name, 'Watch'))
                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1099&q=80" class="img-fluid" alt="{{ $product->name }}">
                @elseif(Str::contains($product->name, 'Shirt'))
                    <img src="https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="img-fluid" alt="{{ $product->name }}">
                @elseif(Str::contains($product->name, 'Dress'))
                    <img src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1173&q=80" class="img-fluid" alt="{{ $product->name }}">
                @elseif(Str::contains($product->name, 'Shoes'))
                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="img-fluid" alt="{{ $product->name }}">
                @elseif(Str::contains($product->name, 'Jacket'))
                    <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1036&q=80" class="img-fluid" alt="{{ $product->name }}">
                @elseif(Str::contains($product->name, 'Coffee'))
                    <img src="https://images.unsplash.com/photo-1564466809058-bf4114d55352?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1333&q=80" class="img-fluid" alt="{{ $product->name }}">
                @elseif(Str::contains($product->name, 'Blender'))
                    <img src="https://images.unsplash.com/photo-1622480916113-9000ac49b79d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="img-fluid" alt="{{ $product->name }}">
                @elseif(Str::contains($product->name, 'Bedding'))
                    <img src="https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80" class="img-fluid" alt="{{ $product->name }}">
                @elseif(Str::contains($product->name, 'Kitchen'))
                    <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1168&q=80" class="img-fluid" alt="{{ $product->name }}">
                @elseif(Str::contains($product->name, 'Book'))
                    <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" class="img-fluid" alt="{{ $product->name }}">
                @elseif(Str::contains($product->name, 'Novel'))
                    <img src="https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="img-fluid" alt="{{ $product->name }}">
                @else
                    <img src="https://images.unsplash.com/photo-1560343090-f0409e92791a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" class="img-fluid" alt="{{ $product->name }}">
                @endif
            </div>

            <!-- Product Thumbnails -->
            <div class="row mt-3 product-thumbnails">
                @if(Str::contains($product->name, 'Smartphone'))
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card active-thumbnail">
                            <img src="https://images.unsplash.com/photo-1598327105666-5b89351aff97?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1227&q=80" class="img-fluid" alt="Front View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80" class="img-fluid" alt="Side View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1565849904461-04a58ad377e0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=736&q=80" class="img-fluid" alt="Back View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1580910051074-3eb694886505?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=765&q=80" class="img-fluid" alt="Camera View">
                        </div>
                    </div>
                @elseif(Str::contains($product->name, 'Laptop'))
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card active-thumbnail">
                            <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80" class="img-fluid" alt="Front View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1332&q=80" class="img-fluid" alt="Side View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="img-fluid" alt="Keyboard View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="img-fluid" alt="Ports View">
                        </div>
                    </div>
                @elseif(Str::contains($product->name, 'Earbuds'))
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card active-thumbnail">
                            <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80" class="img-fluid" alt="Front View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1606220588913-b3aacb4d2f46?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="img-fluid" alt="Side View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1608156639585-b3a032ef9689?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1176&q=80" class="img-fluid" alt="Case View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1600294037681-c80b4cb5b434?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="img-fluid" alt="Detail View">
                        </div>
                    </div>
                @elseif(Str::contains($product->name, 'Watch'))
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card active-thumbnail">
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1099&q=80" class="img-fluid" alt="Front View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" class="img-fluid" alt="Side View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1508685096489-7aacd43bd3b1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=627&q=80" class="img-fluid" alt="Wrist View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1542496658-e33a6d0d50f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="img-fluid" alt="Detail View">
                        </div>
                    </div>
                @elseif(Str::contains($product->name, 'Shirt') || Str::contains($product->name, 'Dress'))
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card active-thumbnail">
                            <img src="https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="img-fluid" alt="Front View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1072&q=80" class="img-fluid" alt="Back View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1564859228273-274232fdb516?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" class="img-fluid" alt="Side View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1596755094514-f87e34085b2c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80" class="img-fluid" alt="Detail View">
                        </div>
                    </div>
                @elseif(Str::contains($product->name, 'Shoes'))
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card active-thumbnail">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="img-fluid" alt="Side View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1608231387042-66d1773070a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" class="img-fluid" alt="Front View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" class="img-fluid" alt="Top View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1025&q=80" class="img-fluid" alt="Bottom View">
                        </div>
                    </div>
                @elseif(Str::contains($product->name, 'Blender'))
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card active-thumbnail">
                            <img src="https://images.unsplash.com/photo-1622480916113-9000ac49b79d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="img-fluid" alt="Front View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1622480916113-9000ac49b79d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="img-fluid" alt="Side View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1619790215425-6a5f8f62c8ee?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="img-fluid" alt="Top View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1578020190125-f4a7d75e9dc5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="img-fluid" alt="In Use">
                        </div>
                    </div>
                @elseif(Str::contains($product->name, 'Book') || Str::contains($product->name, 'Novel'))
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card active-thumbnail">
                            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" class="img-fluid" alt="Front Cover">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1176&q=80" class="img-fluid" alt="Back Cover">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1553729459-efe14ef6055d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="img-fluid" alt="Inside Pages">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1198&q=80" class="img-fluid" alt="Side View">
                        </div>
                    </div>
                @else
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card active-thumbnail">
                            <img src="https://images.unsplash.com/photo-1560343090-f0409e92791a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" class="img-fluid" alt="Front View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1560343090-f0409e92791a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" class="img-fluid" alt="Side View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1560343090-f0409e92791a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" class="img-fluid" alt="Back View">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 shadow-sm overflow-hidden hover-card">
                            <img src="https://images.unsplash.com/photo-1560343090-f0409e92791a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" class="img-fluid" alt="Detail View">
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Product Details -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100 p-4">
                <div class="card-body p-0">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="badge bg-primary">{{ $product->category->name }}</span>
                        @if($product->quantity > 0)
                            <span class="badge bg-success">In Stock</span>
                        @else
                            <span class="badge bg-danger">Out of Stock</span>
                        @endif
                    </div>

                    <h1 class="display-6 fw-bold mb-3">{{ $product->name }}</h1>

                    <div class="mb-3">
                        <div class="d-flex align-items-center">
                            <div class="me-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                            </div>
                            <span class="text-muted">(4.5/5 - 24 reviews)</span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <span class="product-price">${{ number_format($product->price, 2) }}</span>
                        <span class="text-muted text-decoration-line-through ms-2">${{ number_format($product->price * 1.2, 2) }}</span>
                        <span class="badge bg-danger ms-2">20% OFF</span>
                    </div>

                    <div class="mb-4">
                        <h5 class="fw-bold">Description</h5>
                        <p class="text-muted">{{ $product->description }}</p>
                    </div>

                    <div class="mb-4">
                        <h5 class="fw-bold">Key Features</h5>
                        <ul class="text-muted">
                            <li>High-quality materials</li>
                            <li>Durable construction</li>
                            <li>Modern design</li>
                            <li>Easy to use</li>
                        </ul>
                    </div>

                    @if($product->quantity > 0)
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label for="quantity" class="form-label fw-bold">Quantity</label>
                                    <div class="input-group">
                                        <button type="button" class="btn btn-outline-secondary" onclick="decrementQuantity()">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <input type="number" class="form-control text-center" id="quantity" name="quantity" value="1" min="1" max="{{ $product->quantity }}">
                                        <button type="button" class="btn btn-outline-secondary" onclick="incrementQuantity()">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid gap-2 mb-3">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-shopping-cart me-2"></i> Add to Cart
                                </button>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div>
                                    <i class="fas fa-shield-alt text-primary me-2"></i>
                                    <span class="text-muted">Secure Payment</span>
                                </div>
                                <div>
                                    <i class="fas fa-truck text-primary me-2"></i>
                                    <span class="text-muted">Fast Delivery</span>
                                </div>
                                <div>
                                    <i class="fas fa-undo text-primary me-2"></i>
                                    <span class="text-muted">Easy Returns</span>
                                </div>
                            </div>
                        </form>
                    @else
                        <div class="alert alert-warning">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            This product is currently out of stock. Please check back later or browse similar products below.
                        </div>

                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-outline-primary">
                                <i class="fas fa-bell me-2"></i> Notify Me When Available
                            </button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Product Tabs -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <ul class="nav nav-tabs card-header-tabs" id="productTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="specifications-tab" data-bs-toggle="tab" data-bs-target="#specifications" type="button" role="tab" aria-controls="specifications" aria-selected="false">Specifications</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="productTabsContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <p>{{ $product->description }}</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.</p>
                        </div>
                        <div class="tab-pane fade" id="specifications" role="tabpanel" aria-labelledby="specifications-tab">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Brand</th>
                                            <td>{{ config('app.name', 'ShopVista') }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Model</th>
                                            <td>{{ $product->name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Category</th>
                                            <td>{{ $product->category->name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Warranty</th>
                                            <td>1 Year</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="mb-4">
                                <h5>Customer Reviews</h5>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="me-2">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half-alt text-warning"></i>
                                    </div>
                                    <span>4.5 out of 5</span>
                                </div>
                                <p>Based on 24 reviews</p>
                            </div>

                            <div class="card mb-3 hover-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h6 class="card-title">John Doe</h6>
                                        <div>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <p class="card-text">Great product! Exactly as described and arrived quickly.</p>
                                    <small class="text-muted">Posted on May 15, 2023</small>
                                </div>
                            </div>

                            <div class="card mb-3 hover-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h6 class="card-title">Jane Smith</h6>
                                        <div>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <p class="card-text">Very happy with my purchase. Good quality for the price.</p>
                                    <small class="text-muted">Posted on April 28, 2023</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Products -->
    @if($relatedProducts->count() > 0)
        <div class="row mb-4">
            <div class="col-12">
                <h3 class="fw-bold">Related Products</h3>
                <hr>
            </div>
        </div>

        <div class="row">
            @foreach($relatedProducts as $relatedProduct)
                <div class="col-md-3 mb-4">
                    <div class="product-card card h-100 border-0 shadow-sm">
                        @if(Str::contains($relatedProduct->name, 'Smartphone'))
                            <img src="https://images.unsplash.com/photo-1598327105666-5b89351aff97?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1227&q=80" class="card-img-top" alt="{{ $relatedProduct->name }}">
                        @elseif(Str::contains($relatedProduct->name, 'Laptop'))
                            <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80" class="card-img-top" alt="{{ $relatedProduct->name }}">
                        @elseif(Str::contains($relatedProduct->name, 'Earbuds'))
                            <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80" class="card-img-top" alt="{{ $relatedProduct->name }}">
                        @elseif(Str::contains($relatedProduct->name, 'Watch'))
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1099&q=80" class="card-img-top" alt="{{ $relatedProduct->name }}">
                        @elseif(Str::contains($relatedProduct->name, 'Shirt'))
                            <img src="https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="{{ $relatedProduct->name }}">
                        @elseif(Str::contains($relatedProduct->name, 'Dress'))
                            <img src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1173&q=80" class="card-img-top" alt="{{ $relatedProduct->name }}">
                        @elseif(Str::contains($relatedProduct->name, 'Shoes'))
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="{{ $relatedProduct->name }}">
                        @elseif(Str::contains($relatedProduct->name, 'Jacket'))
                            <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1036&q=80" class="card-img-top" alt="{{ $relatedProduct->name }}">
                        @elseif(Str::contains($relatedProduct->name, 'Coffee'))
                            <img src="https://images.unsplash.com/photo-1564466809058-bf4114d55352?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1333&q=80" class="card-img-top" alt="{{ $relatedProduct->name }}">
                        @elseif(Str::contains($relatedProduct->name, 'Blender'))
                            <img src="https://images.unsplash.com/photo-1622480916113-9000ac49b79d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="{{ $relatedProduct->name }}">
                        @elseif(Str::contains($relatedProduct->name, 'Bedding'))
                            <img src="https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1171&q=80" class="card-img-top" alt="{{ $relatedProduct->name }}">
                        @elseif(Str::contains($relatedProduct->name, 'Kitchen'))
                            <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1168&q=80" class="card-img-top" alt="{{ $relatedProduct->name }}">
                        @elseif(Str::contains($relatedProduct->name, 'Book'))
                            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" class="card-img-top" alt="{{ $relatedProduct->name }}">
                        @elseif(Str::contains($relatedProduct->name, 'Novel'))
                            <img src="https://images.unsplash.com/photo-1495446815901-a7297e633e8d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="{{ $relatedProduct->name }}">
                        @else
                            <img src="https://images.unsplash.com/photo-1560343090-f0409e92791a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" class="card-img-top" alt="{{ $relatedProduct->name }}">
                        @endif
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-primary">{{ $relatedProduct->category->name }}</span>
                                @if($relatedProduct->quantity > 0)
                                    <span class="badge bg-success">In Stock</span>
                                @else
                                    <span class="badge bg-danger">Out of Stock</span>
                                @endif
                            </div>
                            <h5 class="card-title">{{ $relatedProduct->name }}</h5>
                            <p class="card-text">{{ Str::limit($relatedProduct->description, 60) }}</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="price">${{ number_format($relatedProduct->price, 2) }}</span>
                                <a href="{{ route('products.show', $relatedProduct->slug) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-eye me-1"></i> View
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

<script>
function incrementQuantity() {
    var input = document.getElementById('quantity');
    var max = parseInt(input.getAttribute('max'));
    var value = parseInt(input.value);
    if (value < max) {
        input.value = value + 1;
    }
}

function decrementQuantity() {
    var input = document.getElementById('quantity');
    var value = parseInt(input.value);
    if (value > 1) {
        input.value = value - 1;
    }
}

// Initialize thumbnail functionality
document.addEventListener('DOMContentLoaded', function() {
    // Get all thumbnail images
    const thumbnails = document.querySelectorAll('.product-thumbnails .hover-card img');
    // Get the main product image
    const mainImage = document.querySelector('.product-detail-img img');

    // Add click event to each thumbnail
    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            // Update main image src with the clicked thumbnail src
            mainImage.src = this.src;
            // Update main image alt with the clicked thumbnail alt
            mainImage.alt = this.alt;

            // Add active class to clicked thumbnail and remove from others
            thumbnails.forEach(thumb => {
                thumb.parentElement.parentElement.classList.remove('active-thumbnail');
            });
            this.parentElement.parentElement.classList.add('active-thumbnail');
        });
    });
});
</script>

<style>
.hover-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
    cursor: pointer;
}
.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    background-color: rgba(13, 110, 253, 0.05) !important;
    border-color: rgba(13, 110, 253, 0.3) !important;
}
.product-thumbnails .hover-card {
    border: 2px solid transparent !important;
    transition: all 0.3s ease;
}
.product-thumbnails .active-thumbnail,
.product-thumbnails .hover-card:hover {
    border: 2px solid #0d6efd !important;
    transform: scale(1.05);
}
.product-detail-img {
    transition: all 0.5s ease;
    overflow: hidden;
}
.product-detail-img img {
    transition: all 0.5s ease;
    width: 100%;
    height: 400px;
    object-fit: cover;
    object-position: center;
}
.product-thumbnails .hover-card img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    object-position: center;
}
.product-card .card-img-top {
    width: 100%;
    height: 200px;
    object-fit: cover;
    object-position: center;
}
</style>
@endsection
