@extends('layouts.backend')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Product</h4>
        </div>
        <form action="{{ route('product.update', $item->id) }}" method="POST">
            @method('PUT')
            <div class="card-body">
                @csrf
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="product_name"
                        value="{{ old('product_name') ? old('prodouct_name') : $item->product_name }}">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-control" name="harga"
                        value="{{ old('harga') ? old('harga') : $item->harga }}">
                </div>
                <div class="form-group">
                    <label>Qty</label>
                    <input type="number" class="form-control" name="qty"
                        value="{{ old('qty') ? old('qty') : $item->qty }}">
                </div>
                <div class="form-group">
                    <label>Brand</label>
                    <select class="custom-select" name="brand_id">
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}" {{ $brand->id == $item->brand_id ? 'selected' : '' }}>
                                {{ $brand->brand_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="custom-select" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == $item->category_id ? 'selected' : '' }}>
                                {{ $category->category_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="file_path"
                        value="{{ old('file_path') ? old('file_path') : $item->file_path }}">
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                <a class="btn btn-secondary" href="{{ route('product.index') }}">Back</a>
            </div>
        </form>
    </div>
@endsection
