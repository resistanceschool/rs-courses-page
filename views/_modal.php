<?php //locals: $course, $index ?>
<div class='modal fade' id="js-modal-<?php echo $course->id ?>">
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title'><?php echo $course->title ?></h5>
        <button class='close close-modal' data-dismiss='modal'>
          <i class='fas fa-times'></i>

        </button>
      </div>
      <div class='modal-body'>
        <img class="modal-course-image" src="<?php echo $course->image() ?>" />
        <div class='modal-course-description mt-3'><?php echo $course->description ?></div>
      </div>
      <div class='modal-footer'>
        <a class='btn btn-large btn-primary' href="<?php echo $base_url . $course->slug ?>">
            <?php
              if (Sensei_Utils::user_started_course($course->id, $user_id)) {
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