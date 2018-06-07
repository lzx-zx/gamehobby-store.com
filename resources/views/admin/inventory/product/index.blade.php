@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid">
        <div class="row"></div>
        <div class="row">
            @include('layouts.message')
        </div>

        {{--<div class="col-md-3 float-left">--}}
            {{--<div class="card">--}}
                {{--<div class="card-body">--}}
                    {{--<ul class="nav flex-column">--}}
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="{{ route('admin.category.create') }}"><span class="fa fa-plus"></span> Add New Product</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="col-md-9 float-md-right">--}}
            <div class="card">
                <div class="card-header">Product Management</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Description</th>
                                <th>Control</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td><a class="card-link" href="{{ route('admin.product.show', ['id' => $product->id]) }}">{{ $product->name }}</a></td>
                                    <td>{{ $product->details }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>
                                        <a href="{{ route('admin.product.edit', ['id' => $product->id]) }}" class="btn btn-link d-inline"><span class="fa fa-edit"></span></a>
                                        <form method="POST" action="{{ route('admin.product.index') }}" class="d-inline">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{ $product->id }}" id="id" name="id">
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
        {{--</div>--}}
    </div>
@endsection