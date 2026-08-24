<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package happypigeon
 */

?>
<div class="scrolltop">
	<a href="#top" class="pagetop">
		<picture>
			<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/pagetop.webp" type="image/webp">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/pagetop.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/pagetop.png" alt="トップへ">
			</picture>
		</a>
	</div>
	<footer id="footer" class="bgcol-r">
		<div class="m-width900">
			<div class="ft-bnr">
				<a href="<?php echo home_url();?>/aboutus/">
					<picture>
						<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_aboutus.webp" type="image/webp">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_aboutus.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_aboutus.png" alt="ABOUTUS">
						</picture>
					</a>
				</div>
				<div class="ft-link cFix">
					<ul class="ft-social pc">
						<li>
							<a href="https://www.rakuten.co.jp/az-pet/
							" target="_blank">
							<picture>
								<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/rakuten.webp" type="image/webp">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/rakuten.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/rakuten.png" alt="楽天">
								</picture>
							</a>
						</li>
						<li>
							<a href="https://store.shopping.yahoo.co.jp/happypigeon/" target="_blank">
								<picture>
									<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/yahoo.webp" type="image/webp">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/yahoo.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/yahoo.png" alt="YAHOO">
									</picture>
								</a>
							</li>
						</ul>
						<ul class="ft-link-page">
							<li><a href="<?php echo home_url();?>/privacy/" class="fz-14 fz-13-sp">プライバシーポリシー</a></li>
							<li><a href="<?php echo home_url();?>/form/" class="fz-14 fz-13-sp">お問い合わせ</a></li>
						</ul>
						<div class="float-r">
							<ul class="ft-social">
								<li>
									<a href="https://instagram.com/happy_pigeon_petshop?igshid=1ijm88jl5zml2" target="_blank">
										<picture>
											<source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_insta_pc.webp" type="image/webp">
												<source media="(max-width: 767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_insta_sp.webp" type="image/webp">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_insta_pc.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_insta_pc.png" alt="instagram" class="pc">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_insta_sp.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_insta_sp.png" alt="instagram" class="sp"> 
												</picture>
											</a>
										</li>
										<li>
											<a href="https://twitter.com/hp_petshop?s=21" target="_blank">
												<picture>
													<source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_twitter_pc.webp" type="image/webp">
														<source media="(max-width: 767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_twitter_sp.webp" type="image/webp">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_twitter_pc.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_twitter_pc.png" alt="twitter" class="pc">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_twitter_sp.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_twitter_sp.png" alt="twitter" class="sp"> 
														</picture>
													</a>
												</li>
												<li>
													<a href="https://www.facebook.com/Happy-Pigeon-112469760943386/" target="_blank">
														<picture>
															<source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_fb_pc.webp" type="image/webp">
																<source media="(max-width: 767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_fb_sp.webp" type="image/webp">
																	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_fb_pc.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_fb_pc.png" alt="facebook" class="pc">
																	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_fb_sp.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_fb_sp.png" alt="facebook" class="sp"> 
																</picture>
															</a>
														</li>
													</ul>
													<ul class="ft-social float-r sp">
														<li>
															<a href="https://www.rakuten.co.jp/az-pet/
															" target="_blank">
															<picture>
																<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/rakuten.webp" type="image/webp">
																	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/rakuten.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/rakuten.png" alt="楽天">
																</picture>
															</a>
														</li>
														<li>
															<a href="https://store.shopping.yahoo.co.jp/happypigeon/" target="_blank">
																<picture>
																	<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/yahoo.webp" type="image/webp">
																		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/yahoo.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/yahoo.png" alt="YAHOO">
																	</picture>
																</a>
															</li>
														</ul>
													</div>
												</div>
												<div class="ft-logo mr25 mb5 mr0-sp">
													<a href="<?php echo home_url();?>">
														<picture>
															<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_logo.webp" type="image/webp">
																<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_logo.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ft_logo.png" alt="ハッピーピジョン">
															</picture>
														</a>
													</div>
													<p class="ft-copyright fz-r-jp fz-11">Copyright(C) Happy Pigeon</p>
												</div>
											</footer>
										</div>
										<?php wp_footer(); ?>
									</body>
									</html>
