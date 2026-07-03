@extends('layouts.app')

@section('title', config('app.name'))

@section('content')
    {{-- Hero Section --}}
    <section class="bg-dark text-white py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1 class="display-4 fw-bold mb-3">Welcome to {{ config('app.name') }}</h1>
                    <p class="lead mb-4 text-secondary">We deliver innovative solutions that drive business growth and transform ideas into reality. Partner with us to build the future.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-primary btn-lg px-4">Get Started</a>
                        <a href="#" class="btn btn-outline-light btn-lg px-4">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-5 text-center mt-4 mt-lg-0">
                    <i class="bi bi-rocket-takeoff display-1 text-primary"></i>
                </div>
            </div>
        </div>
    </section>

    {{-- Features / Services --}}
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Services</h2>
                <p class="text-muted">What we offer to help your business succeed</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 text-center p-4">
                        <div class="card-body">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
                                <i class="bi bi-laptop text-primary fs-2"></i>
                            </div>
                            <h5 class="card-title fw-semibold">Web Development</h5>
                            <p class="card-text text-muted small">Custom web applications built with modern technologies to meet your specific business needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 text-center p-4">
                        <div class="card-body">
                            <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
                                <i class="bi bi-phone text-success fs-2"></i>
                            </div>
                            <h5 class="card-title fw-semibold">Mobile Solutions</h5>
                            <p class="card-text text-muted small">Native and cross-platform mobile applications that engage users and drive results.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 text-center p-4">
                        <div class="card-body">
                            <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
                                <i class="bi bi-cloud text-warning fs-2"></i>
                            </div>
                            <h5 class="card-title fw-semibold">Cloud Services</h5>
                            <p class="card-text text-muted small">Scalable cloud infrastructure and DevOps solutions for optimal performance and reliability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Recent Blog Posts --}}
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Recent Blog Posts</h2>
                <p class="text-muted">Latest insights and updates from our team</p>
            </div>
            <div class="row g-4">
                @forelse ($recentPosts as $post)
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge bg-primary bg-opacity-10 text-primary">{{ $post->created_at->format('M d, Y') }}</span>
                                </div>
                                <h5 class="card-title fw-semibold">{{ $post->title }}</h5>
                                <p class="card-text text-muted small">{{ Str::limit($post->summary ?? $post->content, 120) }}</p>
                                <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <i class="bi bi-journal-text display-4 text-muted"></i>
                        <p class="text-muted mt-3">No blog posts available yet. Check back soon!</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
