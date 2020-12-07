@extends('templates.admin.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Presensi Kajian</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5">
        <!-- table 1 -->
        <div class="card">
          <div class="card-header flex">
            <h3 class="card-title">QRCode Presensi</h3>                
          </div>
          <!-- /.card-header -->
          <div class="card-body"> 
            <div class="card-body mt-10">
              {!! $qr; !!}
            </div>
            <!-- /.card-body -->
          </div>
          <div class="card-footer text-center">
              <p class="small text-muted">Screenshot QRCode secara manual untuk kebutuhan publikasi. Terimakasih ^^</p>
          </div>
          <!-- /.card-body -->
        </div>
          <!-- /.card -->
      </div>
      <div class="col-md-5">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h5 class="card-title m-0">Himbauan</h5>
          </div>
          <div class="card-body">
            <p class="card-text" style="font-weight: bold;">
              Tolong untuk tidak menutup halaman ini selama presensi berlangsung.
            </p>
          </div>
        </div><!-- /.card -->
        <div class="card">
          <div class="card-header">
            <h5 class="card-title m-0">Isi QRCode</h5>
          </div>
          <div class="card-body">
            <p class="card-text">
              {{ $encrypted }}
            </p>
          </div>
          <div class="card-footer text-center">
              <p class="small text-muted" style="text-align: left;">Tolong untuk membuat qrcode manual dengan code di atas jika qrcode disamping mengalami kendala</p>
          </div>
        </div><!-- /.card -->
      </div>
    </div>
  </div>
</div>
@endsection