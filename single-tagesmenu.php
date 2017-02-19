<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php
    $image = get_field('bild');
    $content = get_field('beschreibung');
    $tag = date('j',strtotime($post->post_date));
    $monat = date('F',strtotime($post->post_date));
    $jahr = date('y',strtotime($post->post_date));
  ?>
<?php endwhile; ?>

<div class="daymenu box-wrapper">
  <div class="box">
    <div class="date">
      <div class="day"><?= $tag ?></div>
      <div class="month-year">
        <span class="month"><?= $monat ?></span>
        <span class="year"><?= $jahr ?></span>
      </div>
    </div>
    <div class="box-image">
      <div class="image">
        <img src="<?= $image['url']; ?>" alt="<?= $post->post_title ?>">
      </div>
    </div>
    <div class="box-caption">
      <?= $content ?>
    </div>
  </div>
</div>
