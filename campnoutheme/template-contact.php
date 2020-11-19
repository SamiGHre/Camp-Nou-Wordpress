 <?php
 /**
  * Template Name: Contact page
  *
  * This is the template that displays all pages by default.
  * Please note that this is the WordPress construct of pages
  * and that other 'pages' on your WordPress site may use a
  * different template.
  *
  * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
  *
  * @package sparctheme
  */
  get_header();
  ?>
  <!--
    Note: jQuery and Bootstrap CSS and JS files required.

  -->
<div class="registration-tabs">
    <div class="col-md-12">
    <!-- Nav tabs -->
        <ul id="tabs" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active designer-list"><a id="deslist" href="#tab-designer" role="tab" data-toggle="tab">DESIGNER</a></li>
            <li role="presentation" class="sponsor-list"><a id="splist" href="#tab-sponsor" role="tab" data-toggle="tab">SPONSOR</a></li>
            <li role="presentation" class="deligates-list"><a id="deliglist" href="#tab-deligates" role="tab" data-toggle="tab">DELIGATES</a></li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active show" id="tab-designer">
                <div class="text-content">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                </div>
                <div class="gallery-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <img src="http://localhost/sparcthemetest/wp-content/uploads/2019/06/designer1.png" />
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <img src="http://localhost/sparcthemetest/wp-content/uploads/2019/06/designer2.png" />
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <img src="http://localhost/sparcthemetest/wp-content/uploads/2019/06/designer3.png" />
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <img src="http://localhost/sparcthemetest/wp-content/uploads/2019/06/designer4.png" />
                        </div>
                    </div>
                </div>
                <div class="form-content">

                    <p class="reg-bg-div"> Register Now </p>
                    <h3> Register Now </h3>
                    <div class="designer-form">
                        <?php echo do_shortcode('[contact-form-7 id="354" title="Designer form"]');?>
                    </div>
                </div>

            </div>



            <div role="tabpanel" class="tab-pane fade" id="tab-sponsor"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </div>
            <div role="tabpanel" class="tab-pane fade" id="tab-deligates"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </div>
        </div>
    </div>
</div>



<script>
jQuery(document).ready(function(){
  jQuery(".sponsor-list, .deligates-list").addClass("borderclass-bottom");
  jQuery(".designer-list").addClass("borderclass-right");

    // jQuery('.registration-tabs #tabs').on('click','li', function(){
    //    jQuery(this).removeClass('borderclass-bottom').siblings().addClass('borderclass-bottom');
    // });
    jQuery('.registration-tabs #tabs').on('click','.designer-list', function(){
       jQuery(this).addClass('borderclass-right');
       jQuery(this).removeClass('borderclass-bottom');
       jQuery(".sponsor-list, .deligates-list").addClass("borderclass-bottom");
       jQuery(".sponsor-list, .deligates-list").removeClass("borderclass-right");
       jQuery(".sponsor-list, .deligates-list").removeClass("borderclass-left");
       jQuery(".sponsor-list, .deligates-list").removeClass("borderclass-right-left");
    });
    jQuery('.registration-tabs #tabs').on('click','.sponsor-list', function(){
       jQuery(this).addClass('borderclass-right-left');
       jQuery(this).removeClass('borderclass-bottom');
       jQuery(".designer-list, .deligates-list").addClass("borderclass-bottom");
       jQuery(".designer-list").removeClass("borderclass-right");
       jQuery(".deligates-list").removeClass("borderclass-left");
    });
    jQuery('.registration-tabs #tabs').on('click','.deligates-list', function(){
       jQuery(this).addClass('borderclass-left');
       jQuery(".sponsor-list, .designer-list").addClass("borderclass-bottom");
       jQuery(".deligates-list").removeClass('borderclass-bottom');
       jQuery(".designer-list").removeClass("borderclass-right");
       jQuery(".sponsor-list").removeClass("borderclass-right-left");
    });
});
</script>
  <?php
  get_footer();
