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
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Data Peserta Terdaftar</h3>                
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="col-sm-12 col-md-6">
          </div>  
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>No. Tlp</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach($data as $a)
            <tr>
              <td>{{ $a->kode_user }}</td>
              <td>{{ $a->name }}</td>
              <td>{{ $a->no_tlp }}</td>
              <td><button type="button" class="btn btn-primary"><i class="fas fa-trash"></i></button></td>
            </tr>                
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>          
    </div>
    </section>
    <!-- /.content -->
@endsection