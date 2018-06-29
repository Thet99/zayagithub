<!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

      <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">

          <div class="col-md-6">

            <div class="widget clearfix">

              <img src="images/footer-widget-logo.png" alt="" class="footer-logo">

              
              <div class="clearfix" style="padding: 10px 0; background: url('images/world-map.png') no-repeat center center;">
                <div class="col_half">
                  <address class="nobottommargin">
                    <abbr title="Headquarters" style="display: inline-block;margin-bottom: 7px;"><strong>Headquarters:</strong></abbr><br>
                    NO.76/A 8TH QTR SOUTH OKKALAPA INDUSTRIAL ZONE,<br>
                     YANGON, MYANMAR<br>
                  </address>
                </div>
                <div class="col_half col_last">
                  <abbr title="Phone Number"><strong>Phone:</strong></abbr> (+951) 856 5911 <br>
                  <abbr title="Email Address"><strong>Email:</strong></abbr> info.zayat@zwegroup.com
                </div>
              </div>

              <a href="#" class="social-icon si-small si-rounded topmargin-sm si-facebook">
                <i class="icon-facebook"></i>
                <i class="icon-facebook"></i>
              </a> 
              
              <a href="#" class="social-icon si-small si-rounded topmargin-sm si-linkedin">
                <i class="icon-linkedin"></i>
                <i class="icon-linkedin"></i>
              </a>

              <a href="#" class="social-icon si-small si-rounded topmargin-sm si-instagram">
                <i class="icon-instagram"></i>
                <i class="icon-instagram"></i>
              </a>


            </div>

          </div>

        

          <div class="col-md-6">

            <div class="widget quick-contact-widget clearfix">

              <h4>Send Message</h4>

              <div class="quick-contact-form-result"></div>

              <form id="quick-contact-form" name="quick-contact-form" action="include/quickcontact.php" method="post" class="quick-contact-form nobottommargin">

                <div class="form-process"></div>

                <div class="input-group divcenter">
                  <span class="input-group-addon"><i class="icon icon-user"></i></span>
                  <input type="text" class="required form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
                </div>
                <div class="input-group divcenter">
                  <span class="input-group-addon"><i class="icon icon-email2"></i></span>
                  <input type="text" class="required form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
                </div>
                <textarea class="required form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
                <input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
                <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small nomargin" value="submit">Send Email</button>

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
              <a href="<?php echo e(route('home')); ?>">Home</a>/<a href="<?php echo e(route('frontend.about')); ?>">About</a>/<a href="#">Career</a>/<a href="<?php echo e(route('frontend.terms')); ?>">Terms & Condition</a>/<a href="<?php echo e(route('frontend.faqs')); ?>">FAQs</a>/<a href="#">Contact</a>
            </div>
            Copyrights &copy; 2018 All Rights Reserved by ZAYAT.
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
  <script type="text/javascript" src="<?php echo e(asset('js/jquery.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('js/plugins.js')); ?>"></script>
  <!-- Footer Scripts
  ============================================= -->
  <script type="text/javascript" src="<?php echo e(asset('js/functions.js')); ?>"></script>
  <script  src="<?php echo e(asset('css/material.js')); ?>"></script>
  <script type="text/javascript">
    // $(document).ready(function(){
    //   $(window).load(function(){

    //     $.ajax({
    //     url:'/test',
    //     type:'get',
    //     dataType:'json',
    //    success:function(res){
    //       if(res){
    //       for(var i=0;i<res.length;i++){
    //         html='';
          
        //console.log(res[0].ephoto.photo_name);
        //html+="<div><img src='http://zayat.local/thumbnail/";
        //html+=res[0].ephoto.photo_name+"'>";
        //html+="<p>"+res[0].shortnote+"</p>";
  //       html+="<div id='tabs-news-1'><div class='col_half'><img src='http://zayat.local/storage/events/";
  //       html+=res[i].ephoto.photo_name;
  //       html+=" '></div><div class='col_half col_last'><div class='entry-title'><h4><a href='#'>"+res[i].name+"</a></h4></div><ul class='entry-meta clearfix'>        <li><i class=icon-calendar3></i>"+res[i].created_at+"</li></ul><div class='entry-content'><p>"+res[i].shortnote+"</p>";
  //       var url="{{route("
  //       html+="<a href='http://zayat.local/event/"+res[i].id+"'>";
        
  //       html+="<button class='button button-small'>Read More</button></a>";                    
  //       html+="</div></div></div>"; 
  //       $('.event-container').append(html);
  //     }

  //     var divid="<div class='divider divider-center'><a href='#' data-scrollto='#header'><i class='icon-chevron-up'></i></a></div>";

  //     $('.event-container').append(divid);
        

  //        }else{
  //           alert('No event to show!');
  //         }
  //       }
  //     });
  //     });
  //   });
  // </script>
  // <script type="text/javascript">
  //     $(document).ready(function(){
  //     $(window).load(function(){

  //       $.ajax({
  //       url:'/upcoming',
  //       type:'get',
  //       dataType:'json',
  //      success:function(res){
  //         if(res){
  //         for(var i=0;i<res.length;i++){
  //           html='';
          
        //console.log(res[0].ephoto.photo_name);
        //html+="<div><img src='http://zayat.local/thumbnail/";
        //html+=res[0].ephoto.photo_name+"'>";
        //html+="<p>"+res[0].shortnote+"</p>";
    //     html+="<div id='tabs-news-1'><div class='col_half'><img src='http://zayat.local/storage/events/";
    //     html+=res[i].ephoto.photo_name;
    //     html+=" '></div><div class='col_half col_last'><div class='entry-title'><h4><a href='#'>"+res[i].name+"</a></h4></div><ul class='entry-meta clearfix'>        <li><i class=icon-calendar3></i>"+res[i].created_at+"</li></ul><div class='entry-content'><p>"+res[i].shortnote+"</p>";        
    //     html+="<a href='http://zayat.local/event/"+res[i].id+"'>";
        
    //     html+="<button class='button button-small'>Read More</button></a>";                    
    //     html+="</div></div></div>"; 
    //     $('.old-events').append(html);
    //   }

    //   var divid="<div class='divider divider-center'><a href='#' data-scrollto='#header'><i class='icon-chevron-up'></i></a></div>";

    //   $('.old-events').append(divid);
        

    //      }else{
    //         alert('No event to show!');
    //       }
    //     }
    //   });
    //   });
    // });
  </script> 
  
</body>
</html>