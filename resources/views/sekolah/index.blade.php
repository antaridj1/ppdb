@extends('layout.app')
@section('title','PPDB')

@section('content')  

    <div class="content">                
        <!-- Table Product -->
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header d-flex justify-content-between">
                        <h2>Sekolah</h2>
                        <a href="{{route('admin.sekolah.create')}}" class="btn btn-pill btn-primary">Tambah Sekolah</a>
                    </div>
                    <div class="card-body">
                       @include('sekolah._table')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(session()->has('status'))
        @include('layout.components.alert')
    @endif

  @endsection