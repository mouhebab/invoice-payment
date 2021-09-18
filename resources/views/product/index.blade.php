@extends('layout.app')

@section('content')

    <div class="row">
        <div class="col-md-12">

            @include('layout.partials.messages')

            <div class="card">
                <div class="header">
                    <h4 class="title">
                        Products
                        <div class="pull-right">
                            <a href="{{ route('products.create') }}" class="btn btn-info btn-fill"><i class="ti-plus"></i> Add Product</a>
                        </div>
                    </h4>
                    <p class="category">All of your products are shown below in the list</p>
                </div>

                <div class="content table-reposive table-full-width">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Client
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>
                                        {{ $product->name }}
                                    </td>
                                    <td>
                                        {{ $product->client->name }}
                                    </td>
                                    <td class="td-actions text-right">
                                        <a href="{{ route('product.edit', $product) }}" class="btn btn-success btn-simple btn-sm">
                                            <i class="ti-pencil-alt"></i> Edit
                                        </a>
                                        <a href="{{ route('product.destroy', $product) }}" onclick="return confirm('Are you sure?');" class="btn btn-danger btn-simple btn-sm">
                                            <i class="ti-close"></i> Remove
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection