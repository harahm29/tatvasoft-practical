@extends('layouts.master')
@section('title','Login')
@push('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css">
<style>
    .login-content.pt-lg-0.pt-12 {
    width: 50%;
    margin: auto;
    display: block;
    float: none;
    }
</style>
@endpush

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Heading-->
                <div class="d-flex flex-column">
                    <!--begin::Title-->
                    <h2 class="text-white font-weight-bold my-2 mr-5">Login</h2>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <div class="d-flex align-items-center font-weight-bold my-2">
                        <!--begin::Item-->
                        <a href="#" class="opacity-75 hover-opacity-100">
                            <i class="flaticon2-shelter text-white icon-1x"></i>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="{{url('/')}}" class="text-white text-hover-white opacity-75 hover-opacity-100">Blogs</a>

                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="#" class="text-white text-hover-white opacity-75 hover-opacity-100">login</a>

                        <!--end::Item-->
                    </div>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Info-->

        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Dashboard-->


            <!--begin::Row-->
            <div class="d-flex flex-column flex-root">
                <!--begin::Login-->
                <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
                    <!--begin::Content-->
                    <div class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
                        <!--begin::Wrapper-->
                        <div class="login-content pt-lg-0 pt-12">
                            <!--begin::Logo-->

                            <!--end::Logo-->
                            <!--begin::Signin-->
                            <div class="login-form m-8">
                                <!--begin::Form-->
                                <form method="POST" id="loginform" action="{{ route('login') }}">
                                 @csrf
                                    <!--begin::Title-->
                                    <div class="pb-5 pb-lg-15">
                                        <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Log In</h3>
                                        <div class="text-muted font-weight-bold font-size-h4">New Here?
                                        <a href="{{url('/register')}}" class="text-primary font-weight-bolder">Create Account</a></div>
                                    </div>
                                    <!--begin::Title-->
                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <label class="font-size-h6 font-weight-bolder text-dark">Your Email</label>
                                        <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="text" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                     @enderror
                                    </div>
                                    <!--end::Form group-->
                                    <!--begin::Form group-->
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between mt-n5">
                                            <label class="font-size-h6 font-weight-bolder text-dark pt-5">Your Password</label>
                                            {{-- <a href="custom/pages/login/login-4/forgot.html" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">Forgot Password ?</a> --}}
                                        </div>
                                        <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $password }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!--end::Form group-->
                                    <!--begin::Action-->
                                    <div class="pb-lg-0 pb-5">
                                        <button type="submit" id="kt_login_singin_form_submit_button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>

                                    </div>
                                    <!--end::Action-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Signin-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--begin::Content-->
                    <!--begin::Aside-->

                </div>
                <!--end::Login-->
            </div>
            <!--end::Row-->

            <!--end::Dashboard-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection


@push('js')
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		// $(".js-example-basic-single").select2();
		$('#loginform').bootstrapValidator();
	});
</script>
@endpush
