@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid">
        <div class="row"></div>
        <div class="row"></div>

        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">Edit Category - {{ $category->name }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.category.index') }}" class="" novalidate>
                        <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-form-label col-md-4" for="name">Name</label>
                            <div class="col-md-6">
                                <input id="name" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" value="{{ old('name') ? old('name') : $category->name }}">

                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4" for="description">Description</label>
                            <div class="col-md-6">
                                <textarea id="description" name="description"
                                          class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                                          type="text">{{ old('description') ? old('description') : $category->description }}</textarea>
                                <div class="invalid-feedback">
                                    {{ $errors->first('description') }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row" hidden>
                            <label class="col-form-label col-md-4" for="id">Category ID</label>
                            <div class="col-md-6">
                                <input id="id" name="id" class="form-control" type="text" value="{{ old('id') ? old('id') : $category->id }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4"></label>
                            <div class="col-md-6">
                                <button id="submit" type="submit" class="btn btn-primary"><span
                                            class="fa fa-save"></span> Save
                                </button>
                                <a href="{{ route('admin.category.index') }}" class="btn btn-danger">
                                    <span class="fa fa-times"></span> Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection