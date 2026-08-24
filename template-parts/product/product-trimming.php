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
							<p class="fz-r-jp fz-15 txt-center-sp"><?php the_field('text01') ?><br class="sp"><?php the_field('text02') ?></p>
							<p class="sliderR-price fz-m-jp fz-25 fz-30-sp txt-black01"><span><?php the_field('price') ?></span></p>
							<div class="joycart-div">
							<label class="joycart-label fz-r-jp fz-15">
							<?php if (get_field('content_volume')): ?>
								<?php the_field('content_volume'); ?>
							<?php else: ?>
								【個数】
							<?php endif; ?>
							</label>
								<?php the_field('joycart'); ?>
							</div>
							<?php if( get_field('clickpost') ): ?>
								<p class="sliderR-txt01 fz-r-jp fz-15 txt-red mb10"><?php the_field('clickpost'); ?></p>
							<?php endif; ?>
							<p class="sliderR-txt01 fz-r-jp fz-15"><?php the_field('text03') ?><br class="sp"><?php the_field('text04') ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bgcol-y hairdryer">
			<div class="m-width900">
				<div class="m-width725">
						<?php $feature_text = get_field('feature_text');?>
						<?php $havetable = SCF::get( 'havetable' ); ?>
						<?php if ($feature_text || $havetable): ?>
					<section class="sec-features">
						<div class="midashi02">
							<p class="ttl-jp02 fz-m-jp fz-21 txt-black01">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_03.png" alt=""><span>特徴</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/ttlicon_02.png" alt="">
							</p>
						</div>
						
						<?php if( $feature_text ): ?>
						<p class="text-lheight fz-r-jp fz-15 txt-black"><?php echo $feature_text; ?></p>
						<?php endif; ?>
						<?php if ($havetable): ?>
						<div class="amount-table mt30">
							<table class="hairdryer-tb1">
								<colgroup>
									<col width="37%">
									<col width="63%">
								</colgroup>
								<tr>
									<th colspan="2">仕様</th>
								</tr>
						<?php
							$repeat_group = SCF::get( 'feature_table');
							foreach ( $repeat_group as $fields ) { ?>
						 <?php
						 $feature_textleft =$fields['feature_textleft'];
						 if ($feature_textleft) {?>
							<tr>
								<td><?php echo $fields['feature_textleft'];?></td>
								<td><?php echo $fields['feature_textright'];?></td>
							</tr>
						<?php	} ?>
						<?php } ?>
							</table>
						</div>
						<?php endif; ?>
					</section>
					<?php endif; ?>
					<?php get_template_part("template-parts/product/otherpro-cmn"); ?>
					<?php get_template_part("template-parts/qaa_cmn"); ?>
				</div>
			</div>
		</div>