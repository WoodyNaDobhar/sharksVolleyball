
	<div id="page-title">
		<div id="page-title-inner">
			<div class="container">
				<h2><i class="ico-volleyball ico-white"></i>Club Information</h2>
			</div>
		</div>
	</div>
	<div id="wrapper">
		<div class="container">
			<div class="row">
				<div class="span8">
					<div id="about">
						<div class="title"><h3>Club Information</h3></div>
						<?PHP echo $club['Club']['club']; ?>
					</div>
				</div>
				<div class="span4">
					<div id="sidebar">
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
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<hr>
