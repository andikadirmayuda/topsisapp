@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Penilaian</h1>
    <a href="{{ route('penilaian.create') }}" class="btn btn-primary mb-2">Tambah Penilaian</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Karyawan</th>
                <th>Sub-Bobot</th>
                <th>Nilai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penilaians as $penilaian)
                <tr>
                    <td>{{ $penilaian->karyawan->nama }}</td>
                    <td>{{ $penilaian->subBobot->nama_sub_bobot }}</td>
                    <td>{{ $penilaian->nilai }}</td>
                    <td>
                        <a href="{{ route('penilaian.edit', $penilaian->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('penilaian.destroy', $penilaian->id) }}" method="POST" style="display:inline;">
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
