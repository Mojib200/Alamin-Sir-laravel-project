@extends('layouts.deshboard.deshboard')

@section('content')
    <div class="container-fluid">
        <div class="content-body mt-5">




            <div class="col-lg-12">
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="card  mt-3">
                        <div class="card-header text-center">
                            <h1> All Product Views</h1>
                        </div>
                        <div class="card-body card-control">
                            <table class="table table-brodered text-center">
                                <thead>
                                    <tr>
                                        <th class="width80">SL</th>
                                        <th>Name</th>
                                        <th>Product Categories</th>
                                        <th>Relation Of Categories</th>
                                        <th>Thumbnail </th>
                                        <th>Product Detiles</th>
                                        <th>Action</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($product as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->product_categorie }}</td>
                                            <td>{{ $product->relationwithcategorieandproduct->categorie_name }}</td>
                                            <td><img src="{{ asset('/uploads/product') }}/{{ $product->thumbnail }}"
                                                alt="" width="80" height="50"></td>
                                            <td> <a
                                                    href="{{ route('product.show', $product->id) }}"class="btn btn-success btn-sm ">Detiles</a>
                                            </td>



                                            <td>
                                                <a href="{{ route('product.edit', $product->id) }}"
                                                    class="btn btn-info btn-sm">Edit</a>
                                                <form action="{{ route('product.destroy', $product->id) }}" method="post">
                                                    @csrf
                                                    @method('Delete')
                                                    <button type="submit"
                                                        class="btn btn-danger  btn-sm mt-2">delete</button>
                                                </form>
                                            </td>
                                            <td>{{ $product->created_at }}</td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger"> Data Not Found </div>
                                    @endforelse

                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
