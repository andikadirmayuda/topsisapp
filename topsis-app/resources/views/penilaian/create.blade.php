@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Penilaian</h1>
    <form action="{{ route('penilaian.store') }}" method="POST">
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
            <label for="sub_bobot_id">Sub-Bobot:</label>
            <select class="form-control" id="sub_bobot_id" name="sub_bobot_id" required>
                @foreach ($subBobots as $subBobot)
                    <option value="{{ $subBobot->id }}">{{ $subBobot->nama_sub_bobot }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nilai">Nilai:</label>
            <input type="text" class="form-control" id="nilai" name="nilai" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
