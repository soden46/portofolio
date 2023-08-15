@extends('admin.layouts.app')
@section('title', 'Home')

<style>
    .card-content {
        max-height: 250px;
        overflow-y: scroll;
        -webkit-overflow-scrolling: touch;
    }
</style>

@section('content')
<section class="row">
    <div class="col-12 col-lg-12">
        <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                <div class="stats-icon purple mb-2">
                                    <i class="fa-solid fa-brain text-white"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">
                                    Skills
                                </h6>
                                <h6 class="font-extrabold mb-0">{{ $skill }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                <div class="stats-icon blue mb-2">
                                    <i class="fa-solid fa-briefcase text-white"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Experiences</h6>
                                <h6 class="font-extrabold mb-0">{{ $experience }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                <div class="stats-icon green mb-2">
                                    <i class="fa-solid fa-globe text-white"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Projects</h6>
                                <h6 class="font-extrabold mb-0">{{ $portfolio }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                <div class="stats-icon red mb-2">
                                    <i class="fa-solid fa-award text-white"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Awards</h6>
                                <h6 class="font-extrabold mb-0">{{ $award }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Repository Github Saya</h4>
                    </div>
                    <div class="card-content pb-0">
                        @foreach ($datarepos as $key => $item)
                        <div class="recent-message d-flex px-4 mb-0">
                            <div class="avatar avatar-md">
                                <img src="{{ asset('assets/images/avatar.ico') }}" />
                            </div>
                            <div class="name ms-4">
                                <h6 class="mb-1">{{ $item->name }} ({{ $item->language }})</h6>
                                <p class="text-muted mb-0">Last Update : {{ date('Y-m-d H:i:s', strtotime($item->updated_at)) }}</p>
                            </div>
                        </div>
                        <hr />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
@endsection