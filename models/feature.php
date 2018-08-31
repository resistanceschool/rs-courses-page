<?php

class Feature {
  public $course;
  public $description;
  public $slug;
  public $image;

  function __construct($json, $allCourses) {
    $this->description = $json->{'description'};
    $this->slug = $json->{'slug'};
    $this->course = $allCourses[$this->slug];

    // default to course image if not provided.
    $this->image = $json->{'image'} ?? $this->course->image();
  }
}