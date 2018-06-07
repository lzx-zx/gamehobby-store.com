@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid">
        <div class="row"></div>
        <div class="row">
            @include('layouts.message')
        </div>

        <div class="col-md-3 float-left">
            <div class="card">
                <div class="card-body">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.category.create') }}"><span class="fa fa-plus"></span> Add New Category</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-9 float-md-right">
            <div class="card">
                <div class="card-header">Category Management</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td><a class="card-link" href="{{ route('admin.category.show', ['id' => $category->id]) }}">{{ $category->name }}</a></td>
                                        <td>{{ $category->description }}</td>
                                        <td>
                                            <a href="{{ route('admin.category.edit', ['id' => $category->id]) }}" class="btn btn-link d-inline"><span class="fa fa-edit"></span></a>
                                            <form method="POST" action="{{ route('admin.category.index') }}" class="d-inline">
                                                <input type="hidden" name="_method" value="DELETE">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{ $category->id }}" id="id" name="id">
                                                <button type="submit" class="btn btn-link text-danger"><i class="fa fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection