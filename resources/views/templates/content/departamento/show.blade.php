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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Informacion especifica </h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('departamento.index') }}" class="text-muted text-hover-primary">Departamentos</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">
                        Detalle
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
            <!---=================================================================================================================--->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title fs-3 fw-bolder">Datos del departamento</div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Form-->
                <form id="kt_project_settings_form" name="kt_project_settings_form"
                    class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                    action="{{ route('departamento.update', $departamento->id) }}" novalidate="novalidate">
                    @csrf
                    @method('PUT')
                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Nombre</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                <input type="text" class="form-control form-control-solid" name="nombre"
                                    style="text-transform:uppercase" value="{{ $departamento->nombre }}">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Identificador</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                <input type="text" class="form-control form-control-solid" name="identificador"
                                    style="text-transform:uppercase" value="{{ $departamento->identificador }}">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Responsable</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                <input type="text" class="form-control form-control-solid" name="responsable"
                                    style="text-transform:uppercase" value="{{ $departamento->responsable }}">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--begin::Col-->
                        </div>
                        <!--end::Row-->
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
                </div>
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
            <!--begin::Card body-->
            <br>
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title fs-3 fw-bolder">Equipos</div>
                    <!--end::Card title-->
                </div>
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
                                            Tipo</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                            rowspan="1" colspan="1" aria-label="User: activate to sort column ascending"
                                            style="width: 160.359px;">
                                            Inventario</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users"
                                            rowspan="1" colspan="1" aria-label="User: activate to sort column ascending"
                                            style="width: 160.359px;">
                                            marca</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>

                                <tbody class="text-gray-600 fw-bold">
                                    @foreach ($equipo as $x)
                                        <tr class="even">
                                            <td style="text-transform:uppercase">
                                                {{ $x->tipo }}
                                            </td>
                                            <td style="text-transform:uppercase">
                                                <a href="{{ route('equipo.show', $x->id) }}"
                                                    class="text-gray-800 text-hover-primary mb-1">
                                                    {{ $x->inventario }}
                                                </a>
                                            </td>
                                            <td style="text-transform:uppercase">
                                                {{ $x->marca }}
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
    <br>
@endsection

@section('body-ss')
    <script src="{{ asset('/metronic8/demo1/assets/js/custom/apps/content/departamento/show.js') }}"></script>
@endsection
