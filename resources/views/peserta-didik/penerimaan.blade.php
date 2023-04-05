@extends('layout.app')
@section('title','PPDB')

@section('content')  

    <div class="content">                
        <!-- Table Product -->
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Calon Peserta Didik</h2>
                        @auth('sekolah')
                        <button class="ladda-button btn btn-primary btn-ladda" data-style="expand-left">
                            <span class="ladda-label">Terima Calon Peserta Didik</span>
                            <span class="ladda-spinner"></span>
                          </button>
                        @endauth
                    </div>
                    <div class="card-body">
                       @include('peserta-didik._table')
                    </div>
                </div>
            </div>
        </div>
    </div>

  

  @endsection