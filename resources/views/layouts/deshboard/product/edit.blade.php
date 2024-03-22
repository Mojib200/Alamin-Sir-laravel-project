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
                            <h1> Product Edit</h1>
                        </div>
                        <div class="card-body">
                            <div class="basic-form ">
                                <form action="{{ route('product.update',$product->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('Patch')
                                    {{-- jokhon edit update delete korbo tokhon 1 line er jonno use korbo @method('put') ar multipul lin er jonno use korbo  @method('Patch') --}}

                                    <div class="from-control row">
                                        <div class="from-control row">
                                            <label for=" " class="col-sm-4 col-from-lable ">Name</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control" value="{{ $product->name }}"
                                                    name="name">
                                            </div>
                                            <label for=" " class="col-sm-4 col-from-lable ">Product Categorie</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control" value="{{ $product->product_categorie }}"
                                                name="product_categorie">

                                            </div>
                                            <label for=" " class="col-sm-4 col-from-lable ">Purchase Price</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="number" class="form-control" value="{{ $product->purchase_price }}"
                                                    name="purchase_price">
                                            </div>
                                            <label for=" " class="col-sm-4 col-from-lable ">Regular Price</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="number" class="form-control" value="{{ $product->regular_price }}"
                                                    name="regular_price">
                                            </div>
                                            <label for=" " class="col-sm-4 col-from-lable ">Discount Price</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="number" class="form-control" value="{{ $product->discount_price }}"
                                                    name="discount_price">
                                            </div>
                                            <label for=" " class="col-sm-4 col-from-lable ">Description</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control" value="{{ $product->description }}"
                                                    name="description">
                                            </div>
                                            <label for=" " class="col-sm-4 col-from-lable ">Long Description</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control" value="{{ $product->long_description }}"
                                                    name="long_description">
                                            </div>
                                            <label for=" " class="col-sm-4 col-from-lable ">Additonal
                                                Information</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control"
                                                value="{{ $product->additonal_information }}"name="additonal_information">
                                            </div>
                                            <label for=" " class="col-sm-4 col-from-lable ">Categorie Before Photo Show</label>
                                            <div class="col-sm-8 mb-3">
                                                <img src="{{ asset('/uploads/product') }}/{{ $product->thumbnail }}"
                                                    alt="" width="80" height="50">
                                            </div>

                                            <label for=" " class="col-sm-4 col-from-lable ">Thumbnail</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="file" class="form-control" value="{{ $product->thumbnail }}"
                                                    name="thumbnail">
                                            </div>
                                        </div>


                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Edit Product</button>
                                        </div>
                                    </div>


                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
