@extends('layout.admin')

@section('content')
    <div class="container col-md-6" style="padding-top: 20px">
        <div class="card shadow">
        <div class="card-header text-center">{{ __('Add New Kategori') }} </div>
        <div class="card-body">
            <form action="{{ route('createKategori') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_kategori" class="form-label">Kategori Barang</label>
                    <input name="nama_kategori" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Nama Kategori">
                </div>

                <button type="submit" class="btn btn-success">Add Kategori</button>
            </form>
        </div>
        </div>
    </div>

    <div class="container col-md-6" style="padding-top: 20px">
        <div class="card shadow">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Kategori</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($kategoris as $kategori)
                        <tr>
                            <td>{{ $kategori->nama_kategori }}</td>
                            <td>
                                <form action="{{route('deleteKategori', ['id' => $kategori->id])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger col-md">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop