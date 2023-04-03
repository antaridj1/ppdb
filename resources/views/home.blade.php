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
                               @auth('admin')
                                    {{$jumlah_peserta}}
                               @endauth
                               @auth('sekolah') 
                                    {{$belum_terverifikasi}}
                                @endauth
                            </span>
                            <p>
                               @auth('admin')
                                    Calon Peserta Didik
                               @endauth
                               @auth('sekolah') 
                                    Belum Terverifikasi
                                @endauth
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
                               @auth('admin')
                                    {{$jumlah_wali}}
                               @endauth
                               @auth('sekolah') 
                                    {{$sudah_terverifikasi}}
                                    @endauth
                            </span>
                            <p>
                               @auth('admin')
                                    Wali Peserta Didik
                               @endauth
                               @auth('sekolah') 
                                    Sudah Terverifikasi
                                @endauth
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
                               @auth('admin')
                                    {{$jumlah_sekolah}}
                               @endauth
                               @auth('sekolah') 
                                    {{$total_peserta}}
                                @endauth
                            </span>
                            <p>
                               @auth('admin')
                                    Sekolah
                               @endauth
                               @auth('sekolah') 
                                    Total Peserta
                                @endauth
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