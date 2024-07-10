@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Sub-Bobot</h1>
    <a href="{{ route('sub-bobot.create') }}" class="btn btn-primary mb-2">Tambah Sub-Bobot</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kriteria</th>
                <th>Nama Sub-Bobot</th>
                <th>Bobot</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subBobots as $subBobot)
                <tr>
                    <td>{{ $subBobot->kriteria->nama_kriteria }}</td>
                    <td>{{ $subBobot->nama_sub_bobot }}</td>
                    <td>{{ $subBobot->bobot }}</td>
                    <td>
                        <a href="{{ route('sub-bobot.edit', $subBobot->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('sub-bobot.destroy', $subBobot->id) }}" method="POST" style="display:inline;">
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
