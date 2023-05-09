@auth('sekolah')
<div class="modal fade" id="exampleModal_{{$peserta_didik->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
            </div> 
            <form method="post" action="{{route('sekolah.siswa.destroy',$peserta_didik->id)}}">
                @method('delete')
                @csrf
                <div class="modal-body">
                    <div class="form-group"> 
                        <p>Apakah Anda yakin akan menghapus data ini?</p>
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
<div class="modal fade" id="verifikasiModal_{{$peserta_didik->id}}" tabindex="-1" role="dialog" aria-labelledby="verifikasiModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verifikasiModalLabel">Verifikasi Kelengkapan Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
            </div> 
                <div class="modal-body">
                    <div class="form-group"> 
                        <p class="text-start">Jika data sudah lengkap, maka Anda dapat memilih untuk memverifikasi data. Namun, jika data masih perlu perbaikan, maka beri saran perbaikan pada pendaftar</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" data-toggle="modal" data-target="#tolakModal_{{$peserta_didik->id}}" class="btn btn-warning btn-pill">Beri Saran Perbaikan</button>
                    <button  data-dismiss="modal" data-toggle="modal" data-target="#terimaModal_{{$peserta_didik->id}}" class="btn btn-primary btn-pill">Verifikasi Sekarang</button>
                </div>
        </div>
    </div>
</div>

<div class="modal fade" id="terimaModal_{{$peserta_didik->id}}" tabindex="-1" role="dialog" aria-labelledby="terimaModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="terimaModalLabel">Verifikasi Data Peserta Didik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
            </div> 
            <form method="post" action="{{route('sekolah.siswa.updateVerificated',$peserta_didik->id)}}">
                @method('patch')
                @csrf
                <div class="modal-body">
                    <div class="form-group"> 
                        <p class="text-left">Setelah memverifikasi peserta didik, status peserta didik akan berubah secara permanen. Anda yakin akan memverifikasi data ini?</p>
                    </div>
                    <input type="hidden" value="true" name="isVerificated">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-pill">Ya</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="tolakModal_{{$peserta_didik->id}}" tabindex="-1" role="dialog" aria-labelledby="tolakModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tolakModalLabel">Verifikasi Data Peserta Didik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
            </div> 
            <form method="post" action="{{route('sekolah.siswa.updateVerificated',$peserta_didik->id)}}">
                @method('patch')
                @csrf
                <div class="modal-body">
                    <div class="form-group"> 
                        <p class="text-start">Berikan alasan penolakan atau saran untuk perbaikan pengisian formulir</p>
                    </div>
                    <input type="hidden" value="false" name="isVerificated">
                    <div class="form-group mb-4">
                        <textarea type="text" class="form-control @error('saran_perbaikan') is-invalid @enderror" name="saran_perbaikan" id="saran_perbaikan" value="{{ @old('saran_perbaikan') }}" required ></textarea>
                        @error('saran_perbaikan')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-pill">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endauth

@auth('admin')
    <div class="modal fade" id="exampleModal_{{$peserta_didik->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                </div> 
                <form method="post" action="{{route('admin.siswa.destroy',$peserta_didik->id)}}">
                    @method('delete')
                    @csrf
                    <div class="modal-body">
                        <div class="form-group"> 
                            <p>Apakah Anda yakin akan menghapus data ini?</p>
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
@endauth
