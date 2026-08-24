<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package happypigeon
 */

get_header();
?>
<?php if( is_page( array('aboutus', 'domestic_feature', 'az_feature' ) ) ) : ?>
<?php $foldername = $post->post_name; ?>
<div class="sub-bnr">
	<div class="bnr-img">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/<?php echo $foldername; ?>/mv_bnr_pc.jpg" class="pc" alt="">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/<?php echo $foldername; ?>/mv_bnr_sp.jpg" class="sp w100" alt="">
	</div>
	<div class="bnr-text">
		<p class="fz-b-en fz-45 fz-32-sp"><?php echo the_title(); ?></p>
	</div>
</div>
<?php endif; ?>
<?php echo the_breadcrumb(); ?>
	<div class="content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile;?>
	</div>
<?php
get_footer();
