@extends('layouts.main')

@section('content')
    <h4>Absensi</h4>
    <a href="{{route('attlog.create')}}" class="btn btn-primary">TAMBAH</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>sn</th>
                <th>scan_date</th>
                <th>pin</th>
                <th>verifymode</th>
                <th>inoutmode</th>
                <th>reserved</th>
                <th>work_code</th>
                <th>att_id</th>
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
                <!-- {{-- untuk membuat btn hapus --}}
                    <form action="{{ route('pegawai.destroy', $row['id'])}}" method="post" style="display:inline"> 
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-xs btn-danger">HAPUS</button>
                    </form> -->
                    {{-- style="display:inline" untuk memindahkan btn ke samping --}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
@endsection