<?php // locals $topic_title, $topic_description, $index ?>
<div class='row mt-3 mb-3'>
  <div class='col-12'>
    <h2 class='card-section-header rs-blue mb-1'><?php echo $topic_title ?></h2>
    <p class='card-section-subtitle dark-gray mb-3'>
      <?php echo $topic_description ?>
    </p>
  </div>
</div>
<div class='row mt-1'>
  <div class='col-12'>
    <div class='js-scrollable js-section card-list'>
        <?php
          $show_numbers = false;
          foreach($topic_courses as $index=>$course) {
            include('_card.php');
          }
        ?>
    </div>
  </div>
</div>