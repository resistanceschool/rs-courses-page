<?php

class LearningPath {
  public $title;
  public $description;
  public $course_ids;
  public $courses;

  function __construct($json, $allCourses) {
    $this->title = $json->{'title'};
    $this->description = $json->{'description'};
    $this->course_ids = $json->{'course_ids'};

    $courseArray = array();
    foreach($this->course_ids as $slug) {
      $courseArray[] = $allCourses[$slug];
    }
    $this->courses = $courseArray;
  }
}