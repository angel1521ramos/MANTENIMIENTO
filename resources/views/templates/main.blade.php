<!DOCTYPE html>

<html lang="es">

<head>
    <title>SISTEMAS Y TI</title>
    <meta charset="utf-8" />
    @include('templates.extras.head')
    <link rel="shortcut icon" href="{{ asset('metronic8/demo1/assets/media/svg/logo-ayuntamiento.ico') }}" />
    @include('templates.src.head-ss')
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="dark-mode header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!--End::Google Tag Manager (noscript) -->

    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">

            <!--begin::sidebar-->
            @include('templates.sidebar.main')
            <!--end::sidebar-->

            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::navbar-->
                @include('templates.navbar.main')
                <!--end::navbar-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::toolbar-->
                    @yield('toolbar')
                    <!--end::toolbar-->
                    <!--begin::Content-->
                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        @yield('content')
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->
                    <!--end::Content-->
                </div>
                <!--end::Content-->
                
                @yield('footer')
                @include('templates.footer.main')


            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->

    <!--begin::Drawers-->
    <!--begin::Activities drawer-->
    @include('templates.navbar.activities.main')
    <!--end::Activities drawer-->
    <!--begin::Chat drawer-->
    @include('templates.navbar.chat.main')
    <!--end::Chat drawer-->
    <!--end::Drawers-->
    <!--end::Main-->
    <!--end::Modal - Users Search-->
    <!--end::Modals-->
    @include('templates.src.body-ss')
    @yield('body-ss')
</body>
<!--end::Body-->

</html>
