<?php

require 'app/Models/Job.php';
require 'app/Models/Project.php';

$job1 = new Job('PHP Developer','This is an awesome job');
$job1->months = 2;

$job2 = new Job('JavaScript', 'This is an awesome job');
$job2->months = 5;

$job3 = new Job('','This is an awesome job');
$job3->months = 3;

$project1 = new Project('Project 1', 'Description 1');

$jobs = [
    $job1,
    $job2,
    $job3
  ];

$projects = [
    $project1
];

  
  function printElement($job) {
    //Contenido de la Funcion 
    if($job->visible == false){
      return;
    }
  
    echo '<li class="work-position">';
    echo '<h5>'. $job->getTitle() . '</h5>';
    echo '<p>'. $job->description . '</p>';
    echo '<p>'. $job->getDurationAsString() .'</p>';
    //echo '<p>'. $totalMonths . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }