<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php
    $image = get_field('bild');
    $content_one = get_field('kurzbeschreibung');
    $content_two = get_field('beschreibung');
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
    <?php if(!empty($image)): ?>
    <div class="box-image">
      <div class="image">
        <img src="<?= $image['sizes']['thumbnail']; ?>" alt="<?= $post->post_title ?>">
      </div>
    </div>
    <?php endif; ?>
    <div class="box-caption">
      <p><?= $content_one ?></p>
      <?= $content_two; ?>
    </div>
  </div>
</div>
