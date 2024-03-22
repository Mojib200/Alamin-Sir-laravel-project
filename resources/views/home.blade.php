@extends('layouts.deshboard.deshboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">  <h4> {{Auth::user()->email}}</h4> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h1>Welcome {{Auth::user()->name}}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
