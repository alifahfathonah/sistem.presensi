@extends('templates.admin.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Presensi</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-md-10">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tabel Data<br>Presensi/Pertemuan</h3>
            <div class="card-tools">
              <form method="GET" action="/datapresensi/sesi">
                <div class="input-group float-right">
                    <select class="custom-select" name="sesi">
                      @foreach($sesi as $s)
                      <option value="{{ $s->id }}" {{ $s->id == $id ? 'selected' : ''}}>{{$s -> sesi}}</option>
                      @endforeach
                    </select>
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                </div>
              </form>
            </div>
          </div>
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
          <!-- /.card-body -->
        </div>
      </div>
      </div>
      
    </section>
    <!-- /.content -->
@endsection