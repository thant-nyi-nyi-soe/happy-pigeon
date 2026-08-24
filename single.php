<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package happypigeon
 */

get_header();
$postType = get_post_type_object(get_post_type());
$posttype_slug = get_post_type();
?>

<?php
	if ($posttype_slug == "pro_azfood") {
		get_template_part( 'template-parts/product/product', 'azfood' );
	}
	elseif ($posttype_slug == "pro_kokusanfood") {
		get_template_part( 'template-parts/product/product', 'kokusanfood' );
	}
	elseif ($posttype_slug == "pro_shampoo") {
		get_template_part( 'template-parts/product/product', 'shampoo' );
	}
	elseif ($posttype_slug == "pro_snack") {
		get_template_part( 'template-parts/product/product', 'snack' );
	}
	elseif ($posttype_slug == "pro_supli") {
		get_template_part( 'template-parts/product/product', 'supli' );
	}
	elseif ($posttype_slug == "pro_trimming") {
		get_template_part( 'template-parts/product/product', 'trimming' );
	}
	else {
		echo "single post";
	}
 ?>

<?php
get_footer();
