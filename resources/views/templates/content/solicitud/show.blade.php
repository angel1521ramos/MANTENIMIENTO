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
                                <div class="fs-6 fw-bold mt-2 mb-3">identificador</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                <input type="text" class="form-control form-control-solid" name="identificador"
                                    style="text-transform:uppercase" value="{{ $solicitud->identificador }}">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">equipo</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9 fv-row fv-plugins-icon-container" data-select2-id="select2-data-453-kbzx">
                                <div class="w-100" data-select2-id="select2-data-189-svbm">
                                    <!--begin::Select2-->
                                    <select class="form-select form-select-solid select2-hidden-accessible" name="equipo_id"
                                        id="equipo_id" data-control="select2" data-hide-search="true"
                                        data-placeholder="Selecciona un equipo" data-select2-id="1" tabindex="-1"
                                        aria-hidden="true">
                                        <option value="">Selecciona un equipo</option>
                                        @foreach ($equipo as $x)
                                            <option value="{{ $x->id }}"
                                                {{ old('equipo_id', $solicitud->equipo_id) == $x->id ? 'selected' : '' }}>
                                                {{ $x->tipo }} {{ $x->marca }} | {{ $x->inventario }}</option>
                                        @endforeach
                                    </select>
                                    <!--end::Select2-->
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
                                <div class="fs-6 fw-bold mt-2 mb-3">departamento</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9 fv-row fv-plugins-icon-container" data-select2-id="select2-data-453-kbzx">
                                <div class="w-100" data-select2-id="select2-data-189-svbm">
                                    <!--begin::Select2-->
                                    <select class="form-select form-select-solid select2-hidden-accessible"
                                        name="departamento_id" id="departamento_id" data-control="select2"
                                        data-hide-search="true" data-placeholder="Selecciona un departamento"
                                        data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option value="">Selecciona un departamento</option>
                                        @foreach ($departamento as $x)
                                            <option value="{{ $x->id }}"
                                                {{ old('departamento_id', $solicitud->departamento_id) == $x->id ? 'selected' : '' }}>
                                                {{ $x->nombre }}</option>
                                        @endforeach
                                    </select>
                                    <!--end::Select2-->
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
                                <div class="fs-6 fw-bold mt-2 mb-3">observacion</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                <input type="text" class="form-control form-control-solid" name="observacion"
                                    style="text-transform:uppercase" value="{{ $solicitud->observacion }}">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">
                                    <span class="required">Tipo</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="Seleccione el tipo de mantenimiento que se realizara"
                                        aria-label="Seleccione el tipo de mantenimiento que se realizara"></i>
                                </div>
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
                                        <option value="MANTENIMIENTO"
                                            {{ old('tipo', $solicitud->tipo) == 'MANTENIMIENTO' ? 'selected' : '' }}>
                                            MANTENIMIENTO</option>
                                        <option value="PETICION"
                                            {{ old('tipo', $solicitud->tipo) == 'PETICION' ? 'selected' : '' }}>PETICION
                                        </option>
                                        <option value="SOPORTE"
                                            {{ old('tipo', $solicitud->tipo) == 'SOPORTE' ? 'selected' : '' }}>SOPORTE
                                        </option>
                                    </select>
                                    <!--end::Select2-->
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Heading-->
                            <div class="mb-3">
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
                            <div class="fv-row fv-plugins-icon-container">
                                <!--begin::Radio group-->
                                <div class="btn-group w-100" data-kt-buttons="true"
                                    data-kt-buttons-target="[data-kt-button]">
                                    <!--begin::Radio-->
                                    <label
                                        class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline 
                                        {{ $solicitud->estatus == 'PENDIENTE' ? 'btn-active-danger active' : 'btn-active-danger' }}"
                                        data-kt-button="true">
                                        <!--begin::Input-->
                                        <input class="btn-check" type="radio" name="estatus" value="PENDIENTE" checked>
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
                                        <input class="btn-check" type="radio" name="estatus" value="PROCESO">
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
                                        <input class="btn-check" type="radio" name="estatus" value="FINALIZADO">
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
        </div>
        <!--end::Container-->
    </div>
@endsection

@section('body-ss')
    <script src="{{ asset('/metronic8/demo1/assets/js/custom/apps/content/solicitud/show.js') }}"></script>
@endsection
