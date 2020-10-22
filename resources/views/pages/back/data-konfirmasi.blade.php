@extends('templates.admin.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Konfirmasi</h1>
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
                <h3 class="card-title">Tabel Data Konfirmasi Kehadiran</h3>
                <div class="card-tools">
                    <div class="form-group float-right">
                        <select class="custom-select">
                          @foreach($data as $sesi)
                          <option>{{$sesi -> sesi}}</option>
                          @endforeach
                        </select>
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
                      <th>Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                    </tr>                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->              
            </div>
    </section>
    <!-- /.content -->
@endsection