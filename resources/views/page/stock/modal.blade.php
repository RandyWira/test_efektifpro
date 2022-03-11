<!-- Modal Tambah Data -->
<form action="{{route('stock.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="modalStock" tabindex="-1" role="dialog" aria-labelledby="modalStockLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalStockLabel">Pengaturan Stock</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="jenis">Jenis Barang</label>
                        <select class="form-control" name="jenis" id="jenis">
                            <option selected="false">
                                Pilih Jenis Barang
                            </option>
                            @foreach ($jenis as $jns)
                                <option value="{{$jns->id}}">{{$jns->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <select class="form-control" name="brand" id="brand">
                            <option selected="false">
                            Brand
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="text1">Nama Barang</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="number1">Stock</label>
                        <input type="Number" name="stock" class="form-control" id="stock">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End Modal Tambah -->

<!-- Modal Edit Data -->
@foreach ($stok as $key => $i)
<form action="{{url('stock',$i->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="modal fade" id="editStok{{$i->id}}" tabindex="-1" role="dialog" aria-labelledby="modalStockLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalStockLabel">Pengaturan Stock</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="jenis">Jenis Barang</label>
                        <select class="form-control" name="jenis" id="jenis">
                            <option selected="false">
                                Pilih Jenis Barang
                            </option>
                            @foreach ($jenis as $jns)
                                <option value="{{$jns->id}}">{{$jns->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="brand">Brand</label>
                        <select class="form-control" name="brand" id="brand">
                            <option selected="false">
                            Brand
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="text1">Nama Barang</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{$i->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="number1">Stock</label>
                        <input type="Number" name="stock" class="form-control" id="stock" value="{{$i->stock}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach
<!-- End Modal Edit -->


<!-- Modal Delete -->
@foreach ($stok as $key => $i)
<form action="{{url('stock',$i->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
        <div class="modal fade bs-example-modal-sm" id="hapusStok{{$i->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalJenisLabel">Hapus Brand Barang</h5>
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