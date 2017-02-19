<?php
/**
 * Template Name: Home Template
 */

$homeaddition = get_field('slider_oder_video');
if($homeaddition == 'video'):
$video = get_field('homevideo','option');
?>
<div class="home-video">
  <video autoplay class="video">
    <source src="<?= $video['url'] ?>" type="<?= $video['mime_type'] ?>">
    I'm sorry; your browser doesn't support HTML5 video in WebM with VP8/VP9 or MP4 with H.264.
    <!-- You can embed a Flash player here, to play your mp4 video in older browsers -->
  </video>
</div>
<?php
elseif($homeaddition == 'slider'):
  $sliderimages = get_field('sliderbilder','option');
  $slidereffect = get_field('slidereffect','slidereffekt');
?>
<div class="home-slider">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <?php foreach($sliderimages as $sliderimage): ?>
      <div class="swiper-slide" style="background-image:url(<?= $sliderimage['bild']['url'] ?>)">
        <div class="caption">
          <div class="container-fluid">
            <div clas="caption-content">
              <?= $sliderimage['bildbeschreibung'] ?>
            </div>
          </div>
        </div>
      </div>
     <?php endforeach; ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>
<?php
function swiper_slider() {
   ?>
   <script>
   var slider = new Swiper('.swiper-container', {
     pagination: '.swiper-pagination',
     grabCursor: true,
     nextButton: '.swiper-button-next',
     prevButton: '.swiper-button-prev',
     autoplay: 5000,
     loop: true
    });
  </script>
   <?php
 }
 add_action( 'wp_footer', 'swiper_slider', 100 );
?>
<?php
endif;
?>

<?php while (have_posts()) : the_post(); ?>
<div class="main-page">
<?php get_template_part('templates/content', 'page'); ?>
</div>
<?php endwhile; ?>
