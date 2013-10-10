
	<!-- start: Map -->
	<div>

		<!-- starts: Google Maps -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<div id="googlemaps-container-top"></div>
		<div id="googlemaps" class="google-map google-map-full"></div>
		<div id="googlemaps-container-bottom"></div>
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="js/jquery.gmap.min.js"></script>
		<script type="text/javascript">
			$('#googlemaps').gMap({
				maptype: 'ROADMAP',
				scrollwheel: false,
				zoom: 13,
				markers: [
					{
						address: '5151 Bogles Run Road Urbana, OH  43078',
						html: '',
						popup: false,
					}

				],

			});
		</script>
		<!-- end: Google Maps -->
	</div>
	<!-- end: Map -->	
	
	<!-- start: Wrapper -->	
	<div id="wrapper">		

		<!-- start: Container -->	
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">
			
				<!-- start: Contact Info -->
				<div class="span3">
					<div class="title"><h3>Contact Info</h3></div>
					<p>
						<b>Game Time Sports Center<br />Home of the Champaign County Sharks Volleyball Club</b>
					</p>
					<p>
						5151 Bogles Run Road
					</p>
					<p>	
						Urbana, OH  43078, USA
					</p>	
					<p>	
						Phone: (937) 484-3650
					</p>
				</div>
				<!-- end: Contact Info -->		

				<!-- start: Contact Form -->
				<div class="span4">
					<div class="title"><h3>Contact Form</h3></div>

					<!-- start: Contact Form -->
					<div id="contact-form">

						<form accept-charset="utf-8" method="post" action="/contact">

							<fieldset>
								<div class="clearfix">
									<label for="name"><span>Name:</span></label>
									<div class="input">
										<input tabindex="1" size="18" id="name" name="name" type="text" value="">
									</div>
								</div>

								<div class="clearfix">
									<label for="email"><span>Email:</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge">
									</div>
								</div>

								<div class="clearfix">
									<label for="message"><span>Message:</span></label>
									<div class="input">
										<textarea tabindex="4" class="input-xlarge" id="message" name="message" rows="7"></textarea>
									</div>
								</div>

								<div class="actions">
									<input class="btn btn-primary" type="submit" value="Send message"></input>
								</div>
							</fieldset>

						</form>

					</div>
					<!-- end: Contact Form -->

				</div>
				<!-- end: Contact Form -->

				<!-- start: Social Sites -->
				<div class="span5">
					<div class="title"><h3>Follow US!</h3></div>
					<ul class="social-bookmarks"><?PHP 
					
					foreach($socials as $social){
						
						echo '
						<li class="'.$social['Social']['service'].'"><a href="'.$social['Social']['url'].'">'.$social['Social']['service'].'</a></li>';
					}
					
					?>
					</ul>
				</div>
				<!-- end: Social Sites -->
			
			</div>
			<!-- end: Row -->
			
			<hr>