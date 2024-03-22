<div>
    <div class="container-fluid">
        <div class="content-body mt-5">




            <div class="col-lg-12">
            </div>

            <div class="container">
                <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)"> Variation/Color </a></li>
                    </ol>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h1>Add Color Variation</h1>

                        </div>
                        <div>
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="color_insert">
                                <div class="from-control row">
                                    <label for=" " class="col-sm-4 col-from-lable ">Variation name</label>
                                    <div class="col-sm-8 mb-3">
                                        <input type="text" class="form-control"wire:model='color_name'>

                                    </div>
                                    <label for=" " class="col-sm-4 col-from-lable ">Variation Color Code</label>
                                    <div class="col-sm-8 mb-3">
                                        <input type="color" class="form-control" wire:model='color_code'>

                                    </div>

                                    <button type="submit" class="btn btn-primary">Add Color Variation</button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">View Variation</h1>

                        </div>
                        <div>
                            @if (session()->has('delete'))
                                <div class="alert alert-success">
                                    {{ session('delete') }}
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="width80">SL</th>
                                        <th>Color Name</th>
                                        <th>Color Code</th>
                                        <th>Action</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($colors as $color)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $color->color_name }}</td>
                                            <td>
                                                <span style="background:{{ $color->color_code }}; color:#fff;height:70px; width:70px">  {{ $color->color_code }}</span>
                                              </td>
                                            <td>
                                                <form method="post">
                                                    @csrf
                                                    @method('Delete')
                                                    <button type="button" wire:click="edit_color({{ $color->id }})"
                                                        class="btn btn-success  btn-sm mt-2">edit</button>
                                                    <button type="button" wire:click="delete_color({{ $color->id }})"
                                                        class="btn btn-danger  btn-sm mt-2">delete</button>
                                                </form>
                                            </td>
                                            <td>{{ $color->created_at }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
