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
          <h3 class="card-title">Edit Info Kajian</h3>
        </div>
        <div class="card-body">
            
        <!-- START CONTENT -->                 
          <div class="card">   
          <div class="container-fluid">
            <form action="/posting/update/{{ $data->id}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group {{ $errors->has('sesi')? 'has-error': '' }}">
                <label for="exampleInputEmail1">Nama Sesi</label>
                <input name="sesi" type="text" class="form-control" placeholder="Masukan nama sesi" value="{{$data->sesi}}">
                @if($errors->has('sesi'))
                  <span class="help-block">
                    <strong>{{ $errors->first('sesi') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Masukan Gambar</label><br>
                <img width="200px" src="{{ asset('storage/' .$data->gambar) }}">
                <div class="input-group {{ $errors->has('poster')? 'has-error': '' }}">
                  <input name="poster" type="file" class="form-control" id="exampleInputFile">
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
          <!-- /. END CONTENT -->
          
    </section>
    <!-- /.content -->
@endsection