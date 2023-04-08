@extends('layouts.main')

@section('container')

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<a href="{{ route('bunga.create') }}" class="btn btn-success">Tambah Data</a>

<table class="table">
    <thead>
        <tr class="table-dark">
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Latin</th>
            <th scope="col">Makna</th>
            <th scope="col">Manfaat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
        @endphp

        @foreach ($bunga as $item)
        <tr class="table-danger">
            <th scope="row">{{ $no }}</th>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->latin }}</td>
            <td>{{ $item->makna }}</td>
            <td>{{ $item->manfaat }}</td>
            <td>
                <a href="{{ route('bunga.edit', $item->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('bunga.destroy',$item->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" onclick="confirm('Anda yakin akan meenghapus data ini?')">Hapus</button>
               </form>
               
            </td>
        </tr>

        @php
            $no++;
        @endphp
        @endforeach
    </tbody>
</table>
@endsection
