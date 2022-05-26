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
                                        <select class="form-select form-select-solid select2-hidden-accessible" name="tecnico_id"
                                            id="tecnico_id" data-control="select2" data-hide-search="true"
                                            data-placeholder="Selecciona el tipo" data-select2-id="1" tabindex="-1"
                                            aria-hidden="true">
                                            <option value="">Selecciona un tecnico</option>
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
                        @elseif($solicitud->estatus == 'FINALIZADO')

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
                            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Borrar cambios</button>
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
