@extends('layouts.main')

@section('content')
    <h4>Absensi</h4>
    <a href="{{route('attlog.create')}}" class="btn btn-primary">TAMBAH</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tanggal Dan Jam</th>
                <th>Pin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attlog as $row)
            <tr>
                <td>{{ $row['scan_date']}}</td>
                <td>{{ $row['pin']}}</td>
                <!-- {{-- untuk membuat btn hapus --}}
                    <form action="{{ route('attlog.destroy', $row['id'])}}" method="post" style="display:inline"> 
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