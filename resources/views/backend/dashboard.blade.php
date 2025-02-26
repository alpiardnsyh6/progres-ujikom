@extends('layouts.backend')

@section('content')
    {{-- Dashboard --}}
    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card social-card card-colored twitter-card">
            <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                <i class="icon-social-twitter flex-shrink-0"></i>
                <div class="wrapper ms-3">
                <h5 class="mb-0">Twitter Followers</h5>
                <h1 class="mb-0">3200+</h1>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card social-card card-colored facebook-card">
            <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                <i class="icon-social-facebook flex-shrink-0"></i>
                <div class="wrapper ms-3">
                <h5 class="mb-0">facebook likes</h5>
                <h1 class="mb-0">1500+</h1>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card social-card card-colored instagram-card">
            <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                <i class="icon-social-instagram flex-shrink-0"></i>
                <div class="wrapper ms-3">
                <h5 class="mb-0">Instagram Posts</h5>
                <h1 class="mb-0">2320+</h1>
                </div>
            </div>
            </div>
        </div>
    </div>
    {{-- Dashboard --}}
@endsection
