<?php
/**
 * Template Name: Home page template
 */

 get_header();
 ?>
 <section class="home-sec1">
    <div class="">

        <div class="banner-slider">
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri().'/images/banner-1.png'?>" class="image-responsive">
                <div class="box-content">
                   <h2>PROFESSIONAL <br> <span style="color:#FFD31D;">Sanitizations</span> <br> SERVICES</h2> 
                   <a class="btn home-btn">Know more</a>
                </div>
            </div>
<!--
            
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri().'/images/banner-1.png'?>" class="image-responsive">
                <div class="box-content">
                   <h2>PROFESSIONAL <br> <span style="color:#FFD31D;">Sanitizations</span> <br> SERVICES</h2> 
                   <a class="btn home-btn">Know more</a>
                </div>
            </div>
            
            <div class="img-box">
                <img src="<?php echo get_template_directory_uri().'/images/banner-1.png'?>" class="image-responsive">
                <div class="box-content">
                   <h2>PROFESSIONAL <br> <span style="color:#FFD31D;">Sanitizations</span> <br> SERVICES</h2> 
                   <a class="btn home-btn">Know more</a>
                </div>
            </div>
            
-->

            
        </div>
    </div>
     <a class="carousel-nav carousel-prev prev-arrow"><img src="<?php echo get_template_directory_uri().'/images/left-arrow.png'?> "></a>
            <a class="carousel-nav carousel-prev next-arrow"><img src="<?php echo get_template_directory_uri().'/images/right-arrow.png'?> "></a>
</section>

<section class="about-sec" id="aboutus">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo get_template_directory_uri().'/images/aboutus.png'?>" class="image-responsive">
            </div>
            <div class="col-sm-6 abt-content">
                <h3>About us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>
</section>

<section class="countor-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5">
                <h3>Let Your Surroundings SPARC</h3>
                <a class="btn countor-btn">Free Consultations</a>
            </div>
            <div class="col-sm-7">
                  <div class="row" id="counter">

                    <div class="col-sm-4 counter-Txt" style="text-align:center;"><span class="counter-value" data-count="50">0</span>
                        <span class="countor-plus">+</span>  <br><h4>Teams</h4></div>
              
                      <div class="col-sm-4 counter-Txt" style="text-align:center;"><span class="counter-value" data-count="47">0</span>
                        <span class="countor-plus">+</span>  <br><h4>Products</h4></div>
                      
                      <div class="col-sm-4 counter-Txt" style="text-align:center;"><span class="counter-value" data-count="250">0</span>
                        <span class="countor-plus">+</span>  <br><h4>Customers</h4></div>
                  
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="servce-sec" id="services">
    <div class="container">
        <div class="row service-title">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 ">
                <h3>Featured Services</h3>
                <p>Lorem ipsum dolor sit amet, consectetur  elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, qu is nostrud</p>
            </div>
            <div class="col-sm-2">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-8">
<!--
                <img src="<?php echo get_template_directory_uri().'/images/cleanliness.png'?>" class="image-responsive">
                <h4>Featured Services</h4>
                <p>Lorem ipsum dolor sit amet, consectetur  elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, qu is nostrud</p>
-->
                <div class="tab-content">
                    <div id="housekeeing" class="tab-pane fadein active">
                        <img src="<?php echo get_template_directory_uri().'/images/cleanliness.png'?>" class="image-responsive">
                        <h3>Housekeeping services</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut labore et dolore magna aliqua</p>
                    </div>
                    <div id="regular" class="tab-pane fade">
                        <img src="<?php echo get_template_directory_uri().'/images/cleanliness.png'?>" class="image-responsive">
                         <h3>Regular cleaning</h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut labore et dolore magna aliqua</p>
                    </div>
                    <div id="deep-cleaning" class="tab-pane fade">
                        <img src="<?php echo get_template_directory_uri().'/images/cleanliness.png'?>" class="image-responsive">
                        <h3>Deep cleaning</h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut labore et dolore magna aliqua</p>
                    </div>
                    <div id="pest-control" class="tab-pane fade">
                        <img src="<?php echo get_template_directory_uri().'/images/cleanliness.png'?>" class="image-responsive">
                         <h3>Pest control</h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut labore et dolore magna aliqua</p>
                    </div>
                    <div id="disinfectan" class="tab-pane fade">
                        <img src="<?php echo get_template_directory_uri().'/images/cleanliness.png'?>" class="image-responsive">
                         <h3>Disinfectant service</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut labore et dolore magna aliqua</p>
                    </div>
                    <div id="house-repair" class="tab-pane fade">
                        <img src="<?php echo get_template_directory_uri().'/images/cleanliness.png'?>" class="image-responsive">
                         <h3>House repairs</h3>
                      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                    <div id="garden-maintenance" class="tab-pane fade">
                        <img src="<?php echo get_template_directory_uri().'/images/cleanliness.png'?>" class="image-responsive">
                         <h3>Garden maintenance</h3>
                      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                    <div id="upholstery" class="tab-pane fade">
                        <img src="<?php echo get_template_directory_uri().'/images/cleanliness.png'?>" class="image-responsive">
                         <h3>Upholstery cleaning</h3>
                      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                    <div id="carpet-shampooing" class="tab-pane fade">
                        <img src="<?php echo get_template_directory_uri().'/images/cleanliness.png'?>" class="image-responsive">
                         <h3>Carpet shampooing</h3>
                      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div> 
                    <div id="floor-scrubbing" class="tab-pane fade">
                        <img src="<?php echo get_template_directory_uri().'/images/cleanliness.png'?>" class="image-responsive">
                         <h3>Floor scrubbing</h3>
                      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div> 
                    <div id="Marble-polish" class="tab-pane fade">
                        <img src="<?php echo get_template_directory_uri().'/images/cleanliness.png'?>" class="image-responsive">
                         <h3>Marble & granite polishing</h3>
                      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
               </div>
            </div>
            <div class="col-12 col-sm-4 service-tabs nav nav-tabs">
                <a class="btn service-btn active" href="#housekeeing">Housekeeping services</a>
                <a class="btn service-btn" href="#regular">Regular cleaning</a>
                <a class="btn service-btn" href="#deep-cleaning">Deep cleaning</a>
                <a class="btn service-btn" href="#pest-control">Pest control</a>
                <a class="btn service-btn" href="#disinfectant">Disinfectant service</a>
                <a class="btn service-btn" href="#house-repair">House repairs</a>
                <a class="btn service-btn" id="dots" href="#garden-maintenance">Garden maintenance</a>
                <div id="more">
                <a class="btn service-btn" href="#upholstery">Upholstery cleaning</a>
                <a class="btn service-btn" href="#carpet-shampooing">Carpet shampooing</a>
                <a class="btn service-btn" href="#floor-scrubbing">Floor scrubbing</a>
                <a class="btn service-btn" href="#Marble-polish">Marble & granite polishing</a>
                </div>
                <button onclick="myFunction()" class="btn service-btn" id="myBtn">View More</button>
                
              
            </div>
        </div>
    </div>
