<!-- Modal Tambah Brand -->
<form action="{{route('brand.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="modalBrand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pengaturan Brand</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Barang</label>
                        <select class="form-control" id="jenis_id" name="jenis_id">
                            @foreach ($jenis as $j)
                            <option value="{{$j->id}}">{{$j->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="text1">Brand</label>
                        <input type="text" name="nama" class="form-control" id="nama">
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
<!-- End Modal Tambah Brand -->


<!-- Modal Edit Brand -->
@foreach ($brand as $key => $i)
<form action="{{url('brand',$i->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="modal fade" id="editBrand{{$i->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pengaturan Brand</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Barang</label>
                        <select class="form-control" id="jenis_id" name="jenis_id">
                            @foreach ($jenis as $j)
                            <option value="{{$j->id}}">{{$j->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="text1">Brand</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{$i->nama}}">
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
<!-- End Modal Edit Brand -->


<!-- Modal Delete -->
@foreach ($brand as $key => $i)
<form action="{{url('brand',$i->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
        <div class="modal fade bs-example-modal-sm" id="hapusBrand{{$i->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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