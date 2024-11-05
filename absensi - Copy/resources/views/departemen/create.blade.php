@extends('layouts.main')

@section('content')
<h4>Departement</h4>
<form action="{{ route('pembagian2.update', $pembagian2['id']) }}" method="post">
    @csrf

    Id Departement
    @error('pembagian2_id')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="numer" name="pembagian2_id" id="" class="form-control mb-2">
    
    Nama Departement 
    @error('pembagian2_nama')
        <span class="text-danger">({{ $message }})</span>
    @enderror
    <input type="text" name="pembagian2_nama" id="" class="form-control mb-2">
    
    Keterangan Departement
    @error('pembagian2_ket')
        <span class="text-danger">({{ $message }})</span>
    @enderror 
    <input type="text" name="pembagian2_ket" id="" class="form-control mb-2">

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection
