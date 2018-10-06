@extends('layouts.master')
@section('content')
    {{-- Landing Section --}}
    <section id="landing">
        <div class="container main-container py-5">
            <h1 class="mb-3">Company Name</h1>
            <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic soluta excepturi iure reiciendis voluptas repellendus illum veniam blanditiis delectus! Blanditiis at nisi optio sapiente, nam doloremque repudiandae voluptatibus consequuntur aliquam!</p>
            <div class="button-container d-flex flex-wrap">
                <a href="#" class="btn btn-primary btn-lg mr-2">Learn more</a>
                <a href="#" class="btn btn-secondary btn-lg">Our Portfolio</a>
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
                @component('components.service')
                    @slot('service_image')
                        {{ URL::asset('images/service1.png') }}
                    @endslot
                    @slot('service_name')
                        Service 1
                    @endslot
                    @slot('service_description')
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quaerat eaque, vel in ipsa cum quam quae minima archnesciunt fugiat laudantium!
                    @endslot
                @endcomponent
                @component('components.service')
                    @slot('service_image')
                        {{ URL::asset('images/service2.png') }}
                    @endslot
                    @slot('service_name')
                        Service 2
                    @endslot
                    @slot('service_description')
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quaerat eaque, vel in ipsa cum quam quae minima archnesciunt fugiat laudantium!
                    @endslot
                @endcomponent
                @component('components.service')
                    @slot('service_image')
                        {{ URL::asset('images/service3.png') }}
                    @endslot
                    @slot('service_name')
                        Service 3
                    @endslot
                    @slot('service_description')
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quaerat eaque, vel in ipsa cum quam quae minima archnesciunt fugiat laudantium!
                    @endslot
                @endcomponent
                @component('components.service')
                    @slot('service_image')
                        {{ URL::asset('images/service4.png') }}
                    @endslot
                    @slot('service_name')
                        Service 4
                    @endslot
                    @slot('service_description')
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quaerat eaque, vel in ipsa cum quam quae minima archnesciunt fugiat laudantium!
                    @endslot
                @endcomponent
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
                    @component('components.review')
                        @slot('avatar')
                            {{ URL::asset('images/user1.png') }}
                        @endslot
                        @slot('customer_name')
                            John Doe
                        @endslot
                        @slot('review')
                            Lorem ipsum dolor sit amet consectetur elit. Rerum tempora voluptatibus, totam accusantium vel eveniet ut, dicta corporis consequuntur fugiat quae necessitatibus quas veritatis.
                        @endslot
                    @endcomponent
                    <hr>
                    @component('components.review')
                        @slot('avatar')
                            {{ URL::asset('images/user2.png') }}
                        @endslot
                        @slot('customer_name')
                            John Doe
                        @endslot
                        @slot('review')
                            Lorem ipsum dolor sit amet consectetur elit. Rerum tempora voluptatibus, totam accusantium vel eveniet ut, dicta corporis consequuntur fugiat quae necessitatibus quas veritatis.
                        @endslot
                    @endcomponent
                    <hr>
                    @component('components.review')
                        @slot('avatar')
                            {{ URL::asset('images/user3.png') }}
                        @endslot
                        @slot('customer_name')
                            Jane Doe
                        @endslot
                        @slot('review')
                            Lorem ipsum dolor sit amet consectetur elit. Rerum tempora voluptatibus, totam accusantium vel eveniet ut, dicta corporis consequuntur fugiat quae necessitatibus quas veritatis.
                        @endslot
                    @endcomponent
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
                @component('components.project')
                    @slot('project_image')
                        {{ URL::asset('images/project1.jpg') }}
                    @endslot
                    @slot('project_title')
                        Project Title
                    @endslot
                    @slot('project_description')
                        Lorem ipsum dolor sit amet adipisicing elit. Molestias eos aperiam! Ut assumenda rerum atque iste ex consequatur facere fuga!
                    @endslot
                @endcomponent
                @component('components.project')
                    @slot('project_image')
                        {{ URL::asset('images/project2.jpg') }}
                    @endslot
                    @slot('project_title')
                        Project Title
                    @endslot
                    @slot('project_description')
                        Lorem ipsum dolor sit amet adipisicing elit. Molestias eos aperiam! Ut assumenda rerum atque iste ex consequatur facere fuga!
                    @endslot
                @endcomponent
                @component('components.project')
                    @slot('project_image')
                        {{ URL::asset('images/project3.jpg') }}
                    @endslot
                    @slot('project_title')
                        Project Title
                    @endslot
                    @slot('project_description')
                        Lorem ipsum dolor sit amet adipisicing elit. Molestias eos aperiam! Ut assumenda rerum atque iste ex consequatur facere fuga!
                    @endslot
                @endcomponent
            </div>
            <a href="#" class="btn btn-primary btn-lg">View Portfolio</a>
        </div>
    </section>
    {{-- End Projects --}}
@endsection
