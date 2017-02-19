<?php
$args = array(
  'type'                     => 'post',
  'child_of'                 => 0,
  'parent'                   => '',
  'orderby'                  => '',
  'order'                    => 'ASC',
  'hide_empty'               => 1,
  'hierarchical'             => 1,
  'exclude'                  => '',
  'include'                  => '',
  'number'                   => '',
  'taxonomy'                 => 'product_cat',
  'pad_counts'               => false
);
$user_functions = get_categories( $args );

foreach($user_functions as $uf):
  $post_args = array(
    'showposts' => -1,
    'post_type' => 'products',
    'tax_query' => array(
      array(
      'taxonomy' => 'product_cat',
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
    $description = get_field('produktbeschreibung',$post->ID);
    $preis = get_field('produktpreis',$post->ID);
    $image = get_field('produktbild',$post->ID);
    $title = $post->post_title;
    ?>
    <div class="col-xs-12 col-md-6">
      <div class="box">
        <?php if(!empty($image)): ?>
        <div class="box-image">
          <div class="image"><img src="<?= $image['url'] ?>" alt="<?= $title ?>"></div>
        </div>
        <?php endif; ?>
        <div class="box-caption">
          <h4><?= $title ?></h4>
          <p><?= $description ?></p>
          <div class="price lead">CHF <?= $preis ?></div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
</div>
<?php
endforeach;
?>
