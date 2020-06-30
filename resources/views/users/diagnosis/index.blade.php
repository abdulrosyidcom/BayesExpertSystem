@extends('layouts.backend.app')

@section('title', 'Dashboard')

@section('content')

<div class="breadcrumb">
    <h1>Gejala</h1>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <form action="{{ route('users.diagnosis.proccess') }}" method="POST">
                    @csrf
                    @foreach ($symtoms as $symtom)
                        <label class="checkbox checkbox-outline-primary">
                            <input type="checkbox" id="{{ $symtom->id }}" name="symptom[]" value="{{ $symtom->id }}"/>
                            <span>{{ $symtom->symptom }}</span>
                            <span class="checkmark"></span>
                        </label>
                    @endforeach

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection