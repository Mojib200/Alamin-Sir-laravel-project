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
                            <h1> Catagorie Edit</h1>
                        </div>
                        <div class="card-body">
                            <div class="basic-form ">
                                <form action="{{ route('categorie.update',$categorie->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('Patch')
                                    {{-- jokhon edit update delete korbo tokhon 1 line er jonno use korbo @method('put') ar multipul lin er jonno use korbo  @method('Patch') --}}

                                    <div class="from-control row">

                                        <label for=" " class="col-sm-4 col-from-lable ">Categorie Name</label>

                                        <div class="col-sm-8 mb-3">
                                            <input type="text" class="form-control"
                                                name="categorie_name" value="{{ $categorie->categorie_name }}">
                                        </div>
                                        <label for=" " class="col-sm-4 col-from-lable ">Categorie Slug</label>

                                        <div class="col-sm-8 mb-3">
                                            <input type="text" class="form-control"
                                                name="categorie_slug" value="{{ $categorie->categorie_slug }}">
                                        </div>
                                        <label for=" " class="col-sm-4 col-from-lable ">Categorie Before Photo Show</label>
                                        <div class="col-sm-8 mb-3">
                                            <img src="{{ asset('/uploads/categorie_photo') }}/{{ $categorie->categorie_photo }}"
                                                alt="" width="80" height="50">
                                        </div>
                                        <label for=" " class="col-sm-4 col-from-lable ">Categorie Photo</label>

                                        <div class="col-sm-8 mb-3">
                                            <input type="file" class="form-control" placeholder="Categorie Photo"
                                                name="categorie_photo">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Edit Categorie</button>
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
