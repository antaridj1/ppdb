@extends('layout.app')
@section('title','PPDB')

@section('content')  

    <div class="content">                
        <!-- Small Card -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card card-default">
                    <div class="d-flex p-5">
                        <div class="icon-md bg-secondary rounded-circle mr-3">
                            <i class="mdi mdi-account-plus-outline"></i>
                        </div>
                        <div class="text-left">
                            <span class="h2 d-block">
                                @if (role('admin'))
                                    {{$jumlah_peserta}}
                                @else 
                                    {{$belum_terverifikasi}}
                                @endif
                            </span>
                            <p>
                                @if (role('admin'))
                                    Calon Peserta Didik
                                @else 
                                    Peserta Belum Terverifikasi
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-default">
                    <div class="d-flex p-5">
                        <div class="icon-md bg-success rounded-circle mr-3">
                            <i class="mdi mdi-table-edit"></i>
                        </div>
                        <div class="text-left">
                            <span class="h2 d-block">
                                @if (role('admin'))
                                    {{$jumlah_wali}}
                                @else 
                                    {{$sudah_terverifikasi}}
                                    @endif
                            </span>
                            <p>
                                @if (role('admin'))
                                    Wali Peserta Didik
                                @else 
                                    Peserta Sudah Terverifikasi
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-default">
                    <div class="d-flex p-5">
                        <div class="icon-md bg-primary rounded-circle mr-3">
                            <i class="mdi mdi-content-save-edit-outline"></i>
                        </div>
                        <div class="text-left">
                            <span class="h2 d-block">
                                @if (role('admin'))
                                    {{$jumlah_sekolah}}
                                @else 
                                    {{$total_peserta}}
                                @endif
                            </span>
                            <p>
                                @if (role('admin'))
                                    Sekolah
                                @else 
                                    Total Peserta
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Pendaftaran Hari Ini</h2>
                        
                    </div>
                    <div class="card-body">
                       @include('peserta-didik._table')
                    </div>
                </div>
            </div>
        </div>
  @endsection