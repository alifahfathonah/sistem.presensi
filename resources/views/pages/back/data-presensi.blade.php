@extends('templates.admin.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Presensi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/administrator">Home</a></li>              
            </ol>
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
            <table id="example1" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Jumlah Kehadiran</th>
                </tr>
              </thead>
              <tbody>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 4.0
                </td>
                <td>Win 95+</td>
              </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
          <!-- /.card -->
      </div>
        
      <div class="col-md-5">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tabel Data<br>Presensi/Pertemuan</h3>
            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">                    
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                </tr>                    
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      </div>
      
    </section>
    <!-- /.content -->
@endsection