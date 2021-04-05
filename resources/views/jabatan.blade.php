@extends('layout.template')
@section('title', 'JABATAN')
@section('content')
<a href="/jabatan/print" targer="_blank" class="btn btn-danger btn-sm pull-right">Print</a>
<table class="table table-bordered">
        <thead>
        <tr>
            <th>NO</th>
            <th>KODE JABATAN</th>
            <th>NAMA JABATAN</th>
            <th>ACTION</th>
        </tr>
        </thead>
        <tbody>
        <?php $no=1; ?>
            @foreach ($jabatan as $data)
                <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->kode_jabatan }}</td>
                        <td>{{ $data->nama_jabatan }}</td>
                </tr>
            @endforeach
        </tbody>
	</table>
    <div align=center>
             <b>Copyright &copy; <?php echo date("Y"); ?> PDAM Tirta Siak PekanBaru</b>
  </div>

@endsection