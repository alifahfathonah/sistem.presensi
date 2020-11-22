@extends('templates.admin.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid row">
      <div class="col">
      <!-- Small boxes (Stat box) -->        
        <div class="row">
          <div class="col-lg-11">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $sum }} orang</h3>

                <p>akan hadir</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="/datakonfirmasi" class="small-box-footer">Data Konfirmasi <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>          
          <!-- ./col -->
        </div> 
        <div class="row">
          <div class="col-lg-11">            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Data Konfirmasi Peserta</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body"> 
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($data2 as $konfir)
                  <tr>
                    <td>{{ $konfir->kode_user}}</td>
                    <td>{{ $konfir->name}}</td>
                    <td>{{ $konfir->jml}}</td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>       
      </div>

      <!-- Default box -->
      @foreach($data as $postingan)
      <div class="card col-lg-7">
        <div class="card-header flex">
          <h3 class="card-title">{{ $postingan->sesi }}</h3>
          <span class="badge badge-warning float-right">Terbaru</span></h5>
        </div>
        <!-- /.card-header -->
        <div class="card-body mt-10">
          <img width="555px" src="{{ asset('storage/' .$postingan->gambar) }}" alt="Product Image">
        </div>
        <!-- /.card-body -->
        <div class="card-footer text-center">
          <a href="/posting" class="uppercase">Selebihnya</a>
        </div>
        <!-- /.card-footer -->
      </div>
      @endforeach
      <!-- /.card -->
    </div>

    </section>
    <!-- /.content -->
@endsection