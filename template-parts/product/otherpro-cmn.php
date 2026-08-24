				<section class="other-product">
					<div class="midashi02">
						<p class="ttl-jp02 fz-m-jp fz-21 txt-black01">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_01.png" alt=""><span>その他の商品</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_04.png" alt="">
						</p>
					</div>
					<ul class="other-proList col-wrap">
						<?php
							$args = array(
								'post_type' => array ('pro_azfood','pro_kokusanfood', 'pro_shampoo','pro_snack','pro_supli','pro_trimming'),
								'posts_per_page' => 4,
								'orderby' => 'rand'
							);
							$the_query = new WP_Query( $args );
							if ( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post();
						?>
						<li class="col4 col2-sp">
							<a href="<?php echo get_permalink(); ?>">
							<div class="img-pos">
								<div class="pro-img mb5 mb10-sp">
									<?php $image01 = get_field('image01'); ?>
									<img src="<?php echo $image01['url']; ?>" class="img-bdr" alt="<?php echo the_title(); ?>">
								</div>
							</div>
							</a>
							<div class="pro-desp txt-center">
								<p class="pro-ttl fz-m-jp fz-15"><?php echo the_title(); ?></p>
								<p class="pro-txt fz-r-jp fz-14"><?php the_field('text01'); ?></p>
								<span class="pro-price fz-r-jp fz-14"><?php the_field('price'); ?></span>
							</div>
						</li>
						<?php endwhile; ?>
						<?php endif; ?>
						<?php wp_reset_query(); ?>
					</ul>
				</section>