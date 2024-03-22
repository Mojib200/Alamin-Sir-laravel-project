
<div>
    <div class="row">
        <div class="col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-header">

                    <div class="card-body">
                        <div>
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                        <h3 class="card title">Add Size Variation</h3>
                        <div class="basic-form ">
                            <form wire:submit.prevent="size_insert">
                                <div class="from-control row">
                                    <label for=" " class="col-sm-4 col-from-lable ">Variation Size</label>

                                    <div class="col-sm-8 mb-3">
                                        <input type="text" class="form-control" placeholder=" Size"
                                            wire:model.live='size'>
                                        <p>Show This Input : {{ $size }}</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Add Size Variation</button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-header">

                    <div class="card-body">
                        <div>
                            @if (session()->has('delete'))
                                <div class="alert alert-success">
                                    {{ session('delete') }}
                                </div>
                            @endif
                        </div>
                        <h3 class="card title">View Variation</h3>
                        <div class="card-body card-control">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="width80">SL</th>
                                        <th>Size</th>
                                        <th>Action</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sizes as $size)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $size->size }}</td>
                                            <td>
                                                {{-- <form method="post">
                                                    @csrf
                                                    @method('Delete') --}}
                                                    <button type="button" wire:click="delete_size({{$size->id}})"
                                                        class="btn btn-danger  btn-sm mt-2">delete</button>
                                                {{-- </form> --}}
                                            </td>
                                            <td>{{ $size->created_at }}</td>

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

