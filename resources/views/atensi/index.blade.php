@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Atensi</h2>
    <a href="{{route('forms.atensi.create')}}" type="reset" class="btn btn-secondary">Buat Atensi</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Uraian Kegiatan</th>
                <th>Saran Tindak Lanjut</th>
                <th>Keterangan</th>
                <th>File</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $index => $atensi)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $atensi->uraian_kegiatan }}</td>
                <td>{{ $atensi->saran_tindak_lanjut }}</td>
                <td>{{ $atensi->keterangan }}</td>
                <td>
                    @if($atensi->file)
                        <a href="{{ asset('storage/' . $atensi->file) }}" target="_blank">Lihat File</a>
                    @else
                        Tidak ada file
                    @endif
                </td>
                <td>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
