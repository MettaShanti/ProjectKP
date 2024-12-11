@extends('layouts.main')

@section('content')
    <h4>Laporan</h4>
    <a href="{{route('absenreport.create')}}" class="btn btn-primary">Cetak</a>
    <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <div class="filter mt-3 mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Creation Date:</label><br>
                            <input type="text" name="daterange" value="" class="form-control daterange" />
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-2">
                    <label>Start date:</label>
                    <input type="start_date" class="form-control">
                </div>
                <div class="col-md-2">
                    <label>End date:</label>
                    <input type="end_date" class="form-control">
                </div> -->
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
                <th>Scan_awal</th>
                <th>Scan_akhir</th>
                <th>Status</th>
                <th>Jam_Kerja</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($absenreport as $row)
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
            </tr>
            @endforeach
            </tbody>
        </table>

        $('daterange').daterangepicker();

@endsection