@extends('templates.admin.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="toastDefaultSucces" role="alert"></div>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Peserta</h1>
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
    <div class="container-fluid">

    </div>
      <!-- Default box -->
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Data Peserta Terdaftar</h3>
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
                      <th>Kode</th>
                      <th>Nama</th>
                      <th>No. Tlp</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data_peserta as $peserta)
                    <tr>
                      <td>{{$peserta->kode_user}}</td>
                      <td>{{$peserta->name}}</td>
                      <td>{{$peserta->no_tlp}}</td>
                      <td><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-primary"><i class="fas fa-trash"></i></button></td>
                    </tr>  
                    @endforeach                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>          
    </section>
    <!-- /.content -->
@endsection