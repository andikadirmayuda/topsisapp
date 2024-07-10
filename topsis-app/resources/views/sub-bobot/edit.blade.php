@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Sub-Bobot</h1>
    <form action="{{ route('sub-bobot.update', $subBobot->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kriteria_id">Kriteria:</label>
            <select class="form-control" id="kriteria_id" name="kriteria_id" required>
                @foreach ($kriterias as $kriteria)
                    <option value="{{ $kriteria->id }}" {{ $kriteria->id == $subBobot->kriteria_id ? 'selected' : '' }}>
                        {{ $kriteria->nama_kriteria }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nama_sub_bobot">Nama Sub-Bobot:</label>
            <input type="text" class="form-control" id="nama_sub_bobot" name="nama_sub_bobot" value="{{ $subBobot->nama_sub_bobot }}" required>
        </div>
        <div class="form-group">
            <label for="bobot">Bobot:</label>
            <input type="text" class="form-control" id="bobot" name="bobot" value="{{ $subBobot->bobot }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
