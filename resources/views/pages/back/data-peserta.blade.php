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
    </div>
  </div><!-- /.container-fluid -->
</section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
      <!-- Default box -->
      <div class="card col-md-10">
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
                <th width="10">No.</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>No. Tlp</th>
                <th width="70">Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach($data as $a)
            <tr>
              <td>{{ $loop->iteration}}</td>
              <td>{{ $a->kode_user }}</td>
              <td><a href="/datapeserta/show/{{$a->id}}" style="color: black">{{ $a->name }}</a></td>
              <td>{{ $a->no_tlp }}</td>
              <td><button class="btn btn-danger" data-toggle="modal" onclick="handleModal( {{$a->id}} )"><i class="fas fa-trash"></i></button></td>              
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
    <div class="modal fade" id="hapus">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tunggu!</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Ingin menghapus data?&hellip;</p>
          </div>
          <div class="modal-footer">
            <button a type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            <a id="deleteLink" type="button" class="btn btn-primary">Iya</a>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <script>
      function handleModal(id){
        var hapus = document.getElementById('deleteLink')
        hapus.href = "/datapeserta/delete/"+id
        $('#hapus').modal('show')
      }
    </script>
@endsection