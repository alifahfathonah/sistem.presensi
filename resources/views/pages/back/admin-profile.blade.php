@extends('templates.admin.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Profile</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <!-- Profile  -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <h3 class="profile-username text-center">{{$data->name}}</h3>
            <p class="text-muted text-center">{{$data->alamat}}</p>
            <p class="text-muted text-center">{{$data->no_tlp}}</p>
          </div>
          <!-- /.card-body -->
        </div>
        <button data-toggle="modal" onclick="hpsakunModal( {{auth()->user()->id}} )" class="btn btn-primary btn-block"><b>Hapus Akun?</b></button>
        <!-- /.card -->    
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Edit</a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <form class="form-horizontal" method="POST" action="/administrator/profile/update/{{auth()->user()->id}}">
                  	@csrf
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" id="inputName" placeholder="Name" value="{{$data->name}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">No Tlp</label>
                    <div class="col-sm-10">
                      <input type="text" name="no_tlp" class="form-control" id="inputEmail" placeholder="No Tlp" value="{{$data->no_tlp}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <textarea name="alamat" class="form-control" id="inputExperience" placeholder="Alamat">{{$data->alamat}}</textarea>
                    </div>
                  </div>                 
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Update</button>
                    </div>
                  </div>
                </form>
              </div>              
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
<div class="modal fade" id="hapus">
  <div class="modal-dialog modal-default">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tunggu, {{auth()->user()->name}} !</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Ingin menghapus akun Anda sekarang?&hellip; <br>Mungkin ini akan jadi perpisahan.</p>
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
  function hpsakunModal(id){
    var hapus = document.getElementById('deleteLink')
    hapus.href = "/administrator/profile/destroy/"+id
    $('#hapus').modal('show')
  }
</script>
@endsection