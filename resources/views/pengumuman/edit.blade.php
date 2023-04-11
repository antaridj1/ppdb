@extends('layout.app')
@section('title','PPDB')

@section('content')

    <div class="content">
        <div class="card card-default">
            <div class="card-header">
                <h2>Edit Pengumuman</h2>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('admin.pengumuman.update', $pengumuman->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group mb-4">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{ $pengumuman->judul }}" required>
                        @error('judul')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="pengumuman">Pengumuman</label>
                        <textarea class="form-control @error('pengumuman') is-invalid @enderror" rows="3" name="pengumuman" id="pengumuman" value="" required>
                            {{ $pengumuman->pengumuman }}
                        </textarea>
                        @error('pengumuman')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form><!-- End floating Labels Form -->
            </div>
        </div>
    </div>
    @if(session()->has('status'))
        @include('layout.components.alert')
    @endif

    @push('js-textarea')
        <script>
            var textArea = document.getElementById('pengumuman');

            // Get the text from the text area and remove whitespace
            var text = textArea.value.replace(/\t/g, '');

            // Set the text in the text area to the cleaned up text
            textArea.value = text;
        </script>
    @endpush

  @endsection
