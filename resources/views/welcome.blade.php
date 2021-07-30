@extends('layouts.master')
@section('title','Blogs')
@push('css')
<style></style>
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
                    <h2 class="text-white font-weight-bold my-2 mr-5">Blogs</h2>
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
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Latest
                            Updated</a>
                        <!--end::Item-->
                    </div>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href="#" class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">Create Blog</a>
                <!--end::Button-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Dashboard-->


            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 10-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <div class="flex-grow-1 pb-5">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center pr-2 mb-6">
                                    <span class="text-muted font-weight-bold font-size-lg flex-grow-1">7
                                        Hours Ago</span>
                                    <div class="symbol symbol-50">
                                        <span class="symbol-label bg-light-light">
                                            <img src="assets/media/svg/misc/006-plurk.svg"
                                                class="h-50 align-self-center" alt="" />
                                        </span>
                                    </div>
                                </div>
                                <!--end::Info-->
                                <!--begin::Link-->
                                <a href="#"
                                    class="text-dark font-weight-bolder text-hover-primary font-size-h4">PitStop
                                    - Multiple Email
                                    <br />Generator</a>
                                <!--end::Link-->
                                <!--begin::Desc-->
                                <p class="text-dark-50 font-weight-normal font-size-lg mt-6">Pitstop
                                    creates quick email campaigns.
                                    <br />We help to strengthen your brand
                                    <br />for your every purpose.
                                </p>
                                <!--end::Desc-->
                            </div>
                            <!--begin::Team-->
                            <div class="d-flex align-items-center">
                                <!--begin::Pic-->
                                <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                    <div class="symbol-label">
                                        <img src="assets/media/svg/avatars/001-boy.svg"
                                            class="h-75 align-self-end" alt="" />
                                    </div>
                                </a>
                                <!--end::Pic-->
                                <!--begin::Pic-->
                                <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                    <div class="symbol-label">
                                        <img src="assets/media/svg/avatars/028-girl-16.svg"
                                            class="h-75 align-self-end" alt="" />
                                    </div>
                                </a>
                                <!--end::Pic-->
                                <!--begin::Pic-->
                                <a href="#" class="symbol symbol-45 symbol-light">
                                    <div class="symbol-label">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </div>
                                </a>
                                <!--end::Pic-->
                            </div>
                            <!--end::Team-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 10-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 11-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <div class="flex-grow-1 pb-5">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center pr-2 mb-6">
                                    <span class="text-muted font-weight-bold font-size-lg flex-grow-1">2
                                        Days Ago</span>
                                    <div class="symbol symbol-50">
                                        <span class="symbol-label bg-light-light">
                                            <img src="assets/media/svg/misc/015-telegram.svg"
                                                class="h-50 align-self-center" alt="" />
                                        </span>
                                    </div>
                                </div>
                                <!--end::Info-->
                                <a href="#"
                                    class="text-dark font-weight-bolder text-hover-primary font-size-h4">Craft
                                    - ReactJS Admin
                                    <br />Theme</a>
                                <!--begin::Desc-->
                                <p class="text-dark-50 font-weight-normal font-size-lg mt-6">Craft uses
                                    the latest and greatest frameworks
                                    <br />with ReactJS for complete modernization and
                                    <br />future proofing your business operations
                                    <br />and sales opportunities
                                </p>
                                <!--end::Desc-->
                            </div>
                            <!--begin::Team-->
                            <div class="d-flex align-items-center">
                                <!--begin::Pic-->
                                <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                    <div class="symbol-label">
                                        <img src="assets/media/svg/avatars/001-boy.svg"
                                            class="h-75 align-self-end" alt="" />
                                    </div>
                                </a>
                                <!--end::Pic-->
                                <!--begin::Pic-->
                                <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                    <div class="symbol-label">
                                        <img src="assets/media/svg/avatars/028-girl-16.svg"
                                            class="h-75 align-self-end" alt="" />
                                    </div>
                                </a>
                                <!--end::Pic-->
                                <!--begin: Pic-->
                                <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                    <div class="symbol-label">
                                        <img src="assets/media/svg/avatars/024-boy-9.svg"
                                            class="h-75 align-self-end" alt="" />
                                    </div>
                                </a>
                                <!--end::Pic-->
                                <!--begin::Pic-->
                                <a href="#" class="symbol symbol-45 symbol-light">
                                    <div class="symbol-label">
                                        <img src="assets/media/svg/avatars/005-girl-2.svg"
                                            class="h-75 align-self-end" alt="" />
                                    </div>
                                </a>
                                <!--end::Pic-->
                            </div>
                            <!--end::Team-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 11-->
                </div>
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 12-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <div class="flex-grow-1 pb-5">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center pr-2 mb-6">
                                    <span class="text-muted font-weight-bold font-size-lg flex-grow-1">5
                                        Weeks Ago</span>
                                    <div class="symbol symbol-50">
                                        <span class="symbol-label bg-light-light">
                                            <img src="assets/media/svg/misc/003-puzzle.svg"
                                                class="h-50 align-self-center" alt="" />
                                        </span>
                                    </div>
                                </div>
                                <!--end::Info-->
                                <a href="#"
                                    class="text-dark font-weight-bolder text-hover-primary font-size-h4">KT.com
                                    - High Quality
                                    <br />Templates</a>
                                <!--begin::Desc-->
                                <p class="text-dark-50 font-weight-normal font-size-lg mt-6">Easy to
                                    use, incredibly flexible and secure
                                    <br />with in-depth documentation that outlines
                                    <br />everything for you
                                </p>
                                <!--end::Desc-->
                            </div>
                            <!--begin::Team-->
                            <div class="d-flex align-items-center">
                                <!--begin::Pic-->
                                <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                    <div class="symbol-label">
                                        <img src="assets/media/svg/avatars/001-boy.svg"
                                            class="h-75 align-self-end" alt="" />
                                    </div>
                                </a>
                                <!--end::Pic-->
                                <!--begin::Pic-->
                                <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                    <div class="symbol-label">
                                        <img src="assets/media/svg/avatars/028-girl-16.svg"
                                            class="h-75 align-self-end" alt="" />
                                    </div>
                                </a>
                                <!--end::Pic-->
                                <!--begin::Pic-->
                                <a href="#" class="symbol symbol-45 symbol-light">
                                    <div class="symbol-label">
                                        <img src="assets/media/svg/avatars/024-boy-9.svg"
                                            class="h-75 align-self-end" alt="" />
                                    </div>
                                </a>
                                <!--end::Pic-->
                            </div>
                            <!--end::Team-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 12-->
                </div>
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
<script>
     jQuery(document).ready(function($) {
         var url="{{ url('/blogs') }}";
         @if(Auth::check())
          url="{{ url('/blogs') }}";
         @endif
        $.get(url, function(data, status){
          var $html = '';
          if(JSON.parse(data)){
          $.each( JSON.parse(data), function(key, value) {
              //console.log(value);

             if(value.id == 'send'){
              $html += '<div class="col-xl-4">'+
                        '<div class="card card-custom card-stretch gutter-b">'+
                     '<div class="card-body d-flex flex-column">'+
                         '<div class="flex-grow-1 pb-5">'+
                             '<div class="d-flex align-items-center pr-2 mb-6">'+
                                 '<span class="text-muted font-weight-bold font-size-lg flex-grow-1">Hello</span>'
                                 '<div class="symbol symbol-50">'+
                                     '<span class="symbol-label bg-light-light">'+
                                         '<img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="">'+
                                     '</span>'+
                                 '</div>'+
                             '</div>'+
                             '<a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">PitStop'+
                               '  - Multiple Email<br>Generator</a>'+
                             '<p class="text-dark-50 font-weight-normal font-size-lg mt-6">Pitstop'+
                                ' creates quick email campaigns.'+
                                ' <br>We help to strengthen your brand'+
                                ' <br>for your every purpose.'+
                             '</p>'+
                         '</div>'+
                        '<div class="d-flex align-items-center">'+
                            ' <a href="#" class="symbol symbol-45 symbol-light mr-3">'+
                                ' <div class="symbol-label">'+
                                     '<img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="">'+
                                 '</div>'+
                             '</a>'+
                            ' <a href="#" class="symbol symbol-45 symbol-light mr-3">'+
                                ' <div class="symbol-label">'+
                                    ' <img src="assets/media/svg/avatars/028-girl-16.svg" class="h-75 align-self-end" alt="">'+
                                 '</div>'+
                             '</a><a href="#" class="symbol symbol-45 symbol-light">'+
                                 '<div class="symbol-label">'+
                                   ' <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">'+
                                        ' <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">'+
                                            ' <rect x="0" y="0" width="24" height="24"></rect>'+
                                            ' <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>'+
                                            ' <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>'+
                                         '</g></svg></div></a></div></div></div></div>';
            }
          });
          }
          $('#media_list').html($html);

     });
    // $('.message-body').animate({scrollTop: 100}, 500);
     });
</script>
@endpush
