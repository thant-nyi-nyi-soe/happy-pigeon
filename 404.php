<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package happypigeon
 */

get_header();
?>
<?php echo the_breadcrumb(); ?>
	<div class="content not-found">
		<section class="bgcol-y">
			<div class="m-width900">
				<h2 class="headline mb20">
            <?php esc_html_e('お探しのページは見つかりませんでした。', ''); ?>
          </h2>
        <div>
        	<p class="fz-r-jp fz-16 fz-14-sp mb30">申し訳ございません。お探しのページが見つかりませんでした。<br>削除または名前が変更された、もしくは一時的に使用できなくなっている可能性がございます。<br>お手数ですが、トップからお求めのページをお探しください。</p>
					<div class="sec-btn btn-en fz-r-jp pb30-sp">
						<a href="<?php echo esc_url(home_url('/')); ?>" class="fz-18">トップページへ</a>
					</div>
        </div>
			</div>
		</section>
	</div>
<?php
get_footer();
