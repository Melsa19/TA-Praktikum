@extends('layouts.main')

@section('title', 'Edit Produk')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Produk</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" name="nama_product" class="form-control" required value="{{ old('nama_product', $product->nama_product) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control" required value="{{ old('harga', $product->harga) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select name="category_id" class="form-control" required>
                    <option value="">-- Pilih Kategori --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ (old('category_id') ?? $product->category_id) == $category->id ? 'selected' : '' }}>{{ $category->nama_category }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Brand</label>
                <select name="brand_id" class="form-control" required>
                    <option value="">-- Pilih Brand --</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->brand_id }}" {{ (old('brand_id') ?? $product->brand_id) == $brand->brand_id ? 'selected' : '' }}>{{ $brand->nama_brand }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Gambar Produk (Biarkan kosong jika tidak ingin mengubah)</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                @if($product->image)
                    <div class="mt-2">
                        <img src="{{ Storage::url($product->image) }}" alt="Gambar Produk" width="100">
                    </div>
                @endif
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
