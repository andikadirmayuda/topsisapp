<!-- resources/views/karyawan/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Karyawan</h1>
    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $karyawan->nama }}" required>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $karyawan->jabatan }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
