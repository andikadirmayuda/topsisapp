@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Kriteria</h1>
    <a href="{{ route('kriteria.create') }}" class="btn btn-primary mb-2">Tambah Kriteria</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Kriteria</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kriterias as $kriteria)
                <tr>
                    <td>{{ $kriteria->nama_kriteria }}</td>
                    <td>{{ $kriteria->bobot }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
