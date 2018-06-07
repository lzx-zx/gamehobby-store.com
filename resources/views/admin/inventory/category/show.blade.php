@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid">
        <div class="row"></div>
        <div class="row"></div>

        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">Show Category - {{ $category->name }}</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-form-label col-md-4" for="name">Name</label>
                        <div class="col-md-6">
                            <input id="name" name="name" class="form-control" type="text" value="{{ old('name') ? old('name') : $category->name }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-4" for="description">Description</label>
                        <div class="col-md-6">
                            <textarea id="description" name="description" class="form-control"
                                      disabled>{{ old('description') ? old('description') : $category->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row" hidden>
                        <label class="col-form-label col-md-4" for="id">Category ID</label>
                        <div class="col-md-6">
                            <input id="id" name="id" class="form-control" type="text" value="{{ old('id') ? old('id') : $category->id }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4"></label>
                        <div class="col-md-6">
                            <a href="{{ route('admin.category.index') }}" class="btn btn-danger">
                                <span class="fa fa-times"></span> Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection