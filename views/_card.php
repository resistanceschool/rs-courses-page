<?php // locals $course, $index, $base_url, $show_numbers, $coming_soon_slugs
  $coming_soon = in_array($course->slug, $coming_soon_slugs); ?>

<div class='card-rs mr-4'>
  <a class='js-course lg-show grow <?php if($coming_soon) { echo $coming_soon_tag;} ?>' href="<?php echo $base_url . $course->slug ?>" role='dialog'>
    <div class='course-info' style='background-image: url(<?php echo $course->image(); ?>);'>
      <div class='js-course-description js-hide course-description'>
        <div class='text sm-hide md-hide'>
          <?php echo $course->description ?>
        </div>
      </div>
    </div>
    <h5 class='card-title rs-blue mt-3'><?php echo $course->title ?></h5>
    <?php if($show_numbers): ?>
      <div class='course-no my-3 mx-auto dark-gray'><?php echo $index + 1 ?></div>
    <?php endif; ?>
  </a>
  <a class='js-course lg-hide <?php if($coming_soon) { echo $coming_soon_tag;} ?>' data-target="#js-modal-<?php echo $course->id ?>" data-toggle='modal' href='#' role='dialog'>
    <div class='course-info' style='background-image: url(<?php echo $course->image() ?>);'>
      <div class='js-course-description js-hide course-description'>
        <div class='more-info'>&plus; View Details</div>
      </div>
    </div>
    <h5 class='card-title rs-blue mt-3'><?php echo $course->title ?></h5>
    <?php if($show_numbers): ?>
      <div class='course-no my-3 mx-auto dark-gray'><?php echo $index + 1 ?></div>
    <?php endif; ?>
  </a>
</div>