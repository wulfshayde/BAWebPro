@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Project : {{ $project->project }}</h4>
          <blockquote class="blockquote">
            <p class="mb-0">{{ $project->description }}</p>
          </blockquote>
          <small class="text-muted">
            Created on : {{ $project->formatted_creation_date }}<br/>
            <mark>Estimated completion date : {{  $project->formatted_completion_date }}</mark>
          <hr />
      </div>
    </div>
  </div>
@endsection
