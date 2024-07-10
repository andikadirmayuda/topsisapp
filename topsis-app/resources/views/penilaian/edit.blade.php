@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Penilaian</h1>
    <form action="{{ route('penilaian.update', $penilaian->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="karyawan_id">Karyawan:</label>
            <select class="form-control" id="karyawan_id" name="karyawan_id" required>
                @foreach ($karyawans as $karyawan)
                    <option value="{{ $karyawan->id }}" {{ $karyawan->id == $penilaian->karyawan_id ? 'selected' : '' }}>
                        {{ $karyawan->nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="sub_bobot_id">Sub-Bobot:</label>
            <select class="form-control" id="sub_bobot_id" name="sub_bobot_id" required>
                @foreach ($subBobots as $subBobot)
                    <option value="{{ $subBobot->id }}" {{ $subBobot->id == $penilaian->sub_bobot_id ? 'selected' : '' }}>
                        {{ $subBobot->nama_sub_bobot }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nilai">Nilai:</label>
            <input type="text" class="form-control" id="nilai" name="nilai" value="{{ $penilaian->nilai }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
