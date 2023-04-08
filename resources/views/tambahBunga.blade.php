@extends('layouts.main')

@section('container')
<h3 class="text-center">Tambah Data Bunga</h3>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2">
                <form action="{{ route('bunga.store') }}" method="POST">
                    @csrf
            
                    <div class="mb-3">
                        <label for="nama_input" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="namaInput" id="nama_input">
                    </div>
                    <div class="mb-3">
                        <label for="latin_input" class="form-label">Latin</label>
                        <input type="text" class="form-control" id="latin_input" name="latinInput">
                    </div>
                    <div class="mb-3">
                        <label for="makna_input" class="form-label">Makna</label>
                        <input type="text" class="form-control" id="makna_input" name="maknaInput">
                    </div>
                    <div class="mb-3">
                        <label for="manfaat_input" class="form-label">Manfaat</label>
                        <input type="text" class="form-control" id="manfaat_input" name="manfaatInput">
                    </div>
                    <div class="row mx-2">
                        <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
