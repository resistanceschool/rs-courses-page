 <?php

class Settings {
  // sections
  public $courses;
  public $features;
  public $learning_paths;
  public $topic_sections;
  public $coming_soon_course_slugs;

  // text
  public $learning_path_title;
  public $learning_path_subtitle;

  // show/hide items
  public $show_learning_path_section;
  public $show_learning_path_subtitle;
  public $show_learning_path_descriptions;

  function __construct(string $json_string) {
    $json = json_decode($json_string);

    $this->courses = Course::all();

    $featuresArray = array();
    foreach($json->{'features'} as $features_json) {
      $featuresArray[] = new Feature($features_json, $this->courses);
    }

    $learning_pathsArray = array();
    foreach($json->{'learning_paths'} as $learning_json) {
      $learning_pathsArray[] = new LearningPath($learning_json, $this->courses);
    }

    $topicArray = array();
    foreach($json->{'topic_sections'} as $topic_json) {
      $topicArray[] = new TopicSection($topic_json, $this->courses);
    }

    $coming_soon_results = Course::slugsForCategory('coming-soon');

    $comingSoonArray = array();
    foreach($coming_soon_results as $result) {
      $comingSoonArray[] = $result->slug;
    }

    $this->features = $featuresArray;
    $this->learning_paths = $learning_pathsArray;
    $this->topic_sections = $topicArray;
    $this->coming_soon_course_slugs = $comingSoonArray;

    $this->learning_path_title = $json->{'learning_path_title'};
    $this->learning_path_subtitle = $json->{'learning_path_subtitle'};

    $this->show_learning_path_section = $json->{'show_learning_path_section'};
    $this->show_learning_path_subtitle = $json->{'show_learning_path_subtitle'};
    $this->show_learning_path_descriptions = $json->{'show_learning_path_descriptions'};
  }

}