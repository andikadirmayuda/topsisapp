@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Laporan</h1>
    <a href="{{ route('laporan.create') }}" class="btn btn-primary mb-2">Tambah Laporan</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Karyawan</th>
                <th>Nilai Akhir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporans as $laporan)
                <tr>
                    <td>{{ $laporan->karyawan->nama }}</td>
                    <td>{{ $laporan->nilai_akhir }}</td>
                    <td>
                        <a href="{{ route('laporan.edit', $laporan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('laporan.destroy', $laporan->id) }}" method="POST" style="display:inline;">
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
