@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row g-4">
            <div class="col-xl-3 col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-1 small text-uppercase fw-semibold">Total Posts</p>
                                <h2 class="mb-0 fw-bold">{{ $postCount }}</h2>
                            </div>
                            <div class="bg-primary bg-opacity-10 p-3 rounded">
                                <i class="bi bi-file-text text-primary fs-4"></i>
                            </div>
                        </div>
                        <p class="text-muted mt-2 mb-0 small">
                            <span class="text-success fw-semibold">{{ $publishedPostCount }}</span> published
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-1 small text-uppercase fw-semibold">Open Positions</p>
                                <h2 class="mb-0 fw-bold">{{ $jobCount }}</h2>
                            </div>
                            <div class="bg-success bg-opacity-10 p-3 rounded">
                                <i class="bi bi-briefcase text-success fs-4"></i>
                            </div>
                        </div>
                        <p class="text-muted mt-2 mb-0 small">Career listings</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-1 small text-uppercase fw-semibold">Messages</p>
                                <h2 class="mb-0 fw-bold">{{ $messageCount }}</h2>
                            </div>
                            <div class="bg-warning bg-opacity-10 p-3 rounded">
                                <i class="bi bi-envelope text-warning fs-4"></i>
                            </div>
                        </div>
                        <p class="text-muted mt-2 mb-0 small">Contact submissions</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="text-muted mb-1 small text-uppercase fw-semibold">Total Users</p>
                                <h2 class="mb-0 fw-bold">{{ \App\Models\User::count() }}</h2>
                            </div>
                            <div class="bg-info bg-opacity-10 p-3 rounded">
                                <i class="bi bi-people text-info fs-4"></i>
                            </div>
                        </div>
                        <p class="text-muted mt-2 mb-0 small">Registered accounts</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
