
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan Data Pegawai</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('template')}}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template')}}/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('template')}}/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template')}}/dist/css/AdminLTE.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> Laporan Data Pegawai
          <small class="pull-right"> Date: {{ date('d-M-y') }} </small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->

    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
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
          </tr>
          </thead>
          <tbody>
            <?php $no=1 ?>
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
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
