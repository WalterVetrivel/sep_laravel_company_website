<div class="col-md-4 project">
    @if(Route::is('portfolio'))
    <a data-toggle="modal" data-target="#{{$project_id}}">
    @else
    <a href="{{ route('portfolio') }}">
    @endif
    <img src="{{ $project_image }}" alt="Project" class="img-responsive w-100 project-img">
    <div class="project-description">
        <h3>{{ $project_title }}</h3>
        <p>{{ $project_description }}</p>
        @if(Request::is('/'))
        <a href="{{ route('portfolio') }}" class="btn btn-secondary">Learn more</a>
        @else
        <a class="btn btn-secondary" data-toggle="modal" data-target="#{{ $project_id }}">Learn more</a>
        @endif
    </div>
    </a>
</div>
