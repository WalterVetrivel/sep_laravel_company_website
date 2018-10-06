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
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-5 text-center">Our Services</h2>
                </div>
                <div class="col-md-3 col-sm-6 service py-3">
                    <img src="{{ URL::asset('images/service1.png') }}" alt="Service 1" class="service-image img-responsive">
                    <h3 class="my-3">Service 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quaerat eaque, vel in ipsa cum quam quae minima archnesciunt fugiat laudantium!</p>
                </div>
                <div class="col-md-3 col-sm-6 service py-3">
                    <img src="{{ URL::asset('images/service2.png') }}" alt="Service 2" class="service-image img-responsive">
                    <h3 class="my-3">Service 2</h3>
                    <p>Lorem ipsum dolor sit amet elit. Officiis quaerat eaque, vel in ipsa cum quam quae minima architecto placeat a dicta nesciunt fugiat laudantium!</p>
                </div>
                <div class="col-md-3 col-sm-6 service py-3">
                    <img src="{{ URL::asset('images/service3.png') }}" alt="Service 3" class="service-image img-responsive">
                    <h3 class="my-3">Service 3</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quaerat eaque, vel in ipsa cum quam quae minima architnesciunt fugiat laudantium!</p>
                </div>
                <div class="col-md-3 col-sm-6 service py-3">
                    <img src="{{ URL::asset('images/service4.png') }}" alt="Service 4" class="service-image img-responsive">
                    <h3 class="my-3">Service 4</h3>
                    <p>Lorem ipsum dolor sit amet adipisicing elit. Officiis quaerat eaque, vel in ipsa cum quam quae minima architecto placeat a dicta nesciunt fugiat laudantium!</p>
                </div>
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
                    <div class="row review align-items-center">
                        <div class="col-md-2">
                            <img src="{{ URL::asset('images/user1.png') }}" alt="User" class="img-responsive mb-3">
                        </div>
                        <div class="col-md-10">
                            <h4>John Doe</h4>
                            <p>Lorem ipsum dolor sit amet consectetur elit. Rerum tempora voluptatibus, totam accusantium vel eveniet ut, dicta corporis consequuntur fugiat quae necessitatibus quas veritatis.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row review align-items-center">
                        <div class="col-md-2">
                            <img src="{{ URL::asset('images/user2.png') }}" alt="User" class="img-responsive mb-3">
                        </div>
                        <div class="col-md-10">
                            <h4>John Doe</h4>
                            <p>Lorem ipsum dolor sit amet consectetur elit. Rerum tempora voluptatibus, totam accusantium vel eveniet ut, dicta corporis consequuntur fugiat quae necessitatibus quas veritatis.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row review align-items-center">
                        <div class="col-md-2">
                            <img src="{{ URL::asset('images/user3.png') }}" alt="User" class="img-responsive mb-3">
                        </div>
                        <div class="col-md-10">
                            <h4>Jane Doe</h4>
                            <p>Lorem ipsum dolor sit amet consectetur elit. Rerum tempora voluptatibus, totam accusantium vel eveniet ut, dicta corporis consequuntur fugiat quae necessitatibus quas veritatis.</p>
                        </div>
                    </div>
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
                <div class="col-md-4 project">
                    <img src="{{ URL::asset('images/project1.jpg') }}" alt="Project" class="img-responsive w-100 project-img">
                    <div class="project-description">
                        <h3>Project Title</h3>
                        <p>Lorem ipsum dolor sit amet adipisicing elit. Molestias eos aperiam! Ut assumenda rerum atque iste ex consequatur facere fuga!</p>
                        <a href="#" class="btn btn-secondary">Learn more</a>
                    </div>
                </div>
                <div class="col-md-4 project">
                    <img src="{{ URL::asset('images/project2.jpg') }}" alt="Project" class="img-responsive w-100 project-img">
                    <div class="project-description">
                        <h3>Project Title</h3>
                        <p>Lorem ipsum dolor sit amet adipisicing elit. Molestias eos aperiam! Ut assumenda rerum atque iste ex consequatur facere fuga!</p>
                        <a href="#" class="btn btn-secondary">Learn more</a>
                    </div>
                </div>
                <div class="col-md-4 project">
                    <img src="{{ URL::asset('images/project3.jpg') }}" alt="Project" class="img-responsive w-100 project-img">
                    <div class="project-description">
                        <h3>Project Title</h3>
                        <p>Lorem ipsum dolor sit amet adipisicing elit. Molestias eos aperiam! Ut assumenda rerum atque iste ex consequatur facere fuga!</p>
                        <a href="#" class="btn btn-secondary">Learn more</a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-primary btn-lg">View Portfolio</a>
        </div>
    </section>
    {{-- End Projects --}}
@endsection
