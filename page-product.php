<?php
/**
 * Template Name: 商品一覧
 */
get_header();
?>
<div class="sub-bnr">
	<div class="bnr-img">
		<picture>
			<source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/mv_bnr_pc.webp" type="image/webp">
				<source media="(max-width: 767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/mv_bnr_sp.webp" type="image/webp">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/mv_bnr_pc.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/mv_bnr_pc.jpg" alt="商品一覧" class="pc">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/mv_bnr_sp.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/mv_bnr_sp.jpg" alt="商品一覧" class="sp"> 
				</picture>
			</div>
			<div class="bnr-text">
				<p class="fz-b-en fz-45 fz-32-sp"><?php echo the_title(); ?></p>
			</div>
		</div>
		<?php echo the_breadcrumb(); ?>
		<section class="bg-line">
			<div class="m-width900">
				<div class="pro-cat-btn">
					<ul class="col-wrap col-center">
						<li class="col2">
							<div class="cat-btn">
								<a href="#profood" class="food-btn fz-m-en anchor">
									<span>FOOD<span class="fz-14 fz-r-jp cat-jp-txt">フード</span></span>
								</a>
							</div>
						</li>
						<li class="col2">
							<div class="cat-btn">
								<a href="#progoods" class="goods-btn fz-m-en anchor">
									<span>GOODS<span class="fz-14 fz-r-jp cat-jp-txt">グッズ</span></span>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div id="profood" class="pro-food">
				<div class="midashi01">
					<p class="ttl-en fz-b-en fz-35 txt-black">
						<picture>
							<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_03.webp" type="image/webp">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_03.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_03.png" alt="アイコン">
							</picture>
							<span>FOOD</span>
							<picture>
								<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_02.webp" type="image/webp">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_02.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_02.png" alt="アイコン">
								</picture>
							</p>
							<p class="ttl-jp fz-r-jp fz-18">フード</p>
						</div>
						<div class="m-width900">
							<div class="product-wrap bgcol-y bdr-r5">
								<div class="tab-block tab-4">
									<ul class="tabs col-wrap fz-m-jp fz-18 fz-15-sp">
										<li class="col4 col2-sp tab active"><a href="#azfood">AZフード</a></li>
										<li class="col4 col2-sp tab"><a href="#kokusan">国産フード</a></li>
										<li class="col4 col2-sp tab tab4-3rd"><a href="#snack">国産無添加おやつ</a></li>
										<li class="col4 col2-sp tab tab4-4th"><a href="#supli">サプリメント</a></li>
									</ul>
								</div>
								<div class="product-block panels product-list">
									<div id="azfood" class="panel active">
										<div class="product-box">
											<p class="product-lead fz-m-jp fz-17 fz-15-sp txt-black"><span class="dash-bdr">ＡＺとは、Ａ犬種〜Ｚ犬種まで、全てのワンちゃんのためのテクノロジーが詰まったスーパーフードです。</span></p>
											<ul class="col-wrap">
												<?php
								$args = array( 'post_type' => 'pro_azfood','posts_per_page' => 20 );// The Query
								$the_query = new WP_Query( $args );
								if ( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post();// The Loop
								?>
								<li class="col4 col2-sp">
									<a href="<?php echo get_permalink(); ?>">
										<div class="img-pos">
											<div class="pro-img img-bdr-y mb5 mb10-sp">
												<?php $image01 = get_field('image01'); ?>
												<img src="<?php echo $image01['url']; ?>" alt="">
											</div>
											<div class="pro-circle">
												<span class="circle-span fz-m-jp fz-13 fz-12-sp <?php the_field('bg_color'); ?>"><?php the_field('color_txt'); ?></span>
											</div>
											<div class="pro-arr">
												<span class="arr-white">
													<picture>
														<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.webp" type="image/webp">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.png" alt="Triangle">
														</picture>
													</span>
												</div>
											</div>
										</a>
										<div class="pro-desp txt-center">
											<p class="pro-ttl fz-m-jp fz-17 fz-15-sp"><?php echo the_title(); ?></p>
											<p class="pro-txt fz-r-jp fz-15 fz-14-sp"><?php the_field('text01'); ?></p>
											<span class="pro-price fz-r-jp fz-14 fz-14-sp"><?php the_field('price'); ?></span>
										</div>
									</li>
								<?php endwhile; ?>
							<?php endif; ?>
							<?php wp_reset_query(); ?>
						</ul>
					</div>
				</div>
				<div id="kokusan" class="panel">
					<div id="happychan" class="product-box anchor-pd pb60 pb30-sp">
							<p class="ttl-message fz-m-jp fz-18 fz-16-sp">PakuPaku</p>
							<p class="product-lead fz-m-jp fz-17 fz-15-sp txt-black"><span class="dash-bdr">厳選した国内原料を使用し、国内の工場で製造。健康維持にも配慮し、機能性成分も配合した、成長期の子犬から成犬まで最適なフードです。</span></p>
							<ul class="col-wrap col-center">
								<?php
								$args = array(
									'post_type' => 'pro_kokusanfood',
									'posts_per_page' => 20,
									'meta_key' => 'radiobtn',
									'meta_value'	=> '雑穀ごはん'
								);
								$the_query = new WP_Query( $args );
								?>
								<?php if ( $the_query->have_posts() ): ?>
									<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
										<li class="col4 col2-sp">
											<a href="<?php echo get_permalink(); ?>">
												<div class="img-pos">
													<div class="pro-img img-bdr-y mb5 mb10-sp">
														<?php $image01 = get_field('image01'); ?>
														<img src="<?php echo $image01['url']; ?>" alt="">
													</div>
													<div class="pro-circle">
														<span class="circle-span fz-m-jp fz-13 fz-12-sp <?php the_field('bg_color'); ?>"><?php the_field('color_txt'); ?></span>
													</div>
													<div class="pro-arr">
														<span class="arr-white">
															<picture>
																<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.webp" type="image/webp">
																	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.png" alt="Triangle">
															</picture>
														</span>
													</div>
												</div>
											</a>
											<div class="pro-desp txt-center">
												<p class="pro-ttl fz-m-jp fz-17 fz-15-sp"><?php the_title(); ?></p>
												<p class="pro-txt fz-r-jp fz-15 fz-14-sp"><?php the_field('text01'); ?></p>
												<span class="pro-price fz-r-jp fz-14 fz-14-sp"><?php the_field('price'); ?></span>
											</div>
										</li>
										<?php endwhile; ?>
									<?php endif; ?>
									<?php wp_reset_query(); ?>
							</ul>
					</div>
					<div id="hokaidou" class="product-box anchor-pd">
						<p class="ttl-message fz-m-jp fz-18 fz-16-sp">北海道の恵</p>
						<p class="product-lead fz-m-jp fz-17 fz-15-sp txt-black"><span class="dash-bdr">「無着色」「無香料」「保存料不使用」の新鮮な北海道産原料を使い、職人が１つ１つ手作りしているので、安心安全で人も食べれるほどのおいしいフードです。</span></p>
						<ul class="col-wrap col-center">
							<?php
							$args = array(
								'post_type' => 'pro_kokusanfood',
								'posts_per_page' => 20,
								'meta_key' => 'radiobtn',
								'meta_value'	=> '北海道の恵'
							);
							$the_query = new WP_Query( $args );
							?>
							<?php if ( $the_query->have_posts() ): ?>
								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<li class="col4 col2-sp">
										<a href="<?php echo get_permalink(); ?>">
											<div class="img-pos">
												<div class="pro-img img-bdr-y mb5 mb10-sp">
													<?php $image01 = get_field('image01'); ?>
													<img src="<?php echo $image01['url']; ?>" alt="">
												</div>
												<div class="pro-circle">
													<span class="circle-span fz-m-jp fz-13 fz-12-sp <?php the_field('bg_color'); ?>"><?php the_field('color_txt'); ?></span>
												</div>
												<div class="pro-arr">
													<span class="arr-white">
														<picture>
															<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.webp" type="image/webp">
																<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.png" alt="Triangle">
															</picture>
														</span>
													</div>
												</div>
										</a>
										<div class="pro-desp txt-center">
											<p class="pro-ttl fz-m-jp fz-17 fz-15-sp"><?php echo the_title(); ?></p>
											<p class="pro-txt fz-r-jp fz-15 fz-14-sp"><?php the_field('text01'); ?></p>
											<span class="pro-price fz-r-jp fz-14 fz-14-sp"><?php the_field('price'); ?></span>
										</div>
									</li>
									<?php endwhile; ?>
								<?php endif; ?>
								<?php wp_reset_query(); ?>
								</ul>
					</div>
				</div>
				<div id="snack" class="panel">
					<div class="product-box">
							<p class="product-lead fz-m-jp fz-17 fz-15-sp txt-black"><span class="dash-bdr">国産無添加の素材のみを使用し、製造・乾燥〜袋詰めまで、すべての工程を職人たちの手作りで行っています。安心安全でおいしいおやつシリーズです。</span></p>
						<ul class="col-wrap">
								<?php
							$args = array( 'post_type' => 'pro_snack','posts_per_page' => 20 );// The Query
							$the_query = new WP_Query( $args );
							if ( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post();// The Loop
							?>
							<li class="col4 col2-sp">
								<a href="<?php echo get_permalink(); ?>">
									<div class="img-pos">
										<div class="pro-img img-bdr-y mb5 mb10-sp">
											<?php $image01 = get_field('image01'); ?>
											<img src="<?php echo $image01['url']; ?>" alt="">
										</div>
										<div class="pro-circle">
											<span class="circle-span fz-m-jp fz-13 fz-12-sp <?php the_field('bg_color'); ?>"><?php the_field('color_txt'); ?></span>
										</div>
										<div class="pro-arr">
											<span class="arr-white">
												<picture>
													<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.webp" type="image/webp">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.png" alt="Triangle">
												</picture>
											</span>
										</div>
									</div>
								</a>
								<div class="pro-desp txt-center">
									<p class="pro-ttl fz-m-jp fz-17 fz-15-sp"><?php echo the_title(); ?> <?php the_field('type'); ?></p>
									<p class="pro-txt fz-r-jp fz-15 fz-14-sp"><?php the_field('text01'); ?></p>
									<span class="pro-price fz-r-jp fz-14 fz-14-sp"><?php the_field('price'); ?></span>
								</div>
							</li>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php wp_reset_query(); ?>
						</ul>
					</div>
				</div>
				<div id="supli" class="panel">
					<div class="product-box">
						<p class="product-lead fz-m-jp fz-17 fz-15-sp txt-black"><span class="dash-bdr">ドライフードでは補えない犬に必要な栄養素をバランスよく配合した犬用サプリメント(ふりかけ)です。<br>いつものごはんにふりかけて、更に美味しく健康をサポートします。</span></p>
						<ul class="col-wrap">
							<?php
								$args = array( 'post_type' => 'pro_supli','posts_per_page' => 20 );// The Query
								$the_query = new WP_Query( $args );
								if ( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post();// The Loop
								?>
								<li class="col4 col2-sp">
									<a href="<?php echo get_permalink(); ?>">
										<div class="img-pos">
											<div class="pro-img img-bdr-y mb5 mb10-sp">
												<?php $image01 = get_field('image01'); ?>
												<img src="<?php echo $image01['url']; ?>" alt="">
											</div>
											<div class="pro-circle">
												<span class="circle-span fz-m-jp fz-13 fz-12-sp <?php the_field('bg_color'); ?>"><?php the_field('color_txt'); ?></span>
											</div>
											<div class="pro-arr">
												<span class="arr-white">
													<picture>
														<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.webp" type="image/webp">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.png" alt="Triangle">
														</picture>
													</span>
												</div>
											</div>
										</a>
										<div class="pro-desp txt-center">
											<p class="pro-ttl fz-m-jp fz-17 fz-15-sp"><?php the_title(); ?></p>
											<p class="pro-txt fz-r-jp fz-15 fz-14-sp"><?php the_field('text01'); ?></p>
											<span class="pro-price fz-r-jp fz-14 fz-14-sp"><?php the_field('price'); ?></span>
										</div>
									</li>
								<?php endwhile; ?>
							<?php endif; ?>
							<?php wp_reset_query(); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="progoods" class="pro-goods">
	<div class="midashi01">
		<p class="ttl-en fz-b-en fz-35 txt-black">
			<picture>
				<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_01.webp" type="image/webp">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_01.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_01.png" alt="アイコン">
				</picture>
				<span>GOODS</span>
				<picture>
					<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_06.webp" type="image/webp">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_06.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_06.png" alt="アイコン">
					</picture>
				</p>
				<p class="ttl-jp fz-r-jp fz-18 fz--sp">グッズ</p>
			</div>
			<div class="m-width900">
				<div class="product-wrap bgcol-y bdr-r5">
					<div class="tab-block">
						<ul class="tabs col-wrap fz-m-jp fz-18 fz-15-sp">
							<li class="col2 col2-sp tab active"><a href="#shampoo" class="fz-14-sp line-h1">シャンプー＆<br class="sp">コンディショナー</a></li>
							<li class="col2 col2-sp tab"><a href="#hairdryer">トリミング用品</a></li>
						</ul>
					</div>
					<div class="product-block panels product-list">
						<div id="shampoo" class="panel active">
							<div id="johnpaulpet" class="product-box anchor-pd pb60 pb30-sp">
								<p class="ttl-message fz-m-jp fz-18 fz-16-sp">JohnPaulPet シリーズ</p>
								<p class="product-lead fz-m-jp fz-17 fz-15-sp txt-black"><span class="dash-bdr">Jhon paul petは日常を助ける手間要らずのウォーターレスシャンプーシート。サッと撫でるようにするだけなので水嫌いの仔にも最適です。</span></p>
								<ul class="col-wrap col-center">
									<?php
									$args = array(
										'post_type' => 'pro_shampoo',
										'posts_per_page' => 20,
										'meta_key' => 'radiobtn',
										'meta_value'	=> 'JohnPaulPet'
									);
									$the_query = new WP_Query( $args );
									?>
									<?php if ( $the_query->have_posts() ): ?>
										<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
											<li class="col4 col2-sp">
												<a href="<?php echo get_permalink(); ?>">
													<div class="img-pos">
														<div class="pro-img img-bdr-y mb5 mb10-sp">
															<?php $image01 = get_field('image01'); ?>
															<img src="<?php echo $image01['url']; ?>" alt="">
														</div>
														<div class="pro-circle">
															<span class="circle-span fz-m-jp fz-13 fz-12-sp <?php the_field('bg_color'); ?>"><?php the_field('color_txt'); ?></span>
														</div>
														<div class="pro-arr">
															<span class="arr-white">
																<picture>
																	<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.webp" type="image/webp">
																		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.png" alt="Triangle">
																	</picture>
																</span>
															</div>
														</div>
													</a>
													<div class="pro-desp txt-center">
														<p class="pro-ttl fz-m-jp fz-17 fz-15-sp"><?php the_title(); ?></p>
														<p class="pro-txt fz-r-jp fz-15 fz-14-sp"><?php the_field('text01'); ?></p>
														<span class="pro-price fz-r-jp fz-14 fz-14-sp"><?php the_field('price'); ?></span>
													</div>
												</li>
											<?php endwhile; ?>
										<?php endif; ?>
										<?php wp_reset_query(); ?>
									</ul>
								</div>
								<div id="pck" class="product-box anchor-pd">
									<p class="ttl-message fz-m-jp fz-18 fz-16-sp">PCK シリーズ</p>
									<p class="product-lead fz-m-jp fz-17 fz-15-sp txt-black"><span class="dash-bdr">PCKシリーズは脂肪酸の種類による余分な脂のみを落とす「選択洗浄性」ができるプロトリマーさん愛用のシリーズです。洗浄力・保湿力に優れつつも、お肌の弱い仔にもオススメです。</span></p>
									<ul class="col-wrap">
										<?php
										$args = array(
											'post_type' => 'pro_shampoo',
											'posts_per_page' => 20,
											'meta_key' => 'radiobtn',
											'meta_value'	=> 'PCK'
										);
										$the_query = new WP_Query( $args );
										?>
										<?php if ( $the_query->have_posts() ): ?>
											<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
												<li class="col4 col2-sp">
													<a href="<?php echo get_permalink(); ?>">
														<div class="img-pos">
															<div class="pro-img img-bdr-y mb5 mb10-sp">
																<?php $image01 = get_field('image01'); ?>
																<img src="<?php echo $image01['url']; ?>" alt="">
															</div>
															<div class="pro-circle">
																<span class="circle-span fz-m-jp fz-13 fz-12-sp <?php the_field('bg_color'); ?>"><?php the_field('color_txt'); ?></span>
															</div>
															<div class="pro-arr">
																<span class="arr-white">
																	<picture>
																		<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.webp" type="image/webp">
																			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.png" alt="Triangle">
																		</picture>
																	</span>
																</div>
															</div>
														</a>
														<div class="pro-desp txt-center">
															<p class="pro-ttl fz-m-jp fz-17 fz-15-sp"><?php the_title(); ?></p>
															<p class="pro-txt fz-r-jp fz-15 fz-14-sp"><?php the_field('text01'); ?></p>
															<span class="pro-price fz-r-jp fz-14 fz-14-sp"><?php the_field('price'); ?></span>
														</div>
													</li>
												<?php endwhile; ?>
											<?php endif; ?>
											<?php wp_reset_query(); ?>
										</ul>
									</div>
								</div>
								<div id="hairdryer" class="panel">
									<div class="product-box">
										<p class="product-lead fz-m-jp fz-17 fz-15-sp txt-black"><span class="dash-bdr">プロトリマー・ブリーダーさん愛用の使いやすさと安全面を考慮したトリミング用品を取り揃えています。</span></p>
										<ul class="col-wrap col-center">
											<?php
								$args = array( 'post_type' => 'pro_trimming','posts_per_page' => 20 );// The Query
								$the_query = new WP_Query( $args );
								if ( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post();// The Loop
								?>
								<li class="col4 col2-sp">
									<a href="<?php echo get_permalink(); ?>">
										<div class="img-pos">
											<div class="pro-img img-bdr-y mb5 mb10-sp">
												<?php $image01 = get_field('image01'); ?>
												<img src="<?php echo $image01['url']; ?>" alt="">
											</div>
											<div class="pro-circle">
												<span class="circle-span fz-m-jp fz-13 fz-12-sp <?php the_field('bg_color'); ?>"><?php the_field('color_txt'); ?></span>
											</div>
											<div class="pro-arr">
												<span class="arr-white">
													<picture>
														<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.webp" type="image/webp">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/product/red_triangle.png" alt="Triangle">
														</picture>
													</span>
												</div>
											</div>
										</a>
										<div class="pro-desp txt-center">
											<p class="pro-ttl fz-m-jp fz-17 fz-15-sp"><?php the_title(); ?></p>
											<p class="pro-txt fz-r-jp fz-15 fz-14-sp"><?php the_field('text01'); ?></p>
											<span class="pro-price fz-r-jp fz-14 fz-14-sp"><?php the_field('price'); ?></span>
										</div>
									</li>
								<?php endwhile; ?>
							<?php endif; ?>
							<?php wp_reset_query(); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<?php
get_footer();
