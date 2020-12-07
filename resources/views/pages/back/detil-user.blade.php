@extends('templates.admin.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Presensi Peserta</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-md-7">
        <!-- table 1 -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tabel Data Presensi Peserta</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body"> 
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Jumlah hadir</th>
                </tr>
              </thead>
              <tbody>
              <tr>
                <td>{{ $data->kode_user }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $jml }}</td>
              </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
          <!-- /.card -->
      </div>
      </div>
      
    </section>
    <!-- /.content -->
@endsection