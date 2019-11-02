<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Charting;

class StatisticsController extends Controller
{
    protected $project;
    protected $priorities;
    public $charting;

    public function __construct(Project $project)
    {
        $this->project = $project;
    }

    public function GetItemPrioritiesForProject(Project $project, $type)
    {
        $this->project = $project;
        $this->priorities = $project->company->priorities;

        $charting = new Charting();

        foreach ($this->priorities as $priority)
        {
            $charting->labels->add($priority->priority);
        }

        $series = collect([]);

        foreach($charting->labels as $priority)
        {
            $series->add($this->project->items->where('priority.priority',$priority)->count());
        }
        $charting->series->add($series);
        return response()->json($charting);
    }

    private function FormatResults($results, $type)
    {
        switch($type)
        {
            case "bar":
                $return_str = '{labels:[';
                $is_first = true;
                foreach ($results['labels'] as $label)
                {
                    if(!$is_first){
                        $return_str .= ",";
                    }
                    $return_str .= "'" . $label . "'";
                    $is_first = false;
                }
                $return_str .= '],series:[';
                foreach ($results['series'] as $series_group)
                {
                    $return_str .= "[";
                    $is_first = true;
                    foreach ($series_group as $key => $value)
                    {
                        if(!$is_first){
                            $return_str .= ",";
                        }
                        $return_str .= $value;
                        $is_first = false;
                    }
                    $return_str .= "]";
                }
                $return_str .= ']}';
                return $return_str;
            default:
                return $results;
        }
    }
}
