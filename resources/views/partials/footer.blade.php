
	<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col-md-6">

						<div class="widget clearfix">
							<div class="clearfix" style="padding: 10px 0; background: url('images/world-map.png') no-repeat center center;">
								<div class="col_full">
									<div class="widget">
										<h4>
											Head Office
										</h4>
										
										<div>
											No.76/A, 1<sup>st</sup> Street, South Okkalapa Industrial Zone, South Okkalapa Township, Yangon, Myanmar.
										</div>

									</div>	
								</div>
								<br></br>
								<div class="col_full">
									<span title="Phone Number">Phone &nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</span> 95 1 855 1294 <br>
									<span title="Email Address">Email&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</span> info.zayat@zwegroup.com
								</div>
							</div>

							
						</div>

					</div>

					<div class="col-md-6">
                       

						<div class="widget quick-contact-widget clearfix">
							@include('errors.error')

							<h4>Send Message</h4>

							<div class="quick-contact-form-result"></div>

							<form id="quick-contact-form" name="quick-contact-form" action="{{route('send_toadmin')}}" method="post" class="quick-contact-form nobottommargin">
								{{csrf_field()}}

								<div class="form-process"></div>

								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-user"></i></span>
									<input type="text" class="required form-control input-block-level" id="quick-contact-form-name" name="qcname" value="" placeholder="Full Name" />
								</div>
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="text" class="required form-control email input-block-level" id="quick-contact-form-email" name="qcemail" value="" placeholder="Email Address" />
								</div>
								<textarea class="required form-control input-block-level short-textarea" id="quick-contact-form-message" name="qcmessage" rows="4" cols="30" placeholder="Message"></textarea>
								<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
								<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small nomargin" value="submit">Send</button>

							</form>

						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_full nobottommargin center">
						<div class="copyrights-menu copyright-links clearfix">
							<a href="{{route('home')}}">Home</a>
							/<a href="{{route('frontend.about')}}">About</a>							
							/<a href="{{route('frontend.terms')}}">Terms & Conditions</a>
							/<a href="{{route('frontend.faqs')}}">FAQs</a>
							/<a href="#">Contact</a>
						</div>
						<div>
							<a href="#" class="footer_link">Zayat</a> by Zware Group.  © 2018. Powered by <a class="footer_link_fbi" href="http://www.falconbreeze.com">Falcon IT Media Lab.</a>

						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>
	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="{{asset('js/functions.js')}}"></script>
	<script type="text/javascript" src="{{asset('css/material.js')}}"></script>
</body>
</html>