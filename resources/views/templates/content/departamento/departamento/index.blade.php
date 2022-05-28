@extends('templates.main')

@section('toolbar')
    <div class="toolbar" style="margin-bottom: 100px;" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Lista total </h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">
                        Departamentos
                    </li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
@endsection

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
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <!--begin::Add user-->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modal_departamento_index">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                            transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor">
                                        </rect>
                                    </svg>
                                </span>Añadir departamento
                            </button>
                            <!--end::Add user-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Modal - Add task-->
                        <div class="modal fade" id="modal_departamento_index" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header" id="modal_departamento_index_header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bolder">Añadir departamento</h2>
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
                                        <form id="form_departamento_index" name="form_departamento_index"
                                            class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                                            action="{{ route('departamento.store') }}">
                                            @csrf
                                            <!--begin::Scroll-->
                                            <div class="d-flex flex-column scroll-y me-n7 pe-7"
                                                id="modal_departamento_index_scroll" data-kt-scroll="true"
                                                data-kt-scroll-activate="{default: false, lg: true}"
                                                data-kt-scroll-max-height="auto"
                                                data-kt-scroll-dependencies="#modal_departamento_index_header"
                                                data-kt-scroll-wrappers="#modal_departamento_index_scroll"
                                                data-kt-scroll-offset="300px" style="max-height: 661px;">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Nombre</label>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                        title=""
                                                        data-bs-original-title="Ingrese el nombre del departamento"
                                                        aria-label="Ingrese el nombre del departamento"></i>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="nombre" id="nombre"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Ejemplo: Dirección de Tecnologias de la Información"
                                                        style="text-transform:uppercase" value="">
                                                    <!--end::Input-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Identificador</label>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                        title=""
                                                        data-bs-original-title="Ingrese el identificador del departamento"
                                                        aria-label="Ingrese el identificador del departamento"></i>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="identificador" id="identificador"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Ejemplo: DSTI" style="text-transform:uppercase" value="">
                                                    <!--end::Input-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Responsable</label>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                        title=""
                                                        data-bs-original-title="Ingrese el responsable directo del departamento"
                                                        aria-label="Ingrese el responsable directo del departamento"></i>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="responsable" id="responsable"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Ejemplo: Ing. Sergio Fernandez Ferreira"
                                                        style="text-transform:uppercase" value="">
                                                    <!--end::Input-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Cargo del responsable</label>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                        title=""
                                                        data-bs-original-title="Ingrese el cargo del responsable directo del departamento"
                                                        aria-label="Ingrese el cargo del responsable directo del departamento"></i>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="cargo_responsable" id="cargo_responsable"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Ejemplo: Director de Tecnologias de la Información"
                                                        style="text-transform:uppercase" value="">
                                                    <!--end::Input-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Direccion</label>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                        title=""
                                                        data-bs-original-title="Ingrese la direccion del departamento"
                                                        aria-label="Ingrese la direccion del departamento"></i>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="direccion" id="direccion"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Ejemplo: Hidalgo #107, Col. Centro, Minatitlán"
                                                        style="text-transform:uppercase" value="">
                                                    <!--end::Input-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">telefono</label>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                        title=""
                                                        data-bs-original-title="Ingrese el telefono del departamento o responsable"
                                                        aria-label="Ingrese el telefono del departamento o responsable"></i>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="telefono" id="telefono"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Ejemplo: 922 000 00 00"
                                                        style="text-transform:uppercase" value="">
                                                    <!--end::Input-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">correo</label>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                        title=""
                                                        data-bs-original-title="Ingrese el correo del departamento o responsable"
                                                        aria-label="Ingrese el correo del departamento o responsable"></i>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="correo" id="correo"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Ejemplo: soporte@minatitlan.gob.mx"
                                                        style="text-transform:uppercase" value="">
                                                    <!--end::Input-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
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
                <!--==================================================================================================================================================-->
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
                                            rowspan="1" colspan="1" aria-label="User: activate to sort column ascending"
                                            style="width: 130px;">
                                            Departamento</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                            rowspan="1" colspan="1"
                                            aria-label="Last login: activate to sort column ascending"
                                            style="width: 260px;">
                                            Responsable</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                            rowspan="1" colspan="1"
                                            aria-label="Last login: activate to sort column ascending"
                                            style="width: 160.359px;">
                                            Direccion</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                            rowspan="1" colspan="1"
                                            aria-label="Last login: activate to sort column ascending" style="width: 80px;">
                                            Telefono</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>

                                <tbody class="text-gray-600 fw-bold">
                                    @foreach ($departamento as $x)
                                        <tr class="even">
                                            <td class="d-flex align-items-center" style="text-transform:uppercase">
                                                <div class="d-flex flex-column">
                                                    <a href="{{ route('departamento.show', $x->id) }}"
                                                        class="text-gray-800 text-hover-primary mb-1">{{ $x->nombre }}</a>
                                                    <span>{{ $x->correo }}</span>
                                                </div>
                                            </td>
                                            <td style="text-transform:uppercase">
                                                <div class="d-flex flex-column">
                                                    <a class="text-gray-800 mb-1">{{ $x->responsable }}</a>
                                                    <span>{{ $x->cargo_responsable }}</span>
                                                </div>

                                            </td>
                                            <td style="text-transform:uppercase">
                                                {{ $x->direccion }}
                                            </td>
                                            <td style="text-transform:uppercase">
                                                {{ $x->telefono }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <!--end::Table-->
                </div>
                <!--==================================================================================================================================================-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
@endsection

@section('body-ss')
    <script src="{{ asset('/metronic8/demo1/assets/js/custom/apps/content/departamento/index.js') }}"></script>
@endsection
