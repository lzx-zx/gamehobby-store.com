@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid">
        <div class="col-md-10 offset-md-1">
            <h3 style="margin:0px;">Show Product - {{ $product->name }}</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb small">
                    <li class="breadcrumb-item">Home Page</li>
                    <li class="breadcrumb-item">Inventory</li>
                    <li class="breadcrumb-item">Product</li>
                    <li class="breadcrumb-item">Show Product - {{ $product->name }}</li>
                </ol>
            </nav>

            <div class="row"></div>
            <div class="row"></div>

            <div class="card bg-light">
                <div class="card-header">Show Product - {{ $product->name }}</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-form-label col-md-4" for="name">Name</label>
                        <div class="col-md-6">
                            <input id="name" name="name" class="form-control" type="text" value="{{ old('name') ? old('name') : $product->name }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-4" for="details">Details</label>
                        <div class="col-md-6">
                            <input id="details" name="details" class="form-control" type="text" value="{{ old('details') ? old('details') : $product->details }}" disabled>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-4" for="description">Description</label>
                        <div class="col-md-6">
                            <input id="description" name="description" class="form-control" type="text" value="{{ old('description') ? old('description') : $product->description }}" disabled>

                        </div>
                    </div>
                    <div class="form-group row" hidden>
                        <label class="col-form-label col-md-4" for="id">Product ID</label>
                        <div class="col-md-6">
                            <input id="id" name="id" class="form-control" type="text" value="{{ old('id') ? old('id') : $product->id }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4"></label>
                        <div class="col-md-6">
                            <a href="{{ route('admin.product.index') }}" class="btn btn-danger">
                                <span class="fa fa-times"></span> Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection