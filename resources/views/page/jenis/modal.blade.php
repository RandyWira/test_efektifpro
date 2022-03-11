<form action="{{route('jenis.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="modalJenis" tabindex="-1" role="dialog" aria-labelledby="modalJenisLabel" aria-hidden="true">
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
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>