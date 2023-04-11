@if ($siswa->dataPribadi)
    @if ($siswa->dataPribadi->isAccepted === 1)
    <a href="{{ route('siswa.datatable') }}">
        <div class="alert alert-primary alert-icon" role="alert" style="margin-left:16px; margin-right:16px;">
            <i class="mdi mdi-bell-outline"></i> Peserta didik telah diterima! Silahkan menunggu informasi registrasi ulang.
        </div>
    </a>
    @endif
    @if ($siswa->dataPribadi->isAccepted === 0)
        <a href="{{ route('siswa.data') }}">
            <div class="alert alert-danger alert-icon" role="alert" style="margin-left:16px; margin-right:16px;">
                <i class="mdi mdi-bell-outline"></i> Data peserta didik ditolak.
            </div>
        </a>
    @endif
    @if ($siswa->dataPribadi->isVerificated === 0)
        <a href="{{ route('siswa.data') }}">
            <div class="alert alert-danger alert-icon" role="alert" style="margin-left:16px; margin-right:16px;">
                <i class="mdi mdi-bell-outline"></i> Data peserta tidak lolos verifikasi. {{$siswa->dataPribadi->saran_perbaikan}}
            </div>
        </a>
    @endif
    @if ($siswa->dataPribadi->isVerificated === null)
        <div class="alert alert-info alert-icon" role="alert" style="margin-left:16px; margin-right:16px;">
            <i class="mdi mdi-alert-circle-outline"></i> Data pendaftaran peserta didik dalam proses pemeriksaan
        </div>
    @endif
    @if ($siswa->dataPribadi->isVerificated === 1)
        <div class="alert alert-success alert-icon" role="alert" style="margin-left:16px; margin-right:16px;">
            <i class="mdi mdi-checkbox-marked-outline"></i> Data peserta didik telah terverifikasi
        </div>
    @endif
    @endif
@endif
