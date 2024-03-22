@extends('layouts.deshboard.deshboard')

@section('content')
    <div class="container-fluid">
        <div class="content-body mt-5">




            <div class="col-lg-12">

            </div>



            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">

                            <div class="card-body">
                                @if (session('categorie_success'))
                                <div class="alert alert-success ">
                                    {{ session('categorie_success') }}
                                </div>
                            @endif
                                <h3 class="card title">Add Categorie</h3>
                                <div class="basic-form ">
                                    <form action="{{ route('categorie.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="from-control row">

                                            <label for=" " class="col-sm-4 col-from-lable ">Categorie Name</label>

                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control" placeholder="Categorie Name"
                                                    name="categorie_name">
                                            </div>
                                            <label for=" " class="col-sm-4 col-from-lable ">Categorie Slug</label>

                                            <div class="col-sm-8 mb-3">
                                                <input type="text" class="form-control" placeholder="Categorie Slug"
                                                    name="categorie_slug">
                                            </div>
                                            <label for=" " class="col-sm-4 col-from-lable ">Categorie Photo</label>

                                            <div class="col-sm-8 mb-3">
                                                <input type="file" class="form-control" placeholder="Categorie Photo"
                                                    name="categorie_photo">
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Add Categorie</button>
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-body">
                                <h3 class="card title">View Categorie</h3>
                                <div class="basic-form ">
                                    <form action="{{ url('/name_change') }}" method="post">
                                        @csrf
                                        <div class="from-control row">

                                            <label for=" " class="col-sm-3 col-from-lable ">Name</label>

                                            <div class="col-sm-9 mb-3">
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                            <label for=" " class="col-sm-3 col-from-lable ">Name</label>

                                            <div class="col-sm-9 mb-3">
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                            <label for=" " class="col-sm-3 col-from-lable ">Name</label>

                                            <div class="col-sm-9 mb-3">
                                                <input type="text" class="form-control" name="name">
                                            </div>


                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary" name="name_change">Name
                                                    Change</button>
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
