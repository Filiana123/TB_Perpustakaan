@extends('layouts.dashboard')
@section('title', 'Admin | Dashboard')

@section('content')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="alert alert-success mt-2 mb-2 p-4">
                <span class="fw-bold fs-5">Selamat Datang {{ Auth::user()->name }} Di Dashboard SMP Permata Kaya</span>
            </div>
        </div>
    </div>
@endsection
