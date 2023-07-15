@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Data Cosmetic</h3>
        <form action="{{ url('/cosmetic') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>NAMA PRODUK</label>
                <input type="text" class="form-control" name="produk_name">
            </div>
            <div class="mb-3">
                <label>JENIS PRODUK</label>
                <input type="text" class="form-control" name="produk_jenis">
            </div>
            <div class="mb-3">
                <label>HARGA</label>
                <input type="text" class="form-control" name="produk_harga">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN" class="btn btn-danger">
            </div>
        </form>
    </div>
@endsection