@extends('frontEnd.master')

@section('title')
    Home
@endsection

@section('content')
<div class="row grid">
    {{-- <div class="grid-item col-lg-4 col-sm-6 vehicle">
        <a href="#!" class="portfolio__card position-relative d-inline-block w-100">
            <img src="https://source.unsplash.com/s4LntDZqEW8/380x500" alt="Random Image" class="w-100">
        </a>
    </div> --}}
    @foreach($imageCategories as $imagecategory)
    <div class="grid-item col-lg-4 col-sm-6 {{ strtolower(str_replace(' ', '', $imagecategory->category->category_name)) }}">
        <a href="#!" class="portfolio__card position-relative d-inline-block w-100">
            <img src="{{asset($imagecategory->cImage)}}" alt="Category Image" class="w-100">
        </a>
    </div>
    @endforeach
    
    {{-- <div class="grid-item col-lg-4 col-sm-6 animal">
        <a href="#!" class="portfolio__card position-relative d-inline-block w-100">
            <img src="https://source.unsplash.com/LSoZprF1HSw/380x500" alt="Random Image" class="w-100">
        </a>
    </div>
    <div class="grid-item col-lg-4 col-sm-6 vehicle">
        <a href="#!" class="portfolio__card position-relative d-inline-block w-100">
            <img src="https://source.unsplash.com/vI9_zv29VnQ/380x500" alt="Random Image" class="w-100">
        </a>
    </div>
    <div class="grid-item col-lg-4 col-sm-6 road">
        <a href="#!" class="portfolio__card position-relative d-inline-block w-100">
            <img src="https://source.unsplash.com/_SaC-shd2n4/380x500" alt="Random Image" class="w-100">
        </a>
    </div>
    <div class="grid-item col-lg-4 col-sm-6 work-station">
        <a href="#!" class="portfolio__card position-relative d-inline-block w-100">
            <img src="https://source.unsplash.com/QeVmJxZOv3k/380x500" alt="Random Image" class="w-100">
        </a>
    </div>
    <div class="grid-item col-lg-4 col-sm-6 work-station">
        <a href="#!" class="portfolio__card position-relative d-inline-block w-100">
            <img src="https://source.unsplash.com/M1qSY_IuF4c/380x500" alt="Random Image" class="w-100">
        </a>
    </div> --}}
</div>
@endsection