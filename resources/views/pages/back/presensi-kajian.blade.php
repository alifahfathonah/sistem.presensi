@extends('templates.admin.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Presensi Kajian</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">        
        <div class="row">
          <div class="col-md-5">
            <div class="card">        
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
          <div class="col-md-7">
            <!-- table 1 -->
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body"> 
                <div class="card-body mt-10">
                  <?php 
                    include "phpqrcode/qrlib.php";
                    $qrcode = "/presensi/store";
                    QRcode::png($qrcode);
                  ?>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card-body -->
            </div>
              <!-- /.card -->
          </div>        
        </div>
      </div>
      
    </section>
    <!-- /.content -->
@endsection