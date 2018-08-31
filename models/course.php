<?php

class Course {
  public $id;
  public $title;
  public $description;
  public $order;
  public $slug;

  function __construct($db_object) {
     $this->id = $db_object->id;
     $this->title = $db_object->title;
     $this->description = $db_object->post_excerpt;
     $this->order = $db_object->menu_order;
     $this->slug = $db_object->slug;
  }

  static function all() {
    $query = "SELECT DISTINCT(p.id) as id, p.post_name as slug, p.post_title as title, p.menu_order as menu_order, p.post_excerpt
            FROM wp_posts p
            WHERE p.post_type = 'course'
            AND p.post_status = 'publish'
            ORDER BY p.menu_order;";
    $results = self::query($query);

    return self::convertToCourses($results);
  }

  function image() {
    return get_the_post_thumbnail_url($this->id);
  }

  static function slugsForCategory($category_slug) {
    $query = "SELECT t.slug as category, p.post_name as slug, t.name as title
              FROM wp_terms t
              INNER JOIN wp_term_taxonomy tt on tt.term_id = t.term_id
              INNER JOIN wp_term_relationships tr on tt.term_taxonomy_id = tr.term_taxonomy_id
              INNER JOIN wp_posts p on p.ID = tr.`object_id`
              where t.slug = '{$category_slug}'
              ORDER BY p.menu_order;";

    return self::query($query);
  }

  static function query($query_string) {
    global $wpdb;

    return $wpdb->get_results($query_string);
  }

  static function convertToCourses($results) {
    $courseArray = array();
    foreach($results as $result) {
      // use slug as the hash key
      $course = new Course($result);
      $courseArray[$course->slug] = $course;
    }

    return $courseArray;
  }
}