@extends('layout.app')
@section('title','PPDB')

@section('content')  

    <div class="content">                
        <!-- Table Product -->
        <div class="row">
            <div class="col-12">
                @include('peserta-didik._card')
            </div>
        </div>
    </div>
    @if(session()->has('status'))
        @include('layout.components.alert')
    @endif
  @endsection