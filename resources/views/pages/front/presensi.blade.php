@extends('templates.user.master')

@section('content')

<div class="main-wrapper">
      <div class="working-process-area">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="section-title text-center">
                <h2>Presensi QRCode</h2>                
              </div>
            </div>
          </div>
          <form id="myForm" method="POST" action="/presensi/submit" class="contact-form">  
          @csrf        
            <div class="total-work-process d-flex justify-content-around align-items-left">   
              <div class="row justify-content-center">              
                <div class="col-lg-12 col-md-12 justify-content-center">    
                  <video id="preview" width="348" class="align-items-center"></video><br>
                  <input id="demo" type="text" name="sesi_id" style="width: 350px" required> <br><br>                  
                  <h4>User Aktif : </h4>
                  <input type="radio" name="user_id" value="{{auth()->user()->id}}" checked>
                  <label style="size: 14px; font-weight: bold;">{{auth()->user()->name}}</label>  <br>                      
                  <button name="submit" class="primary-btn align-items-center mt-20 mr-20"><span class="mr-10">Kirim</span><span class="lnr lnr-arrow-right"></span></button>      
                </div> 
              </div>            
            </div>  
          </form>
        </div>
      </div>
    </div>
  </div>

<!-- Scanner QRcode -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<script type="text/javascript">
   let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
    scanner.addListener('scan', function (content) {      
        $("#demo").val(content);
    });
    Instascan.Camera.getCameras().then(function (cameras) {
      if (cameras.length > 0) {
        scanner.start(cameras[0]);
      } else {
        console.error('No cameras found.');
      }
    }).catch(function (e) {
      console.error(e);
    });
</script>
@stop   