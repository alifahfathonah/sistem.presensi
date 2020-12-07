@extends('templates.user.master')

@section('content')
<div class="main-wrapper">
	<div class="working-process-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title text-center">
						<h2>Konfirmasi Kehadiran</h2>								
					</div>
				</div>
			</div>
			
			<div class="total-work-process d-flex justify-content-around align-items-left">		
				<form id="myForm" action="/konfirmasi" method="post" class="contact-form">
				@csrf
				<div class="row justify-content-center">
					@foreach($data as $post)
					<div class="col-lg-7 col-md-10">
						<img src="{{ asset('storage/'.$post->gambar) }}" class="col-lg-12">
					</div>
					@endforeach
					
					<div class="col-lg-5 col-md-10">										
						<input type="text" name="no_tlp" placeholder="Masukan No Tlp"
						data-inputmask='"mask": "9999-9999-9999"' data-mask pattern="^\d{4}-\d{4}-\d{4}$"
						onfocus="this.placeholder = ''" onblur="this.placeholder = '0000-0000-0000'" class="common-input mt-20" required>
						<div class="input-group" id="show_hide_password">
							<input id="show_hide_password" type="password" name="password" placeholder="Masukan kata sandi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan kata sandi'" class="common-input mt-20" required>
						</div>								
						<div class="input-group-prepend" id="show_hide_password">
                            <a href="">Show password<i class="fa fa-eye-slash ml-10" aria-hidden="true"></i></a>
                        </div>

	                      <!-- select -->
	                      <div class="common mt-20">
	                        <label><font size="4">Bersama pasangan (Suami/Istri)</font></label>
	                        <select name="pasangan" class="form-control col-md-3">
	                          <option value=0 selected="selected">Tidak</option>
	                          <option value=1>Ya</option>
	                        </select>
	                      </div>

	                      <div class="common mt-20">
	                        <label><font size="4">Bersama anak :</font></label>
	                        <select name="anak" class="form-control col-md-3">
	                          <option value=0 selected="selected">Tidak</option>
	                          <option value=1>1 anak</option>
	                          <option value=2>2 anak</option>
	                          <option value=3>3 anak</option>
	                        </select>
	                      </div>			                      
						<button name="kirim" class="primary-btn submit-btn d-inline-flex align-items-center mt-20 mr-20"><span class="mr-10">Kirim</span><span class="lnr lnr-arrow-right"></span></button> atau  <a href="/pendaftaran" class="primary-btn submit-btn d-inline-flex align-items-center ml-20"><span class="mr-10">Daftar</span><span class="lnr lnr-arrow-right"></span></a>
					</div>
				</div>
				</form>					
			</div>
		</div>
	</div>
</div>
@stop