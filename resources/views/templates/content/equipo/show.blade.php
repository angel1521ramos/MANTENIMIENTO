@extends('templates.main')

@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title fs-3 fw-bolder">Datos del equipo</div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Form-->
                <form id="kt_project_settings_form" name="kt_project_settings_form"
                    class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                    action="{{ route('equipo.update', $equipo->id) }}" novalidate="novalidate">
                    @csrf
                    @method('PUT')
                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Inventario</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                <input type="text" class="form-control form-control-solid" name="inventario"
                                    style="text-transform:uppercase" value="{{ $equipo->inventario }}">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">departamento</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9 fv-row fv-plugins-icon-container" data-select2-id="select2-data-453-kbzx">
                                <div class="w-100" data-select2-id="select2-data-189-svbm">
                                    <!--begin::Input-->
                                    <div class="col-md-12" data-select2-id="select2-data-453-kbzx">
                                        <div class="w-100" data-select2-id="select2-data-189-svbm">
                                            <!--begin::Input-->
                                            <input type="text" name="departamento_id" id="departamento_id"
                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                placeholder="1241-0-0000" style="text-transform:uppercase"
                                                value="{{ $equipo->departamento_id }}" hidden>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control mb-3 mb-lg-0" placeholder="1241-0-0000"
                                                style="text-transform:uppercase"
                                                value="{{ $equipo->Departamento->nombre }}" readonly>
                                            <!--end::Input-->
                                        </div>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--begin::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Tipo</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Input-->
                            <div class="col-xl-9 fv-row fv-plugins-icon-container" data-select2-id="select2-data-453-kbzx">
                                <div class="w-100" data-select2-id="select2-data-189-svbm">
                                    <!--begin::Select2-->
                                    <select class="form-select form-select-solid select2-hidden-accessible" name="tipo"
                                        id="tipo" data-control="select2" data-hide-search="true"
                                        data-placeholder="Selecciona el tipo" data-select2-id="2" tabindex="-1"
                                        aria-hidden="true">
                                        <option data-select2-id="select2-data-21-2sb5"></option>
                                        <option value="COMPUTADORA"
                                            {{ old('tipo', $equipo->tipo) == 'COMPUTADORA' ? 'selected' : '' }}>
                                            COMPUTADORA</option>
                                        <option value="IMPRESORA"
                                            {{ old('tipo', $equipo->tipo) == 'IMPRESORA' ? 'selected' : '' }}>IMPRESORA
                                        </option>
                                        <option value="REGULADOR"
                                            {{ old('tipo', $equipo->tipo) == 'REGULADOR' ? 'selected' : '' }}>REGULADOR
                                        </option>
                                    </select>
                                    <!--end::Select2-->
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Marca</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                <input type="text" class="form-control form-control-solid" name="marca"
                                    style="text-transform:uppercase" value="{{ $equipo->marca }}">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <!--end::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <label class="form-label">Dispositivos</label>
                            </div>
                            <!--begin::Col-->
                            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                <input class="form-control form-control-solid" name="dispositivos"
                                    value="{{ $equipo->dispositivos }}" id="dispositivos" />
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <!--begin::Input group-->
                        <div class="row mb-8">
                            <!--begin::Heading-->
                            <div class="col-xl-3">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-5 fw-bold">
                                    <span class="required">Estatus</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="Seleccione el estatus de la solicitud"
                                        aria-label="Seleccione el estatus de la solicitud"></i>
                                </label>
                                <!--end::Label-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Row-->
                            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                <!--begin::Radio group-->
                                <div class="btn-group w-100" data-kt-buttons="true"
                                    data-kt-buttons-target="[data-kt-button]">
                                    <!--begin::Radio-->
                                    <label
                                        class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline 
                                        {{ $equipo->estatus == 'ACTIVO' ? 'btn-active-success active' : 'btn-active-success' }}"
                                        data-kt-button="true">
                                        <!--begin::Input-->
                                        <input class="btn-check" type="radio" name="estatus" value="ACTIVO" 
                                        {{ $equipo->estatus == 'ACTIVO' ? 'checked' : '' }}>
                                        <!--end::Input-->
                                        ACTIVO
                                    </label>
                                    <!--end::Radio-->
                                    <!--begin::Radio-->
                                    <label
                                        class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline 
                                        {{ $equipo->estatus == 'BAJA' ? 'btn-active-danger active' : 'btn-active-danger' }}"
                                        data-kt-button="true">
                                        <!--begin::Input-->
                                        <input class="btn-check" type="radio" name="estatus" value="BAJA" 
                                        {{ $equipo->estatus == 'BAJA' ? 'checked' : '' }}>
                                        <!--end::Input-->
                                        BAJA
                                    </label>
                                    <!--end::Radio-->
                                </div>
                                <!--end::Radio group-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Borrar cambios</button>
                        <button type="submit" class="btn btn-primary" id="kt_project_settings_submit">Guardar
                            cambios</button>
                    </div>
                    <!--end::Card footer-->
                    <input type="hidden">
                    <div></div>
                </form>
                <!--end:Form-->
            </div>
            <!---=================================================================================================================--->
            <!--begin::Card body-->
            <br>
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">

                    <!--begin::Card title-->
                    <div class="card-title fs-3 fw-bolder">Solicitudes</div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Menu wrapper-->
                            <div>
                                <!--begin::Toggle-->
                                <button type="button" class="btn btn-primary rotate" data-kt-menu-trigger="click"
                                    data-kt-menu-placement="bottom-start" data-kt-menu-offset="0,5">
                                    Solicitud
                                    <span class="svg-icon svg-icon-3 rotate-180 ms-3 me-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
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
                                        <a class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#modal_baja_index">
                                            Baja
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
                                            <div class="d-flex flex-column scroll-y me-n7 pe-7"
                                                id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                                data-kt-scroll-activate="{default: false, lg: true}"
                                                data-kt-scroll-max-height="auto"
                                                data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                                data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                                data-kt-scroll-offset="300px" style="max-height: 661px;">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7 fv-plugins-icon-container" hidden>
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">identificador</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="identificador" id="identificador"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="1241-0-0000" style="text-transform:uppercase"
                                                        value="1">
                                                    <!--end::Input-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Equipo</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="equipo_id" id="equipo_id"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="1241-0-0000" style="text-transform:uppercase"
                                                        value="{{ $equipo->id }}" hidden>
                                                    <input type="text" class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="1241-0-0000" style="text-transform:uppercase"
                                                        value="{{ $equipo->tipo }} {{ $equipo->marca }} | {{ $equipo->inventario }}"
                                                        readonly>
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
                                                                <option value="{{ $equipo->departamento_id }}" selected>
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
                                                    <label class="required fw-bold fs-6 mb-2">observacion</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="observacion" id="observacion"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="No funciona porque ..."
                                                        style="text-transform:uppercase" value="">
                                                    <!--end::Input-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7 fv-plugins-icon-container" hidden>
                                                    <!--begin::Input-->
                                                    <input type="text" name="tipo" id="tipo"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="No funciona porque ..."
                                                        style="text-transform:uppercase" value="MANTENIMIENTO">
                                                    <!--end::Input-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10">
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
                                            <div class="d-flex flex-column scroll-y me-n7 pe-7"
                                                id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                                data-kt-scroll-activate="{default: false, lg: true}"
                                                data-kt-scroll-max-height="auto"
                                                data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                                data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                                data-kt-scroll-offset="300px" style="max-height: 661px;">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7 fv-plugins-icon-container" hidden>
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">identificador</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="identificador" id="identificador"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="1241-0-0000" style="text-transform:uppercase"
                                                        value="1">
                                                    <!--end::Input-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Equipo</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="equipo_id" id="equipo_id"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="1241-0-0000" style="text-transform:uppercase"
                                                        value="{{ $equipo->id }}" hidden>
                                                    <input type="text" class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="1241-0-0000" style="text-transform:uppercase"
                                                        value="{{ $equipo->tipo }} {{ $equipo->marca }} | {{ $equipo->inventario }}"
                                                        readonly>
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
                                                        <div class="w-100"
                                                            data-select2-id="select2-data-189-svbm">
                                                            <!--begin::Select2-->
                                                            <select
                                                                class="form-select form-select-solid select2-hidden-accessible"
                                                                name="departamento_id" id="departamento_id"
                                                                data-control="select2" data-hide-search="true"
                                                                data-placeholder="Selecciona un departamento"
                                                                data-select2-id="2" tabindex="-1" aria-hidden="true">
                                                                <option value="">Selecciona un departamento</option>
                                                                <option value="{{ $equipo->departamento_id }}" selected>
                                                                    {{ $equipo->Departamento->nombre }}
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
                                                    <label class="required fw-bold fs-6 mb-2">observacion</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="observacion" id="observacion"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="No funciona porque ..."
                                                        style="text-transform:uppercase" value="">
                                                    <!--end::Input-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7 fv-plugins-icon-container" hidden>
                                                    <!--begin::Input-->
                                                    <input type="text" name="tipo" id="tipo"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="No funciona porque ..."
                                                        style="text-transform:uppercase" value="BAJA">
                                                    <!--end::Input-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10">
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
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
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
                                            rowspan="1" colspan="1" aria-label="User: activate to sort column ascending"
                                            style="width: 160.359px;">
                                            Identificador</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                            rowspan="1" colspan="1"
                                            aria-label="Last login: activate to sort column ascending"
                                            style="width: 160.359px;">
                                            Estatus</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                            rowspan="1" colspan="1" aria-label="User: activate to sort column ascending"
                                            style="width: 160.359px;">
                                            Equipo</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                            rowspan="1" colspan="1"
                                            aria-label="Last login: activate to sort column ascending"
                                            style="width: 160.359px;">
                                            Observacion</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                            rowspan="1" colspan="1"
                                            aria-label="Last login: activate to sort column ascending"
                                            style="width: 160.359px;">
                                            Tipo</th>
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
                                                <a href="{{ route('equipo.show', $x->equipo_id) }}"
                                                    class="text-gray-800 text-hover-primary mb-1">
                                                    {{ $x->Equipo->tipo }} {{ $x->Equipo->marca }}
                                                </a>
                                            </td>
                                            <td style="text-transform:uppercase">
                                                {{ $x->observacion }}
                                            </td>
                                            <td style="text-transform:uppercase">
                                                {{ $x->tipo }}
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
            <!---=================================================================================================================--->
        </div>
        <!--end::Container-->
    </div>
@endsection

@section('body-ss')
    <script src="{{ asset('/metronic8/demo1/assets/js/custom/apps/content/equipo/show.js') }}"></script>
@endsection
