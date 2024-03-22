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
                            <h1> Categorie Detiles</h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-brodered text-center" border="1">
                                <thead>
                                    <tr>

                                        <th>Categorie Name</th>
                                        <th>Categorie Slug</th>
                                        <th>Categorie Photo</th>
                                        <th>Create Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>

                                            <td>{{ $categorie->categorie_name }}</td>
                                            <td>{{ $categorie->categorie_slug }}</td>
                                            <td><img src="{{ asset('/uploads/categorie_photo')}}/{{ $categorie->categorie_photo }}" alt="" width="80" height="50"></td>
                                            <td>{{ $categorie->created_at }}</td>

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
