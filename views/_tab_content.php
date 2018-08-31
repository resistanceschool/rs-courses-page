<?php //locals: $learning_path, $index ?>
<div class='col-12 fade tab-pane <?php if($index == 0) {echo 'show active';} ?>' id="<?php echo strip_tags(str_replace(' ','-', $learning_path->title)) ?>">
  <div class='col-10 col-md-8 mx-auto pt-4 pb-4 text-center tab-pane-intro dark-gray'>
     <?php
       if ($settings->show_learning_path_descriptions) {
          echo $learning_path->description;
       }
    ?>
  </div>
  <div class='col-12'>
    <div class='js-scrollable js-learning-path card-list-path'>
      <?php
        $show_numbers = true;
        foreach($learning_path->courses as $index=>$course) {
          include('_card.php');
        }
      ?>
    </div>
  </div>
</div>