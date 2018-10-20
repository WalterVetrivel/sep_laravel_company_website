@extends('layouts.master')
@section('content')
    <section id="blog-post" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-3 text-left">{{ $post[0]->title }}</h2>
                    <p>by <b>{{ $post[0]->author }}</b></p>
                    <img src="{{ URL::asset('images/'. ($post[0]->image)) }}" alt="Blog image" class="img-responsive mb-5">
                    <p>{{ $post[0]->content }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
