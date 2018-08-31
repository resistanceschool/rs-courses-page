<?php // locals: $feature, $index ?>

<div class="carousel-item <?php if($index == 0) {echo 'active';} ?>" style="background-image: url(<?php echo $feature->image ?>);">
  <div class='container'>
    <div class='row carousel-caption'>
      <div class='col-md-8'></div>
      <div class='col-md-4 col-sm-12 carousel-text-box float-right text-left'>
        <h6 class='featured-tag yellow'>Featured</h6>
        <a class='no-underline white' href="<?php echo $base_url . $feature->course->slug ?>">
        <h2><?php echo $feature->course->title ?></h2>
        </a>
        <p class='featured-subhead dark-white lg-show'>
          <?php echo $feature->description ?>
        </p>
        <div class='float-right sm-hide'>
          <a class="btn btn-primary" href="<?php echo $base_url . $feature->course->slug ?>">
            <?php
              if (Sensei_Utils::user_started_course($feature->course->id, $user_id)) {
                echo 'Continue Course';
              } else {
                echo 'View Course';
              }
            ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>