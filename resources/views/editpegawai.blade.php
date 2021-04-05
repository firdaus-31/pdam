@extends('layout.template')
@section('title', 'Edit Data')
@section('content')

<form action="/pegawai/update/{{ $pegawai->id_pegawai }}" method="POST" enctype="multipart/form-data">
    @csrf

<div class="content">
<div class="col-6">
    <div class="form-grup">
            <label>NIK</label>
            <input name="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ $pegawai->nik}}" readonly>
        <div class="text-denger">
            @error('nik')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-grup">
            <label>NAMA</label>
            <input name="nama_pegawai" class="form-control @error('nama_pegawai') is-invalid @enderror" value="{{ $pegawai->nama_pegawai }}">
        <div class="text-denger">
            @error('nama_pegawai')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-grup">
            <label>GOLONGAN</label>
            <input name="golongan" class="form-control @error('golongan') is-invalid @enderror" value="{{ $pegawai->golongan }}">
        <div class="text-denger">
            @error('golongan')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-grup">
            <label>TANGGAL LAHIR</label>
            <input name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" value="{{ $pegawai->tgl_lahir }}">
        <div class="text-denger">
            @error('tgl_lahir')
            {{ $message }}
            @enderror
        </div>
    </div>    
    <div class="form-grup">
            <label>TANGGAL PENSIUN</label>
            <input name="tgl_pensiun" class="form-control @error('tgl_pensiun') is-invalid @enderror" value="{{ $pegawai->tgl_pensiun }}">
        <div class="text-denger">
            @error('tgl_pensiun')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-grup">
            <label>JABATAN</label>
            <input name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" value="{{ $pegawai->jabatan }}">
        <div class="text-denger">
            @error('jabatan')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-grup">
            <label>DIVISI</label>
            <input name="divisi" class="form-control @error('divisi') is-invalid @enderror" value="{{ $pegawai->divisi }}">
        <div class="text-denger">
            @error('divisi')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="form-grup">
            <label>AREA</label>
            <input name="area" class="form-control @error('area') is-invalid @enderror"value="{{ $pegawai->area }}">
        <div class="text-denger">
            @error('area')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="col-6">
        <div class="form-grup">
            <button class="btn btn-primary btn-sm"><i class="fa fa-save"> Simpan </i></button>
            <a href="/pegawai" class= "btn btn-success btn-sm"><i class="fa fa-undo"> Kembali </i></a>
        </div>
    
    </div>
</div>
</form>

@endsection