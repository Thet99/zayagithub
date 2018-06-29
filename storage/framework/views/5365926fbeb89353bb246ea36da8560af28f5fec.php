<footer id="footer" class="dark">

  <div class="container">
    <div class="si-sticky visible-md visible-lg">
            <a href="#" class="social-icon si-facebook" data-animate="bounceInLeft">
              <i class="icon-facebook"></i>
              <i class="icon-facebook"></i>
            </a>

            <a href="#" class="social-icon si-instagram" data-animate="bounceInLeft">
              <i class="icon-instagram"></i>
              <i class="icon-instagram"></i>
            </a>
            
            <a href="#" class="social-icon si-skype" data-animate="bounceInLeft">
              <i class="icon-skype"></i>
              <i class="icon-skype"></i>
            </a>
            <a href="#" class="social-icon si-linkedin" data-animate="bounceInLeft">
              <i class="icon-linkedin"></i>
              <i class="icon-linkedin"></i>
            </a>

            
    </div>
    <!-- Footer Widgets
    ============================================= -->
    <div class="footer-widgets-wrap clearfix">

      <div class="col_three_third">

        <div class="col_one_third">

          <div class="widget clearfix">


           <h4>Contact</h4>

            <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">

              <address>
                <br>
                NO.76/A 8TH QTR SOUTH OKKALAPA INDUSTRIAL ZONE, YANGON, MYANMAR
              </address>
                <!-- <address>

                <strong>Meet & Greet</strong><br>
                No(440), WAIZAYANTAR ROAD, SOUTH OKKALAPA Township. YANGON, MYANMAR.<br>
                </address> -->

               <!--  <address>
                <strong>Learning Center</strong><br>
                NO.49/A 8TH QTR SOUTH OKKALAPA INDUSTRIAL ZONE 4<sut>th</sut> Street, YANGON, MYANMAR<br>
              </address> -->
                <abbr title="Phone Number"><strong>Phone:</strong></abbr> +951-8565911 

              <br>
              <abbr title="Email Address"><strong>Email:</strong></abbr> info.zayat@zwegroup.com
            </div>
          </div>
        </div>

        <div class="col_one_third">
          <h4>Information</h4>
          <div class="widget widget_links clearfix">
            <ul>
              <li><a href="">About Us </a></li>
              <li><a href="">Career </a></li>
              <li>
                <a href="<?php echo e(route('frontend.terms')); ?>">Terms & Condition </a>
              </li>
              <li>
                <a href="<?php echo e(route('frontend.faqs')); ?>">FAQs </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <style>
      #map {
        height: 390px;
        width: 100%;
      }
      </style>
      <script>
        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

        function initMap() {
          var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 16.8346699, lng: 96.1733031},
            zoom: 15
          });

          var infowindow = new google.maps.InfoWindow();
          var service = new google.maps.places.PlacesService(map);

          service.getDetails({
            placeId: 'ChIJ5VgS9DiTwTARRyiWL-xkmZo'
          }, function(place, status) {
            if (status === google.maps.places.PlacesServiceStatus.OK) {
              var marker = new google.maps.Marker({
                map: map,
                position: place.geometry.location
              });
              google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                  'No.76/A, 8th Qtr, South Okkalapa Industrial Zone, Yangon, Myanmar (Burma). ' + '</div>');
                infowindow.open(map, this);

                });
            }
          });
        }
      </script>
      <div class="col_one_third col_last">
        <div class="row" style="margin:3px;">
            <div class="map-responsive" style="margin-bottom:20px;">
              <div id="map"></div>
                <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_LC2IiRxluAXgDCKRpKAdD39F1J-Osrg&libraries=places&callback=initMap">
                </script>
              </div>
            </div>
      </div>

    </div><!-- .footer-widgets-wrap end -->

  </div>

  <!-- Copyrights
  ============================================= -->
  <div id="copyrights">

    <div class="container clearfix">

      <div class="col_half">
        Copyrights &copy; 2018 All Rights Reserved by Zayat.<br>

      </div>

      <div class="col_half col_last tright">
        <div class="fright clearfix">
          <!--<a href="#" class="social-icon si-small si-borderless si-facebook">
            <i class="icon-facebook"></i>
            <i class="icon-facebook"></i>
          </a>

          <a href="#" class="social-icon si-small si-borderless si-twitter">
            <i class="icon-twitter"></i>
            <i class="icon-twitter"></i>
          </a>

          <a href="#" class="social-icon si-small si-borderless si-gplus">
            <i class="icon-gplus"></i>
            <i class="icon-gplus"></i>
          </a>

          <!--<a href="#" class="social-icon si-small si-borderless si-pinterest">
            <i class="icon-pinterest"></i>
            <i class="icon-pinterest"></i>
          </a>

          <a href="#" class="social-icon si-small si-borderless si-vimeo">
            <i class="icon-vimeo"></i>
            <i class="icon-vimeo"></i>
          </a>

          <a href="#" class="social-icon si-small si-borderless si-github">
            <i class="icon-github"></i>
            <i class="icon-github"></i>
          </a>

          <a href="#" class="social-icon si-small si-borderless si-yahoo">
            <i class="icon-yahoo"></i>
            <i class="icon-yahoo"></i>
          </a>

          <a href="#" class="social-icon si-small si-borderless si-linkedin">
            <i class="icon-linkedin"></i>
            <i class="icon-linkedin"></i>
          </a>-->
        </div>

        <div class="clear"></div>

        <i class="icon-envelope2"></i> info.zayat@zwegroup.com<span class="middot">&middot;</span> <i class="icon-headphones"></i> +951-8565911
      </div>
    </div>
  </div><!-- #copyrights end -->
</footer><!-- #footer end -->

