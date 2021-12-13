@extends('layouts.backend')
@section('content')
<div class="card">
    <div class="card-header">
      <h4>Create Brand</h4>
    </div>
    <form action="{{ route('brand.store') }}" method="POST">
    <div class="card-body">
        @csrf
        <div class="form-group">
            <label>Brand Name</label>
            <input type="text" class="form-control" name="brand_name">
            <label>Negara</label>
            <input type="text" class="form-control" name="negara">
        </div>
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-primary mr-1" type="submit">Submit</button>
        <a class="btn btn-secondary" href="{{ route('brand.index') }}">Back</a>
    </div>
    </form>
</div>
@endsection
