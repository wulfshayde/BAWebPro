<div class="card card-chart">
    <div class="card-header">
        <div>{!! $chart->container() !!}</div>
    </div>
    <div class="card-body">
        <h4 class="card-title">{{ $title }}</h4>
        <p class="card-category">
        {{--<span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>--}}
    </div>
    <div class="card-footer">
        <div class="stats">
            {{--<i class="material-icons">access_time</i> updated 4 minutes ago--}}
        </div>
    </div>
</div>
{!! $chart->script() !!}
