@extends('templates.user.master')

@section('content')

<div class="main-wrapper">
            <div class="working-process-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title text-center">
                                <h2>Login</h2>                             
                            </div>
                        </div>
                    </div>
                    
                    <div class="total-work-process d-flex justify-content-around align-items-left">     
                        <form id="myForm" action="{{ route('login') }}" method="post" class="contact-form">
                        @csrf
                        <div class="row justify-content-center">
                            
                            <div class="col-lg-12 col-md-12">       
                            
                                <input id="phone" type="text" placeholder="Masukan No Tlp"
                                data-inputmask='"mask": "9999-9999-9999"' data-mask pattern="^\d{4}-\d{4}-\d{4}$"
                                 class="common-input mt-20 @error('phone') is-invalid @enderror" name="no_tlp" value="{{ old('phone') }}" required autocomplete="email" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="form-group">
                                    <div class="input-group" id="show_hide_password">
                                      <input id="password" type="password" placeholder="Masukan kata sandi" class="common-input mt-20 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    </div>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group-prepend" id="show_hide_password">
                                    <a href="">Show password<i class="fa fa-eye-slash ml-10" aria-hidden="true"></i></a>
                                </div>
                                                                
                            </div>                                
                                <button name="kirim" class="primary-btn submit-btn d-inline-flex align-items-center mt-20 mr-20"><span class="mr-10">masuk</span><span class="lnr lnr-arrow-right"></span></button>
                        </div>
                        <div class="alert-msg"></div>       
                    </div>
                    </form>                 
                </div>
            </div>
        </div>
    </div>
        
@endsection
