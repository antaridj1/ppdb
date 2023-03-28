@extends('layout.app')
@section('title','PPDB')

@section('content')  

    <div class="content">                
        <!-- Table Product -->
        <div class="row">
            <div class="col-12">
                @include('sekolah._card')
            </div>
        </div>
    </div>

  

  @endsection