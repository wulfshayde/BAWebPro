<div class="col-md-3">
  <div class="card">
    <div class="card-header">
      <h4>Projects</h4>
    </div>
    <ul class="list-group list-group-flush">
      @foreach($projects as $project)
        <li class="list-group-item"><a href="{{ url('project/view/' . $project->id) }}">{{ $project->project }}</a></li>
      @endforeach
    </ul>
    <div class="btn btn-primary">Add Project</div>
  </div>
</div>
