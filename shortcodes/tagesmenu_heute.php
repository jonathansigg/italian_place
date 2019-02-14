<?php
$post_args = array(
  'showposts' => 1,
  'post_type' => 'tagesmenu',
);
$posts = get_posts($post_args);
?>
<div class="box-wrapper" style="max-width: 600px; margin: 4rem auto;">
  <h2><?= $uf->name; ?></h2>
  <div class="row">
  <?php foreach($posts as $post): ?>
    <?php
    $image = get_field('bild');
    $content = get_field('kurzbeschreibung');
    $tag = date('j',strtotime($post->post_date));
    $monat = date('F',strtotime($post->post_date));
    $jahr = date('y',strtotime($post->post_date));
    $url = get_permalink($post->ID);
    ?>
    <div class="col-xs-12">
      <div class="box box-fullwidth">
        <div class="date">
          <div class="day"><?= $tag ?></div>
          <div class="month-year">
            <span class="month"><?= $monat ?></span>
            <span class="year"><?= $jahr ?></span>
          </div>
        </div>
        <?php if(!empty($image)): ?>
        <div class="box-image">
          <div class="image"><img src="<?= $image['sizes']['thumbnail']; ?>" alt="<?= $title ?>"></div>
        </div>
        <?php endif; ?>
        <div class="box-caption">
          <h2><?= $post->post_title ?></h2>
          <p><?= $content ?></p>
          <a href="<?= $url ?>" class="btn btn-outline-primary">Weiter lesen</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
</div>
