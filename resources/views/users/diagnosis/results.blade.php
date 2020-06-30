@extends('layouts.backend.app')

@section('title', 'Hasil Diagnosa')

@section('content')

<div class="breadcrumb">
    <h1>Hasil Diagnosa</h1>
</div>
<div class="separator-breadcrumb border-top"></div>

<section class="ul-widget-stat-s1">
    <div class="row">
        <div class="col">
            <div class="card mb-2">
                <div class="card-body">
                    <div class="ul-widget__row">
                        <div class="ul-widget-stat__font"><i class="i-Bar-Chart text-danger"></i></div>
                        <div class="ul-widget__content">
                            <p class="m-0">Nama Penyakit</p>
                            <h4 class="heading">80%</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-sm-6">
            <div class="timeline-card card">
                <div class="card-body">
                    <div class="mb-1"><strong class="mr-1">Info Penyakit</strong>
                        <p class="text-muted">16 hours ago</p>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi dicta beatae illo illum iusto iste mollitia explicabo quam officia. Quas ullam, quisquam architecto aspernatur enim iure debitis dignissimos suscipit
                        ipsa.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="timeline-card card">
                <div class="card-body">
                    <div class="mb-1"><strong class="mr-1">Saran Dokter</strong>
                        <p class="text-muted">16 hours ago</p>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi dicta beatae illo illum iusto iste mollitia explicabo quam officia. Quas ullam, quisquam architecto aspernatur enim iure debitis dignissimos suscipit
                        ipsa.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection