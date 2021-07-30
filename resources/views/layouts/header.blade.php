<!--begin::Main-->
<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile">
    <!--begin::Logo-->
    <a href="{{route('main')}}">
        <img alt="Logo" src="{{ asset('/media/logos/logo-letter-1.png') }}" class="logo-default max-h-30px" />
    </a>
    <!--end::Logo-->
    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
        <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
            <span></span>
        </button>
        <button class="btn btn-icon btn-hover-transparent-white p-0 ml-3" id="kt_header_mobile_topbar_toggle">
            <span class="svg-icon svg-icon-xl">
                <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path
                            d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                        <path
                            d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                            fill="#000000" fill-rule="nonzero" />
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </button>
    </div>
    <!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header header-fixed">
                <!--begin::Container-->
                <div class="container d-flex align-items-stretch justify-content-between">
                    <!--begin::Left-->
                    <div class="d-flex align-items-stretch mr-3">
                        <!--begin::Header Logo-->
                        <div class="header-logo">
                            <a href="{{route('main')}}">
                                <img alt="Logo" src="{{ asset('/media/logos/logo-letter-9.png') }}"
                                    class="logo-default max-h-40px" />
                                <img alt="Logo" src="{{ asset('/media/logos/logo-letter-1.png') }}"
                                    class="logo-sticky max-h-40px" />
                            </a>
                        </div>
                        <!--end::Header Logo-->
                        <!--begin::Header Menu Wrapper-->

                        <!--end::Header Menu Wrapper-->
                    </div>
                    <!--end::Left-->
                    <!--begin::Topbar-->
                    <div class="topbar">
                        @if(Auth::check())
                                  <!--begin::User-->
                        <div class="dropdown">
                            <!--begin::Toggle-->
                            <div class="topbar-item">
                                <div class="btn btn-icon btn-hover-transparent-white d-flex align-items-center btn-lg px-md-2 w-md-auto"
                                    id="kt_quick_user_toggle">
                                    <span
                                        class="text-white opacity-70 font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                    <span
                                        class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4">@if(isset(Auth::user()->first_name)){{Auth::user()->first_name}}@endif</span>
                                    <span class="symbol symbol-35">
                                        <span
                                            class="symbol-label text-white font-size-h5 font-weight-bold bg-white-o-30">@if(isset(Auth::user()->first_name)){{Auth::user()->first_name}}@endif</span>
                                    </span>
                                </div>
                            </div>
                            <!--end::Toggle-->
                        </div>
                        <!--end::User-->
                        @else

                                <div class="dropdown">
                                    <!--begin::Toggle-->
                                    <div class="topbar-item">
                                    <a href="{{route('login')}}" class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2 mr-2">Login</a>
                                    <a href="{{route('register')}}" class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">Register</a>
                                    </div>
                                </div>
                        @endif

                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            @include('layouts.msg')
            @yield('content')

            <!--end::Content-->
            <!--begin::Footer-->
            <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2">2021©</span>
                        <a href="{{ url('/') }}" target="_blank" class="text-dark-75 text-hover-primary">Blogs</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Nav-->
                    <div class="nav nav-dark order-1 order-md-2">
                        <a href="{{ url('/') }}" target="_blank" class="nav-link pr-3 pl-0">About</a>
                        <a href="{{ url('/') }}" target="_blank" class="nav-link px-3">Team</a>
                        <a href="{{ url('/') }}" target="_blank" class="nav-link pl-3 pr-0">Contact</a>
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main--
