@extends('layouts.main')

@section('container')
<h3 class="text-center">Edit Data Bunga</h3>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2">
                <form action="{{ route('bunga.update', $bunga->id) }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="nim_input" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="namaInput" id="nama_input" value="{{ $bunga->nama }}">
                     </div>
                    <div class="mb-3">
                        <label for="nama_input" class="form-label">Latin</label>
                       <input type="text" class="form-control" id="latin_input" name="latinInput" value="{{ $bunga->latin }}">
                    </div>
                    <div class="mb-3">
                        <label for="prodi_input" class="form-label">Makna</label>
                        <input type="text" class="form-control" id="makna_input" name="maknaInput" value="{{ $bunga->makna }}">
                    </div>            
                    <div class="mb-3">
                        <label for="prodi_input" class="form-label">Manfaat</label>
                        <input type="text" class="form-control" id="manfaat_input" name="manfaatInput" value="{{ $bunga->manfaat }}">
                    </div>                         
                    <div class="row mx-2">
                        <button type="submit" class="btn btn-primary mb-3">Edit</button>
                    </div>
               </form>
               
            </div>
        </div>
    </div>
@endsection
