<link rel="stylesheet" href="https://cdn.rawgit.com/necolas/normalize.css/master/normalize.css">

<!-- bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <!-- Fontawesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>

<link rel='stylesheet' id='rs-fonts-css'  href='https://fonts.googleapis.com/css?family=Raleway%3A300%2C300italic%2C400%2C400italic%2C600%2C800%2C900%7CMerriweather%3A300%2C400%2C700&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />

<?php
  wp_register_style('rs-courses', plugins_url('../assets/courses.css',__FILE__ ));
  wp_enqueue_style('rs-courses');
?>