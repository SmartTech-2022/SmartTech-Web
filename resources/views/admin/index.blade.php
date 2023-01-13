@extends('layouts.admin')

@section('content')
    {{-- carousel --}}
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner col-10">
            <div class="carousel-item active container">
                <img src="{{ asset('image\evote.jpg') }}" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image\evote.jpg') }}" class="d-block w-100 img-fluid" alt="..">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image\evote.jpg') }}" class="d-block w-100 img-fluid" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

@endsection
