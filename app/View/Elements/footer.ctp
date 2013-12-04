
			<!-- start ads List -->	
			<div class="clients-carousel">
		
				<ul class="slides clients"><?php

//list 'em
foreach($teamAds as $ad){

	echo '
					<li><a target="_blank" href="'.$ad['Ad']['link'].'"><img src="'.$ad['Ad']['image'].'" /></a></li>';
}

?>	
				</ul>
		
			</div>
			<!-- end Clients List -->
		
			<hr>
			
		</div>
		<!--end: Container-->
	
	</div>
	<!-- end: Wrapper  -->			

	<!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">

		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: Footer Menu Links-->
				<div class="span11">
					
					<div id="footer-menu-links">

						<ul id="footer-nav">

							<li><a href="about.html">Home</a></li>
							<li><a href="about-story">Our Story</a></li>
							<li><a href="http://www.gametimesportscenter.net">Our Facilities</a></li>
	                  		<li><a href="/tryout">Tryouts</a></li>
	                  		<li><a href="/shop">Shop</a></li>
	              			<li ><a href="/contact">Contact</a></li>
						</ul>

					</div>
					
				</div>
				<!-- end: Footer Menu Links-->

				<!-- start: Footer Menu Back To Top -->
				<div class="span1">
						
					<div id="footer-menu-back-to-top">
						<a href="#"></a>
					</div>
				
				</div>
				<!-- end: Footer Menu Back To Top -->
			
			</div>
			<!-- end: Row -->
			
		</div>
		<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->

	<!-- start: Footer -->
	<div id="footer">
		
		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: About -->
				<div class="span3">
					
					<h3>About Us</h3>
					<p>
						<?=$aboutShort?>
					</p>
						
				</div>
				<!-- end: About -->

				<!-- start: Photo Stream -->
				<div class="span3">
					<h3>Photo Stream</h3>
					<div class="flickr-widget">
						<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&display=latest&size=s&layout=x&source=user&user=<?php echo $socials[$flickrId]['Social']['service_identity']; ?>"></script>
						<div class="clear"></div>
					</div>
				</div>
				<!-- end: Photo Stream -->

				<div class="span6">
					<!-- start: Follow Us -->
					<h3>Follow Us!</h3>
					<ul class="social-grid"><?php 
					
					foreach($socials as $social){
						
						echo '
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-'.$social['Social']['service'].'">
											<a href="'.$social['Social']['url'].'"></a>
										</div>
										<div class="social-info-back social-'.$social['Social']['service'].'-hover">
											<a href="'.$social['Social']['url'].'"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>';
					}
?>
					</ul>
					<!-- end: Follow Us -->
				
					<!-- start: Newsletter -->
<!-- 					<form id="newsletter"> -->
<!-- 						<h3>Newsletter</h3> -->
<!-- 						<p>Please leave us your email</p> -->
<!-- 						<label for="newsletter_input">@:</label> -->
<!-- 						<input type="text" id="newsletter_input"/> -->
<!-- 						<input type="submit" id="newsletter_submit" value="submit"> -->
<!-- 					</form> -->
					<!-- end: Newsletter -->
				
				</div>
				
			</div>
			<!-- end: Row -->	
			
		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Footer -->

	<!-- start: Copyright -->
	<div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
		
			<div class="span12">
				<p>
					&copy; 2013, <a href="http://www.azuriteweb.com">Azurite Web</a>. Original design by <a href="http://clabs.co">creativeLabs</a>
				</p>
			</div>
	
		</div>
		<!-- end: Container  -->
		
	</div>	
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/jquery-1.9.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.isotope.min.js"></script>
<script src="/js/jquery.imagesloaded.js"></script>
<script src="/js/flexslider.js"></script>
<script src="/js/carousel.js"></script>
<script src="/js/jquery.cslider.js"></script>
<script src="/js/slider.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/ckeditor/ckeditor.js"></script>

<script src="/js/excanvas.js"></script>
<script src="/js/jquery.flot.js"></script>
<script src="/js/jquery.flot.pie.min.js"></script>
<script src="/js/jquery.flot.stack.js"></script>
<script src="/js/jquery.flot.resize.min.js"></script>

<script src="/js/bootstrap-datetimepicker.min.js"></script>

<script src="/js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>