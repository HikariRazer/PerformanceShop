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
            <input type="text" class="form-control" name="product_name" value="{{ old('product_name') ? old('prodouct_name') : $item->product_name }}">
            <label>Harga</label>
            <input type="number" class="form-control" name="harga" value="{{ old('harga') ? old('harga') : $item->harga }}">
            <label>Qty</label>
            <input type="number" class="form-control" name="qty" value="{{ old('qty') ? old('qty') : $item->qty }}">
            <label>Brand</label>
            <input type="text" class="form-control" name="brand" value="{{ old('brand') ? old('brand') : " " }}">
            <label>kategori</label>
            <input type="text" class="form-control" name="kategori" value="{{ old('kategori') ? old('kategori') : " " }}">
            <label>Image</label>
            <input type="file" class="form-control" name="file_path" value="{{ old('file_path') ? old('file_path') : $item->file_path }}">
        </div>
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-primary mr-1" type="submit">Submit</button>
        <a class="btn btn-secondary" href="{{ route('product.index') }}">Back</a>
    </div>
    </form>
</div>
@endsection
