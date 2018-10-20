@extends('layouts.master')
@section('content')
    <section id="blogs" class="py-5">
        <div class="container">
            <div class="row">
                @foreach($posts as $index => $post)
                    @component('components.blog_card')
                        @slot('post_image')
                            {{ URL::asset('images/'. ($post->image)) }}
                        @endslot
                        @slot('post_title')
                            {{ $post->title }}
                        @endslot
                        @slot('post_excerpt')
                            {{ \Illuminate\Support\Str::words($post->content, 10, '...') }}
                        @endslot
                        @slot('post_id')
                            {{ $post->id }}
                        @endslot
                    @endcomponent
                @endforeach
            </div>
        </div>
    </section>
@endsection
