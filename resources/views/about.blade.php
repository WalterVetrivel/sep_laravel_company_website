@extends('layouts.master')
@section('content')
    <section class="py-5" id="description">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="mb-5">About Us</h2>
                </div>
                <div class="col-md-9 about-description">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla numquam, nam dolorum aspernatur illum ad, harum ex, facere suscipit nisi ipsam. Dolore aperiam non iure aliquid! Corrupti expedita molestiae facilis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo rem ullam tenetur quam ut enim, aut mollitia rerum eaque velit soluta. Ut ratione eaque veniam alias, iure non asperiores magni. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur necessitatibus similique molestias eos vel. Adipisci repudiandae dolorem inventore quae illum molestiae a, illo, sapiente doloremque vitae voluptatum error, provident aliquid?</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, dolores itaque odio animi ullam perferendis magni nulla nostrum a repellat officiis, eligendi eum iusto aliquid quod soluta. Consequatur, eum ipsum.Inventore, libero dicta omnis excepturi voluptate animi at magni repudiandae minima, ratione a unde laborum nostrum temporibus numquam dignissimos corrupti reiciendis culpa? Laboriosam, quis numquam. Quae nam inventore quis soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum dolorum suscipit corrupti quasi, nulla nemo soluta laborum magni, hic consectetur sunt repellendus voluptatum beatae iusto autem adipisci. Omnis, eligendi hic? Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nisi iusto reiciendis. Eligendi veniam aliquam recusandae exercitationem eaque accusantium harum? Magni doloribus quae officiis aliquid nesciunt hic accusantium odit dignissimos.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati ex minima totam. Officia perferendis accusantium animi laboriosam provident porro a! Repudiandae sit qui nobis dolore ea neque eius adipisci nulla? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit sapiente quas, a consectetur dolorum quod. Harum distinctio deserunt impedit excepturi quo atque error quas placeat neque. Id, distinctio tempore. Ratione!</p>
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