</section>

<section class="why-us-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3>Why choose us for covid-19 Sanitization </h3>
                <div class="row points-img">
                    <div class="col-sm-6">
                        <img src="<?php echo get_template_directory_uri().'/images/clean.png'?>" class="image-responsive">
                        <h4>High-Class Machines  </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="<?php echo get_template_directory_uri().'/images/spray.png'?>" class="image-responsive">
                        <h4>Full COVID Protection </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
                    </div>
                    <div class="col-sm-6">
                        <img src="<?php echo get_template_directory_uri().'/images/cleaning-staff.png'?>" class="image-responsive">
                        <h4>High-Quality Disinfectants</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                    </div>
                    
                    <div class="col-sm-6">
                        <img src="<?php echo get_template_directory_uri().'/images/vacuum-cleaner.png'?>" class="image-responsive">
                        <h4>Trained Staff for Sanitation </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6"> 
                <img src="<?php echo get_template_directory_uri().'/images/why-us.png'?>" class="image-responsive" style="border-radius:20px;">
            </div>
        </div>
    </div>
</section>

<section class="testimonial-sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h3>Here’s what our clients say about us</h3>
                    <img src="<?php echo get_template_directory_uri().'/images/testimonial.png'?>" class="image-responsive">
                    <div class="testimonial-slider">
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
                        <span>- Pankaj Dhuri</span>
                    </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
</section>

<section class="products">
    <div class="container">
        <div class="row service-title">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 ">
                <h3>Products</h3>
                <p>Lorem ipsum dolor sit amet, consectetur  elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, qu is nostrud</p>
            </div>
            <div class="col-sm-2">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 product-box">     
                    <img src="<?php echo get_template_directory_uri().'/images/why-us.png'?>" class="image-responsive">
                  <div class="overlay">
                  <a href="#" class="icon" title="User Profile">
                    <i class="fa fa-arrows"><br><span>Machines</span></i>
                      
                  </a>
                  </div>
            </div>
            <div class="col-sm-3 product-box">
                <img src="<?php echo get_template_directory_uri().'/images/why-us.png'?>" class="image-responsive">
                    <div class="overlay">
                  <a href="#" class="icon" title="User Profile">
                    <i class="fa fa-arrows"><br><span>Trolleys/Carts</span></i>
                      
                  </a>
                  </div>
            </div>
            <div class="col-sm-3 product-box">
                <img src="<?php echo get_template_directory_uri().'/images/why-us.png'?>" class="image-responsive">
                    <div class="overlay">
                  <a href="#" class="icon" title="User Profile">
                    <i class="fa fa-arrows"><br><span>Chemicals</span></i>
                     
                  </a>
                  </div>
            </div>
            <div class="col-sm-3 product-box">
                <a href="product">
                <img src="<?php echo get_template_directory_uri().'/images/read-more.jpg'?>" class="image-responsive">
                </a>
                
            </div>
        </div>
        <div class="row" >
            <div class="col-sm-4"></div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</section>



<section id="contactus" class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-12 col-sm-8">
                <h3>Get Free Consultation</h3>
                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusm</p>
                <div> <?php echo do_shortcode('[contact-form-7 id="64" title="footer-form"]');?></div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</section>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline-block";
    btnText.innerHTML = "View more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "View less"; 
    moreText.style.display = "inline-block";
  }
}
</script>

<script>
var a = 0;
$(window).scroll(function() {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    a = 1;
  }
});
</script>

<script>
$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
  $('.nav-tabs a').on('shown.bs.tab', function(event){
    var x = $(event.target).text();         // active tab
    var y = $(event.relatedTarget).text();  // previous tab
    $(".act span").text(x);
    $(".prev span").text(y);
  });
});
</script>

 <?php
 get_footer();
