<div class="modal fade" id="exampleModal_{{$pengumuman->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Pengumuman</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
            </div>
            <form method="post" action="{{route('admin.pengumuman.destroy',$pengumuman->id)}}">
                @method('delete')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <p>Apakah Anda yakin akan menghapus pengumuman ini?</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-pill">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
