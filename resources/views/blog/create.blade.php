@extends('layouts.master')
@if (isset($blog))
    @section('title', 'Edit Blog')
    @else
    @section('title', 'Create Blog')
    @endif
    @push('css')
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css">
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

                            @if (isset($blog))

                                <h2 class="text-white font-weight-bold my-2 mr-5">Edit Blog</h2>
                            @else

                                <h2 class="text-white font-weight-bold my-2 mr-5">Create Blog</h2>
                            @endif
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
                                <a href="{{ url('/') }}"
                                    class="text-white text-hover-white opacity-75 hover-opacity-100">Blogs</a>

                                <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>

                                @if (isset($blog))

                                    <a href="#" class="text-white text-hover-white opacity-75 hover-opacity-100">Edit Blog</a>
                                @else

                                    <a href="#" class="text-white text-hover-white opacity-75 hover-opacity-100">Create Blog</a>
                                @endif
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
                            <div
                                class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
                                <!--begin::Wrapper-->
                                <div class="login-content pt-lg-0 pt-12">
                                    <!--begin::Logo-->

                                    <!--end::Logo-->
                                    <!--begin::Signin-->
                                    <div class="login-form m-8">
                                        <!--begin::Form-->
                                        <form method="POST" id="loginform" action="{{ url('blog/store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @if (isset($blog))
                                            <input type="hidden" name="id" value="{{$blog->id}}"/>
                                            @endif
                                            <!--begin::Title-->
                                            <div class="pb-5 pb-lg-15">

                                                @if (isset($blog))

                                                    <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Edit
                                                        Blog</h3>
                                                @else

                                                    <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Create
                                                        Blog</h3>
                                                @endif

                                            </div>
                                            <!--begin::Title-->
                                            <!--begin::Form group-->
                                            <div class="form-group">
                                                <label class="font-size-h6 font-weight-bolder text-dark">Title</label>
                                                <input id="title" type="text"
                                                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 "
                                                    name="title" @if(isset($blog)) value="{{$blog->title}}" @endif required autocomplete="title"
                                                    data-bv-notempty-message="The Title is required "   autofocus>

                                            </div>
                                            <div class="form-group">
                                                <label class="font-size-h6 font-weight-bolder text-dark">Description</label>

                                                <textarea id="Description" rows="3"
                                                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 "
                                                    name="des" value="{{ old('des') }}" required autocomplete="des"
                                                    data-bv-notempty="true"
                                                    data-bv-notempty-message="The Description is required " autofocus>@if(isset($blog)){{$blog->des}}"@endif</textarea>

                                            </div>

                                            <div class="form-group">
                                                <label class="font-size-h6 font-weight-bolder text-dark">Start-End Date</label>
                                                <input type="text" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" name="daterange" @if(isset($blog)) value="{{$blog->start_date}} - {{$blog->end_date}}" @endif />
                                            </div>

                                            <div class="form-group">
                                                <div class="d-flex justify-content-between mt-n5">
                                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5"> Status</label>
                                                    {{-- <a href="custom/pages/login/login-4/forgot.html" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">Forgot Password ?</a> --}}
                                                </div>
                                                <select
                                                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0"
                                                    required data-bv-notempty-message="The Status is required "
                                                    name="is_active">
                                                    <option value="">Select Status</option>
                                                    <option value="false" @if(isset($blog)) @if($blog->is_active=='false') {{'selected'}} @endif @endif>Active</option>
                                                    <option value="true" @if(isset($blog)) @if($blog->is_active=='true') {{'selected'}} @endif @endif>Deactive</option>
                                                </select>

                                            </div>

                                            <div class="form-group">
                                                <div class="d-flex justify-content-between mt-n5">
                                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Image
                                                    </label>
                                                    {{-- <a href="custom/pages/login/login-4/forgot.html" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">Forgot Password ?</a> --}}
                                                </div>

                                                    @if(isset($blog))
                                                    <input id="file" type="file"
                                                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0"
                                                    name="img"
                                                    data-bv-file-extension="jpeg,png" data-bv-file-type="image/jpeg,image/png"
                                                    data-bv-file-maxsize="2048 * 1024"
                                                    data-bv-file-message="The selected file is not valid!!" />
                                                    <input type="hidden" name="oldimg" value="{{$blog->img}}"/>
                                                    <img src="{{url('image/blog/')}}/{{$blog->img}}" style="height: 100px;width: 100px; "/>
                                                    @else
                                                    <input id="file" type="file"
                                                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0"
                                                    name="img"
                                                     required
                                                    data-bv-notempty-message="The Date Of Role is required "
                                                    data-bv-file-extension="jpeg,png" data-bv-file-type="image/jpeg,image/png"
                                                    data-bv-file-maxsize="2048 * 1024"
                                                    data-bv-file-message="The selected file is not valid!!" />
                                                    @endif

                                            </div>
                                            <!--end::Form group-->
                                            <!--begin::Action-->
                                            <div class="pb-lg-0 pb-5">
                                                <button type="submit" id="kt_login_singin_form_submit_button"
                                                    class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">
                                                    @if (isset($blog))
                                                    Update
                                                    @else
                                                    Create
                                                    @endif
                                                </button>

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
        <script type="text/javascript"
                src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
                <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
                <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <script type="text/javascript">
            $(document).ready(function() {
                // $(".js-example-basic-single").select2();
                $('#loginform').bootstrapValidator();
            });
            $(function() {
            $('input[name="daterange"]').daterangepicker({
                opens: 'left'
            }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            });
            });
        </script>
    @endpush
