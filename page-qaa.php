<?php
/**
 * Template Name: FAQ
 */
get_header();
?>
<?php echo the_breadcrumb(); ?>
<div class="content">
	<section class="bgcol-y">
		<div class="midashi01">
			<p class="ttl-en fz-b-en fz-35 fz-32-sp txt-black">
				<picture>
					<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_01.webp" type="image/webp">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_01.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_01.png" alt="アイコン">
					</picture>
					<span>Q&A</span>
					<picture>
						<source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_02.webp" type="image/webp">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_02.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_02.png" alt="アイコン">
						</picture>
					</p>
					<p class="ttl-jp fz-r-jp fz-18 fz-16-sp">よくある質問</p>
				</div>
				<div class="m-width900">
					<div class="pro-cat-btn3">
						<ul class="col-wrap col-center">
							<li class="col3">
								<div class="cat-btn3">
									<a href="#raw" class="raw-btn anchor">
										<span class="fz-19 fz-15-sp fz-r-jp">AZ<br class="sp">原料について</span>
									</a>
								</div>
							</li>
							<li class="col3">
								<div class="cat-btn3">
									<a href="#flights" class="animals-btn anchor">
										<span class="fz-19 fz-15-sp fz-r-jp">AZの<br class="sp">便について</span>
									</a>
								</div>
							</li>
							<li class="col3">
								<div class="cat-btn3">
									<a href="#others" class="others-btn anchor">
										<span class="fz-19 fz-15-sp fz-r-jp">AZ<br class="sp">その他</span>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="m-width725">
						<section class="sec-faq pb0">
							<div id="raw">
								<div class="midashi03 mb20">
									<p class="fz-r-jp fz-19">AZ原料について</p>
								</div>
								<div class="faq-block cFix mb60 mb50-sp">
									<div class="faq-left">
										<?php
										$repeat_group = SCF::get( 'raw_left');
										$cnt = 0;
										foreach ( $repeat_group as $fields ) {
											$cnt = $cnt + 1;
											?>
											<div id="raw-a<?php echo $cnt;?>" class="faq-box">
												<div class="faq-ico faq-ques" data-block="raw-a<?php echo $cnt;?>">
													<p class="faq-ttl"><?php echo $fields['raw_left_question'];?></p>
												</div>
												<div class="faq-ico faq-ans">
													<div class="ans-desp"><?php echo $fields['raw_left_answer'];?></div>
												</div>
											</div>
										<?php } ?>
									</div>
									<div class="faq-right">
										<?php
										$repeat_group = SCF::get( 'raw_right');
										$cnt = 0;
										foreach ( $repeat_group as $fields ) {
											$cnt = $cnt + 1;
											?>
											<div id="raw-b<?php echo $cnt;?>" class="faq-box">
												<div class="faq-ico faq-ques" data-block="raw-b<?php echo $cnt;?>">
													<p class="faq-ttl"><?php echo $fields['raw_right_question'];?></p>
												</div>
												<div class="faq-ico faq-ans">
													<div class="ans-desp"><?php echo $fields['raw_right_answer'];?></div>
												</div>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
							<div id="flights">
								<div class="midashi03 mb20">
									<p class="fz-r-jp fz-19">AZの便について</p>
								</div>
								<div class="faq-block cFix mb60 mb50-sp">
									<div class="faq-left">
										<?php
										$repeat_group = SCF::get( 'flights_left');
										$cnt = 0;
										foreach ( $repeat_group as $fields ) {
											$cnt = $cnt + 1;
											?>
											<div id="flights-a<?php echo $cnt;?>" class="faq-box">
												<div class="faq-ico faq-ques" data-block="flights-a<?php echo $cnt;?>">
													<p class="faq-ttl"><?php echo $fields['flights_left_question'];?></p>
												</div>
												<div class="faq-ico faq-ans">
													<div class="ans-desp"><?php echo $fields['flights_left_answer'];?></div>
												</div>
											</div>
										<?php } ?>
									</div>
									<div class="faq-right">
										<?php
										$repeat_group = SCF::get( 'flights_right');
										$cnt = 0;
										foreach ( $repeat_group as $fields ) {
											$cnt = $cnt + 1;
											?>
											<div id="flights-b<?php echo $cnt;?>" class="faq-box">
												<div class="faq-ico faq-ques" data-block="flights-b<?php echo $cnt;?>">
													<p class="faq-ttl"><?php echo $fields['flights_right_question'];?></p>
												</div>
												<div class="faq-ico faq-ans">
													<div class="ans-desp"><?php echo $fields['flights_right_answer'];?></div>
												</div>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
							<div id="others">
								<div class="midashi03 mb20">
									<p class="fz-r-jp fz-19">AZその他</p>
								</div>
								<div class="faq-block cFix mb30">
									<div class="faq-left">
										<?php
										$repeat_group = SCF::get( 'others_left');
										$cnt = 0;
										foreach ( $repeat_group as $fields ) {
											$cnt = $cnt + 1;
											?>
											<div id="others-a<?php echo $cnt;?>" class="faq-box">
												<div class="faq-ico faq-ques" data-block="others-a<?php echo $cnt;?>">
													<p class="faq-ttl"><?php echo $fields['others_left_question'];?></p>
												</div>
												<div class="faq-ico faq-ans">
													<div class="ans-desp"><?php echo $fields['others_left_answer'];?></div>
												</div>
											</div>
										<?php } ?>
									</div>
									<div class="faq-right">
										<?php
										$repeat_group = SCF::get( 'others_right');
										$cnt = 0;
										foreach ( $repeat_group as $fields ) {
											$cnt = $cnt + 1;
											?>
											<div id="others-b<?php echo $cnt;?>" class="faq-box">
												<div class="faq-ico faq-ques" data-block="others-b<?php echo $cnt;?>">
													<p class="faq-ttl"><?php echo $fields['others_right_question'];?></p>
												</div>
												<div class="faq-ico faq-ans">
													<div class="ans-desp"><?php echo $fields['others_right_answer'];?></div>
												</div>
											</div>
										<?php } ?>
									</div>
								</div>
								<p class="fz-l-jp fz-14 mb30-sp">※その他、ご不明な点などありましたら「order@shinkou-az.com」までお問い合わせ下さい。</p>
							</div>
						</section>
					</div>
				</div>
			</section>
		</div>
		<?php
		get_footer();
