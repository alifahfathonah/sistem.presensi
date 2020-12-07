@extends('templates.user.master')

@section('content')

<div class="main-wrapper">
			<div class="working-process-area">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-6">
							<div class="section-title text-center">
								<h2>Pendaftaran Peserta</h2>								
							</div>
						</div>
					</div>
					
					<div class="total-work-process d-flex justify-content-around align-items-left">		
						<form id="myForm" action="{{ route('register') }}" method="post" class="contact-form">
						@csrf
						<div class="row justify-content-center">
							
							<div class="col-lg-12 col-md-12">		

								<input id="name" type="text" placeholder="Masukan Nama" class="common-input mt-20 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

								<input id="no tlp" type="text" placeholder="Masukan No Tlp" data-inputmask='"mask": "9999-9999-9999"' data-mask pattern="^\d{4}-\d{4}-\d{4}$"
								onfocus="this.placeholder = ''" onblur="this.placeholder = '0000-0000-0000'" class="common-input mt-20 @error('no_tlp') is-invalid @enderror" name="no_tlp" value="{{ old('no_tlp') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

								<input id="password" type="password" placeholder="Masukan Password" class="common-input mt-20 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="password-confirm" type="password" placeholder="Ulangi Password" class="common-input mt-20" name="password_confirmation" required autocomplete="new-password">
																
			                </div>			                      
								<button name="kirim" class="primary-btn submit-btn d-inline-flex align-items-center mt-20 mr-20"><span class="mr-10">Daftar</span><span class="lnr lnr-arrow-right"></span></button>
						</div>		
					</form>					
					</div>
				</div>
			</div>
		</div>
	</div>
		
@stop