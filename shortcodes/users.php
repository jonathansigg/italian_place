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
<div class="user-wrapper">
  <h2><?= $uf->name; ?></h2>
  <div class="row">
  <?php foreach($posts as $post): ?>
    <?php
    $vorname = get_field('vorname',$post->ID);
    $name = get_field('name',$post->ID);
    $image = get_field('bild',$post->ID);
    $title = $post->post_title;
    ?>
    <div class="col-xs-12 col-md-6">
      <div class="user">
        <div class="user-image"><img src="<?= $image['url'] ?>" alt="<?= $title ?>"></div>
        <div class="user-caption">
          <h4 class="user-name"><?= $vorname . ' ' . $name ?></h4>
          <div class="user-nick"><?= $title ?></div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
</div>
<?php
endforeach;
?>
