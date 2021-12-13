@extends('layouts.backend')
@section('content')
<div class="card">
    <div class="row justify-content-between">
    <div class="card-header">
          <div class="col-10">
            <h4>List Brand</h4>
          </div>
          <div class="col-2">
              <a href="{{ route('brand.create') }}" class="btn btn-primary btn-sm">Create Data</a>
          </div>
      </div>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID Brand</th>
            <th scope="col">Nama Brand</th>
            <th scope="col">Negara</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($brands as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->brand_name }}</td>
                <td>{{ $item->negara }}</td>
                <td>
                    <a href="{{ route('brand.edit', $item->id) }}" class="btn btn-info"><i class="fa fa-pencil-alt"></i></a>
                    <form action="{{ route('brand.destroy', $item->id) }}" method="POST"
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
