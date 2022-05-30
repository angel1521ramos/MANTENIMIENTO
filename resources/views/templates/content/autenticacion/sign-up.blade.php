<!DOCTYPE html>

<html lang="es">

<head>
    <title>Soporte TI - Registro</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('metronic8/demo1/assets/media/svg/logo-ayuntamiento.ico') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('metronic8/demo1/assets/plugins/global/plugins.dark.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('metronic8/demo1/assets/css/style.dark.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <!--Begin::Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&amp;l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>
    <!--End::Google Tag Manager -->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="dark-mode">
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!--End::Google Tag Manager (noscript) -->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-up -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
            style="background-image: url({{ asset('metronic8/demo1/assets/media/svg/fondo.svg') }})">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
<<<<<<< HEAD
                <a class="mb-12">
                    <img alt="Logo" src="{{ asset('metronic8/demo1/assets/media/svg/logo-ayuntamiento.svg') }}"
                        class="h-100px" />
=======
                <a href="/metronic8/demo1/../demo1/dark/index.html" class="mb-12">
                    <img alt="Logo" src="{{ asset('metronic8/demo1/assets/media/logos/logo-mina.png') }}"
                        class="h-40px" />
>>>>>>> b851a61bd23bc9896ce64d732b2c853652284b60
                </a>
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="w-lg-850px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
<<<<<<< HEAD
                    <form class="form w-100" novalidate="novalidate" id="register_form" name="register_form"
                        method="POST" action="{{ route('signup.post') }}">
=======
                    <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" method="POST"
                        action="{{ route('departamento.store') }}">
>>>>>>> b851a61bd23bc9896ce64d732b2c853652284b60
                        @csrf
                        <!--begin::Heading-->
                        <div class="mb-10 text-center">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Crear cuenta</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">Tienes una cuenta?
                                <a href="{{ route('login.view') }}" class="link-primary fw-bolder">Ingresa aqui</a>
                            </div>
                            <!--end::Link-->
                        </div>
<<<<<<< HEAD
                        <!--end::Heading--><!--begin::Input group-->
=======
                        <!--end::Heading-->
                        <!--begin::Input group-->
>>>>>>> b851a61bd23bc9896ce64d732b2c853652284b60
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Nombre</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                                name="nombre" id="nombre" autocomplete="off" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
<<<<<<< HEAD
                            <label class="form-label fw-bolder text-dark fs-6">Encargado</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                                name="responsable" id="responsable" autocomplete="off" />
=======
                            <label class="form-label fw-bolder text-dark fs-6">identificador</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                                name="identificador" id="identificador" autocomplete="off" />
>>>>>>> b851a61bd23bc9896ce64d732b2c853652284b60
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
<<<<<<< HEAD
                            <label class="form-label fw-bolder text-dark fs-6">Cargo del encargado</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                                name="cargo_responsable" id="cargo_responsable" autocomplete="off" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row fv-row mb-7">
                            <!--begin::Input group-->
                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">Identificador</label>
                                <input class="form-control form-control-lg form-control-solid" type="text"
                                    placeholder="" name="identificador" id="identificador" autocomplete="off" />
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">Telefono</label>
                                <input class="form-control form-control-lg form-control-solid" type="text"
                                    placeholder="" name="telefono" id="telefono" autocomplete="off" />
                            </div>
                            <!--end::Input group-->
=======
                            <label class="form-label fw-bolder text-dark fs-6">responsable</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                                name="responsable" id="responsable" autocomplete="off" />
>>>>>>> b851a61bd23bc9896ce64d732b2c853652284b60
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
<<<<<<< HEAD
                            <label class="form-label fw-bolder text-dark fs-6">Dirección</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                                name="direccion" id="direccion" autocomplete="off" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row fv-row mb-7">
                            <!--begin::Input group-->
                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">Correo</label>
                                <input class="form-control form-control-lg form-control-solid" type="correo" placeholder=""
                                    name="correo" autocomplete="off" />
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">Contraseña</label>
                                <input class="form-control form-control-lg form-control-solid" type="password"
                                    placeholder="" name="password" autocomplete="off" />
                            </div>
                            <!--end::Input group-->
=======
                            <label class="form-label fw-bolder text-dark fs-6">cargo</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                                name="cargo_responsable" id="cargo_responsable" autocomplete="off" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">direccion</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                                name="direccion" id="direccion" autocomplete="off" />
>>>>>>> b851a61bd23bc9896ce64d732b2c853652284b60
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
<<<<<<< HEAD
                            <label class="form-label fw-bolder text-dark fs-6">Codigo de verificacion</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                                name="codigo" id="codigo" autocomplete="off" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Hint-->
                        <div class="text-muted">*Para crear su contraseña, utilize 8 o mas caracteres con una combinación de minusculas,
                            mayusculas, numeros y simbolos
                        </div>
                        <!--end::Hint-->
                        <br>
                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="submit" id="form_input" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Continuar</span>
=======
                            <label class="form-label fw-bolder text-dark fs-6">Telefono</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                                name="telefono" id="telefono" autocomplete="off" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Correo</label>
                            <input class="form-control form-control-lg form-control-solid" type="correo" placeholder=""
                                name="correo" autocomplete="off" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Contraseña</label>
                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                                name="password" autocomplete="off" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Hint-->
                        <div class="text-muted">Utilize 8 o mas caracteres con una combinación de minusculas,
                            mayusculas, numeros y simbolos
                        </div>
                        <!--end::Hint-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="button" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
                                <span class="indicator-label">Crear</span>
>>>>>>> b851a61bd23bc9896ce64d732b2c853652284b60
                                <span class="indicator-progress">Por favor espere...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-column-auto p-10">
                <!--begin::Links
                <div class="d-flex align-items-center fw-bold fs-6">
                    <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
                    <a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
                    <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact Us</a>
                </div>
                end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Authentication - Sign-up-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "/metronic8/demo1/assets/";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('metronic8/demo1/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('metronic8/demo1/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('metronic8/demo1/assets/js/custom/authentication/sign-up/general.js') }}"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
