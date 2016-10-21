<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <div class="block-content">
    <h1><?= get_field('titel'); ?></h1>
    <?= get_field('einleitungstext'); ?>  
  </div>
  <div class="home-image" style="background-image: url(<?= get_field('bild_1'); ?>)"></div>
  <div class="block-content"></div>
  <div class="home-image" style="background-image: url(<?= get_field('bild_2'); ?>)"></div>
  <div class="block-content"></div>
  <div class="home-image" style="background-image: url(<?= get_field('bild_3'); ?>)"></div>
<?php endwhile; ?>
