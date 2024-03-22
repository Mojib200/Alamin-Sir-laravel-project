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
                           <h1> Total Categories List</h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-brodered text-center" border="1">
                                <thead>
                                    <tr>
                                        <th class="width80">SL</th>
                                        <th>Categorie Name</th>
                                        <th>Categorie Detiles</th>
                                        {{-- <th>Categorie Slug</th>
                                        <th>Categorie Photo</th>
                                        <th>Create Time</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($categorie as $categorie)
                                        <tr>
                                            <td>{{ $categorie->id }}</td>
                                            <td>{{ $categorie->categorie_name }}</td>
                                            <td> <a href="{{route('categorie.show',$categorie->id)}}"class="btn btn-success btn-sm ">Detiles</a></td>
                                            {{-- <td>{{ $categorie->categorie_slug }}</td>
                                            <td><img src="{{ asset('/uploads/categorie_photo')}}/{{ $categorie->categorie_photo }}" alt="" width="80" height="50"></td>
                                            <td>{{ $categorie->created_at }}</td> --}}
                                            <td>

                                               <a href="{{route('categorie.edit',$categorie->id)}}" class="btn btn-info btn-sm">Edit</a>
                                               <form action="{{route('categorie.destroy',$categorie->id)}}"  method="post">
                                                @csrf
                                                @method('Delete')
                                                <button type="submit"  class="btn btn-danger  btn-sm mt-2">delete</button>
                                               </form>
                                        </td>
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
