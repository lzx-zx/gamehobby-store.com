@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid">
        <div class="row"></div>
        <div class="row"></div>

        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">Create New Category</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.category.index') }}" class="" novalidate>
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-form-label col-md-4" for="name">Name</label>
                            <div class="col-md-6">
                                <input id="name" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" value="{{ old('name') }}">

                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4" for="description">Description</label>
                            {{--<input id="description" name="description" class="form-control col-md-6" type="text" value="{{ old('description') }}">--}}
                            <div class="col-md-6">
                                <textarea id="description" name="description"
                                          class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                                          type="text">{{ old('description') }}</textarea>
                                <div class="invalid-feedback">
                                    This field cannot be empty
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4"></label>
                            <div class="col-md-6">
                                <button id="submit" type="submit" class="btn btn-primary"><span
                                            class="fa fa-plus"></span> Create
                                </button>
                                <button type="reset" class="btn btn-default"><span class="fa fa-sync"></span> Reset Form
                                </button>
                                <a href="{{ route('admin.category.index') }}" class="btn btn-danger">
                                    <span class="fa fa-times"></span> Back
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection