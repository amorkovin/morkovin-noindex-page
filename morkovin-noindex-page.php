<?php
/*
  Plugin Name: Морковный ноиндекс для пагинации
  Description: Выводит noindex follow на пагинационных страницах в рубриках и метках.
  Author: Andrey Morkovin
  Plugin URI: https://t.me/morkovin_verstka
  Author URI: http://www.sdelaysite.com
  Version: 1.5
 */

add_action( 'wp_head', 'mnp_head_seo_meta_tags' );
function mnp_head_seo_meta_tags(){
	if ( is_archive() or is_front_page() ) {
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		if ($paged > 1) {
			echo "\n<!--Морковный ноиндекс-->\n";
			echo '<meta name="robots" content="noindex,follow"/>';
			echo "\n<!--/Морковный ноиндекс-->\n\n";
		}
	}
}

add_action('wp_head','mnp_remove_yoast_meta_index_ob_start',0);
function mnp_remove_yoast_meta_index_ob_start() {
    ob_start();
}
add_action('wp_head','mnp_remove_yoast_meta_index_get_clean', PHP_INT_MAX);
function mnp_remove_yoast_meta_index_get_clean() {
    $wp_head_content = ob_get_clean();

    if ( is_archive() or is_front_page() ) {
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		if ($paged > 1) {
			$wp_head_content = str_replace('<meta name="robots" content="index, follow" />', '', $wp_head_content);
			$wp_head_content = str_replace('<meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />', '', $wp_head_content);
			$wp_head_content = str_replace('<meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />', '', $wp_head_content);
		}
	}
       
    echo $wp_head_content;
}