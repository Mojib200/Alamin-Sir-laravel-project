@extends('layouts.deshboard.deshboard')

@section('content')
    <div class="container-fluid">
        <div class="content-body mt-5">




            <div class="col-lg-12">

            </div>



            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="card">
                        <div class="card-header">

                            <div class="card-body">
                                @if (session('categorie_success'))
                                    <div class="alert alert-success ">
                                        {{ session('categorie_success') }}
                                    </div>
                                @endif
                                <h3 class="card title">Add Product</h3>
                                <div class="basic-form ">
                                    <form action="{{ route('product.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="from-control row">
                                            <label for=" " class="col-sm-4 col-from-lable ">Name</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control" placeholder="Name"
                                                    name="name">
                                            </div>

                                            <label for=" " class="col-sm-4 col-from-lable ">Product Categorie</label>
                                            <div class="col-sm-8 mb-3">
                                                <select class="form-control" name="product_categorie">
                                                    <option value="">Select Product</option>
                                                    @foreach ($categorie as $categorie)
                                                        <option value="{{ $categorie->id }}">
                                                            {{ $categorie->categorie_name }}</option>
                                                    @endforeach

                                                </select>

                                            </div>
                                            <label for=" " class="col-sm-4 col-from-lable ">Purchase Price</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="number" class="form-control" placeholder="Purchase Price"
                                                    name="purchase_price">
                                            </div>
                                            <label for=" " class="col-sm-4 col-from-lable ">Regular Price</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="number" class="form-control" placeholder="Regular Price"
                                                    name="regular_price">
                                            </div>
                                            <label for=" " class="col-sm-4 col-from-lable ">Discount Price</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="number" class="form-control" placeholder="Discount Price"
                                                    name="discount_price">
                                            </div>
                                            <label for=" " class="col-sm-4 col-from-lable ">Description</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control" placeholder="Description"
                                                    name="description">
                                            </div>
                                            <label for=" " class="col-sm-4 col-from-lable ">Long Description</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control" placeholder="Long Description"
                                                    name="long_description">
                                            </div>
                                            <label for=" " class="col-sm-4 col-from-lable ">Additonal
                                                Information</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control"
                                                    placeholder="Additonal Information" name="additonal_information">
                                            </div>

                                            <label for=" " class="col-sm-4 col-from-lable ">Thumbnail</label>
                                            <div class="col-sm-8 mb-3">
                                                <input type="file" class="form-control" placeholder="Thumbnail"
                                                    name="thumbnail">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Add Product</button>
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
    </div>
@endsection
