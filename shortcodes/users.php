<?php
$args = array(
  'type'                     => 'post',
  'child_of'                 => 0,
  'parent'                   => '',
  'orderby'                  => 'name',
  'order'                    => 'ASC',
  'hide_empty'               => 1,
  'hierarchical'             => 1,
  'exclude'                  => '',
  'include'                  => '',
  'number'                   => '',
  'taxonomy'                 => 'user_function',
  'pad_counts'               => false
);
$user_functions = get_categories( $args );

foreach($user_functions as $uf):
  $post_args = array(
    'showposts' => -1,
    'post_type' => 'users',
    'tax_query' => array(
      array(
      'taxonomy' => 'user_function',
      'field' => 'term_id',
      'terms' => $uf->term_id,
      )
    )
  );
  $posts = get_posts($post_args);
?>
<div class="box-wrapper">
  <h2><?= $uf->name; ?></h2>
  <div class="row">
  <?php foreach($posts as $post): ?>
    <?php
    $vorname = get_field('vorname',$post->ID);
    $name = get_field('name',$post->ID);
    $image = get_field('bild',$post->ID);
    $title = $post->post_title;
    ?>
    <div class="col-xs-12 col-sm-6 col-md-4">
      <div class="box">
        <div class="box-image">
          <div class="image"><img src="<?= $image['url'] ?>" alt="<?= $title ?>"></div>
        </div>
        <div class="box-caption">
          <h4><?= $vorname . ' ' . $name ?></h4>
          <?= $title ?>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
</div>
<?php
endforeach;
?>
