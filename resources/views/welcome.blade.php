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

            <div class="row" id="media_list">

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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
     jQuery(document).ready(function($) {
         var url="{{ url('/blogs') }}";
         @if(Auth::check())
          url="{{ url('/blogs') }}/{{base64_encode(Auth::user()->id)}}";
         @endif
         getinfo(url);
    // $('.message-body').animate({scrollTop: 100}, 500);
     });

     function getinfo(url){
        $.get(url, function(data, status){
          var $html = '';
          if(JSON.parse(data)){
          var user_id ='';
          @if(Auth::check())
          user_id="{{Auth::user()->id}}";
          @endif
          $.each( JSON.parse(data), function(key, value) {
              //console.log(value);

             if(value.id != ''){

             var img ='';
             if(value.img!=''){
                img ='<img src="{{url("image/blog")}}/'+value.img+'" class="h-50 align-self-center" alt="">';
             }
             var date ='';
             if(value.created_at!=''){
                date=moment(value.created_at).format('DD-MM-YYYY, h:mm:ss a');
             }
             var is_active ='';
             var is_info='';
             if(value.is_active=='true'){
                is_active ='style="background: red;"';
                is_info='false';
             }else{
                is_active ='style="background: green;"';
                is_info='true';
             }

             var button='';
             if(user_id==value.user_id){
                button='<div class="d-flex align-items-center">'+
                            ' <span data-id="'+value.id+'" data-info="'+is_info+'" style="cursor: pointer;" title="On/off" class="on-off symbol symbol-45 symbol-light mr-3" >'+
                                ' <div class="symbol-label" '+is_active+'>'+
                                     '<span class="svg-icon svg-icon-3">'+
									 '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">'+
									'<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">'+
									'<rect x="0" y="0" width="24" height="24"></rect>'+
									'<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>'+
									'<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>'+
								'</g></svg></span>'+
                                 '</div>'+
                             '</span>'+
                            ' <a href="#" title="Edit" class="symbol symbol-45 symbol-light mr-3">'+
                                ' <div class="symbol-label">'+
                                    '<span class="svg-icon svg-icon-3">'+
									'<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">'+
									'<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>'+
									'<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>'+
									'</svg></span>'+
                                 '</div>'+
                             '</a><span title="Delete" style="cursor: pointer;" data-id="'+value.id+'"  class="delete_notes symbol symbol-45 symbol-light">'+
                                 '<div class="symbol-label">'+
                                   '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">'+
                                        ' <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">'+
                                            ' <rect x="0" y="0" width="24" height="24"></rect>'+
                                            ' <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>'+
                                            ' <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>'+
                                '</g></svg></div></span></div>';
             }

              $html += '<div class="col-xl-4">'+
                       '<div class="card card-custom card-stretch gutter-b">'+
                       '<div class="card-body d-flex flex-column">'+
                         '<div class="flex-grow-1 pb-5">'+
                             '<div class="d-flex align-items-center pr-2 mb-6">'+
                                 '<span class="text-muted font-weight-bold font-size-lg flex-grow-1">'+date+'</span>'+
                                 '<div class="symbol symbol-50">'+
                                     '<span class="symbol-label bg-light-light">'+img+'</span>'+
                                 '</div>'+
                             '</div>'+
                             '<a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">'+value.title+'</a>'+
                             '<p class="text-dark-50 font-weight-normal font-size-lg mt-6">'+value.des+'</p>'+
                         '</div>'+
                         button+'</div></div></div>';
            }
          });
          }
          $('#media_list').html($html);

     });
     }

     $(document).on("click", '.delete_notes', function(e) {
                e.preventDefault();

                var id = $(this).attr('data-id');

                window.swal({
                        title: "Are you sure?",
                        text: "You want to delete this blog.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {

                            $.ajax({
                                type: "POST",
                                url: "{{route('blog.delete')}}",
                                data: {
                                    "id": id,
                                    "_token": "{{ csrf_token() }}"
                                },
                                success: function(response) {
                                    if (response.status == "success") {
                                        swal(response.message, {
                                            icon: 'success',
                                        }).then((result) => {
                                            var url="{{ url('/blogs') }}";
                                            @if(Auth::check())
                                            url="{{ url('/blogs') }}/{{base64_encode(Auth::user()->id)}}";
                                            @endif
                                            getinfo(url);
                                        });
                                    } else {
                                        swal("Error","Something went wrong!",{icon:'error'});
                                    }
                                }
                            });
                        }
                    });
            });


            $(document).on("click", '.on-off', function(e) {
                e.preventDefault();

                var id = $(this).attr('data-id');
                var value = $(this).attr('data-info');

                window.swal({
                        title: "Are you sure?",
                        text: "You want to "+value+"' this blog.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {

                            $.ajax({
                                type: "POST",
                                url: "{{route('blog.onoff')}}",
                                data: {
                                    "id": id,
                                    "value":value,
                                    "_token": "{{ csrf_token() }}"
                                },
                                success: function(response) {
                                    if (response.status == "success") {
                                        swal(response.message, {
                                            icon: 'success',
                                        }).then((result) => {
                                            var url="{{ url('/blogs') }}";
                                            @if(Auth::check())
                                            url="{{ url('/blogs') }}/{{base64_encode(Auth::user()->id)}}";
                                            @endif
                                            getinfo(url);
                                        });
                                    } else {
                                        swal("Error","Something went wrong!",{icon:'error'});
                                    }
                                }
                            });
                        }
                    });
            });


</script>
@endpush
