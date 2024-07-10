@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Laporan</h1>
    <form action="{{ route('laporan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="karyawan_id">Karyawan:</label>
            <select class="form-control" id="karyawan_id" name="karyawan_id" required>
                @foreach ($karyawans as $karyawan)
                    <option value="{{ $karyawan->id }}">{{ $karyawan->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nilai_akhir">Nilai Akhir:</label>
            <input type="text" class="form-control" id="nilai_akhir" name="nilai_akhir" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
