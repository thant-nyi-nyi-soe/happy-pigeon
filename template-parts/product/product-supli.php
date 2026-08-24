<?php
the_post();
?>
		<div id="breadcrumb" class="breadcrumb">
			<div class="m-width900">
				<ul class="crumb-ls cFix">
					<li><a href="<?php echo home_url();?>">TOP</a></li>
					<li><a href="<?php echo home_url();?>/product/">PRODUCT<span>商品一覧</span></a></li>
					<li><p class="current"><?php echo the_title(); ?></p></li></ul>
			</div>
		</div>
		<div class="sec-prodetail">
			<div class="m-width900">
				<div class="prodetail-slider cFix">
					<div class="prodetail-sliderL">
						<div class="pro-circle single-circle">
							<span class="circle-span fz-m-jp fz-13 fz-12-sp <?php the_field('bg_color'); ?>"><?php the_field('color_txt'); ?></span>
						</div>
						<div class="slider-03">
						<?php $image01 = get_field('image01'); ?>
						<?php $image02 = get_field('image02'); ?>
						<?php $image03 = get_field('image03'); ?>
						<div class="slider03-img img-bdr-y">
							<img src="<?php echo $image01['url']; ?>" alt="">
						</div>
						<div class="slider03-img img-bdr-y">
							<img src="<?php echo $image02['url']; ?>" alt="">
						</div>
						<div class="slider03-img img-bdr-y">
							<img src="<?php echo $image03['url']; ?>" alt="">
						</div>
					</div>
					<div class="slider03-nav col-wrap pc">
						<div class="slider03nav-img img-bdr-y">
							<img src="<?php echo $image01['url']; ?>" alt="">
						</div>
						<div class="slider03nav-img img-bdr-y">
							<img src="<?php echo $image02['url']; ?>" alt="">
						</div>
						<div class="slider03nav-img img-bdr-y">
							<img src="<?php echo $image03['url']; ?>" alt="">
						</div>
					</div>
					</div>
					<div class="prodetail-sliderR">
						<div class="sliderR-inner">
							<h2 class="sliderR-ttl fz-m-jp fz-21 txt-black01 mt20 mt20-sp"><?php echo the_title(); ?></h2>
							<p class="fz-r-jp fz-15 txt-center-sp"><?php the_field('text01'); ?></p>
							<p class="sliderR-txt fz-r-jp fz-15"><span>※賞味期限:</span><?php the_field('text03'); ?></p>
							<p class="sliderR-price fz-m-jp fz-25 fz-30-sp txt-black01"><span><?php the_field('price'); ?></span></p>
							<div class="joycart-div">
							<label class="joycart-label fz-r-jp fz-15">
							<?php if (get_field('content_volume')): ?>
								<?php the_field('content_volume'); ?>
							<?php else: ?>
								【内容量】
							<?php endif; ?>
						</label>
								<?php the_field('joycart'); ?>
							</div>
							<?php if( get_field('clickpost') ): ?>
								<p class="sliderR-txt01 fz-r-jp fz-15 txt-red mb10"><?php the_field('clickpost'); ?></p>
							<?php endif; ?>
							<p class="sliderR-txt01 fz-r-jp fz-15"><?php the_field('text02'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bgcol-y supli">
			<div class="m-width900">
				<div class="m-width725">
					<section class="sec-features">
						<div class="midashi02">
							<p class="ttl-jp02 fz-m-jp fz-21 txt-black01">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_03.png" alt=""><span>特徴</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_02.png" alt="">
							</p>
						</div>
						<p class="fz-r-jp fz-15 txt-black mb20"><?php the_field('paragraph01'); ?></p>
						<div class="feature-box cFix">
							<div class="f-boxL">
								<div class="f-img mb15">
									<?php $image = get_field('image04'); ?>
									<img src="<?php echo $image['url']; ?>" alt="">
								</div>
							</div>
							<div class="f-boxR">
								<div class="f-boxin">
									<p class="fz-r-jp fz-15 fz-14-sp txt-black mb10"><?php the_field('paragraph02'); ?></p>
								</div>
							</div>
						</div>
					</section>
					<section class="oneday-amount">
						<div class="midashi02">
							<p class="fz-m-jp fz-16 detail-p0"><?php echo the_title(); ?></p>
							<p class="ttl-jp02 fz-m-jp fz-21 txt-black01">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_03.png" alt=""><span>1日あたりの目安量</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_02.png" alt="">
							</p>
						</div>
						<div class="amount-table">
							<table>
								<colgroup>
									<col width="26%">
									<col width="37%">
								</colgroup>
								<?php $repeat_group = SCF::get( 'supli_table01'); ?>
								<?php foreach ( $repeat_group as $fields ) { ?>
								<tr>
									<td><?php echo $fields['type'];?></td>
									<td class="tb-bdrtop"><?php echo $fields['amount'];?></td>
								</tr>
								<?php } ?>
							</table>
							<?php $remark = SCF::get( 'remark' ); ?>
							<p class="fz-r-jp fz-14"><?php echo $remark; ?></p>
						</div>
					</section>
					<section class="preserve-method">
						<div class="midashi02">
							<p class="ttl-jp02 fz-m-jp fz-21 txt-black01">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_03.png" alt=""><span>保存方法</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_02.png" alt="">
							</p>
						</div>
						<ul class="preserve-ls col-wrap col-center">
							<li class="col3 col1-sp">
								<div class="preserve-box">
									<div class="preserve-pos img-pos">
										<div class="pro-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/supli/preserve_img01.png" alt="">
										</div>
									</div>
									<div class="preserve-desp">
										<p class="fz-r-jp fz-15">
											直射日光や湿気の多い場所を避け、風通しの良い場所に保管してください。
										</p>
									</div>
								</div>
							</li>
							<li class="col3 col1-sp">
								<div class="preserve-box">
									<div class="preserve-pos img-pos">
										<div class="pro-img">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/supli/preserve_img02.png" alt="">
										</div>
									</div>
									<div class="preserve-desp">
										<p class="fz-r-jp fz-15">
											虫などが入らないように気を付け、開封後は1ヶ月を目安に使い切って頂ければ、優れた品質が保たれます。
										</p>
									</div>
								</div>
							</li>
						</ul>
					</section>
					<section class="sec-seibun">
						<div class="midashi02">
							<p class="ttl-jp02 fz-m-jp fz-21 txt-black01">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_03.png" alt="">
								<span><span class="fz-m-jp fz-16 p0 detail-p0"><?php echo the_title(); ?>の</span>成分</span>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_02.png" alt="">
							</p>
						</div>
						<div class="seibun-block">
							<ul class="col-wrap">
								<li class="col1 col1-sp">
									<div class="sec-tb02">
										<table class="tb-height fz-15">
										  <colgroup>
										    <col class="td1 bg-green1" width="12%">
										    <col class="td2 bg-green2" width="38%">
										    <col class="td3" width="50%">
										  </colgroup>
										  <?php $cal_ttlamount = SCF::get( 'cal_ttlamount' ); ?>
											<?php $cal_type01 = SCF::get( 'cal_type01' ); ?>
											<?php $cal_amount01 = SCF::get( 'cal_amount01' ); ?>
											<?php $repeat_group = SCF::get( 'supli_cal'); ?>
											<?php $count = 0; ?>
											<?php foreach ( $repeat_group as $fields ) {
													$type_count = $fields['cal_type'];
													if ($type_count) {
														$count = $count + 1;
													}
												}
											?>
										  <tr class="dis-tb">
										  	<th colspan="2">カロリー</th>
										  	<th><?php echo $cal_ttlamount; ?></th>
										  </tr>
											<tr>
												<td rowspan="<?php echo $count+1; ?>" class="td-first"><p>栄養成分</p></td>
												<td class="td-nd"><?php echo $cal_type01;?></td>
												<td class="td-bdr"><?php echo $cal_amount01;?></td>
											</tr>
											<?php foreach ( $repeat_group as $fields ) {?>
											<?php $have_td =  $fields['cal_type'];?>
											<?php if ($have_td): ?>
											<tr>
												<td class="td-nd"><?php echo $fields['cal_type'];?></td>
												<td><?php echo $fields['cal_amount'];?></td>
											</tr>
											<?php endif ?>
											<?php } ?>
										</table>
									</div>
								</li>
							</ul>
							<p class="fz-r-jp fz-15 mt15">●原材料</p>
							<?php $remark02 = SCF::get( 'remark02' ); ?>
							<p class="fz-r-jp fz-14"><?php echo $remark02; ?></p>
						</div>
					</section>
					<?php get_template_part("template-parts/product/otherpro-cmn"); ?>
					<?php get_template_part("template-parts/qaa_cmn"); ?>
				</div>
			</div>
		</div>