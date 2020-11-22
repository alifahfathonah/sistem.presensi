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
					
					<div class="total-work-process d-flex justify-content-around align-items-left">		
						<form id="myForm" action="/pendaftaran/simpan" method="post" class="contact-form">
						@csrf
						<div class="row justify-content-center">							
							<div class="col-lg-12 col-md-12 justify-content-center">		
								<video id="preview" width="300" class="align-items-center"></video>                    					
			                </div>			                      
						</div>						
					</div>
					</form>					
				</div>
			</div>
		</div>
	</div>

<!-- Scanner QRcode -->
<script src="scanner/vendor/modernizr/modernizr.js"></script>
<script src="scanner/vendor/vue/vue.min.js"></script>
<script src="scanner/js/app.js"></script>
<script src="scanner/vendor/instascan/instascan.min.js"></script>
<script src="scanner/js/scanner.js"></script>
@stop		