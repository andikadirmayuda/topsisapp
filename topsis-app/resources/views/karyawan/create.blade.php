<!-- resources/views/karyawan/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Karyawan</h1>
    <form action="{{ route('karyawan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
