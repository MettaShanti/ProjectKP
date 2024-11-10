@extends('layouts.main')

@section('content')
    <h4>Divisi</h4>
    <a href="{{route('pembagian3.create')}}" class="btn btn-primary">TAMBAH</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id Divisi</th>
                <th>Nama Divisi</th>
                <th>Keterangan Divisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembagian3 as $row)
            <tr>
                <td>{{ $row['pembagian3_id']}}</td>
                <td>{{ $row['pembagian3_nama']}}</td>
                <td>{{ $row['pembagian3_ket']}}</td>
                {{-- untuk membuat btn hapus --}}
                    <form action="{{ route('pembagian3.destroy', $row['id'])}}" method="post" style="display:inline"> 
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-xs btn-danger">HAPUS</button>
                    </form>
                    {{-- style="display:inline" untuk memindahkan btn ke samping --}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
@endsection