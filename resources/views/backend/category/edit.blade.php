@extends('layouts.backend')
@section('content')
<div class="card">
    <div class="card-header">
      <h4>Edit Product Category</h4>
    </div>
    <form action="{{ route('category.update', $item->id) }}" method="POST">
    @method('PUT')
    <div class="card-body">
        @csrf
        <div class="form-group">
            <label>Category Name</label>
            <input type="text" class="form-control" name="category_name" value="{{ old('category_name') ? old('category_name') : $item->category_name }}">
        </div>
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-primary mr-1" type="submit">Submit</button>
        <a class="btn btn-secondary" href="{{ route('category.index') }}">Back</a>
    </div>
    </form>
</div>
@endsection
