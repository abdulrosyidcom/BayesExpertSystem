@extends('layouts.backend.app')

@section('title', 'Dashboard')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/backend/css/select2.min.css') }}">
@endpush

@section('content')
<div class="breadcrumb">
    <h1>Create Dataset</h1>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

<form action="{{ route('admin.datasets.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <p>Tambah data gejala</p>
            <div class="card mb-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="form-group">
                                    <label for="test">Uji Ke</label>
                                    <input class="form-control" name="test" id="test" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary mt-4">Sumbit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="form-group">
                        <label for="category">Penyakit</label>
                        <select class="form-control" id="diseases" multiple name="diseases[]">
                            @foreach ($diseases as $disease)
                            <option value="{{ $disease->id }}">{{ $disease->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="form-group">
                        <label for="category">Gejala</label>
                        <select class="form-control" id="symptoms" multiple name="symptoms[]">
                            @foreach ($symptoms as $symptom)
                            <option value="{{ $symptom->id }}">{{ $symptom->symptom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@push('js')
<script src="{{ asset('assets/backend/js/select2.min.js') }}"></script>
<script>
    $('#diseases').select2();
    $('#symptoms').select2();
</script>
@endpush