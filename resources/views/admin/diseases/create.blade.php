@extends('layouts.backend.app')

@section('title', 'Dashboard')

@section('content')
<div class="breadcrumb">
    <h1>Create Penyakit</h1>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

<div class="row">
    <div class="col-md-6">
        <p>Tambah Data Penyakit</p>
        <div class="card mb-5">
            <div class="card-body">
                <div class="d-flex flex-column">
                    <form action="{{ route('admin.diseases.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="code">Kode</label>
                            <input class="form-control" name="code" id="code" type="text" placeholder="Kode Penyakit">
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Penyakit</label>
                            <input class="form-control" name="name" id="name" type="text" placeholder="Nama Penyakit">
                        </div>
                        <div class="form-group">
                            <label for="probability">Probabilitas</label>
                            <input class="form-control" name="probability" id="probability" type="text" placeholder="Probabilitas">
                        </div>
                        <div class="form-group">
                            <label for="appear">Jumlah Muncul</label>
                            <input class="form-control" name="appear" id="appear" type="text" placeholder="Jumlah Muncul">
                        </div>
                        <div class="form-group">
                            <label for="information">Informasi</label>
                            <textarea class="form-control" name="information" id="information" type="text" placeholder="informasi"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="suggestion">Saran</label>
                            <textarea class="form-control" name="suggestion" id="suggestion" placeholder="Saran"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary pd-x-20 mt-2">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection