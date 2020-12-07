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
          <div class="col-md-7">
            <div class="card">        
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $a)
                    <tr>
                      <td>{{ $a->kode_user }}</td>
                      <td>{{ $a->name }}</td>
                      <td>{{ $a->created_at }}</td>
                    </tr>                    
                    @endforeach
                  </tbody>
                </table>
              </div>              
            </div>              
          </div>
          <div class="col-md-5">            
            <div class="card">
              <div class="card-header flex">
                <h3 class="card-title">Akses QRCode</h3>
              </div>
              <div class="card-body">
                <a href="/presensikajian/qrcode" target="_blank" class="btn btn-primary btn-block">Lihat</a>
              </div>
            </div>
          </div>        
        </div>
      </div>
        
    </section>
    <script>
      
    </script>
    <!-- /.content -->
@endsection