<?php

namespace App\Http\Controllers;

use App\Charts\DefaultChart;
use App\Project;
use App\Status;

class ChartsController extends Controller
{

    public function RequirementPriorities(Project $project, $type)
    {
        $priorities = $this->GetCompanyPriorities($project);
        $labels = $priorities->map(function($priority){
            return $priority->priority;
        });
        $colours = $priorities->map(function($priority){
            return $priority->colour;
        });
        $data = collect([]);
        foreach($priorities as $p)
        {
            $count = $project->requirements()->where('priority_id', $p->id)->count();
            $data->push($count);
        }

        $chart = new DefaultChart();
        //$chart->displayLegend(false);
        $chart->labels($labels);
        $chart->dataset('Requirement Priorities',$type,$data)->backgroundColor($colours);
        return view('charts.mini.chart', compact('chart'));
    }

    public function GetPriorities(Project $project, $type)
    {
        $title = "Priorities";
        $priorities = $this->GetCompanyPriorities($project);
        $labels = $priorities->map(function($priority){
            return $priority->priority;
        });
        $colours = $priorities->map(function($priority){
            return $priority->colour;
        });

        $items = collect([]);
        $requirements = collect([]);
        $stories = collect([]);

        foreach($priorities as $p){
            $items->push($project->items()->where('priority_id', $p->id)->count());


            $count = 0;
            $count2 = $project->requirements()->where('priority_id', $p->id)->count();
            foreach($project->items as $i)
            {
                $count += $i->user_stories()->where('priority_id', $p->id)->count();
            }
            $stories->push($count);
            $requirements->push($count2);
        }

        $chart = new DefaultChart();
        //$chart->displayLegend(false);
        $chart->labels($labels);
        $chart->dataset('Item Priorities', $type, $items)->backgroundColor('#5cb85c');
        $chart->dataset('Requirement Priorities', $type, $requirements)->backgroundColor('#d9534f');
        $chart->dataset('User Story Priorities', $type, $stories)->backgroundColor('#f0ad4e');
        return view('charts.mini.chart', compact('chart', 'title'));
    }

    public function ItemPriorities(Project $project, $type)
    {
        $priorities = $this->GetCompanyPriorities($project);
        $labels = $priorities->map(function($priority){
            return $priority->priority;
        });
        $colours = $priorities->map(function($priority){
            return $priority->colour;
        });
        $data = collect([]);
        foreach($priorities as $p){
            $data->push($project->items()->where('priority_id', $p->id)->count());
        }
        $chart = new DefaultChart();
        //$chart->displayLegend(false);
        $chart->labels($labels);
        $chart->dataset('Item Priorities',$type,$data)->backgroundColor($colours);
        return view('charts.mini.chart', compact('chart'));
    }

    public function GetItemStatus(Project $project, $type)
    {
        $title = "Item Status";
        $status = Status::all();
        $labels = $status->map(function($s){
            return $s->status;
        });
        $colours = $status->map(function($s){
            return $s->colour;
        });
        $data = collect([]);
        foreach($status as $s){
            $data->push($project->items()->where('status_id', $s->id)->count());
        }
        $chart = new DefaultChart();
        //$chart->displayLegend(false);
        $chart->labels($labels);
        $chart->dataset('Item Status', $type, $data)->backgroundColor($colours);
        return view('charts.mini.chart', compact('chart', 'title'));
    }

    private function GetCompanyPriorities(Project $project)
    {
        $priorities = collect([]);
        $company_priorities = $project->company->priorities()->orderBy('value', 'asc')->get();

        foreach ($company_priorities as $priority)
        {
            $priorities->push($priority);
        }

        return $priorities;
    }

}
