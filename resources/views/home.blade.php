@extends('layouts.master')
@section('content')
    {{-- Landing Section --}}
    <section id="landing">
        <div class="container main-container py-5">
            <h1 class="mb-3">Company Name</h1>
            <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic soluta excepturi iure reiciendis voluptas repellendus illum veniam blanditiis delectus! Blanditiis at nisi optio sapiente, nam doloremque repudiandae voluptatibus consequuntur aliquam!</p>
            <div class="button-container d-flex flex-wrap">
                <a href="{{ route('about') }}" class="btn btn-primary btn-lg mr-2">Learn more</a>
                <a href="{{ route('portfolio') }}" class="btn btn-secondary btn-lg">Our Portfolio</a>
            </div>
        </div>
        <div class="container-fluid contact-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 contact-box">
                        <i class="fa fa-phone fa-3x"></i>
                        <p>+0 000 0000</p>
                    </div>
                    <div class="col-md-3 contact-box">
                        <i class="fa fa-envelope fa-3x"></i>
                        <p>contact@company.com</p>
                    </div>
                    <div class="col-md-3 contact-box">
                        <i class="fa fa-facebook fa-3x"></i>
                        <p>facebook.com/company</p>
                    </div>
                    <div class="col-md-3 contact-box">
                        <i class="fa fa-twitter fa-3x"></i>
                        <p>twitter.com/company</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Landing --}}
    {{-- Services Section --}}
    <section id="services" class="py-5">
        <div class="container-fluid px-5">
            <h2 class="mb-5 text-center">Our Services</h2>
            <div class="row">
                @foreach($services as $index => $service)
                    @component('components.service')
                        @slot('service_image')
                            {{ URL::asset('images/service'. ($index + 1)  .'.png') }}
                        @endslot
                        @slot('service_name')
                            {{ $service->service_name }}
                        @endslot
                        @slot('service_description')
                            {{ $service->service_description }}
                        @endslot
                    @endcomponent
                @endforeach
            </div>
        </div>
    </section>
    {{-- End Services --}}
    {{-- Reviews Section --}}
    <section id="reviews" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Customer Reviews</h2>
            <div class="row justify-content-center">
                <div class="col-8">
                    @foreach($reviews as $index => $review)
                        @component('components.review')
                            @slot('avatar')
                                {{ URL::asset('images/user'. ($index + 1) .'.png') }}
                            @endslot
                            @slot('customer_name')
                                {{ $review->customer_name }}
                            @endslot
                            @slot('review')
                                {{ $review->review }}
                            @endslot
                        @endcomponent
                        @if($index < 2)
                        <hr>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- End Reviews --}}
    {{-- Projects Section --}}
    <section id="projects" class="py-5">
        <div class="container-fluid text-center">
            <h2 class="mb-5">Our Projects</h2>
            <div class="row projects-row mb-5">
                @foreach($projects as $index => $project)
                    @component('components.project')
                        @slot('project_image')
                            {{ URL::asset('images/project'. ($index + 1) .'.jpg') }}
                        @endslot
                        @slot('project_title')
                            {{ $project->project_title }}
                        @endslot
                        @slot('project_description')
                            {{ $project->project_description }}
                        @endslot
                        @slot('project_id')
                            project{{ $index }}
                        @endslot
                    @endcomponent
                @endforeach
            </div>
            <a href="{{ route('portfolio') }}" class="btn btn-primary btn-lg">View Portfolio</a>
        </div>
    </section>
    {{-- End Projects --}}
@endsection
