@extends('layout.main')

@section('content')
    
<div class="main-content">
    <section class="section">
    <div class="section-header">
        <h1>Stock</h1>
    </div>

    <div class="section-body">
        

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalStock">
                            Tambah Stock
                        </button>
                    </div>
                    <div class="card-body text-center">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Jenis Barang</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stok as $key => $i)

                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$i->jenis->nama}}</td>
                                    <td>{{$i->brand->nama}}</td>
                                    <td>{{$i->nama}}</td>
                                    <td>{{$i->stock}}</td>
                                    <td>
                                        <button class="btn btn-warning" data-toggle="modal" data-target="#editStok{{$i->id}}">Edit</button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusStok{{$i->id}}" title="Hapus">Hapus</button>
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

@include('page.stock.modal')

@endsection

@section('js')
    
@endsection