<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package happypigeon
 */

get_header();
?>
<div class="main-mv">
	<div class="mv-slider slider-01 slider">
		<div class="mv-img">			
			<picture>
				<source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/mv_img01_pc.webp" type="image/webp">
					<source media="(max-width: 767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/mv_img01_sp.webp" type="image/webp">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/mv_img01_pc.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/mv_img01_pc.jpg" alt="MV 画像" class="pc">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/mv_img01_sp.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/mv_img01_sp.jpg" alt="MV 画像" class="sp"> 
					</picture>
				</div>
				<div class="mv-img">
					<picture>
						<source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/mv_img01_pc.webp" type="image/webp">
							<source media="(max-width: 767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/mv_img01_sp.webp" type="image/webp">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/mv_img01_pc.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/mv_img01_pc.jpg" alt="MV 画像" class="pc">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/mv_img01_sp.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/mv_img01_sp.jpg" alt="MV 画像" class="sp"> 
							</picture>
						</div>
						<div class="mv-img">
							<picture>
								<source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/mv_img01_pc.webp" type="image/webp">
									<source media="(max-width: 767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/mv_img01_sp.webp" type="image/webp">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/mv_img01_pc.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/mv_img01_pc.jpg" alt="MV 画像" class="pc">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/mv_img01_sp.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/mv_img01_sp.jpg" alt="MV 画像" class="sp"> 
									</picture>
								</div>
							</div>
							<div class="mv-text">
								<p class="split fz-m-jp txt-bold fz-37 fz-21-sp">大切な家族<span class="fz-22 fz-14-sp">だから、</span><br><span class="fz-22 fz-14-sp">本当に</span>安心できるものを</p>
							</div>
						</div>

						<section class="top-news bgcol-w">
							<div class="m-width900">
								<div class="saleinfo-img">
									<picture>
										<source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/saleinfo_pc.webp" type="image/webp">
											<source media="(max-width: 767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/saleinfo_sp.webp" type="image/webp">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/saleinfo_pc.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/saleinfo_pc.png" alt="お得情報" class="pc">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/saleinfo_sp.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/saleinfo_sp.png" alt="お得情報" class="sp"> 
											</picture>
										</div>
										<div id="topnews" class="news-box">
											<div class="news-boxin pl40 pl0-sp">
												<div class="news-toggle">
													<ul class="news-ls">
														<?php
							$args = array( 'category_name' => 'news','posts_per_page' => 10 );// The Query
							$the_query = new WP_Query( $args );
							if ( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post();
								?>
								<li>
									<div class="news-desp">
										<p class="news-date fz-r-jp fz-15 fz-14-sp txt-black"><?php echo get_the_date("Y.m.d"); ?></p>
										<p class="news-ttl fz-r-jp fz-15 fz-14-sp txt-black">
											<?php echo get_the_content(); ?>
										</p>
									</div>
								</li>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php wp_reset_query(); ?>
					</ul>
				</div>
				<p class="news-more fz-m-en fz-21 txt-link txt-right"><a href="#" class="txt-red news-morebtn" data-block="topnews">MORE</a></p>
			</div>
			<p class="news-txt fz-b-en fz-35 fz-32-sp txt-black">NEWS</p>
		</div>
	</div>
</section>
<section class="sec-pickup fadeUpTrigger">
	<div class="midashi01">
		<p class="ttl-en fz-b-en fz-35 fz--sp txt-black">
			<picture>
				<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_01.webp" type="image/webp">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_01.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_01.png" alt="アイコン">
				</picture>
				<span>PICK UP</span>
				<picture>
					<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_02.webp" type="image/webp">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_02.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_02.png" alt="アイコン">
					</picture>
				</p>
				<p class="ttl-jp fz-r-jp fz-18 fz--sp">おすすめ商品</p>
			</div>
			<div class="pickup-wrap">
				<div id="slider" class="slider-02 slider">
					<?php
					$args = array(
						'post_type' => array (
							'pro_azfood','pro_kokusanfood', 'pro_shampoo','pro_snack','pro_supli','pro_trimming'),
						'meta_key' => 'showpost',
						'meta_value'	=> '表示'
					);
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post();
						?>
						<a href="<?php echo get_permalink(); ?>" class="slide-img">
							<div class="pro-img img-bdr-y">
								<?php $image01 = get_field('image01'); ?>
								<img src="<?php echo $image01['url']; ?>" alt="<?php echo the_title(); ?>">
							</div>
						</a>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div>
			<div class="slider-nav">
				<?php
				$args = array(
					'post_type' => array (
						'pro_azfood','pro_kokusanfood', 'pro_shampoo','pro_snack','pro_supli','pro_trimming'),
					'meta_key' => 'showpost',
					'meta_value'	=> '表示'
				);
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post();
					?>
					<div class="pickup-desp">
						<p class="fz-r-jp fz-17 fz-14-sp txt-black txt-center"><?php echo the_title(); ?></p>
						<p class="pickup-yan fz-r-jp fz-17 fz-14-sp txt-center"><span><?php the_field('price'); ?></span></p>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>

</section>
<section class="sec-point fadeUpTrigger">
	<div class="midashi01 mb70 mb30-sp">
		<p class="ttl-en fz-b-en fz-35 fz--sp txt-black">
			<picture>
				<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_03.webp" type="image/webp">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_03.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_03.png" alt="アイコン">
				</picture>
				<span>POINT</span>
				<picture>
					<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_04.webp" type="image/webp">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_04.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_04.png" alt="アイコン">
					</picture>
				</p>
				<p class="ttl-jp fz-r-jp fz-18 fz--sp">ドックフードへのこだわり</p>
			</div>
			<div class="point-block mb90 mb50-sp">
				<div class="m-width900">
					<div class="point-box">
						<div class="point-boxin cFix">
							<div class="point-boxL">
								<picture>
									<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/point/6.webp" type="image/webp">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/point/6.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/point/6.png" alt="AZフードとは">
									</picture>
								</div>
								<div class="point-boxR">
									<h3 class="fz-r-jp fz-21 txt-red mb5 txt-center-sp">AZフードとは</h3>
									<p class="fz-r-jp fz-15 fz--sp txt-black mb10">AZフードとは、プロブリーダー推奨のプレミアムなドッグフードです。<span class="txt-ul-y txt-red underline-after">健康維持・育成に欠かせないサプリメントをバランスよく配合したドックフード</span>で病気予防や毛並み向上にも最適です。Ａ犬種からＺ犬種まで全ての家族のために「おいしくたべられて、長生きできるフード」を目指しました。</p>
									<div class="sec-btn btn-en fz-m-en txt-medium">
										<a href="<?php echo home_url();?>/az_feature/" class="fz-21">READ MORE</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="point-block fadeUpTrigger box-reverse">
					<div class="m-width900">
						<div class="point-box">
							<div class="point-boxin cFix">
								<div class="point-boxL">
									<picture>
										<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/point/7.webp" type="image/webp">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/point/7.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/point/7.png" alt="国産フードとは">
										</picture>
									</div>
									<div class="point-boxR">
										<h3 class="fz-r-jp fz-21 txt-red mb5 txt-center-sp">国産フードとは</h3>
										<p class="fz-r-jp fz-15 fz-14-sp txt-black mb10">無添加の国産原料を100%使用したフードです。<span class="txt-ul-y txt-red underline-after">着色料・香料・保存料不使用で国内工場で作られているので安心安全。</span>人が食べても問題のない安全性に仕上げました。</p>
										<div class="sec-btn btn-en fz-m-en txt-medium">
											<a href="<?php echo home_url();?>/domestic_feature/" class="fz-21">READ MORE</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="sec-product bg-line fadeUpTrigger">
					<div class="midashi01">
						<p class="ttl-en fz-b-en fz-35 fz--sp txt-black">
							<picture>
								<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_05.webp" type="image/webp">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_05.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_05.png" alt="アイコン">
								</picture>
								<span>PRODUCT</span>
								<picture>
									<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_06.webp" type="image/webp">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_06.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_06.png" alt="アイコン">
									</picture>
								</p>
								<p class="ttl-jp fz-r-jp fz-18 fz--sp">商品一覧</p>
							</div>
							<div class="m-width900">
								<div class="product-wrap bgcol-y">
									<div class="tab-block">
										<ul class="tabs col-wrap fz-m-jp fz-18 fz-16-sp">
											<li class="col2 tab active"><a href="#fudo">フード</a></li>
											<li class="col2 tab"><a href="#goods">グッズ</a></li>
										</ul>
									</div>
									<div class="product-block panels">
										<div id="fudo" class="panel active">
											<ul class="col-wrap">
												<li class="col4 col2-sp">
													<a href="<?php echo home_url();?>/product/#azfood">
														<div class="pro-img img-bdr-y mb20 mb10-sp">
															<picture>
																<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/fudo_img01.webp" type="image/webp">
																	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/fudo_img01.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/fudo_img01.jpg" alt="AZフード">
																</picture>
															</div>
														</a>
														<div class="sec-btn btn-jp fz-r-jp">
															<a href="<?php echo home_url();?>/product/#azfood" class="fz-18 fz-14-sp">AZフード</a>
														</div>
													</li>
													<li class="col4 col2-sp">
														<a href="<?php echo home_url();?>/product/#kokusan">
															<div class="pro-img img-bdr-y mb20 mb10-sp">
																<picture>
																	<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/fudo_img02.webp" type="image/webp">
																		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/fudo_img02.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/fudo_img02.jpg" alt="国産フード">
																	</picture>
																</div>
															</a>
															<div class="sec-btn btn-jp fz-r-jp">
																<a href="<?php echo home_url();?>/product/#kokusan" class="fz-18 fz-14-sp">国産フード</a>
															</div>
														</li>
														<li class="col4 col2-sp">
															<a href="<?php echo home_url();?>/product/#snack">
																<div class="pro-img img-bdr-y mb20 mb10-sp">
																	<picture>
																		<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/fudo_img03.webp" type="image/webp">
																			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/fudo_img03.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/fudo_img03.jpg" alt="国産・無添加のおやつ">
																		</picture>
																	</div>
																</a>
																<div class="sec-btn btn-jp fz-r-jp">
																	<a href="<?php echo home_url();?>/product/#snack" class="fz-14 fz-13-sp">国産・無添加のおやつ</a>
																</div>
															</li>
															<li class="col4 col2-sp">
																<a href="<?php echo home_url();?>/product/#supli">
																	<div class="pro-img img-bdr-y mb20 mb10-sp">
																		<picture>
																			<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/fudo_img04.webp" type="image/webp">
																				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/fudo_img04.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/fudo_img04.jpg" alt="サプリメント">
																			</picture>
																		</div>
																	</a>
																	<div class="sec-btn btn-jp fz-r-jp">
																		<a href="<?php echo home_url();?>/product/#supli" class="fz-18 fz-14-sp">サプリメント</a>
																	</div>
																</li>
															</ul>
														</div>
														<div id="goods" class="panel">
															<ul class="col-wrap">
																<li class="col4 col2-sp">
																	<a href="<?php echo home_url();?>/product/#johnpaulpet">
																		<div class="pro-img img-bdr-y mb20 mb10-sp">
																			<picture>
																				<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/shampoo_jpp.webp" type="image/webp">
																					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/shampoo_jpp.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/shampoo_jpp.jpg" alt="シャンプーコンディショナーJohnPaulPet">
																				</picture>
																			</div>
																		</a>
																		<div class="sec-btn btn-jp fz-r-jp">
																			<a href="<?php echo home_url();?>/product/#johnpaulpet" class="fz-18 fz-13-sp"><span class="fz-10">シャンプー<br class="sp">コンディショナー</span><span class="shampoo-en">JohnPaulPet</span></a>
																		</div>
																	</li>
																	<li class="col4 col2-sp">
																		<a href="<?php echo home_url();?>/product/#pck">
																			<div class="pro-img img-bdr-y mb20 mb10-sp">
																				<picture>
																					<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/shampoo_pck.webp" type="image/webp">
																						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/shampoo_pck.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/shampoo_pck.jpg" alt="シャンプーコンディショナーPCK">
																					</picture>
																				</div>
																			</a>
																			<div class="sec-btn btn-jp fz-r-jp">
																				<a href="<?php echo home_url();?>/product/#pck" class="fz-18 fz-13-sp"><span class="fz-10">シャンプー<br class="sp">コンディショナー</span><span class="shampoo-en">PCK</span></a>
																			</div>
																		</li>
																		<li class="col4 col2-sp">
																			<a href="<?php echo home_url();?>/product/#hairdryer">
																				<div class="pro-img img-bdr-y mb20 mb10-sp">
																					<picture>
																						<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/trimming_img.webp" type="image/webp">
																							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/trimming_img.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top/product/trimming_img.jpg" alt="トリミング用品">
																						</picture>
																					</div>
																				</a>
																				<div class="sec-btn btn-jp fz-r-jp">
																					<a href="<?php echo home_url();?>/product/#hairdryer" class="fz-18 fz-13-sp">トリミング用品</a>
																				</div>
																			</li>
																		</ul>
																	</div>
																	<div class="product-rmore">
																		<div class="sec-btn btn-en fz-m-en txt-medium">
																			<a href="<?php echo home_url();?>/product/" class="fz-21">READ MORE</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</section>

													<?php
													get_footer();
