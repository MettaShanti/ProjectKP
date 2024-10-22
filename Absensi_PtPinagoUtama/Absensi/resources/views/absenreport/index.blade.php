@extends('layouts.main')

@section('content')
    <h4>Absen Report</h4>
    <!-- <a href="{{route('pegawai.create')}}" class="btn btn-primary">TAMBAH</a> -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id Pegawai</th>
                <th>Pin Pegawai</th>
                <th>Nip Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Jabatan Pegawai</th>
                <th>Departemen Pegawai</th>
                <th>Divisi Pegawai</th>
                <th>Tanggal</th>
                <th>Bulan</th>
                <th>Hari</th>
                <th>Scan Awal</th>
                <th>Scan Akhir</th>
                <th>Status</th>
                <th>Jam Kerja</th>
                <th>KETERANGAN</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai as $row)
            <tr>
                <td>{{ $row['pegawai_id']}}</td>
                <td>{{ $row['Pin']}}</td>
                <td>{{ $row['Nip']}}</td>
                <td>{{ $row['Nama']}}</td>
                <td>{{ $row['Jabatan']}}</td>
                <td>{{ $row['Departemen']}}</td>
                <td>{{ $row['Divisi']}}</td>
                <td>{{ $row['Tanggal']}}</td>
                <td>{{ $row['Bulan']}}</td>
                <td>{{ $row['Hari']}}</td>
                <td>{{ $row['Scan_awal']}}</td>
                <td>{{ $row['Scan_akhir']}}</td>
                <td>{{ $row['Status']}}</td>
                <td>{{ $row['Jam_Kerja']}}</td>
                <td>{{ $row['KETERANGAN']}}</td>
                <!-- <td><a href="{{ route('pegawai.show', $row['id'])}}" class="btn btn-primary btn-xs">SHOW</a></td> -->
                <!-- <td><a href="{{ route('pegawai.edit', $row ['id'] )}}" class="btn btn-xs btn-warning">UBAH</a>
                {{-- untuk membuat btn hapus --}}
                    <form action="{{ route('pegawai.destroy', $row['id'])}}" method="post" style="display:inline"> 
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-xs btn-danger">HAPUS</button>
                    </form>
                    {{-- style="display:inline" untuk memindahkan btn ke samping --}}</td> -->
            </tr>
            @endforeach
            </tbody>
        </table>
@endsection