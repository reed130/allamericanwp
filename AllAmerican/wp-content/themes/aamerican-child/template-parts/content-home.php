<?php
/*
Template Name: Front Page Template
*/
get_header();
 ?>

			<div class="home-banner">
				<div id="owl-slider-1" class="owl-carousel owl-theme">

					<?php if( have_rows('main_banner') ): ?>									
						<?php while( have_rows('main_banner') ): the_row(); ?>								
							<div class="item">
					    		<div class="banner-wrapper">
						    		<div class="banner-image">								
						    			<img src="<?php echo the_sub_field('banner'); ?>">
						    		</div>
						    		<div class="banner-desc">
						    			<div class="banner-desc-inner">
						    				<?php echo the_sub_field('description'); ?>
						    			</div>
						    		</div>						    		
						    	</div>
							</div>
							<?php endwhile; ?>
					<?php endif; ?>						
				</div>
			</div>

			<div id="about-us" class="about-us-section section">
				<div class="inner-wrapper">
					<div class="section-title"><?php echo get_field('about_title'); ?></div>
					
					<div class="section-desc">
						<div class="about-left">
							<?php echo get_field('about_section_left_content'); ?>
						</div>
						<div class="about-middle">
							<div class="call-out-wrpper">
								<div class="call-out-img"><img src="<?php echo get_field('about_section_middle_image'); ?>"></div>
								<div class="call-out-text">
									<?php echo get_field('about_section_middle_content'); ?>
								</div>
							</div>
						</div>
						<div class="about-right">
							<?php echo get_field('about_section_right_content'); ?>
						</div>
					</div>
					
					<div class="content-gallery-slider">
						<div class="content-gallery-slider-inner">
							<div class="slider-title"><?php echo get_field('our_staff_title'); ?></div>
							<div id="owl-slider-2" class="owl-carousel owl-theme">
								<?php if( have_rows('staff') ): ?>
           						<?php while( have_rows('staff') ): the_row(); ?>	
										 <div class="item">
									    	<div class="content-slide-wrapper">
									    		<div class="content-slide-box">								    			
									    			<img src="<?php echo the_sub_field('profile_image'); ?>">
									    		</div>
									    		<div class="slide-name">
									    			<div class="slide-name-inner">									    				
									    				<?php echo the_sub_field('name'); ?>									    				
									    			</div>
									    		</div>								    		
									    	</div>
										</div>
									<?php endwhile; ?>
      						<?php endif; ?>								   					
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="Archery" class="Archery-section section">
				<div class="inner-wrapper">
					<div class="section-title"><?php echo get_field('archery_title'); ?></div>
					
					<div class="section-desc">
						<div class="desc-inner-content">
							<img src="<?php echo get_field('archery_section_banner'); ?>" class="desc-img left-img">
							<?php echo get_field('archery_section_content'); ?>
						</div>
						<div class="content-gallery-slider">
							<div class="content-gallery-slider-inner">
								<div class="slider-title">Archery Photos</div>
								<div id="owl-slider-3" class="owl-carousel owl-theme">									    
								   <?php if( have_rows('archery_section_gallery') ): ?>									
										<?php while( have_rows('archery_section_gallery') ): the_row(); ?>
											<div class="item">
										    	<div class="content-slide-wrapper">
										    		<div class="content-slide-box">								    			
										    			<a class="venobox" href="<?php echo the_sub_field('gallary_image'); ?>" data-gall="about-art"><img src="<?php echo the_sub_field('gallary_image'); ?>"></a>
										    		</div>
										    	</div>
											</div>	 
										<?php endwhile; ?>
									<?php endif; ?> 									  						
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="firearm" class="firearm-section section">
				<div class="inner-wrapper">
					<div class="section-title"><?php echo get_field('firearms_title'); ?></div>
					
					<div class="section-desc">
						<div class="desc-inner-content">
							<img src="<?php echo get_field('firearms_section_banner'); ?>" class="desc-img right-img">
							<?php echo get_field('firearms_section_content'); ?>
						</div>
						<div class="content-gallery-slider">
							<div class="content-gallery-slider-inner">
								<div class="slider-title">Firearms Photos</div>
								<div id="owl-slider-4" class="owl-carousel owl-theme">
									<?php if( have_rows('firearms_section_gallery') ): ?>									
										<?php while( have_rows('firearms_section_gallery') ): the_row(); ?>
											<div class="item">
										    	<div class="content-slide-wrapper">
										    		<div class="content-slide-box">								    			
										    			<a class="venobox" href="<?php echo the_sub_field('gallery_image'); ?>" data-gall="about-art"><img src="<?php echo the_sub_field('gallery_image'); ?>"></a>
										    		</div>
										    	</div>
											</div>	 
										<?php endwhile; ?>
									<?php endif; ?>						
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="fishing" class="fishing-section section">
				<div class="inner-wrapper">
					<div class="section-title"><?php echo get_field('fishing_title'); ?></div>
					
					<div class="section-desc">
						<div class="desc-inner-content">
							<img src="<?php echo get_field('fishing_section_banner'); ?>" class="desc-img left-img">
							<?php echo get_field('fishing_section_content'); ?>
						</div>
						<div class="content-gallery-slider">
							<div class="content-gallery-slider-inner">
								<div class="slider-title">Fishing Photos</div>
								<div id="owl-slider-5" class="owl-carousel owl-theme">
									<?php if( have_rows('fishing_section_gallery') ): ?>									
										<?php while( have_rows('fishing_section_gallery') ): the_row(); ?>
											<div class="item">
										    	<div class="content-slide-wrapper">
										    		<div class="content-slide-box">								    			
										    			<a class="venobox" href="<?php echo the_sub_field('gallery_image'); ?>" data-gall="about-art"><img src="<?php echo the_sub_field('gallery_image'); ?>"></a>
										    		</div>
										    	</div>
											</div>	 
										<?php endwhile; ?>
									<?php endif; ?>									  						
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="trapping" class="trapping-section section">
				<div class="inner-wrapper">
					<div class="section-title"><?php echo get_field('trapping_title'); ?></div>
					
					<div class="section-desc">
						<div class="desc-inner-content">
							<img src="<?php echo get_field('trapping_section_banner'); ?>" class="desc-img right-img">
							<?php echo get_field('trapping_section_content'); ?>
						</div>
						<div class="content-gallery-slider">
							<div class="content-gallery-slider-inner">
								<div class="slider-title">Trapping Photos</div>
								<div id="owl-slider-6" class="owl-carousel owl-theme">
									<?php if( have_rows('trapping_section_gallery') ): ?>									
										<?php while( have_rows('trapping_section_gallery') ): the_row(); ?>
											<div class="item">
										    	<div class="content-slide-wrapper">
										    		<div class="content-slide-box">								    			
										    			<a class="venobox" href="<?php echo the_sub_field('gallery_image'); ?>" data-gall="about-art"><img src="<?php echo the_sub_field('gallery_image'); ?>"></a>
										    		</div>
										    	</div>
											</div>	 
										<?php endwhile; ?>
									<?php endif; ?>		
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="rhino-linings" class="rhino-linings-section section">
				<div class="inner-wrapper">
					<div class="section-title"><?php echo get_field('rhino_linings_title'); ?></div>
					
					<div class="section-desc">
						<div class="desc-inner-content">
							<img src="<?php echo get_field('rhino_linings_section_banner'); ?>" class="desc-img left-img">
							<?php echo get_field('rhino_linings_section_content'); ?>
						</div>
						<div class="content-gallery-slider">
							<div class="content-gallery-slider-inner">
								<div class="slider-title">Rhino Lining Photos</div>
								<div id="owl-slider-7" class="owl-carousel owl-theme">
									<?php if( have_rows('rhino_linings_section_gallery') ): ?>									
										<?php while( have_rows('rhino_linings_section_gallery') ): the_row(); ?>
											<div class="item">
										    	<div class="content-slide-wrapper">
										    		<div class="content-slide-box">								    			
										    			<a class="venobox" href="<?php echo the_sub_field('gallery_image'); ?>" data-gall="about-art"><img src="<?php echo the_sub_field('gallery_image'); ?>"></a>
										    		</div>
										    	</div>
											</div>	 
										<?php endwhile; ?>
									<?php endif; ?>		
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="contact-us" class="contact-us-section section">
				<div class="inner-wrapper">
					<div class="section-title"><?php echo get_field('contact_title'); ?></div>
					
					<div class="section-desc">
						<div class="desc-inner-content">							
							<div class="contact-form-wrapp">
								<div class="contact-icons">
									<?php if( have_rows('contact_icons') ): ?>									
										<?php while( have_rows('contact_icons') ): the_row(); ?>											
											<div class="icon-block">
												<div class="icon-img"><a href="<?php echo the_sub_field('url'); ?>"><img src="<?php echo the_sub_field('icon'); ?>"></a></div>
												<div class="icon-title"><?php echo the_sub_field('content'); ?></div>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
								<div class="form-and-map">
									<div class="form-left">
										<div class="form-wrapper">
											<div class="form-inner">
												<?php echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]'); ?>
											</div>
										</div>
									</div>
									<div class="map-right">										
										<div class="map-wrapper">
											<?php echo get_field('footer_map'); ?>											
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

<?php get_footer(); ?>