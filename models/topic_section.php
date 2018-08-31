<?php

class TopicSection {
  public $title;
  public $category_slug;
  public $description;
  public $courses;

  function __construct($json, $allCourses) {

    $this->category_slug = $json->{'category_slug'};
    $this->description = $json->{'description'};

    $results = Course::slugsForCategory($this->category_slug);

    $courseArray = array();
    foreach($results as $result) {
      $courseArray[] = $allCourses[$result->slug];
    }

    $this->title = $results[0]->title;
    $this->courses = $courseArray;
  }
}