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
                        @auth('admin')
                            <div class="dropdown">
                                @if(request('sdn'))
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"> SDN {{request('sdn')}} Gianyar
                                    </a>
                                @else
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"> Semua Sekolah
                                    </a>
                                @endif
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{route('admin.siswa.index')}}">Semua Sekolah</a>
                                    @foreach ($sekolahs as $sekolah)
                                        <a class="dropdown-item" href="{{route('admin.siswa.index')}}?sdn={{$sekolah->id}}">{{$sekolah->nama_sekolah}}</a>
                                    @endforeach
                                </div>
                            </div>
                        @endauth
                    </div>
                    <div class="card-body">
                       @include('peserta-didik._table')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(session()->has('status'))
        @include('layout.components.alert')
    @endif

  @endsection