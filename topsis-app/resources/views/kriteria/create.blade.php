@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Kriteria</h1>
    <form action="{{ route('kriteria.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_kriteria">Nama Kriteria:</label>
            <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" required>
        </div>
        <div class="form-group">
            <label for="bobot">Bobot:</label>
            <input type="text" class="form-control" id="bobot" name="bobot" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
