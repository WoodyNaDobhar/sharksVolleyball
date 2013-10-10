
	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider"><?php 
		
			foreach($scrollers as $scroller){
				
				//extract the image alt
				$imageAlt = '';
				
				echo '
			<div class="da-slide">
				<h2>'.$scroller['Scroller']['header'].'</h2>
				<p>'.$scroller['Scroller']['message'].'</p>
				<a href="'.$scroller['Scroller']['link'].'" class="da-link">Read more</a>
				<div class="da-img"><img src="'.$scroller['Scroller']['image'].'" alt="'.$imageAlt.'" /></div>
			</div>';
			}
?>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>
	</div>
	<!-- end: Slider -->
			
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
		<div class="container">
			
			<hr>
            
			<!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
			<div class="hero-unit">
				<h3>
					<?php echo $home['Home']['hero_msg']; ?>
				</h3>
				<p><a href="<?php echo $home['Home']['hero_link']; ?>" class="btn btn-primary btn-large"><?php echo $home['Home']['hero_cta']; ?> &raquo;</a></p>
			</div>
			<!-- end: Hero Unit -->
			
			<hr>
			
			<!-- start: Row -->
			<div class="row">
				
				<!-- start: Icon Boxes -->
				<div class="icons-box-vert-container">

					<!-- start: Icon Box Start -->
					<div class="span4">
						<div class="icons-box-vert">
							<i class="<?php echo $home['Home']['dp1_icon']; ?> ico-white circle-color-full"></i>
							<div class="icons-box-vert-info">
								<h3><?php echo $home['Home']['dp1_header']; ?></h3>
								<p><?php echo $home['Home']['dp1_content']; ?></p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box-->

					<!-- start: Icon Box Start -->
					<div class="span4">
						<div class="icons-box-vert">
							<i class="<?php echo $home['Home']['dp2_icon']; ?> ico-white circle-color-full"></i>
							<div class="icons-box-vert-info">
								<h3><?php echo $home['Home']['dp2_header']; ?></h3>
								<p><?php echo $home['Home']['dp2_content']; ?></p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

					<!-- start: Icon Box Start -->
					<div class="span4">
						<div class="icons-box-vert">
							<i class="<?php echo $home['Home']['dp3_icon']; ?> ico-white circle-color-full"></i>
							<div class="icons-box-vert-info">
								<h3><?php echo $home['Home']['dp3_header']; ?></h3>
								<p><?php echo $home['Home']['dp3_content']; ?></p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

				</div>
				<!-- end: Icon Boxes -->
				<div class="clear"></div>
			</div>
			<!-- end: Row -->
			
			<hr>
			<div class="row">
				<div class="span9">
					<div class="title"><h3>Latest Images</h3></div>
					
					<!-- start: Row -->
					<div class="row"><?php 
					
					//iterate three times, displaying the latest pics on flickr
					for($i=0;$i<3;$i++){
						
						//clean up the description
						preg_match_all('/<p>(.*?)<\/p>/', substr($flickrFeed['items'][$i]['description'], 1), $flickrDescr);
						$description = (isset($flickrDescr[1][2])?$flickrDescr[1][2]:null);
						echo '
						<div class="span3">
							<div class="picture">
								<a href="'.$flickrFeed['items'][$i]['link'].'" rel="image" title="'.$flickrFeed['items'][$i]['title'].'">
									<img src="'.$flickrFeed['items'][$i]['media']['m'].'" >
									<div class="image-overlay-zoom"></div>
								</a>
							</div>
							<div class="item-description">
								<h4><a href="#">'.$flickrFeed['items'][$i]['title'].'</a></h4>
								<p>'.$description.'</p>
							</div>
						</div>';
					}
					
?>
					</div>
				</div>

				<div class="span3">
					
					<!-- start: Testimonials-->

					<div class="testimonial-container">

						<div class="title"><h3>Testimonials</h3></div>

							<div class="testimonials-carousel" data-autorotate="3000">

								<ul class="carousel"><?php 
								
								foreach($testimonials as $testimonial){
									
									echo '
									<li class="testimonial">
										<div class="testimonials">'.$testimonial['Testimonial']['testament'].'</div>
										<div class="testimonials-bg"></div>
										<div class="testimonials-author">'.$testimonial['Testimonial']['testifier'].', <span>'.date("m/d/Y", strtotime($testimonial['Testimonial']['created'])).'</span></div>
									</li>';
								}
								
								?>
								</ul>

							</div>

						</div>

					<!-- end: Testimonials-->
					
				</div>

			</div>
			<!-- end: Row -->
			
			<hr>