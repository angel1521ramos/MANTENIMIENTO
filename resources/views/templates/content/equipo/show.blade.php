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
                                    <!--begin::Select2-->
                                    <select class="form-select form-select-solid select2-hidden-accessible"
                                        name="departamento_id" id="departamento_id" data-control="select2"
                                        data-hide-search="true" data-placeholder="Selecciona un departamento"
                                        data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option value="">Selecciona un departamento</option>
                                        @foreach ($departamento as $x)
                                            <option value="{{ $x->id }}"
                                                {{ old('departamento_id', $equipo->departamento_id) == $x->id ? 'selected' : '' }}>
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
                                        {{ old('tipo', $equipo->tipo) == 'COMPUTADORA' ? 'selected' : '' }}>COMPUTADORA</option>
                                        <option value="IMPRESORA"
                                        {{ old('tipo', $equipo->tipo) == 'IMPRESORA' ? 'selected' : '' }}>IMPRESORA</option>
                                        <option value="REGULADOR"
                                        {{ old('tipo', $equipo->tipo) == 'REGULADOR' ? 'selected' : '' }}>REGULADOR</option>
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
                                <input class="form-control form-control-solid" name="dispositivos" value="{{ $equipo->dispositivos }}"
                                id="dispositivos" />
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>


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
    <script src="{{ asset('/metronic8/demo1/assets/js/custom/apps/content/equipo/show.js') }}"></script>
@endsection
