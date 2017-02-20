<?php

function sc_team( $atts ){
  $dir = get_template_directory();
  ob_start();
  get_template_part('shortcodes/users');
  return ob_get_clean();
}
add_shortcode( 'team', 'sc_team' );

function sc_map( $atts ){
	return '<div class="iframe-wrapper"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2694.9537971437803!2d7.553462050693755!3d47.51029100251788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4791c77ca89509a5%3A0x738d412ac79634e2!2sItalian+Place!5e0!3m2!1sen!2sch!4v1487451613495" class="map" frameborder="0" style="border:0" allowfullscreen></iframe></div>';
}
add_shortcode( 'map', 'sc_map' );

function sc_products( $atts ){
  $dir = get_template_directory();
  ob_start();
  get_template_part('shortcodes/products');
  return ob_get_clean();
}
add_shortcode( 'produkte', 'sc_products' );

function sc_tagesmenu( $atts ){
  $dir = get_template_directory();
  ob_start();
  get_template_part('shortcodes/tagesmenu');
  return ob_get_clean();
}
add_shortcode( 'tagesmenu', 'sc_tagesmenu' );

function sc_tagesmenu_heute( $atts ){
  $dir = get_template_directory();
  ob_start();
  get_template_part('shortcodes/tagesmenu_heute');
  return ob_get_clean();
}
add_shortcode( 'tagesmenu_heute', 'sc_tagesmenu_heute' );
?>
