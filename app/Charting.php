<?php

namespace App;

class Charting
{
    public $labels;
    public $series;

    public function __construct()
    {
        $this->labels = collect([]);
        $this->series = collect([]);
    }

}
