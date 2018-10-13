@extends('layouts.master')
@section('content')
    <div class="container-fluid py-5">
        <h2 class="text-center mb-5">Our Portfolio</h2>
        <div class="row">
            @foreach($projects as $index => $project)
                @component('components.project')
                    @slot('project_image')
                        {{ URL::asset('images/project'. ($index % 4 + 1) .'.jpg') }}
                    @endslot
                    @slot('project_title')
                        {{ $project->project_title }}
                    @endslot
                    @slot('project_description')
                        {{ $project->project_description }}
                    @endslot
                    @slot('project_id')
                        project{{$index}}
                    @endslot
                @endcomponent
                <div class="modal" id="project{{$index}}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">{{ $project->project_title }}</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body p-3 text-center">
                                <img src="{{ URL::asset('images/project'.($index % 4 + 1).'.jpg') }}" alt="Image" class="img-fluid mb-3">
                                <p>{{ $project->project_description }}</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
