@extends('layout.template')
@section('title', 'Detail Guru')
@section('content')

<table class="table table-bordered">
    <tr>
        <th width="100px">NIK</th>
        <th width="30px">:</th>
        <th>{{ $pegawai->nik }}</th>
    </tr>
    <tr>
        <th width="100px">NAMA</th>
        <th width="30px">:</th>
        <th>{{ $pegawai->nama_pegawai }}</th>
    </tr>
    <tr>
        <th width="100px">GOLONGAN</th>
        <th width="30px">:</th>
        <th>{{ $pegawai->golongan }}</th>
    </tr>
    <tr>
        <th width="100px">TGL_LAHIR</th>
        <th width="30px">:</th>
        <th>{{ $pegawai->tgl_lahir }}</th>
    </tr>
    <tr>
        <th width="100px">TGL_PENSIUN</th>
        <th width="30px">:</th>
        <th>{{ $pegawai->tgl_pensiun }}</th>
    </tr>
    <tr>
        <th width="100px">JABATAN</th>
        <th width="30px">:</th>
        <th>{{ $pegawai->jabatan }}</th>
    </tr>
    <tr>
        <th width="100px">DIVISI</th>
        <th width="30px">:</th>
        <th>{{ $pegawai->divisi }}</th>
    </tr>
    <tr>
        <th width="100px">AREA</th>
        <th width="30px">:</th>
        <th>{{ $pegawai->area }}</th>
    </tr>
</table>
    <tr><th><a href="/pegawai" class= "btn btn-success tbn-sm">Kembali</a></th></tr>
    



@endsection