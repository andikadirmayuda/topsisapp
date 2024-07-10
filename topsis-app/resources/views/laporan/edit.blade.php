@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Laporan</h1>
    <form action="{{ route('laporan.update', $laporan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="karyawan_id">Karyawan:</label>
            <select class="form-control" id="karyawan_id" name="karyawan_id" required>
                @foreach ($karyawans as $karyawan)
                    <option value="{{ $karyawan->id }}" {{ $karyawan->id == $laporan->karyawan_id ? 'selected' : '' }}>
                        {{ $karyawan->nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nilai_akhir">Nilai Akhir:</label>
            <input type="text" class="form-control" id="nilai_akhir" name="nilai_akhir" value="{{ $laporan->nilai_akhir }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
