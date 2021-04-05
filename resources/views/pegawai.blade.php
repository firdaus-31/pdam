@extends('layout.template')
@section('title', 'DATA PEGAWAI')
@section('content')

<a href="/pegawai/add" class="btn btn-primary btn-sm"><i class="fa fa-plus"> Tambah Data </i></a>
<a href="/pegawai/printpdf" targer="_blank" class="btn btn-danger btn-sm pull-right"><i class="fa fa-save"> Download PDF </i></a> 
<a href="/pegawai/print" targer="_blank" class="btn btn-success btn-sm pull-right mr-2"><i class="fa fa-print"> Print </i></a>

@if (session('pesan'))
        <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Success</h5>
        {{ session('pesan') }}.
        </div>
@endif
<table class="table table-bordered ">
        <thead>
        <tr>
            <th>NO</th>
            <th>NIK</th>
            <th>NAMA_PEGAWAI</th>
            <th>GOL</th>
            <th>TGL_LAHIR</th>
            <th>TGL_PENSIUN</th>
            <th>JABATAN</th>
            <th>DIVISI</th>
            <th>AREA</th>
            <th>ACTION</th>
        </tr>
        </thead>
        <tbody>
        <?php $no=1; ?>
            @foreach ($pegawai as $data)
                <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->nik }}</td>
                        <td>{{ $data->nama_pegawai }}</td>
                        <td>{{ $data->golongan }}</td>
                        <td>{{ $data->tgl_lahir }}</td>
                        <td>{{ $data->tgl_pensiun }}</td>
                        <td>{{ $data->jabatan }}</td>
                        <td>{{ $data->divisi }}</td>
                        <td>{{ $data->area }}</td>
                        <td>
                                <a href="/pegawai/detail/{{ $data->id_pegawai }}" class="btn btn-success">Detail</a>
                                <a href="/pegawai/edit/{{ $data->id_pegawai }}" class="btn btn-warning" ><i class="fa fa-edit"> Edit </i></a>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_pegawai }}">
                                <i class="fa fa-trash"> Hapus </i>
                                </button>
                        </td>
                </tr>
            @endforeach
        </tbody>
	</table>

        @foreach ($pegawai as $data)
        <div class="modal fade" id="delete{{ $data->id_pegawai }}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">{{$data->nama_pegawai}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah Anda Yakin Ingin Menghapus Data Ini??..</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
              <a href="/pegawai/delete/{{ $data->id_pegawai }}"class="btn btn-primary">Yes</a>
            </div>
          </div>
        </div>
        <!-- /.modal-dialog -->
      </div>
    <!--div align=center>
             <b>Copyright &copy; PDAM Tirta Siak PekanBaru</b>
  </div-->
@endforeach
@endsection