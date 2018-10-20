@extends('layouts.master')
@section('content')
    <section class="py-5" id="description">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="mb-5">About Us</h2>
                </div>
                <div class="col-md-9 about-description">
                    <p>{{ $company[0]->company_description }}</p>
                </div>
            </div>
        </div>
    </section>
    <section id="images">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 about-img">
                    <img src="{{ URL::asset('images/about1.jpg') }}" alt="About 1" class="img-responsive w-100">
                </div>
                <div class="col-md-4 about-img">
                    <img src="{{ URL::asset('images/about3.jpg') }}" alt="About 2" class="img-responsive w-100">
                </div>
                <div class="col-md-4 about-img">
                    <img src="{{ URL::asset('images/about2.jpg') }}" alt="About 3" class="img-responsive w-100">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" id="team">
        <div class="container">
            <h2 class="mb-5">Our Team</h2>
            <div class="row">
                @foreach($team_members as $index => $team_member)
                    @component('components.team_member')
                        @slot('img')
                            {{ URL::asset('images/user'. ($index + 1) .'.png') }}
                        @endslot
                        @slot('name')
                            {{ $team_member->name }}
                        @endslot
                        @slot('description')
                            {{ $team_member->description }}
                        @endslot
                    @endcomponent
                @endforeach
            </div>
        </div>
    </section>
@endsection
