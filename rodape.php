	<!-- contact -->
		<section id="section-contact" class="section appear clearfix">
			<div class="container">

				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
							<h2 class="section-heading animated" data-animation="bounceInUp">Contact us</h2>
							<p>
								Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="cform" id="contact-form">
							<div id="sendmessage">
								Sua mensagem foi enviada. Obrigado!
							</div>
							<form action="contact/contact.php" method="post" role="form" class="contactForm">
								<div class="form-group">
									<label for="name">Seu nome</label>
									<input type="text" name="name" class="form-control" id="name" placeholder="Seu nome" data-rule="maxlen:4" data-msg="Por favor, insira pelo menos 4 caracteres" />
									<div class="validation"></div>
								</div>
								<div class="form-group">
									<label for="email">Seu email</label>
									<input type="email" class="form-control" name="email" id="email" placeholder="Seu email" data-rule="email" data-msg="Por favor entre com um email válido" />
									<div class="validation"></div>
								</div>
								<div class="form-group">
									<label for="subject">Assunto</label>
									<input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="maxlen:4" data-msg="Por favor, insira pelo menos 8 caracteres de assunto" />
									<div class="validation"></div>
								</div>
								<div class="form-group">
									<label for="message">Mensagem</label>
									<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor, escreva algo para nós"></textarea>
									<div class="validation"></div>
								</div>

								<button type="submit" class="btn btn-theme pull-left" id="button1">
									Enviar Mensagem
								</button>
							</form>

						</div>
					</div>
					<!-- ./span12 -->
				</div>

			</div>
		</section>
		<!-- map -->
		<section id="section-map" class="clearfix">
			<div id="map"></div>
		</section>

		<section id="footer" class="section footer">
			<div class="container">
				<div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
					<div class="col-sm-12 align-center">
						<ul class="social-network social-circle">
							<li>
								<a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a>
							</li>
							<li>
								<a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a>
							</li>
							<li>
								<a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a>
							</li>
						</ul>
					</div>
				</div>

				<div class="row align-center copyright">
					<div class="col-sm-12">
						<p>
							Copyright &copy; 2015 - Fernando Bruno Boscato <a href="http://bootstraptaste.com">Bootstraptaste</a>
						</p>
					</div>
				</div>
			</div>

		</section>
		<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>
		<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
		<script src="js/jquery.isotope.min.js"></script>
		<script src="js/jquery.nicescroll.min.js"></script>
		<script src="js/fancybox/jquery.fancybox.pack.js"></script>
		<script src="js/skrollr.min.js"></script>
		<script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
		<script src="js/jquery.localscroll-1.2.7-min.js"></script>
		<script src="js/stellar.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/validate.js"></script>
		<script src="js/main.js"></script>
		<script type="text/javascript">
			// When the window has finished loading create our google map below
			google.maps.event.addDomListener(window, 'load', init);

			function init() {
				// Basic options for a simple Google Map
				// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
				var mapOptions = {
					// How zoomed in you want the map to start at (always required)
					zoom : 11,

					// The latitude and longitude to center the map (always required)
					center : new google.maps.LatLng(40.6700, -73.9400), // New York

					// How you would like to style the map.
					// This is where you would paste any style found on Snazzy Maps.
					styles : [{
						featureType : "all",
						elementType : "all",
						stylers : [{
							invert_lightness : true
						}, {
							saturation : 10
						}, {
							lightness : 30
						}, {
							gamma : 0.5
						}, {
							hue : "#1C705B"
						}]
					}]
				};

				// Get the HTML DOM element that will contain your map
				// We are using a div with id="map" seen below in the <body>
				var mapElement = document.getElementById('map');

				// Create the Google Map using out element and options defined above
				var map = new google.maps.Map(mapElement, mapOptions);
			}
		</script>
	</body>
</html>