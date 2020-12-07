@extends('templates.admin.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="toastDefaultSucces" role="alert"></div>
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Admin</h1>
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
          <h3 class="card-title">Tabel Data Admin</h3>                
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="col-sm-12 col-md-6">
          </div>  
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <tr>                
                <th width="250">Nama</th>
                <th width="110">No. Tlp</th>
                <th>Alamat</th>
              </tr>
            </thead>
            <tbody>
            @foreach($data as $a)
            <tr>
              <td>{{ $a->name }}</td>
              <td>{{ $a->no_tlp }}</td>
              <td>{{ $a->alamat }}</td>
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