@extends('layouts.backend.app')

@section('title', 'Dashboard')

@section('content')
<!-- ============ Body content start ============= -->
<div class="breadcrumb">
    <h1>Dashboard</h1>
    <ul>
        <li><a href="{{ url('admin/dashboard') }}">Admin</a></li>
        <li>Dashboard</li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

<div class="row">
    <div class="col-lg-6 col-md-12">
        <!-- CARD ICON-->
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center"><i class="i-Data-Upload"></i>
                        <p class="text-muted mt-2 mb-2">Today&apos;s Upload</p>
                        <p class="text-primary text-24 line-height-1 m-0">21</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center"><i class="i-Add-User"></i>
                        <p class="text-muted mt-2 mb-2">New Users</p>
                        <p class="text-primary text-24 line-height-1 m-0">21</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-icon mb-4">
                    <div class="card-body text-center"><i class="i-Money-2"></i>
                        <p class="text-muted mt-2 mb-2">Total sales</p>
                        <p class="text-primary text-24 line-height-1 m-0">4021</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-icon-big mb-4">
                    <div class="card-body text-center"><i class="i-Money-2"></i>
                        <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-icon-big mb-4">
                    <div class="card-body text-center"><i class="i-Gear"></i>
                        <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-icon-big mb-4">
                    <div class="card-body text-center"><i class="i-Bell"></i>
                        <p class="line-height-1 text-title text-18 mt-2 mb-0">4021</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card mb-4">
            <div class="card-body p-0">
                <h5 class="card-title m-0 p-3">Sales</h5>
                <div id="echart4" style="height: 300px"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card mb-4">
            <div class="card-body">
                <div class="card-title">Last Month Summary</div>
                <div class="row">
                    <div class="col-md-6">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Item</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Portable Speaker</td>
                                    <td class="font-weight-bold text-success">+ $1200</td>
                                </tr>
                                <tr>
                                    <td>Portable Headphone</td>
                                    <td class="font-weight-bold">In Stock</td>
                                </tr>
                                <tr>
                                    <td>Speaker</td>
                                    <td class="text-danger">Out of stock</td>
                                </tr>
                                <tr>
                                    <td>Watch</td>
                                    <td class="text-warning font-weight-bold">Low stock</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <div id="echart5" style="height: 200px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card mb-4">
            <div class="card-body">
                <div class="card-title">Top Authors</div>
                <div class="d-flex align-items-center border-bottom-dotted-dim pb-3 mb-3"><img class="avatar-md rounded mr-3" src="../../dist-assets/images/faces/2.jpg" alt="" />
                    <div class="flex-grow-1">
                        <h6 class="m-0">David Hopkins</h6>
                        <p class="m-0 text-small text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div>
                        <button class="btn btn-outline-primary btn-rounded btn-sm">Follow</button>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom-dotted-dim pb-3 mb-3"><img class="avatar-md rounded mr-3" src="../../dist-assets/images/faces/3.jpg" alt="" />
                    <div class="flex-grow-1">
                        <h6 class="m-0">James Mitchell</h6>
                        <p class="m-0 text-small text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div>
                        <button class="btn btn-outline-primary btn-rounded btn-sm">Follow</button>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom-dotted-dim pb-3 mb-3"><img class="avatar-md rounded mr-3" src="../../dist-assets/images/faces/4.jpg" alt="" />
                    <div class="flex-grow-1">
                        <h6 class="m-0">Jessica Mitchell</h6>
                        <p class="m-0 text-small text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div>
                        <button class="btn btn-outline-primary btn-rounded btn-sm">Follow</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('assets/backend') }}/js/plugins/echarts.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/scripts/echart.options.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/plugins/datatables.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/scripts/dashboard.v2.script.min.js"></script>
@endpush