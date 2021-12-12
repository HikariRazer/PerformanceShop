@extends('layouts.backend')
@section('content')
<div class="card">
    <div class="row justify-content-between">
    <div class="card-header">
          <div class="col-10">
            <h4>List Product Categories</h4>
          </div>
          <div class="col-2">
              <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm">Create Data</a>
          </div>
      </div>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID Kategori</th>
            <th scope="col">Nama Kategori</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->category_name }}</td>
                <td>
                    <a href="{{ route('category.edit', $item->id) }}" class="btn btn-info"><i class="fa fa-pencil-alt"></i></a>
                    <form action="{{ route('category.destroy', $item->id) }}" method="POST"
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
