<?php
$post_args = array(
  'showposts' => 1,
  'post_type' => 'tagesmenu',
);
$posts = get_posts($post_args);
?>
<?php foreach($posts as $post): ?>
  <?php
  $image = get_field('bild');
  $content = get_field('kurzbeschreibung');
  ?>
<?php endforeach; ?>

<div class="animator">
  <div class="animator-background" style="background-image: url(<?= $image['sizes']['large'] ?>);"></div>
  <div class="animator-wrapper">
    <div class="animator-text">
      <div class="animator-text-one">
        Heute gibt es
      </div>
      <div class="animator-text-two">
        <p>
          <?= $content ?>
        </p>
      </div>
    </div>
    <div class="animator-image">
      <image src="<?= $image['sizes']['large'] ?>">
    </div>
  </div>
</div>
