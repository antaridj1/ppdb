@if ($siswa->dataPribadi)
    @if ($siswa->dataPribadi->isAccepted === 1)
    <a href="{{ route('siswa.datatable') }}">
        <div class="alert alert-primary alert-icon" role="alert" style="margin-left:16px; margin-right:16px;">
            <i class="mdi mdi-bell-outline"></i> Peserta didik telah diterima! Silahkan menunggu informasi registrasi ulang.
        </div>
    </a>
    @elseif ($siswa->dataPribadi->isAccepted === 0)
        <a href="{{ route('siswa.data') }}">
            <div class="alert alert-danger alert-icon" role="alert" style="margin-left:16px; margin-right:16px;">
                <i class="mdi mdi-bell-outline"></i> Terdapat kesalahan data. {{$siswa->dataPribadi->saran_perbaikan}}
            </div>
        </a>
    @else
        @if ($siswa->dataPribadi->isVerificated === 0)
            <div class="alert alert-info alert-icon" role="alert" style="margin-left:16px; margin-right:16px;">
                <i class="mdi mdi-alert-circle-outline"></i> Data pendaftaran peserta didik dalam proses pemeriksaan
            </div>
        @elseif ($siswa->dataPribadi->isVerificated === 1)
            <div class="alert alert-success alert-icon" role="alert" style="margin-left:16px; margin-right:16px;">
                <i class="mdi mdi-checkbox-marked-outline"></i> Data peserta didik telah terverifikasi
            </div>
        @else
        @endif
    @endif
@endif
