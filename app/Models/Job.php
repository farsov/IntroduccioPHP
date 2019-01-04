<?php

namespace App\Models;

class Job extends BaseElement  {

    public function __construct($title, $description) {
        $newTitle = 'Job: ' . $title;
        //parent::__construct($newTitle, $description); // acceder al constructor padre
        $this->title = $newTitle;
    }

    public function getDurationAsString(){
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
        
        return "Job duration: $years years $extraMonths months";
    }

    
}