@extends('layouts.main')

@section('content')
    <h4>Absensi</h4>
    <a href="{{route('attlog.create')}}" class="btn btn-primary">TAMBAH</a>
    <table class="table table-striped">
        <!-- <thead>
            <tr>
                <th>Sn</th>
                <th>Scan Date</th>
                <th>Pin</th>
                <th>Verifymode</th>
                <th>Inoutmode</th>
                <th>Reserved</th>
                <th>Work Code</th>
                <th>Att Id</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attlog as $row)
            <tr>
                <td>{{ $row['sn']}}</td>
                <td>{{ $row['scan_date']}}</td>
                <td>{{ $row['pin']}}</td>
                <td>{{ $row['verifymode']}}</td>
                <td>{{ $row['inoutmode']}}</td>
                <td>{{ $row['reserved']}}</td>
                <td>{{ $row['work_code']}}</td>
                <td>{{ $row['att_id']}}</td>
            </tr>
            @endforeach
            </tbody> -->
        </table>
@endsection