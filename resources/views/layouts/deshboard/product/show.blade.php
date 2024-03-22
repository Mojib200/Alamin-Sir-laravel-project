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
                            <h1> Product Detiles</h1>
                        </div>
                        <div class="card-body">
                            <label for=""> <h1 class="mt-3 text-center">Only For Prices</h1></label>
                            <table class="table table-brodered text-center" border="1">
                                <thead>
                                    <tr>

                                        <th>Thumbnail </th>
                                        <th>Purchase Price</th>
                                        <th>Regular Price</th>
                                        <th>Discount Price</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="{{ asset('/uploads/product') }}/{{ $product->thumbnail }}"
                                            alt="" width="80" height="50"></td>
                                        <td>{{ $product->purchase_price }}</td>
                                        <td>{{ $product->regular_price }}</td>
                                        <td>{{ $product->discount_price }}</td>

                                    </tr>

                                </tbody>

                            </table>
                            <label for=""> <h1 class="mt-3 text-center">Only For Description</h1></label>
                            <table class="table table-brodered text-center" border="1">
                                <thead>
                                    <tr>


                                        <th>Thumbnail </th>
                                        <th>Description</th>
                                        <th>Long Description</th>
                                        <th>Additonal Information</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="{{ asset('/uploads/product') }}/{{ $product->thumbnail }}"
                                            alt="" width="80" height="50"></td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->long_description }}</td>
                                        <td>{{ $product->additonal_information }}</td>

                                    </tr>

                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
