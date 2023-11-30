@extends('admin/master')

@section('title', 'Inicio')

@section('content')
    <div class="pb-6">
        <div class="row align-items-center justify-content-between g-3 mb-6">
            <div class="col-12 col-md-auto">
                <h2 class="mb-0">Dashboard</h2>
            </div>
            <div class="col-12 col-md-auto" style="display: none">
                <div class="flatpickr-input-container">
                    <input class="form-control ps-6 datetimepicker" id="datepicker" type="text" data-options='{"dateFormat":"M j, Y","disableMobile":true,"defaultDate":"Mar 1, 2022"}' /><span class="uil uil-calendar-alt flatpickr-icon text-700"></span>
                </div>
            </div>
        </div>
        <div class="px-3 mb-6">
            <div class="row justify-content-between">
                <div class="col-6 col-md-4 col-xxl-2 text-center border-start-xxl border-end-xxl-0 border-bottom-xxl-0 border-end border-bottom pb-4 pb-xxl-0 "><span class="uil fs-3 lh-1 uil-setting text-primary"></span>
                    <h1 class="fs-3 pt-3">@isset($cantidadCategorias)
                            {{ $cantidadCategorias }}
                        @else
                            Cantidad de Categorías no disponible
                        @endisset</h1>
                    <p class="fs--1 mb-0">Total De Categorias</p>
                </div>
                <div class="col-6 col-md-4 col-xxl-2 text-center border-start-xxl border-end-xxl-0 border-bottom-xxl-0 border-end-md border-bottom pb-4 pb-xxl-0"><span class="uil fs-3 lh-1 uil-chat-bubble-user text-info"></span>
                    <h1 class="fs-3 pt-3">@isset($cantidadUsuarios)
                            {{ $cantidadUsuarios }}
                        @else
                            Cantidad de Usuarios no disponible
                        @endisset</h1>
                    <p class="fs--1 mb-0">Usuarios Registrados</p>
                </div>
                <div class="col-6 col-md-4 col-xxl-2 text-center border-start-xxl border-bottom-xxl-0 border-bottom border-end border-end-md-0 pb-4 pb-xxl-0 pt-4 pt-md-0"><span class="uil fs-3 lh-1 uil-envelopes text-primary"></span>
                    <h1 class="fs-3 pt-3">1,366</h1>
                    <p class="fs--1 mb-0">Emails Delivered</p>
                </div>
                <div class="col-6 col-md-4 col-xxl-2 text-center border-start-xxl border-end-md border-end-xxl-0 border-bottom border-bottom-md-0 pb-4 pb-xxl-0 pt-4 pt-xxl-0"><span class="uil fs-3 lh-1 uil-envelope-open text-info"></span>
                    <h1 class="fs-3 pt-3">1,200</h1>
                    <p class="fs--1 mb-0">Emails Opened</p>
                </div>
                <div class="col-6 col-md-4 col-xxl-2 text-center border-start-xxl border-end border-end-xxl-0 pb-md-4 pb-xxl-0 pt-4 pt-xxl-0"><span class="uil fs-3 lh-1 uil-envelope-check text-success"></span>
                    <h1 class="fs-3 pt-3">900</h1>
                    <p class="fs--1 mb-0">Emails Clicked</p>
                </div>
                <div class="col-6 col-md-4 col-xxl-2 text-center border-start-xxl border-end-xxl pb-md-4 pb-xxl-0 pt-4 pt-xxl-0"><span class="uil fs-3 lh-1 uil-envelope-block text-danger"></span>
                    <h1 class="fs-3 pt-3">500</h1>
                    <p class="fs--1 mb-0">Emails Bounce</p>
                </div>
            </div>
        </div>
    </div>
@endsection
