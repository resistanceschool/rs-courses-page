<?php // locals: $learning_path, index ?>
<li class='nav-item <?php if($last) {echo 'last';} ?>'>
  <a class="nav-link <?php if($index == 0) {echo 'active';} ?>" data-toggle='tab' href="#<?php echo strip_tags(str_replace(' ','-', $learning_path->title)) ?>">
    <?php echo $learning_path->title ?>
  </a>
</li>