@if ($siswa->dataPribadi)
    @if ($siswa->dataPribadi->isAccepted == true)
        <div class="alert alert-primary alert-icon" role="alert" style="margin-left:16px; margin-right:16px;">
            <i class="mdi mdi-bell-outline"></i> Peserta didik telah diterima! Silahkan menunggu informasi registrasi ulang.
        </div>
    @elseif ($siswa->dataPribadi->isAccepted == false)
        <a href="{{ route('siswa.data') }}">
            <div class="alert alert-primary alert-icon" role="alert" style="margin-left:16px; margin-right:16px;">
                <i class="mdi mdi-bell-outline"></i> Terdapat kesalahan data, silahkan periksa kembali
            </div>
        </a>
    @else
        @if ($siswa->dataPribadi->isVerificated == false)
            <div class="alert alert-info alert-icon" role="alert" style="margin-left:16px; margin-right:16px;">
                <i class="mdi mdi-alert-circle-outline"></i> Data pendaftaran peserta didik dalam proses pemeriksaan
            </div>
        @else
            <div class="alert alert-success alert-icon" role="alert" style="margin-left:16px; margin-right:16px;">
                <i class="mdi mdi-checkbox-marked-outline"></i> Data peserta didik telah terverifikasi
            </div>
        @endif
    @endif
@endif
