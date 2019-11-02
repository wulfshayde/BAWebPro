@extends('layouts.app', ['activePage' => 'project', 'titlePage' => __('Project')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ $active_project->project }}</h4>
                        </div>
                        <div class="card-body">
                            {{ $active_project->description }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header card-header-tabs card-header-warning">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    {{--<span class="nav-tabs-title">Areas:</span>--}}
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#items" data-toggle="tab">
                                                <i class="material-icons">list</i> Items
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#requirements" data-toggle="tab">
                                                <i class="material-icons">feedback</i> Requirements
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tools" data-toggle="tab">
                                                <i class="material-icons">build</i> Tools
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="items">
                                    <table class="table">
                                        <tbody>
                                        @foreach($active_project->items as $item)
                                            <tr>
                                                <td>{{ $item->itemId() }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td><div class="badge" style="background-color: {{ $item->priority->colour }}">&nbsp;</div> {{ $item->priority->priority }}</td>
                                                <td><div class="badge" style="background-color: {{ $item->status->colour }};">&nbsp;</div> {{ $item->status->status }}</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="View Item {{ $item->itemId() }}"
                                                            class="btn btn-primary btn-link btn-sm">
                                                        <i class="material-icons">search</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="requirements">
                                    <table class="table">
                                        <tbody>
                                        @foreach($active_project->requirements as $r)
                                            <tr>
                                                <td>{{ $r->requirementId() }}</td>
                                                <td>{{ $r->requirement }}</td>
                                                <td><div class="badge" style="background-color: {{ $r->priority->colour }}">&nbsp;</div> {{ $r->priority->priority }}</td>
                                                <td class="td-actions text-right">
                                                    <button type="button" rel="tooltip" title="View Requirement {{ $r->requirementId() }}"
                                                            class="btn btn-primary btn-link btn-sm">
                                                        <i class="material-icons">search</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="tools">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-link btn-sm">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-link btn-sm">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                               checked>
                                                        <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Flooded: One year later, assessing what was lost and what was found when
                                                a ravaging rain swept through metro Detroit
                                            </td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-link btn-sm">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-link btn-sm">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                               checked>
                                                        <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task"
                                                        class="btn btn-primary btn-link btn-sm">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove"
                                                        class="btn btn-danger btn-link btn-sm">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="card">--}}
            {{--<div class="card-header card-header-warning">--}}
            {{--<h4 class="card-title">Items</h4>--}}
            {{--<p class="card-category">All Items for {{ $active_project->project }}</p>--}}
            {{--</div>--}}
            {{--<div class="card-body table-responsive">--}}
            {{--<table class="table table-hover">--}}
            {{--<thead class="text-warning">--}}
            {{--<th>ID</th>--}}
            {{--<th>Item</th>--}}
            {{--<th>Priority</th>--}}
            {{--<th>Status</th>--}}
            {{--</thead>--}}
            {{--<tbody>--}}
            {{--@foreach($active_project->items as $item)--}}
            {{--<tr>--}}
            {{--<th scope="row">{{ $item->itemId() }}</th>--}}
            {{--<td>{{ $item->title }}</td>--}}
            {{--<td><div class="badge" style="background-color: {{ $item->priority->colour }}">&nbsp;</div> {{ $item->priority->priority }}</td>--}}
            {{--<td><div class="badge" style="background-color: {{ $item->status->colour }};">&nbsp;</div> {{ $item->status->status }}</td>--}}
            {{--</tr>--}}
            {{--@endforeach--}}
            {{--</tbody>--}}
            {{--</table>--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
@endsection

