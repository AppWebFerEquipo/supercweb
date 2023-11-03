@extends('admin/master')

@section('title', 'Inicio')

@section('content')
    <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active">Default</li>
        </ol>
    </nav>
    <div class="pb-6">
        <div class="row align-items-center justify-content-between g-3 mb-6">
            <div class="col-12 col-md-auto">
                <h2 class="mb-0">Analytics</h2>
            </div>
            <div class="col-12 col-md-auto">
                <div class="flatpickr-input-container">
                    <input class="form-control ps-6 datetimepicker" id="datepicker" type="text" data-options='{"dateFormat":"M j, Y","disableMobile":true,"defaultDate":"Mar 1, 2022"}' /><span class="uil uil-calendar-alt flatpickr-icon text-700"></span>
                </div>
            </div>
        </div>
        <div class="px-3 mb-6">
            <div class="row justify-content-between">
                <div class="col-6 col-md-4 col-xxl-2 text-center border-start-xxl border-end-xxl-0 border-bottom-xxl-0 border-end border-bottom pb-4 pb-xxl-0 "><span class="uil fs-3 lh-1 uil-envelope text-primary"></span>
                    <h1 class="fs-3 pt-3">28,00</h1>
                    <p class="fs--1 mb-0">Total Emails</p>
                </div>
                <div class="col-6 col-md-4 col-xxl-2 text-center border-start-xxl border-end-xxl-0 border-bottom-xxl-0 border-end-md border-bottom pb-4 pb-xxl-0"><span class="uil fs-3 lh-1 uil-envelope-upload text-info"></span>
                    <h1 class="fs-3 pt-3">1,866</h1>
                    <p class="fs--1 mb-0">Emails Sent</p>
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
        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white pt-6 pb-3 border-y border-300">
            <div class="row gx-6">
                <div class="col-12 col-md-6 col-lg-12 col-xl-6 mb-5 mb-md-3 mb-lg-5 mb-xl-2 mb-xxl-3">
                    <div class="scrollbar">
                        <h3>Email Campaign Reports</h3>
                        <p class="text-700">Paid and Verified for each piece of content</p>
                        <div class="echart-email-campaign-report echart-contacts-width"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-12 col-xl-6 mb-1 mb-sm-0">
                    <div class="row align-itms-center mb-5 mb-sm-2 mb-md-4">
                        <div class="col-sm-8 col-md-12 col-lg-8 col-xl-12 col-xxl-8 mb-xl-2 mb-xxl-0">
                            <h3> Marketing Campaign Report</h3>
                            <p class="text-700 mb-lg-0">According to the sales data.</p>
                        </div>
                        <div class="col-sm-4 col-md-12 col-lg-4 col-xl-12 col-xxl-4">
                            <select class="form-select form-select">
                                <option>Ally Aagaard</option>
                                <option>Alec Haag</option>
                                <option>Aagaard</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-sm-8 col-md-12 col-lg-8 col-xl-12 col-xxl-8">
                            <div class="echart-social-marketing-radar" style="min-height:320px; width:100%"></div>
                        </div>
                        <div class="col-sm-4 col-md-12 col-lg-4 col-xl-12 col-xxl-4 d-flex justify-content-end-xxl mt-0">
                            <div class="d-flex flex-1 justify-content-center d-sm-block d-md-flex d-lg-block d-xl-flex d-xxl-block">
                                <div class="mb-4 me-6 me-sm-0 me-md-6 me-lg-0 me-xl-6 me-xxl-0">
                                    <div class="d-flex align-items-center mb-2">
                                        <h4 class="mb-0">15,000</h4><span class="badge badge-phoenix badge-phoenix-primary ms-2">+30.63%</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="fa-solid fa-circle text-warning-300 me-2"></div>
                                        <h6 class="mb-0">Online Campaign</h6>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center mb-2">
                                        <h4 class="mb-0">5,000</h4><span class="badge badge-phoenix badge-phoenix-danger ms-2">+13.52%</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="fa-solid fa-circle text-primary-300 me-2"></div>
                                        <h6 class="mb-0">Offline Campaign</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-6 gy-7 gx-6">
            <div class="col-12 col-md-6">
                <div class="row justify-content-between mb-4">
                    <div class="col-12">
                        <h3>Sales Trends</h3>
                        <p class="text-700">Updated inventory &amp; the sales report.</p>
                    </div>
                    <div class="col-12 d-flex">
                        <div class="d-flex">
                            <div class="fa-solid fa-circle text-info-300 me-2"></div>
                            <h6 class="mb-0 me-3 lh-base">Profit</h6>
                        </div>
                        <div class="d-flex">
                            <div class="fa-solid fa-circle text-primary-200 dark__text-primary-300 me-2"></div>
                            <h6 class="mb-0 lh-base">Revenue</h6>
                        </div>
                    </div>
                </div>
                <div class="echart-sales-trends" style="height:270px; width:100%"></div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row justify-content-between mb-4">
                    <div class="col-auto">
                        <h3>Call Campaign Reports</h3>
                        <p class="text-700">All call campaigns succeeded.</p>
                    </div>
                    <div class="col-12 d-flex">
                        <div class="d-flex">
                            <div class="fa-solid fa-circle text-primary me-2"></div>
                            <h6 class="mb-0 me-3 lh-base">Campaign</h6>
                        </div>
                    </div>
                </div>
                <div class="echart-call-campaign" style="height:290px; width:100%"></div>
            </div>
        </div>
    </div>
@endsection
