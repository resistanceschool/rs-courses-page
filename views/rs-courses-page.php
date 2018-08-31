<?php
  //setup data
  $settings = new Settings($post->post_content);
  $features = $settings->features;
  $learning_paths = $settings->learning_paths;
  $topic_sections = $settings->topic_sections;
  $coming_soon_slugs = $settings->coming_soon_course_slugs;

  $base_url = get_bloginfo('wpurl') . '/course/';
  $user_id = get_current_user_id();
  $coming_soon_tag = 'coming-soon';

  // insert header
  get_header();

  // insert css
  include('_css_libraries.php');
?>
  <div id="primary" class="content-area courses-page">
    <main id="main" class="site-main" role="main">
      <div class='carousel slide' data-ride id='myCarousel'>
        <ol class='carousel-indicators'>
          <?php foreach($features as $index=>$_): ?>
              <li data-slide-to='1' data-target='#myCarousel' class="<?php if ($index==0) {echo 'active';} ?>"></li>
          <?php endforeach ?>
        </ol>
        <div class='carousel-inner'>
          <?php
            foreach($features as $index=>$feature) {
              include('_carousel_item.php');
            }
          ?>
        </div>
        <a class='carousel-control-prev carousel-control white' data-slide='prev' href='#myCarousel' role='button'>
        <span class='fas fa-chevron-left'></span>
        </a>
        <a class='carousel-control-next carousel-control white' data-slide='next' href='#myCarousel' role='button'>
        <span class='fas fa-chevron-right'></span>
        </a>
      </div>

      <?php if($settings->show_learning_path_section): ?>
        <div class='container-fluid bg-gray pb-4'>
          <div class='container'>
            <div class='row gray pt-4 pb-4 tab-intro'>
              <h3 class='col-12 mx-auto tab-header rs-blue mb-2 mt-1'><?php echo $settings->learning_path_title ?></h3>

              <?php if($settings->show_learning_path_subtitle): ?>
                <p class='col-12 col-md-8 mx-auto tab-subheader mb-2'>
                  <?php echo $settings->learning_path_subtitle; ?>
                </p>
              <?php endif ?>
            </div>
            <ul class='row nav nav-tabs flex-column flex-sm-row nav-justified gray' id='myTab'>
              <?php
                foreach($learning_paths as $index=>$learning_path) {
                  $last = count($learning_paths) - 1 == $index;
                  include('_tab.php');
                }
              ?>
            </ul>
            <div class='row tab-content' id='myTabContent'>
              <?php
                foreach($learning_paths as $index=>$learning_path) {
                  include('_tab_content.php');
                }
              ?>
            </div>
          </div>
        </div>
      <?php endif ?>
      <div class='container-fluid pt-2 pb-4'>

        <?php // Recently Viewed Section
          if ($user_id !== 0) {
            $topic_title = "My Recently Viewed Courses";
            $topic_description = "";
            // there might be a more efficient method that calling this so many times
            $recentlyViewed = array();
            foreach($settings->courses as $course) {
              if (Sensei_Utils::user_started_course($course->id, $user_id)) {
                $recentlyViewed[] = $course;
              }
            }
            $topic_courses = $recentlyViewed;

            include('_topic_section.php');
          }
        ?>

        <?php // topic sections
          foreach($topic_sections as $index=>$topic_section) {
            $topic_title = $topic_section->title;
            $topic_description = $topic_section->description;
            $topic_courses = $topic_section->courses;

            include('_topic_section.php');
          }
        ?>
      </div>
        <?php
          foreach($settings->courses as $index=>$course) {
            include('_modal.php');
          }
        ?>
    </main><!-- #main -->
  </div><!-- #primary -->
</div><!-- .wrap -->

<?php
  include('_javascript_libraries.php');

  get_footer();
?>
