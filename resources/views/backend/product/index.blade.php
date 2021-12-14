@extends('layouts.backend')
@section('content')
    <div class="card">
        <div class="row justify-content-between">
            <div class="card-header">
                <div class="col-10">
                    <h4>List Product</h4>
                </div>
                <div class="col-2">
                    <a href="{{ route('product.create') }}" class="btn btn-primary btn-sm">Create Data</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID Product</th>
                        <th scope="col">Nama Product</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->product_name }}</td>
                            <td>{{ $item->harga }}</td>
                            <td>{{ $item->qty }}</td>
                            <td>
                                {{ $item->brands->brand_name }}
                            </td>
                            <td>
                                {{ $item->categories->category_name }}
                            <td>
                                <div class="gallery gallery-md">
                                    <img src="{{ url('storage/' . $item->file_path) }}" alt="" class="gallery-item mt-2" />
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('product.edit', $item->id) }}" class="btn btn-info"><i
                                        class="fa fa-pencil-alt"></i></a>
                                <form action="{{ route('product.destroy', $item->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
