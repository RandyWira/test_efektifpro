@extends('layout.main')

@section('content')
    
<div class="main-content">
    <section class="section">
    <div class="section-header">
        <h1>List Jenis Barang</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalJenis">
                            Tambah Jenis Barang
                        </button>
                    </div>
                    <div class="card-body text-center">
                        <table id="tableJenis" class="table">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Jenis Barang</th>
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no=1;?>
                            @foreach($data as $i)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$i->nama}}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalJenis{{$i->id}}" title="Edit">Edit</button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusJenis{{$i->id}}" title="Hapus">Hapus</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>


<!-- Modal Edit -->
@foreach ($data as $i)

<form action="{{url('jenis',$i->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="modal fade" id="modalJenis{{$i->id}}" tabindex="-1" role="dialog" aria-labelledby="modalJenisLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalJenisLabel">Pengaturan Jenis Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="text1">Jenis Barang</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{$i->nama}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach
<!-- End Modal Edit -->

<!-- Modal Delete -->
@foreach ($data as $i)
<form action="{{url('jenis',$i->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
        <div class="modal fade bs-example-modal-sm" id="hapusJenis{{$i->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalJenisLabel">Hapus Jenis Barang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apa anda yakin ingin menghapus data <b>{{$i->nama}}</b> ini ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach
<!-- End Modal Delete -->


@include('page.jenis.modal')

@endsection

@section('js')
    
@endsection