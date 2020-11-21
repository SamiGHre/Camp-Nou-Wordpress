<?php
/**
 * Template Name: Home page template
 */

get_header();
?>
<!---Slider---
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo get_template_directory_uri().'/assets/images/banner-1.png'?>" class="d-block w-100" alt="...">
      <div class="carousel-caption2 d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri().'/assets/images/banner-1.png'?>" class="d-block w-100" alt="...">
      <div class="carousel-caption2 d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri().'/assets/images/banner-1.png'?>" class="d-block w-100" alt="...">
      <div class="carousel-caption2 d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!---Slider End--->

<!---Explore--->
<section>
<div class="bg-theme1">
	<div class="container">
		<div class="py-4">
			<h2 class="text-center">EXPLORE</h2>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="display-4">GIVE YOUR WORKOUT A NEW STYLE</h2>
				<p class="py-3" style="font-family: Verdana, sans-serif;">
				Success is always about greatness.</p>
				<button class="buttonb"><span">Explore</span></button>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<img src="<?php echo get_template_directory_uri().'/assets/images/image1.png'?>" class="img-fluid">
			</div>
		</div>
	</div>
</div>
</section>
<hr style="border: 4px solid black; margin: 0px"/>
<!---Explore End--->

<section>
<div class="bg-theme1">
	<div class="container py-5">
		<div class="py-4">
			<h2 class="text-center">CATEGORY</h2>
		</div>

		<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
	  	<div class="card">
	    	<div class="card-bodyb img-hover-zoom">
	      		<a href="#"><img class="card-img-top " src="<?php echo get_template_directory_uri().'/assets/images/category-1.jpg'?>" alt="Card image" style="width:100%"></a>
	    	</div>
		</div>
		</div>

		<div class="col-lg-4 col-md-4 col-12">
	  	<div class="card">
	    	<div class="card-bodyb img-hover-zoom">
	      		<a href="#"><img class="card-img-top " src="<?php echo get_template_directory_uri().'/assets/images/category-2.jpg'?>" alt="Card image" style="width:100%"></a>
	    	</div>
		</div>
		</div>

		<div class="col-lg-4 col-md-4 col-12">
	  	<div class="card">
	    	<div class="card-bodyb img-hover-zoom">
	      		<a href="#"><img class="card-img-top " src="<?php echo get_template_directory_uri().'/assets/images/category-3.jpg'?>" alt="Card image" style="width:100%"></a>
	    	</div>
		</div>
		</div>

	</div>
</div>
</section>
<hr style="border: 4px solid black; margin: 0px"/>
<!---Category End--->

<!---Price--->
<section class="bg-theme1">
	<div class="container py-5">
		<div class="py-4">
			<h2 class="text-center">PRICE</h2>
		</div>

		<div class="row">
		<div class="col-lg-3 col-md-3 col-12">
	  	<div class="card">
	  		<img class="card-img-top " src="<?php echo get_template_directory_uri().'/assets/images/product-8.jpg'?>" alt="Card image" style="width:100%">
	    	<div class="card-body img-hover-zoom">
	      		<h4 class="card-title"><a href="">Watch</a></h4>
	      		<div class="rating">
	      			<i class="fa fa-star"></i>
	      			<i class="fa fa-star"></i>
	      			<i class="fa fa-star"></i>
	      			<i class="fa fa-star"></i>
	      			<i class="fa fa-star-half-o"></i>
	      		</div>
	      		<p>$ 20.99 / year</p>
	    	</div>
		</div>
		</div>

		<div class="col-lg-3 col-md-3 col-12">
	  	<div class="card">
	  		<img class="card-img-top " src="<?php echo get_template_directory_uri().'/assets/images/product-10.jpg'?>" alt="Card image" style="width:100%">
	    	<div class="card-body img-hover-zoom">
	      		<h4 class="card-title"><a href="">Shoes</a></h4>
	      		<div class="rating">
	      			<i class="fa fa-star"></i>
	      			<i class="fa fa-star"></i>
	      			<i class="fa fa-star"></i>
	      			<i class="fa fa-star-half-o"></i>
	      		</div>
	      		<p>$ 9.99 / year</p>
	    	</div>
		</div>
		</div>

		<div class="col-lg-3 col-md-3 col-12">
	  	<div class="card">
	  		<img class="card-img-top " src="<?php echo get_template_directory_uri().'/assets/images/product-3.jpg'?>" alt="Card image" style="width:100%">
	    	<div class="card-body img-hover-zoom">
	      		<h4 class="card-title"><a href="">Trouser</a></h4>
	      		<div class="rating">
	      			<i class="fa fa-star"></i>
	      			<i class="fa fa-star"></i>
	      			<i class="fa fa-star"></i>
	      			<i class="fa fa-star"></i>
	      			<i class="fa fa-star-o"></i>	      		
	      		</div>
	      		<p>$ 9.99 / year</p>
	    	</div>
		</div>
		</div>

		<div class="col-lg-3 col-md-3 col-12">
	  	<div class="card">
	  		<img class="card-img-top " src="<?php echo get_template_directory_uri().'/assets/images/product-3.jpg'?>" alt="Card image" style="width:100%">
	    	<div class="card-body img-hover-zoom">
	      		<h4 class="card-title"><a href="">Trouser</a></h4>
	      		<div class="rating">
	      			<i class="fa fa-star"></i>
	      			<i class="fa fa-star"></i>
	      			<i class="fa fa-star"></i>
	      			<i class="fa fa-star"></i>
	      			<i class="fa fa-star-o"></i>	      		
	      		</div>
	      		<p>$ 9.99 / year</p>
	    	</div>
		</div>
		</div>

	</div>
</section>
<hr style="border: 4px solid black; margin: 0px"/>
<!---Price End--->

<!---Exclusive--->
<section class="bg-theme2">
	<div  class="container py-5">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="<?php echo get_template_directory_uri().'/assets/images/exclusive.png'?>" class="img-fluid">
			</div>

			<div class="col-lg-6 col-md-6 col-12 ">
				<div class="centerv">
				<h3 class="display-4 ">S Band</h3>
				<p>The band is smooth to touch and comfortable even for people with sensitive skin. View daily, weekly, and monthly history for steps, sleep and calories burnt via the <b>S band app.</b>
				</p>
				</div>
			</div>
			
		</div>
	</div>
</section>
<!---Exclusive End--->


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
