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
                        <form id="myForm" action="/pendaftaran" method="POST" class="contact-form">
                        @csrf
                        <div class="row justify-content-center">
                            
                            <div class="col-lg-12 col-md-12">       

                                <input id="name" type="text" placeholder="Masukan Nama" class="common-input mt-20 {{$errors->has('name')? 'is-invalid' : ''}}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>                                
                                @error('name')
                                    <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                @enderror

                                <input id="phone" type="text" placeholder="Masukan No Tlp" data-inputmask='"mask": "9999-9999-9999"' data-mask pattern="^\d{4}-\d{4}-\d{4}$"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = '0000-0000-0000'" class="common-input mt-20 {{$errors->has('no_tlp')? 'is-invalid' : ''}}" name="no_tlp" value="{{ old('no_tlp') }}" required>
                                @error('no_tlp')
                                    <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <div class="input-group" id="show_hide_password">
                                        <input id="password" type="password" placeholder="Masukan Password" class="common-input mt-20 {{$errors->has('password')? 'is-invalid' : ''}}" name="password" required autocomplete="new-password">
                                    </div>
                                
                                @error('password')
                                    <div class="invalid-feedback" role="alert">{{ $message }}</div>
                                @enderror

                                    <div class="input-group" id="show_hide_password">
                                        <input id="password-confirm" type="password" placeholder="Ulangi Password" class="common-input mt-20" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                    
                                </div>
                                <div class="input-group-prepend" id="show_hide_password">
                                    <a href="">Show password<i class="fa fa-eye-slash ml-10" aria-hidden="true"></i></a>
                                </div>
                                
                            </div>                                
                                <button name="kirim" class="primary-btn submit-btn d-inline-flex align-items-center mt-20 mr-20"><span class="mr-10">Daftar</span><span class="lnr lnr-arrow-right"></span></button>
                        </div>
                        <div class="alert-msg"></div>       
                    </div>
                    </form>                 
                </div>
            </div>
        </div>
    </div>
        
@endsection