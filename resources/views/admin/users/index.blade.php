@extends('admin/master')

@section('title', 'Página de las categorias')

@section('content')
    <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Pages</a></li>
            <li class="breadcrumb-item active">Usuarios</li>
        </ol>
    </nav>
    <h2 class="text-bold text-1100 mb-5">Usuarios</h2>
    <div id="members"
         data-list='{"valueNames":["email","customer","mobile_number"],"page":10,"pagination":true}'>
        <div class="row align-items-center justify-content-between g-3 mb-4">
            <div class="col col-auto">
                <div class="search-box">
                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                        <input class="form-control search-input search" type="search" placeholder="Buscar Usuarios"
                               aria-label="Search"/>
                        <span class="fas fa-search search-box-icon"></span>

                    </form>
                </div>
            </div>
            <div class="col-auto">
                <div class="d-flex align-items-center">
                    <button class="btn btn-link text-900 me-4 px-0"><span
                            class="fa-solid fa-file-export fs--1 me-2"></span>Exportar
                    </button>
                </div>
            </div>
        </div>
        <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
            <div class="table-responsive scrollbar ms-n1 ps-1">
                <table class="table table-sm fs--1 mb-0">
                    <thead>
                        <tr>
                            <th class="sort align-middle" scope="col" data-sort="customer"
                                style="width:15%; min-width:200px;">ID Usuario
                            </th>
                            <th class="sort align-middle" scope="col" data-sort="email" style="width:15%; min-width:200px;">
                                Nombre
                            </th>
                            <th class="sort align-middle pe-3" scope="col" data-sort="mobile_number"
                                style="width:20%; min-width:200px;">Rol
                            </th>

                        </tr>
                    </thead>
                    <tbody class="list" id="members-table-body">
                        @foreach ($apiData as $user)
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="email align-middle white-space-nowrap"><a class="fw-semi-bold"
                                                                                     href="">{{ $user['userId'] }}</a>
                                </td>

                                <td class="customer align-middle white-space-nowrap"><a
                                        class="d-flex align-items-center text-900 text-hover-1000" href="#!">
                                        <div class="avatar avatar-m"><img class="rounded-circle"
                                                                          src="../assets/img/logosuperchambitas0.png"
                                                                          alt=""/>
                                        </div>
                                        <h6 class="mb-0 ms-3 fw-semi-bold">{{ $user['name'] }}</h6>
                                    </a></td>
                                <td class="mobile_number align-middle white-space-nowrap">
                                    @if($user['role'] == 1)
                                        <span class="fas fa-user-tie"></span> Worker
                                    @else
                                        <span class="fas fa-house-user"></span> Client

                                    @endif

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                <div class="col-auto d-flex">
                    <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a
                        class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                                                                                        data-fa-transform="down-1"></span></a><a
                        class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span
                            class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
                <div class="col-auto d-flex">
                    <button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span>
                    </button>
                    <ul class="mb-0 pagination"></ul>
                    <button class="page-link pe-0" data-list-pagination="next"><span
                            class="fas fa-chevron-right"></span></button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Función para mostrar un toast de éxito
        function showSuccessToast(message) {
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: message,
            });
        }

        // Función para mostrar un toast de error
        function showErrorToast(message) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: message,
            });
        }

        // Verificar si se deben mostrar toasts de error
        @if (session('error'))
        showErrorToast("{{ session('error') }}");
        @endif

        // Verificar si se debe mostrar un toast de éxito
        @if (session('success'))
        showSuccessToast("{{ session('success') }}");

        @endif


    </script>

    @if ($errors->any())
        <script>
            $(document).ready(function () {
                $('#staticBackdrop').modal('show'); // abrir el modal
            });
        </script>
    @endif

@endsection

<div class="modal fade" id="staticBackdrop" tabindex="-1" data-bs-backdrop="static"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="staticBackdropLabel">Agregar Categoria</h5>
                <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span
                        class="fas fa-times fs--1 text-white"></span></button>
            </div>
            <div class="modal-body">
                <form id="postCategory" action="{{ route('category_store') }}" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mb-3">

                        <label class="form-label" for="basic-form-name">Nombre de la Categoria</label>

                        <input class="form-control" name="Category" id="basic-form-name" type="text"
                               placeholder="Categoria"/>
                        <input class="form-control" name="CategoryActive" id="basic-form-name" type="hidden"
                               placeholder="Categoria" value="1"/>
                    </div>

                    <div class="col-12 text-end">
                        <button class="btn btn-outline-primary" type="submit"><span class="far fa-save"></span> Guardar</button>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal"><span
                        class="far fa-times-circle"></span> Cancelar
                </button>
            </div>
        </div>
    </div>
</div>


