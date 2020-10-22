@extends('templates.user.master')

@section('content')

<div class="main-wrapper">
			<div class="working-process-area">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-6">
							<div class="section-title text-center">
								<h2>Cek QRCode</h2>								
							</div>
						</div>
					</div>
					
					<div class="total-work-process d-flex justify-content-around align-items-left">		
						<form id="myForm" action="/pendaftaran/simpan" method="post" class="contact-form">
						@csrf
						<div class="row justify-content-center">
							
							<div class="col-lg-12 col-md-12">		
							
								<input id="no_tlp" type="text" placeholder="Masukan No Tlp"
								data-inputmask='"mask": "9999-9999-9999"' data-mask pattern="^\d{4}-\d{4}-\d{4}$"
								 class="common-input mt-20 @error('email') is-invalid @enderror" name="no_tlp" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="password" type="password" placeholder="Masukan kata sandi" class="common-input mt-20 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
																
			                </div>			                      
								<button name="kirim" class="primary-btn submit-btn d-inline-flex align-items-center mt-20 mr-20"><span class="mr-10">Cek</span><span class="lnr lnr-arrow-right"></span></button>
						</div>
						<div class="alert-msg"></div>		
					</div>
					</form>					
				</div>
			</div>
		</div>
	</div>
		
@stop