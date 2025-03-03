@extends('templates.main')

@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <span class="card-label fw-bolder text-gray-800">Solicitudes</span>
                    </div>
                    <!--begin::Card title-->

                    @if (auth()->user()->rol !== 'tecnico')
                        @if (request()->is('solicitud'))
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu wrapper-->
                                <div>
                                    <!--begin::Toggle-->
                                    <button type="button" class="btn btn-primary rotate" data-kt-menu-trigger="click"
                                        data-kt-menu-placement="bottom-start" data-kt-menu-offset="0,5">
                                        Solicitud
                                        <span class="svg-icon svg-icon-3 rotate-180 ms-3 me-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </button>
                                    <!--end::Toggle-->
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Solicitar</div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a class="menu-link px-3" data-bs-toggle="modal"
                                                data-bs-target="#modal_mantenimiento_index">
                                                Mantenimiento
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a class="menu-link px-3" data-bs-toggle="modal"
                                                data-bs-target="#modal_baja_index">
                                                Baja
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a class="menu-link px-3" data-bs-toggle="modal"
                                                data-bs-target="#modal_peticion_index">
                                                Peticion
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <br>
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Dropdown wrapper-->
                            </div>
                            <!--end::Card toolbar-->
                        @elseif (request()->is('solicitud/index/mantenimiento'))
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <!--begin::Add user-->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal_mantenimiento_index">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                                transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor">
                                            </rect>
                                        </svg>
                                    </span>Solicitar mantenimiento
                                </button>
                                <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->
                        @elseif (request()->is('solicitud/index/baja'))
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <!--begin::Add user-->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal_baja_index">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                                transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor">
                                            </rect>
                                        </svg>
                                    </span>Solicitar baja
                                </button>
                                <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->
                        @else
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <!--begin::Add user-->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal_peticion_index">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                                transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor">
                                            </rect>
                                        </svg>
                                    </span>Solicitar peticion
                                </button>
                                <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->
                        @endif
                    @endif



                    <!--begin::Modal - Add task-->
                    <div class="modal fade" id="modal_mantenimiento_index" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header" id="kt_modal_add_user_header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder">Solicitar mantenimiento</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                        data-kt-users-modal-action="close">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                    transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">

                                    <!--begin::Form-->
                                    <form id="form_mantenimiento_index" name="form_mantenimiento_index"
                                        class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                                        action="{{ route('solicitud.store') }}" novalidate="novalidate">
                                        @csrf
                                        <!--begin::Scroll-->
                                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll"
                                            data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                            data-kt-scroll-max-height="auto"
                                            data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                            data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                            data-kt-scroll-offset="300px" style="max-height: 661px;">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="required fw-bold fs-6 mb-2">Consecutivo</label>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="" data-bs-original-title="Ingrese el consecutivo de su oficio"
                                                    aria-label="Ingrese el consecutivo de su oficio"></i>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="identificador" id="identificador"
                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                    placeholder="STI - 100" style="text-transform:uppercase"
                                                    value="{{ auth()->user()->rol == 'departamento' ? $departamento->identificador : '' }} - ">
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="required fw-bold fs-6 mb-2">Equipo</label>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="" data-bs-original-title="Seleccione el equipo de la solicitud"
                                                    aria-label="Seleccione el equipo de la solicitud"></i>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div class="col-md-12" data-select2-id="select2-data-453-kbzx">
                                                    <div class="w-100" data-select2-id="select2-data-189-svbm">
                                                        <!--begin::Select2-->
                                                        <select
                                                            class="form-select form-select-solid select2-hidden-accessible"
                                                            name="equipo_id" id="equipo_id" data-control="select2"
                                                            data-hide-search="true" data-placeholder="SELECCIONA UN EQUIPO"
                                                            data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                            <option value="">SELECCIONA UN EQUIPO</option>
                                                            @foreach ($equipo as $x)
                                                                <option value="{{ $x->id }}">
                                                                    {{ $x->tipo }}
                                                                    {{ $x->marca }} | {{ $x->inventario }} |
                                                                    {{ $x->Departamento->nombre }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <!--end::Select2-->
                                                    </div>
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 fv-plugins-icon-container" hidden>
                                                <!--begin::Label-->
                                                <label class="required fw-bold fs-6 mb-2">departamento</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div class="col-md-12" data-select2-id="select2-data-453-kbzx">
                                                    <div class="w-100" data-select2-id="select2-data-189-svbm">
                                                        <!--begin::Select2-->
                                                        <select
                                                            class="form-select form-select-solid select2-hidden-accessible"
                                                            name="departamento_id" id="departamento_id"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Selecciona un departamento"
                                                            data-select2-id="2" tabindex="-1" aria-hidden="true">
                                                            <option value="">Selecciona un departamento</option>
                                                            @if (auth()->user()->rol == 'departamento')
                                                                <option value="{{ $departamento->id }}" selected>
                                                                    {{ $departamento->nombre }}
                                                                </option>
                                                            @else
                                                                @foreach ($departamento as $x)
                                                                    <option value="{{ $x->id }}" selected>
                                                                        {{ $x->nombre }}
                                                                    </option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                        <!--end::Select2-->
                                                    </div>
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="required fw-bold fs-6 mb-2">Observacion</label>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="" data-bs-original-title="Ingrese la observacion de la solicitud"
                                                    aria-label="Ingrese la observacion de la solicitud"></i>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <textarea style="text-transform:uppercase" class="form-control form-control-solid mb-3 mb-lg-0"
                                                    placeholder="El equipo esta dañado por ..." name="observacion"
                                                    id="observacion" value=""></textarea>
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 fv-plugins-icon-container" hidden>
                                                <!--begin::Input-->
                                                <input type="text" name="tipo" id="tipo"
                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                    placeholder="No funciona porque ..." style="text-transform:uppercase"
                                                    value="MANTENIMIENTO">
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10" hidden>
                                                <!--begin::Heading-->
                                                <div class="mb-3">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-bold">
                                                        <span class="required">Estatus</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Seleccione el estatus de la solicitud"
                                                            aria-label="Seleccione el estatus de la solicitud"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Row-->
                                                <div class="fv-row fv-plugins-icon-container">
                                                    <!--begin::Radio group-->
                                                    <div class="btn-group w-100" data-kt-buttons="true"
                                                        data-kt-buttons-target="[data-kt-button]">
                                                        <!--begin::Radio-->
                                                        <label
                                                            class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-danger active"
                                                            data-kt-button="true">
                                                            <!--begin::Input-->
                                                            <input class="btn-check" type="radio" name="estatus"
                                                                checked value="PENDIENTE">
                                                            <!--end::Input-->
                                                            PENDIENTE
                                                        </label>
                                                        <!--end::Radio-->
                                                        <!--begin::Radio-->
                                                        <label
                                                            class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success"
                                                            data-kt-button="true">
                                                            <!--begin::Input-->
                                                            <input class="btn-check" type="radio" name="estatus"
                                                                value="PROCESO">
                                                            <!--end::Input-->
                                                            PROCESO
                                                        </label>
                                                        <!--end::Radio-->
                                                        <!--begin::Radio-->
                                                        <label
                                                            class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-warning"
                                                            data-kt-button="true">
                                                            <!--begin::Input-->
                                                            <input class="btn-check" type="radio" name="estatus"
                                                                value="FINALIZADO">
                                                            <!--end::Input-->
                                                            FINALIZADO
                                                        </label>
                                                        <!--end::Radio-->
                                                    </div>
                                                    <!--end::Radio group-->
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                    </div>
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Scroll-->
                                        <!--begin::Actions-->
                                        <div class="text-center pt-15">
                                            <button type="reset" class="btn btn-light me-3"
                                                data-kt-users-modal-action="cancel">Cancelar</button>
                                            <button type="submit" class="btn btn-primary"
                                                data-kt-users-modal-action="submit">
                                                <span class="indicator-label">Guardar</span>
                                                <span class="indicator-progress">Por favor espere...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->

                                </div>
                                <!--end::Modal body-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                    <!--end::Modal - Add task-->
                    <!--begin::Modal - Add task-->
                    <div class="modal fade" id="modal_baja_index" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header" id="kt_modal_add_user_header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder">Solicitar baja de equipo</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                        data-kt-users-modal-action="close">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                    transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">

                                    <!--begin::Form-->
                                    <form id="form_baja_index" name="form_baja_index"
                                        class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                                        action="{{ route('solicitud.store') }}" novalidate="novalidate">
                                        @csrf
                                        <!--begin::Scroll-->
                                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll"
                                            data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                            data-kt-scroll-max-height="auto"
                                            data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                            data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                            data-kt-scroll-offset="300px" style="max-height: 661px;">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="required fw-bold fs-6 mb-2">Consecutivo</label>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="" data-bs-original-title="Ingrese el consecutivo de su oficio"
                                                    aria-label="Ingrese el consecutivo de su oficio"></i>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="identificador" id="identificador"
                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                    placeholder="STI - 100" style="text-transform:uppercase"
                                                    value="{{ auth()->user()->rol == 'departamento' ? $departamento->identificador : '' }} - ">
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="required fw-bold fs-6 mb-2">Equipo</label>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="" data-bs-original-title="Seleccione el equipo para baja"
                                                    aria-label="Seleccione el equipo para baja"></i>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div class="col-md-12" data-select2-id="select2-data-453-kbzx">
                                                    <div class="w-100" data-select2-id="select2-data-189-svbm">
                                                        <!--begin::Select2-->
                                                        <select
                                                            class="form-select form-select-solid select2-hidden-accessible"
                                                            name="equipo_id" id="equipo_id" data-control="select2"
                                                            data-hide-search="true" data-placeholder="SELECCIONA UN EQUIPO"
                                                            data-select2-id="3" tabindex="-1" aria-hidden="true">
                                                            <option value="">SELECCIONA UN EQUIPO</option>
                                                            @foreach ($equipo as $x)
                                                                <option value="{{ $x->id }}">
                                                                    {{ $x->tipo }}
                                                                    {{ $x->marca }} | {{ $x->inventario }} |
                                                                    {{ $x->Departamento->nombre }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <!--end::Select2-->
                                                    </div>
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 fv-plugins-icon-container" hidden>
                                                <!--begin::Label-->
                                                <label class="required fw-bold fs-6 mb-2">Departamento</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div class="col-md-12" data-select2-id="select2-data-453-kbzx">
                                                    <div class="w-100" data-select2-id="select2-data-189-svbm">
                                                        <!--begin::Select2-->
                                                        <select
                                                            class="form-select form-select-solid select2-hidden-accessible"
                                                            name="departamento_id" id="departamento_id"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Selecciona un departamento"
                                                            data-select2-id="4" tabindex="-1" aria-hidden="true">
                                                            <option value="">Selecciona un departamento</option>
                                                            @if (auth()->user()->rol == 'departamento')
                                                                <option value="{{ $departamento->id }}" selected>
                                                                    {{ $departamento->nombre }}
                                                                </option>
                                                            @else
                                                                @foreach ($departamento as $x)
                                                                    <option value="{{ $x->id }}" selected>
                                                                        {{ $x->nombre }}
                                                                    </option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                        <!--end::Select2-->
                                                    </div>
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="required fw-bold fs-6 mb-2">Observacion</label>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="" data-bs-original-title="Ingrese la observacion de la baja"
                                                    aria-label="Ingrese la observacion de la baja"></i>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <textarea style="text-transform:uppercase" class="form-control form-control-solid mb-3 mb-lg-0"
                                                    placeholder="El equipo esta dañado por ..." name="observacion"
                                                    id="observacion" value=""></textarea>
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 fv-plugins-icon-container" hidden>
                                                <!--begin::Input-->
                                                <input type="text" name="tipo" id="tipo"
                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                    placeholder="No funciona porque ..." style="text-transform:uppercase"
                                                    value="BAJA">
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10" hidden>
                                                <!--begin::Heading-->
                                                <div class="mb-3">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-bold">
                                                        <span class="required">Estatus</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Seleccione el estatus de la solicitud"
                                                            aria-label="Seleccione el estatus de la solicitud"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Row-->
                                                <div class="fv-row fv-plugins-icon-container">
                                                    <!--begin::Radio group-->
                                                    <div class="btn-group w-100" data-kt-buttons="true"
                                                        data-kt-buttons-target="[data-kt-button]">
                                                        <!--begin::Radio-->
                                                        <label
                                                            class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-danger active"
                                                            data-kt-button="true">
                                                            <!--begin::Input-->
                                                            <input class="btn-check" type="radio" name="estatus"
                                                                checked value="PENDIENTE">
                                                            <!--end::Input-->
                                                            PENDIENTE
                                                        </label>
                                                        <!--end::Radio-->
                                                        <!--begin::Radio-->
                                                        <label
                                                            class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success"
                                                            data-kt-button="true">
                                                            <!--begin::Input-->
                                                            <input class="btn-check" type="radio" name="estatus"
                                                                value="PROCESO">
                                                            <!--end::Input-->
                                                            PROCESO
                                                        </label>
                                                        <!--end::Radio-->
                                                        <!--begin::Radio-->
                                                        <label
                                                            class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-warning"
                                                            data-kt-button="true">
                                                            <!--begin::Input-->
                                                            <input class="btn-check" type="radio" name="estatus"
                                                                value="FINALIZADO">
                                                            <!--end::Input-->
                                                            FINALIZADO
                                                        </label>
                                                        <!--end::Radio-->
                                                    </div>
                                                    <!--end::Radio group-->
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                    </div>
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Scroll-->
                                        <!--begin::Actions-->
                                        <div class="text-center pt-15">
                                            <button type="reset" class="btn btn-light me-3"
                                                data-kt-users-modal-action="cancel">Cancelar</button>
                                            <button type="submit" class="btn btn-primary"
                                                data-kt-users-modal-action="submit">
                                                <span class="indicator-label">Guardar</span>
                                                <span class="indicator-progress">Por favor espere...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->

                                </div>
                                <!--end::Modal body-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                    <!--end::Modal - Add task-->
                    <!--begin::Modal - Add task-->
                    <div class="modal fade" id="modal_peticion_index" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header" id="kt_modal_add_user_header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder">Solicitar peticion</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                        data-kt-users-modal-action="close">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                    transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">

                                    <!--begin::Form-->
                                    <form id="form_peticion_index" name="form_peticion_index"
                                        class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                                        action="{{ route('solicitud.store.peticion') }}" novalidate="novalidate">
                                        @csrf
                                        <!--begin::Scroll-->
                                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll"
                                            data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                            data-kt-scroll-max-height="auto"
                                            data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                            data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                            data-kt-scroll-offset="300px" style="max-height: 661px;">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 fv-plugins-icon-container"
                                                {{ auth()->user()->rol == 'departamento' ? 'hidden' : '' }} ->
                                                <!--begin::Label-->
                                                <label class="required fw-bold fs-6 mb-2">Departamento</label>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title=""
                                                    data-bs-original-title="Seleccione el departamento de la peticion"
                                                    aria-label="Seleccione el departamento de la peticion"></i>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div class="col-md-12" data-select2-id="select2-data-453-kbzx">
                                                    <div class="w-100" data-select2-id="select2-data-189-svbm">
                                                        <!--begin::Select2-->
                                                        <select
                                                            class="form-select form-select-solid select2-hidden-accessible"
                                                            name="departamento_id" id="departamento_id"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="SELECCIONA UN DEPARTAMENTO"
                                                            data-select2-id="6" tabindex="-1" aria-hidden="true">
                                                            <option value="">SELECCIONA UN DEPARTAMENTO</option>
                                                            @if (auth()->user()->rol == 'departamento')
                                                                <option value="{{ $departamento->id }}" selected>
                                                                    {{ $departamento->nombre }}
                                                                </option>
                                                            @else
                                                                @foreach ($departamento as $x)
                                                                    <option value="{{ $x->id }}">
                                                                        {{ $x->nombre }}
                                                                    </option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                        <!--end::Select2-->
                                                    </div>
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="required fw-bold fs-6 mb-2">Consecutivo</label>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="" data-bs-original-title="Ingrese el consecutivo de su oficio"
                                                    aria-label="Ingrese el consecutivo de su oficio"></i>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text" name="identificador" id="identificador"
                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                    placeholder="STI - 100" style="text-transform:uppercase"
                                                    value="{{ auth()->user()->rol == 'departamento' ? $departamento->identificador : '' }} - ">
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="required fw-bold fs-6 mb-2">Equipo</label>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title=""
                                                    data-bs-original-title="Seleccione el tipo de dispositivo solicitado"
                                                    aria-label="Seleccione el tipo de dispositivo solicitado"></i>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div class="col-xl-12 fv-row fv-plugins-icon-container"
                                                    data-select2-id="select2-data-453-kbzx">
                                                    <div class="w-100" data-select2-id="select2-data-189-svbm">
                                                        <!--begin::Select2-->
                                                        <select
                                                            class="form-select form-select-solid select2-hidden-accessible"
                                                            name="peticion_equipo" id="peticion_equipo"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="SELECCIONA UN TIPO DE EQUIPO"
                                                            data-select2-id="5" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="select2-data-21-2sb5"></option>
                                                            <option value="COMPUTADORA">
                                                                COMPUTADORA</option>
                                                            <option value="IMPRESORA">
                                                                IMPRESORA
                                                            </option>
                                                            <option value="REGULADOR">
                                                                REGULADOR
                                                            </option>
                                                        </select>
                                                        <!--end::Select2-->
                                                    </div>
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="required fw-bold fs-6 mb-2">Observacion</label>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="" data-bs-original-title="Ingrese la observacion de la solicitud"
                                                    aria-label="Ingrese la observacion de la solicitud"></i>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <textarea style="text-transform:uppercase" class="form-control form-control-solid mb-3 mb-lg-0"
                                                    placeholder="El equipo esta dañado por ..." name="observacion"
                                                    id="observacion" value=""></textarea>
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7 fv-plugins-icon-container" hidden>
                                                <!--begin::Input-->
                                                <input type="text" name="tipo" id="tipo"
                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                    placeholder="No funciona porque ..." style="text-transform:uppercase"
                                                    value="PETICION">
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10" hidden>
                                                <!--begin::Heading-->
                                                <div class="mb-3">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-bold">
                                                        <span class="required">Estatus</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Seleccione el estatus de la solicitud"
                                                            aria-label="Seleccione el estatus de la solicitud"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Row-->
                                                <div class="fv-row fv-plugins-icon-container">
                                                    <!--begin::Radio group-->
                                                    <div class="btn-group w-100" data-kt-buttons="true"
                                                        data-kt-buttons-target="[data-kt-button]">
                                                        <!--begin::Radio-->
                                                        <label
                                                            class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-danger active"
                                                            data-kt-button="true">
                                                            <!--begin::Input-->
                                                            <input class="btn-check" type="radio" name="estatus"
                                                                checked value="PENDIENTE">
                                                            <!--end::Input-->
                                                            PENDIENTE
                                                        </label>
                                                        <!--end::Radio-->
                                                        <!--begin::Radio-->
                                                        <label
                                                            class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-success"
                                                            data-kt-button="true">
                                                            <!--begin::Input-->
                                                            <input class="btn-check" type="radio" name="estatus"
                                                                value="PROCESO">
                                                            <!--end::Input-->
                                                            PROCESO
                                                        </label>
                                                        <!--end::Radio-->
                                                        <!--begin::Radio-->
                                                        <label
                                                            class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-warning"
                                                            data-kt-button="true">
                                                            <!--begin::Input-->
                                                            <input class="btn-check" type="radio" name="estatus"
                                                                value="FINALIZADO">
                                                            <!--end::Input-->
                                                            FINALIZADO
                                                        </label>
                                                        <!--end::Radio-->
                                                    </div>
                                                    <!--end::Radio group-->
                                                    <div class="fv-plugins-message-container invalid-feedback">
                                                    </div>
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Scroll-->
                                        <!--begin::Actions-->
                                        <div class="text-center pt-15">
                                            <button type="reset" class="btn btn-light me-3"
                                                data-kt-users-modal-action="cancel">Cancelar</button>
                                            <button type="submit" class="btn btn-primary"
                                                data-kt-users-modal-action="submit">
                                                <span class="indicator-label">Guardar</span>
                                                <span class="indicator-progress">Por favor espere...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->

                                </div>
                                <!--end::Modal body-->
                            </div>
                            <!--end::Modal content-->
                        </div>
                        <!--end::Modal dialog-->
                    </div>
                    <!--end::Modal - Add task-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <!--begin::Table-->
                    <div id="kt_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="table-responsive">
                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                id="kt_table_users">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                            rowspan="1" colspan="1"
                                            aria-label="Last login: activate to sort column ascending"
                                            style="width: 160.359px;">
                                            identificador</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                            rowspan="1" colspan="1"
                                            aria-label="Last login: activate to sort column ascending"
                                            style="width: 160.359px;">
                                            Estatus</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                            rowspan="1" colspan="1"
                                            aria-label="Last login: activate to sort column ascending"
                                            style="width: 160.359px;">
                                            equipo</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                            rowspan="1" colspan="1" aria-label="User: activate to sort column ascending"
                                            style="width: 160.359px;">
                                            Departamento</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                            rowspan="1" colspan="1"
                                            aria-label="Last login: activate to sort column ascending"
                                            style="width: 160.359px;">
                                            Observacion</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>

                                <tbody class="text-gray-600 fw-bold">
                                    @foreach ($solicitud as $x)
                                        <tr class="even">
                                            <td style="text-transform:uppercase">
                                                <a href="{{ route('solicitud.show', $x->id) }}"
                                                    class="text-gray-800 text-hover-primary mb-1">
                                                    {{ $x->identificador }}
                                                </a>
                                            </td>
                                            <td>
                                                <div
                                                    class="badge 
                                                {{ $x->estatus == 'PENDIENTE' ? 'badge-light-danger' : '' }}
                                                {{ $x->estatus == 'PROCESO' ? 'badge-light-success' : '' }}
                                                {{ $x->estatus == 'FINALIZADO' ? 'badge-light-warning' : '' }}">
                                                    {{ $x->estatus }}
                                                </div>
                                            </td>
                                            <td style="text-transform:uppercase">
                                                @if ($x->tipo == 'PETICION')
                                                    {{ $x->peticion_equipo }}
                                                @else
                                                    <a href="{{ route('equipo.show', $x->equipo_id) }}"
                                                        class="text-gray-800 text-hover-primary mb-1">
                                                        {{ $x->Equipo->tipo }} {{ $x->Equipo->marca }}
                                                    </a>
                                                @endif
                                            </td>
                                            <td style="text-transform:uppercase">
                                                <a href="{{ route('departamento.show', $x->departamento_id) }}"
                                                    class="text-gray-800 text-hover-primary mb-1">
                                                    {{ $x->Departamento->nombre }}
                                                </a>
                                            </td>
                                            <td style="text-transform:uppercase">
                                                {{ $x->observacion }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <!--end::Table-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <br>
@endsection

@section('body-ss')
    <script src="{{ asset('/metronic8/demo1/assets/js/custom/apps/content/solicitud/index.js') }}"></script>
@endsection
