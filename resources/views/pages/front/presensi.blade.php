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
          <div id="myForm" class="contact-form">          
            <div class="total-work-process d-flex justify-content-around align-items-left">   
              <div class="row justify-content-center">              
                <div class="col-lg-12 col-md-12 justify-content-center">    
                  <video id="preview" width="348" class="align-items-center"></video> 
                </div>                            
              </div>            
            </div>        
          </div>
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
        window.location.assign(content);
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