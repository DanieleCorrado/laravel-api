@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <img class="my-4" src="{{ asset('storage/' . $project->picture) }}" alt="">
        <h1>{{ $project->name }}</h1>
        <p>
            {{ $project->description }}
        </p>
        <div class="row my-3">
            <span class="col bg-dark text-light">
                Start date : {{ $project->starting_date }}
            </span>
        </div>
        <div class="row my-3">
            <span class="col bg-dark text-light">
                Type: {{ $project->type->name }}
            </span>
            <span class="col bg-dark text-light">
                Project leader: {{ $project->project_leader }}
            </span>
        </div>
        <div class="row my-3">

        </div>

    </div>
@endsection
