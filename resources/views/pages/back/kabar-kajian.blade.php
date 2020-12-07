@extends('templates.admin.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kabar Kajian</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Info Kajian</h3>
        </div>
        <div class="card-body">
            
        <!-- START CONTENT -->                 
          <div class="card">   
          <div class="container-fluid">
            <form action="/posting/store" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group {{ $errors->has('sesi')? 'has-error': '' }}">
                <label for="exampleInputEmail1">Nama Sesi</label>
                <input name="sesi" type="text" class="form-control" placeholder="Masukan nama sesi" required>
                @if($errors->has('sesi'))
                  <span class="help-block">
                    <strong>{{ $errors->first('sesi') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Masukan Gambar</label>
                <div class="input-group {{ $errors->has('poster')? 'has-error': '' }}">
                  <input name="poster" type="file" class="form-control" id="exampleInputFile" required>
                  @if($errors->has('poster'))
                    <span class="help-block">
                      <strong>{{ $errors->first('poster') }}</strong>
                    </span>
                  @endif                                  
                </div>                              
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
            
          </div> 
          </div>          
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="example2" class="table table-bordered">
                  <div class="card-body">
                  <thead>
                    <tr>
                      <th style="width: 300px">Sesi Konfirmasi</th>
                      <th>Gambar</th>                    
                      <th style="width: 150px">Label</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $postingan)
                    <tr>
                      <td>{{ $postingan -> sesi }}</td>
                      <td><img width="200px" src="{{ asset('storage/' .$postingan->gambar) }}"></td>
                      <td>
                        <a href="/posting/edit/{{ $postingan->id }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <button data-toggle="modal" onclick="handleModal({{$postingan->id}} )" class="btn btn-danger"><i class="fas fa-trash"></i></button>  
                      </td>
                    </tr>  
                    @endforeach                                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
          <!-- /. END CONTENT -->
          
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
        hapus.href = "/posting/delete/"+id
        $('#hapus').modal('show')
      }
    </script>
@endsection