
<!--Footer Start-->
<div class="footer">
  <div class="container-fluid container-pad">
    <div class="row">
      <div class="clearfix">
        <div class="col-sm-12 col-md-6">
          <div class="col-sm-4 col-md-5">
            <h2 class="foot-head">get in touch</h2>
            <address class="footer-address">
            Unit No: 503, <br>
            V.V. Vintage Boulevard,<br>
            Raj Bhavan Road, Somajiguda,<br>
            Hyderabad - 500082<br>
            India
            </address>
            <ul class="list-unstyled footer-ul">
              <li><a href="#"><i class="fa fa-phone-square" aria-hidden="true"></i>040- 6655 6655</a></li>
              <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>info@finoptic.com</a></li>
            </ul>
          </div>
          <div class="col-sm-4 col-md-4">
            <h2 class="foot-head">TOP FEATURES</h2>
            <ul class="list-unstyled footer-ul">
              <li><a href="#">Ticketing System</a></li>
              <li><a href="#">Knowledge Base</a></li>
              <li><a href="#">Community Forums</a></li>
              <li><a href="#">Help Desk Software</a></li>
              <li><a href="#">IT Help Desk</a></li>
            </ul>
          </div>
          <div class="col-sm-4 col-md-3">
            <h2 class="foot-head">QUICK LINKS</h2>
            <ul class="list-unstyled footer-ul">
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Download forms</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Media</a></li>
              <li><a href="#">Contacts</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="col-sm-4 col-md-5">
            <h2 class="foot-head">STOCK TICKER</h2>
            <ul class="list-unstyled footer-ul">
              <li><a href="#">AAPL 90.32 -2.19-2.37%</a></li>
              <li><a href="#">AAPL 90.32 -2.19-2.37%</a></li>
              <li><a href="#">AAPL 90.32 -2.19-2.37%</a></li>
              <li><a href="#">AAPL 90.32 -2.19-2.37% </a></li>
              <li><a href="#">AAPL 90.32 -2.19-2.37%</a></li>
            </ul>
          </div>
          <div class="col-sm-8 col-md-7">
            <h2 class="foot-head">SUBSCRIBE TO OUR UPDATES</h2>
            <p class="join-p">Join the group of other people who have
              also signed up for our mailing list.</p>
            <div class="input-group footer-inputgroup">
              <input type="text" class="form-control" placeholder="What is your email?" aria-label="Search for...">
              <span class="input-group-btn">
              <button class="btn btn-secondary send-btn" type="button">send</button>
              </span> </div>
            <ul class="list-inline social-links">
              <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <hr class="footer-line">
    <div class="row copyrights">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <p>&copy; 2017 <a href="index.html">Finoptic.</a> All Rights Reserved.</p>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <ul class="list-inline">
          <li><a href="#">Privacy Policy</a></li>
          <li><a>|</a></li>
          <li><a href="#">Disclaimer</a></li>
          <li><a href="#" target="_blank"><img src="slices/footer-logo.png"></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--Footer End--> 

<script>
            $('.owl-carousel').owlCarousel({
                autoplay: 2000,
                singleItem: true,
                items: 1,
                pagination: true,
                loop: true,
            })
        </script>
  <script>
            //TOGGLE ICON
            $(".plus-minus").click(function () {
                $(this).parents(".panel").find(".toggle-content").slideToggle("swing");
                $(this).find("i").toggleClass("fa-plus fa-minus");
            });
			        $(".plus-minus").click(function () {
            $('.panel-collapse.in').collapse('hide');
        });
		$('.panel-collapse').on('shown.bs.collapse', function(){
			  
    $(this).prev('.panel-heading').find("i").removeClass("fa-plus").addClass("fa-minus");
  }).on('hidden.bs.collapse', function(){
    $(this).prev('.panel-heading').find("i").removeClass("fa-minus").addClass("fa-plus");
  });
        </script>
         <script>
            jQuery('.datepicker').datepicker({
                format: 'dd-mm-yyyy'
            });
			jQuery(".match").matchHeight();
        </script>
</body>
</html>