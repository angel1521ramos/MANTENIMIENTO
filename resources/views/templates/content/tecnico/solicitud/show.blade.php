@extends('templates.main')

@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title fs-3 fw-bolder">Datos de la solicitud</div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Form-->
                <form id="kt_project_settings_form" name="kt_project_settings_form"
                    class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                    action="{{ route('solicitud.update', $solicitud->id) }}" novalidate="novalidate">
                    @csrf
                    @method('PUT')
                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Consecutivo</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                <input type="text" class="form-control" name="identificador"
                                    style="text-transform:uppercase" value="{{ $solicitud->identificador }}" readonly>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Equipo</div>
                            </div>
                            <!--end::Col-->

                            @if ($solicitud->tipo == 'PETICION')
                                <!--begin::Input-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container"
                                    data-select2-id="select2-data-453-kbzx">
                                    <div class="w-100" data-select2-id="select2-data-189-svbm">
                                        <!--begin::Select2-->
                                        <select class="form-select form-select-solid select2-hidden-accessible"
                                            name="peticion_equipo" id="peticion_equipo" data-control="select2"
                                            data-hide-search="true" data-placeholder="Selecciona el tipo"
                                            data-select2-id="3" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-21-2sb5"></option>
                                            <option value="COMPUTADORA"
                                                {{ old('peticion_equipo', $solicitud->peticion_equipo) == 'COMPUTADORA' ? 'selected' : '' }}>
                                                COMPUTADORA</option>
                                            <option value="IMPRESORA"
                                                {{ old('peticion_equipo', $solicitud->peticion_equipo) == 'IMPRESORA' ? 'selected' : '' }}>
                                                IMPRESORA
                                            </option>
                                            <option value="REGULADOR"
                                                {{ old('peticion_equipo', $solicitud->peticion_equipo) == 'REGULADOR' ? 'selected' : '' }}>
                                                REGULADOR
                                            </option>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input-->
                            @else
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container"
                                    data-select2-id="select2-data-453-kbzx">
                                    <div class="w-100" data-select2-id="select2-data-189-svbm">
                                        <!--begin::Select2-->
                                        <select class="form-select form-select-solid select2-hidden-accessible"
                                            name="equipo_id" id="equipo_id" data-control="select2" data-hide-search="true"
                                            data-placeholder="Selecciona un equipo" data-select2-id="1" tabindex="-1"
                                            aria-hidden="true">
                                            <option value="">Selecciona un equipo</option>
                                            @foreach ($equipo as $x)
                                                <option value="{{ $x->id }}"
                                                    {{ old('equipo_id', $solicitud->equipo_id) == $x->id ? 'selected' : '' }}>
                                                    {{ $x->tipo }} {{ $x->marca }} | {{ $x->inventario }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--begin::Col-->
                            @endif



                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Departamento</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                <input type="text" class="form-control" name="departamento_id"
                                    style="text-transform:uppercase" value="{{ $solicitud->departamento_id }}" hidden>
                                <input type="text" class="form-control" style="text-transform:uppercase"
                                    value="{{ $solicitud->Departamento->nombre }}" readonly>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Observacion</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                <input type="text" class="form-control form-control-solid" style="text-transform:uppercase"
                                    value="" hidden>
                                <textarea name="observacion" class="form-control form-control-solid" style="text-transform:uppercase"
                                    aria-label="With textarea">{{ $solicitud->observacion }}</textarea>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Tipo</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                <input type="text" class="form-control" name="tipo" style="text-transform:uppercase"
                                    value="{{ $solicitud->tipo }}" readonly>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
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
                                        {{ $solicitud->estatus == 'PENDIENTE' ? 'btn-active-danger active' : 'btn-active-danger' }}"
                                        data-kt-button="true">
                                        <!--begin::Input-->
                                        <input class="btn-check" type="radio" name="estatus" value="PENDIENTE"
                                            {{ $solicitud->estatus == 'PENDIENTE' ? 'checked' : '' }}>
                                        <!--end::Input-->
                                        PENDIENTE
                                    </label>
                                    <!--end::Radio-->
                                    <!--begin::Radio-->
                                    <label
                                        class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline 
                                        {{ $solicitud->estatus == 'PROCESO' ? 'btn-active-success active' : 'btn-active-success' }}"
                                        data-kt-button="true">
                                        <!--begin::Input-->
                                        <input class="btn-check" type="radio" name="estatus" value="PROCESO"
                                            {{ $solicitud->estatus == 'PROCESO' ? 'checked' : '' }}>
                                        <!--end::Input-->
                                        PROCESO
                                    </label>
                                    <!--end::Radio-->
                                    <!--begin::Radio-->
                                    <label
                                        class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline 
                                        {{ $solicitud->estatus == 'FINALIZADO' ? 'btn-active-warning active' : 'btn-active-warning' }}"
                                        data-kt-button="true">
                                        <!--begin::Input-->
                                        <input class="btn-check" type="radio" name="estatus" value="FINALIZADO"
                                            {{ $solicitud->estatus == 'FINALIZADO' ? 'checked' : '' }}>
                                        <!--end::Input-->
                                        FINALIZADO
                                    </label>
                                    <!--end::Radio-->
                                </div>
                                <!--end::Radio group-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Input group-->
                        @if ($solicitud->estatus == 'PROCESO')
                            <!--begin::Row-->
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-bold mt-2 mb-3 required">Tecnico</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Input-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container"
                                    data-select2-id="select2-data-453-kbzx">
                                    <div class="w-100" data-select2-id="select2-data-189-svbm">
                                        <!--begin::Select2-->
                                        <select class="form-select form-select-solid select2-hidden-accessible"
                                            name="tecnico_id" id="tecnico_id" data-control="select2" data-hide-search="true"
                                            data-placeholder="SELECCIONA UN TECNICO" data-select2-id="1" tabindex="-1"
                                            aria-hidden="true">
                                            <option value="">SELECCIONA UN TECNICO</option>
                                            @foreach ($tecnico as $x)
                                                <option value="{{ $x->id }}"
                                                    {{ old('tecnico_id', $solicitud->tecnico_id) == $x->id ? 'selected' : '' }}>
                                                    {{ $x->nombre }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row mb-8" hidden>
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-bold mt-2 mb-3">Calificacion</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <div class="rating">
                                        <input class="rating-input" name="calificacion" value="0" checked type="radio"
                                            id="kt_rating_input_0" />
                                        <!--end::Reset rating-->

                                        <!--begin::Star 1-->
                                        <label class="rating-label" for="kt_rating_input_1">
                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                        fill="currentColor" />
                                                </svg></span>
                                            <!--end::Svg Icon-->
                                        </label>
                                        <input class="rating-input" name="calificacion" value="1" type="radio"
                                            id="kt_rating_input_1" />
                                        <!--end::Star 1-->

                                        <!--begin::Star 2-->
                                        <label class="rating-label" for="kt_rating_input_2">

                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                        fill="currentColor" />
                                                </svg></span>
                                            <!--end::Svg Icon-->
                                        </label>
                                        <input class="rating-input" name="calificacion" value="2" type="radio"
                                            id="kt_rating_input_2" />
                                        <!--end::Star 2-->

                                        <!--begin::Star 3-->
                                        <label class="rating-label" for="kt_rating_input_3">

                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                        fill="currentColor" />
                                                </svg></span>
                                            <!--end::Svg Icon-->
                                        </label>
                                        <input class="rating-input" name="calificacion" value="3" type="radio"
                                            id="kt_rating_input_3" />
                                        <!--end::Star 3-->

                                        <!--begin::Star 4-->
                                        <label class="rating-label" for="kt_rating_input_4">

                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                        fill="currentColor" />
                                                </svg></span>
                                            <!--end::Svg Icon-->
                                        </label>
                                        <input class="rating-input" name="calificacion" value="4" type="radio"
                                            id="kt_rating_input_4" />
                                        <!--end::Star 4-->

                                        <!--begin::Star 5-->
                                        <label class="rating-label" for="kt_rating_input_5">

                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                        fill="currentColor" />
                                                </svg></span>
                                            <!--end::Svg Icon-->
                                        </label>
                                        <input class="rating-input" name="calificacion" value="5" type="radio"
                                            id="kt_rating_input_5" />
                                        <!--end::Star 5-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        @elseif($solicitud->estatus == 'FINALIZADO')
                            <!--begin::Row-->
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-bold mt-2 mb-3 required">Tecnico</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Input-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container"
                                    data-select2-id="select2-data-453-kbzx">
                                    <div class="w-100" data-select2-id="select2-data-189-svbm">
                                        <!--begin::Select2-->
                                        <select class="form-select form-select-solid select2-hidden-accessible"
                                            name="tecnico_id" id="tecnico_id" data-control="select2" data-hide-search="true"
                                            data-placeholder="SELECCIONA UN TECNICO" data-select2-id="1" tabindex="-1"
                                            aria-hidden="true">
                                            <option value="">SELECCIONA UN TECNICO</option>
                                            @foreach ($tecnico as $x)
                                                <option value="{{ $x->id }}"
                                                    {{ old('tecnico_id', $solicitud->tecnico_id) == $x->id ? 'selected' : '' }}>
                                                    {{ $x->nombre }}
                                                </option>
                                            @endforeach
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
                                    <div class="fs-6 fw-bold mt-2 mb-3">Calificacion</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <div class="rating">
                                        <input class="rating-input" name="calificacion" value="0"
                                            {{ $solicitud->calificacion == '0' ? 'checked ' : '' }} type="radio"
                                            id="kt_rating_input_0" />
                                        <!--end::Reset rating-->

                                        <!--begin::Star 1-->
                                        <label class="rating-label" for="kt_rating_input_1">
                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                        fill="currentColor" />
                                                </svg></span>
                                            <!--end::Svg Icon-->
                                        </label>
                                        <input class="rating-input" name="calificacion" value="1"
                                            {{ $solicitud->calificacion == '1' ? 'checked ' : '' }} type="radio"
                                            id="kt_rating_input_1" />
                                        <!--end::Star 1-->

                                        <!--begin::Star 2-->
                                        <label class="rating-label" for="kt_rating_input_2">

                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                        fill="currentColor" />
                                                </svg></span>
                                            <!--end::Svg Icon-->
                                        </label>
                                        <input class="rating-input" name="calificacion" value="2"
                                            {{ $solicitud->calificacion == '2' ? 'checked ' : '' }} type="radio"
                                            id="kt_rating_input_2" />
                                        <!--end::Star 2-->

                                        <!--begin::Star 3-->
                                        <label class="rating-label" for="kt_rating_input_3">

                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                        fill="currentColor" />
                                                </svg></span>
                                            <!--end::Svg Icon-->
                                        </label>
                                        <input class="rating-input" name="calificacion" value="3"
                                            {{ $solicitud->calificacion == '3' ? 'checked ' : '' }} type="radio"
                                            id="kt_rating_input_3" />
                                        <!--end::Star 3-->

                                        <!--begin::Star 4-->
                                        <label class="rating-label" for="kt_rating_input_4">

                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                        fill="currentColor" />
                                                </svg></span>
                                            <!--end::Svg Icon-->
                                        </label>
                                        <input class="rating-input" name="calificacion" value="4"
                                            {{ $solicitud->calificacion == '4' ? 'checked ' : '' }} type="radio"
                                            id="kt_rating_input_4" />
                                        <!--end::Star 4-->

                                        <!--begin::Star 5-->
                                        <label class="rating-label" for="kt_rating_input_5">

                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                        fill="currentColor" />
                                                </svg></span>
                                            <!--end::Svg Icon-->
                                        </label>
                                        <input class="rating-input" name="calificacion" value="5"
                                            {{ $solicitud->calificacion == '5' ? 'checked ' : '' }} type="radio"
                                            id="kt_rating_input_5" />
                                        <!--end::Star 5-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        @else
                            <!--begin::Row-->
                            <div class="row mb-8" hidden>
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-bold mt-2 mb-3 required">Tecnico</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Input-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container"
                                    data-select2-id="select2-data-453-kbzx">
                                    <div class="w-100" data-select2-id="select2-data-189-svbm">
                                        <!--begin::Select2-->
                                        <select class="form-select form-select-solid select2-hidden-accessible"
                                            name="tecnico_id" id="tecnico_id" data-control="select2" data-hide-search="true"
                                            data-placeholder="SELECCIONA UN TECNICO" data-select2-id="1" tabindex="-1"
                                            aria-hidden="true">
                                            <option value="">SELECCIONA UN TECNICO</option>
                                                <option value="" selected>
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
                            <div class="row mb-8" hidden>
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-bold mt-2 mb-3">Calificacion</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                    <div class="rating">
                                        <input class="rating-input" name="calificacion" value="0" checked type="radio"
                                            id="kt_rating_input_0" />
                                        <!--end::Reset rating-->

                                        <!--begin::Star 1-->
                                        <label class="rating-label" for="kt_rating_input_1">
                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                        fill="currentColor" />
                                                </svg></span>
                                            <!--end::Svg Icon-->
                                        </label>
                                        <input class="rating-input" name="calificacion" value="1" type="radio"
                                            id="kt_rating_input_1" />
                                        <!--end::Star 1-->

                                        <!--begin::Star 2-->
                                        <label class="rating-label" for="kt_rating_input_2">

                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                        fill="currentColor" />
                                                </svg></span>
                                            <!--end::Svg Icon-->
                                        </label>
                                        <input class="rating-input" name="calificacion" value="2" type="radio"
                                            id="kt_rating_input_2" />
                                        <!--end::Star 2-->

                                        <!--begin::Star 3-->
                                        <label class="rating-label" for="kt_rating_input_3">

                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                        fill="currentColor" />
                                                </svg></span>
                                            <!--end::Svg Icon-->
                                        </label>
                                        <input class="rating-input" name="calificacion" value="3" type="radio"
                                            id="kt_rating_input_3" />
                                        <!--end::Star 3-->

                                        <!--begin::Star 4-->
                                        <label class="rating-label" for="kt_rating_input_4">

                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                        fill="currentColor" />
                                                </svg></span>
                                            <!--end::Svg Icon-->
                                        </label>
                                        <input class="rating-input" name="calificacion" value="4" type="radio"
                                            id="kt_rating_input_4" />
                                        <!--end::Star 4-->

                                        <!--begin::Star 5-->
                                        <label class="rating-label" for="kt_rating_input_5">

                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen029.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z"
                                                        fill="currentColor" />
                                                </svg></span>
                                            <!--end::Svg Icon-->
                                        </label>
                                        <input class="rating-input" name="calificacion" value="5" type="radio"
                                            id="kt_rating_input_5" />
                                        <!--end::Star 5-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        @endif
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">

                        <div class="d-flex align-items-left me-6">
                            <div class="my-1 me-5">
                                <!-- begin::Pint-->
                                <a href="{{ route('solicitud.pdf.entrega', $solicitud->id) }}"
                                    class="btn btn-light-info btn-hover-scale me-5">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil022.svg-->
                                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <path opacity="0.3"
                                                d="M5 16C3.3 16 2 14.7 2 13C2 11.3 3.3 10 5 10H5.1C5 9.7 5 9.3 5 9C5 6.2 7.2 4 10 4C11.9 4 13.5 5 14.3 6.5C14.8 6.2 15.4 6 16 6C17.7 6 19 7.3 19 9C19 9.4 18.9 9.7 18.8 10C18.9 10 18.9 10 19 10C20.7 10 22 11.3 22 13C22 14.7 20.7 16 19 16H5ZM8 13.6H16L12.7 10.3C12.3 9.89999 11.7 9.89999 11.3 10.3L8 13.6Z"
                                                fill="currentColor" />
                                            <path d="M11 13.6V19C11 19.6 11.4 20 12 20C12.6 20 13 19.6 13 19V13.6H11Z"
                                                fill="currentColor" />
                                        </svg></span>
                                    <!--end::Svg Icon-->
                                    Entrega
                                </a>
                                <!-- end::Pint-->
                                <!-- begin::Pint-->
                                <a href="{{ route('solicitud.pdf.recepcion', $solicitud->id) }}"
                                    class="btn btn-light-success btn-hover-scale me-5">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil021.svg-->
                                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <path opacity="0.3"
                                                d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z"
                                                fill="currentColor" />
                                            <path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z"
                                                fill="currentColor" />
                                        </svg></span>
                                    <!--end::Svg Icon-->
                                    Solicitud
                                </a>
                                <!-- end::Pint-->
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Borrar
                                cambios</button>
                            <button type="submit" class="btn btn-primary" id="kt_project_settings_submit">Guardar
                                cambios</button>
                        </div>



                    </div>
                    <!--end::Card footer-->
                    <input type="hidden">
                    <div></div>
                </form>
                <!--end:Form-->
            </div>
        </div>
        <!--end::Container-->
    </div>
@endsection

@section('body-ss')
    <script src="{{ asset('/metronic8/demo1/assets/js/custom/apps/content/solicitud/show.js') }}"></script>
@endsection
