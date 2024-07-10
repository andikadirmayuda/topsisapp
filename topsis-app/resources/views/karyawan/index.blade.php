<!-- resources/views/karyawan/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Karyawan</h1>
    <a href="{{ route('karyawan.create') }}" class="btn btn-primary mb-2">Tambah Karyawan</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawans as $karyawan)
                <tr>
                    <td>{{ $karyawan->nama }}</td>
                    <td>{{ $karyawan->jabatan }}</td>
                    <td>
                        <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
