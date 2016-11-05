<?php
/*
 * Template Name: FrontPage 
 */
$deserve_options = get_option('deserve_theme_options');

get_header();
?>

<div class="container-fluid">
  <a data-toggle="modal" data-target="#myModal">
    <div class="float-demo" >

      <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/live-demo.png" alt="LIVE DEMO" >
      <span class="float-style">Request For Live Demo</span>
     </div> 
  </a>   
    <!--section1 ends-->
<div class="scrollable-section"  >

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Banner-1.png" alt="OpthLIVE CLINICS">
      <div class="carousel-caption">
        <h3>Reporting made easy with auto populate feature</h3>
        <h3>and computer aided diagnostics &amp; grading</h3>
        <button class="slider-but"><a href="<?php echo esc_url(home_url('')); ?>/contact-us">Contact us for More Info</a></button>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Banner-2.png" alt="OpthLIVE CLINICS">
      <div class="carousel-caption">
        <h3>Prevention of avoidable blindness</h3>
        <h3>with affordable eye screening services</h3>
        <button class="slider-but"><a href="<?php echo esc_url(home_url('')); ?>/contact-us">Contact us for More Info</a></button>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Banner-3.png" alt="OpthLIVE CLINICS" >
      <div class="carousel-caption">
        <h3>While you help others to see the world,</h3>
        <h3>we integrate your world</h3>
        <button class="slider-but"><a href="<?php echo esc_url(home_url('')); ?>/contact-us">Contact us for More Info</a></button>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/banner-4.png" alt="OpthLIVE CLINICS" >
      <div class="carousel-caption">
        <h3>Combating the global shortage of </h3>
        <h3>ophthalmologists with OpthLIVE TELE</h3>
        <button class="slider-but"><a href="<?php echo esc_url(home_url('')); ?>/contact-us">Contact us for More Info</a></button>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/banner-5.png" alt="OpthLIVE CLINICS" >
      <div class="carousel-caption">
        <h3>Storage, archival and retrieval of eye</h3>
        <h3>imaging made easy on the cloud.</h3>
        <button class="slider-but"><a href="<?php echo esc_url(home_url('')); ?>/contact-us">Contact us for More Info</a></button>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div> 





<!--section1 ends-->
<!--section2-->
<div class="scrollable-section" >
  <div class="container">
    <div class="ophtha-sextion1">
        <h2 class="section-title">For Ophthalmologists &amp; Optometrist</h2>
        <span class="border-green"></span>

        <p class="content-box">
        <span class="line-1">This cloud based complete practice management suite makes life easier for an optical practitioner or an ophthalmologists</span>
        <span class="line-2">by saving cost and time. In addition, it can be fully integrated with mydriatic and non-mydriatic retinal cameras, OCTs,</span>
        <span class="line-3">B-Scans, & visual field instruments from Topcon and other renowned global vendors. </span>
        </p>

    </div>


    
    <div class="col-md-4 ophtha-box wow slideInDown" data-wow-offset="0" data-wow-duration="2s">
       <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/OpthLive-Tele.png" alt="OpthLIVE TELE" class="img-responsive">
       
       <div class="box-content"> 
        <h6 class="box-title">OpthLIVE TELE</h6>
        <p class="content-smallbox">
        <span class="boxline-1">This is a flagship product in the space of preventive </span>    
        <span class="boxline-2">screening for avoidable blindness. Vision is most </span>    
        <span class="boxline-3">often lost or dramatically impaired.</span>    
        </p>
        <button class="box-but"><a href="<?php echo esc_url(home_url('')); ?>/opthlive-tele">Read More</a></button>
       </div><!--box content-->
    </div><!--col-md-4-->

    <div class="col-md-4 ophtha-box wow slideInDown" data-wow-offset="0" data-wow-duration="2s">
       <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/OpthLive-Clics.png" alt="OpthLIVE CLINICS" class="img-responsive">
       
       <div class="box-content"> 
        <h6 class="box-title">OpthLIVE CLINICS</h6>
        <p class="content-smallbox">
        <span class="boxline-1">OpthLIVE Clinics is the only dedicated practice </span>    
        <span class="boxline-2">management system for ophthalmology clinics,  </span>    
        <span class="boxline-3">vision care centres & optical shops</span>    
        </p>
        <button class="box-but"><a href="<?php echo esc_url(home_url('')); ?>/opthlive-clinics">Read More</a></button>
       </div><!--box content-->
    </div><!--col-md-4-->  

    <div class="col-md-4 ophtha-box wow slideInDown" data-wow-offset="0" data-wow-duration="2s">
       <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/OpthLive-Hmis.png" alt="OpthLIVE HMIS" class="img-responsive">
       
       <div class="box-content"> 
        <h6 class="box-title">OpthLIVE HMIS</h6>
        <p class="content-smallbox">
        <span class="boxline-1">OpthLIVE HMIS is the only dedicated system for </span>    
        <span class="boxline-2">ophthalmology speciality hospital, it combines </span>    
        <span class="boxline-3"> Hospital information system.</span>    
        </p>
        <button class="box-but"><a href="<?php echo esc_url(home_url('')); ?>/opthlive-hmis">Read More</a></button>
       </div><!--box content-->
    </div><!--col-md-4-->  
  </div><!--container-->   
</div> <!--SECTION2-->

<!--section 3-->
<div class="scrollable-section" >
    <div class="wrapper-background">
      <div class="wrapper-box">  
        <div class="col-md-4 box-statics">
             <span class="stat-number">50</span><span class="stat-plus">+</span>
             <span class="stat-text line-1">Happy </span>
             <span class="stat-text line-2">Clients</span>
        </div>
        <div class="col-md-4 box-statics">
             <span class="stat-number">85</span><span class="stat-plus">+</span>
             <span class="stat-text line-1">Modalities</span>
             <span class="stat-text line-2">   Integrated</span>
        </div>
        <div class="col-md-4 box-statics">
             <span class="stat-number">75</span><span class="stat-plus">+</span>
             <span class="stat-text line-1">Centres</span>
             <span class="stat-text line-2">   Installed</span>
        </div>   
        <div class="col-md-4 box-statics">
             <span class="stat-number">750</span><span class="stat-plus">+</span>
             <span class="stat-text line-1">Patients</span>
             <span class="stat-text line-2">  Screened / Day</span>
        </div>
        <div class="col-md-4 box-statics">
             <span class="stat-number">450</span><span class="stat-plus">+</span>
             <span class="stat-text line-1">Reports</span>
             <span class="stat-text line-2">   Printed / Day</span>
        </div>
        <div class="col-md-4 box-statics">
             <span class="stat-number ">68</span><span class="stat-plus">K+</span>
             <span class="stat-text line-1">Images</span>
             <span class="stat-text line-2">  Processed / Day</span>
        </div>
      </div>  <!--wrapper box-->
    </div>
</div>



<!--section3 ends here-->
<!--section 4-->

<div class="scrollable-section" >
 <div class="container wow slideInDown" data-wow-offset="0" data-wow-duration="2s">
    <div class="ophtha-sextion1">
            <h2 class="section-title">For Radiologists</h2>
            <span class="border-green"></span>

            <p class="content-box">
            <span class="line-1">RadLIVE is a comprehensive system for radiology clinics and hospitals that serves all modalities</span>
            <span class="line-2">and healthcare environments</span>
            </p>

    </div>


    <div class="col-md-4 ophtha-box">
       <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/iRay.png" alt="OpthLIVE TELE" class="img-responsive">
       
       <div class="box-content"> 
        <h6 class="box-title">iRay</h6>
        <p class="content-smallbox">
        <span class="boxline-1">iRay is the most comprehensive and </span>    
        <span class="boxline-2">cost-effective alternative to expensive X-ray</span>    
        <span class="boxline-3">digitizers.</span>    
        </p>
        <button class="box-but"><a href="<?php echo esc_url(home_url('')); ?>/iray">Read More</a></button>
       </div><!--box content-->
    </div><!--col-md-4-->

    <div class="col-md-4 ophtha-box">
       <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Radlive-Terelad.png" alt="OpthLIVE CLINICS" class="img-responsive">
       
       <div class="box-content"> 
        <h6 class="box-title">RadLIVE Telerad</h6>
        <p class="content-smallbox">
        <span class="boxline-1">Teleradiology helps physicians to  </span>    
        <span class="boxline-2">collaborate when they are not able to meet </span>    
        <span class="boxline-3">face to face.</span>    
        </p>
        <button class="box-but"><a href="<?php echo esc_url(home_url('')); ?>/radlive-telerad">Read More</a></button>
       </div><!--box content-->
    </div><!--col-md-4-->  

    <div class="col-md-4 ophtha-box">
       <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/RadLIVE-clouspacs.png" alt="OpthLIVE HMIS" class="img-responsive">
       
       <div class="box-content"> 
        <h6 class="box-title">RadLIVE cloudPACS</h6>
        <p class="content-smallbox">
        <span class="boxline-1">With RadLIVE cloud PACS you will be able to</span>    
        <span class="boxline-2">integrate radiology groups, imaging</span>    
        <span class="boxline-3">centres.</span> 
        </p>
        <button class="box-but"><a href="<?php echo esc_url(home_url('')); ?>/radlive-cloudpacs">Read More</a></button>
       </div><!--box content-->
    </div><!--col-md-4-->  


</div>
</div>



<!--section 4 ends-->
<!--section 5-->

<div class="scrollable-section" >

<div id="myCarousel1" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
    <!-- <li data-target="#myCarousel1" data-slide-to="1"></li>
    <li data-target="#myCarousel1" data-slide-to="2"></li>
    <li data-target="#myCarousel1" data-slide-to="3"></li>
    <li data-target="#myCarousel1" data-slide-to="4"></li> -->
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Testimonial.png" alt="OpthLIVE CLINICS" alt="Chania">
      <div class="carousel-caption">
        <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Testimonial-client.png" alt="testimonialimage" alt="testi1">
        <div class="comapany-name">
        <span class="line-1"> Dr. Kim Ramaswamy,</span>
        <span class="line-2">Chief of Retina service, Aravind Eye Hospital.</span>
        </div>
        <div class="client-speak">
        <span class="line-1">We already had a product in place, but Pellucid redesigned it completely</span>
        <span class="line-2"> and took it to the market. The redesigning is done very </span>
        <span class="line-3"> intuitively and has been very productive.</span>
        </div>
      </div>
    </div>

   <!--  <div class="item">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Testimonial.png" alt="OpthLIVE CLINICS" alt="Chania">
      <div class="carousel-caption">
        <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Testimonial-client.png" alt="testimonialimage" alt="testi1">
        <div class="comapany-name">
        <span class="line-1">Dr. Name , Founder-radiologist ,</span>
        <span class="line-2">Company Name Services</span>
        </div>
        <div class="client-speak">
        <span class="line-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
        <span class="line-2">incididunt ut labore et dolore magna aliqua sed do eiusmod tempor</span>
        <span class="line-3">incididunt magna elit.</span>
        </div>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Testimonial.png" alt="OpthLIVE CLINICS" alt="Flower">
      <div class="carousel-caption">
        <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Testimonial-client.png" alt="testimonialimage" alt="testi1">
        <div class="comapany-name">
        <span class="line-1">Dr. Name , Founder-radiologist ,</span>
        <span class="line-2">Company Name Services</span>
        </div>
        <div class="client-speak">
        <span class="line-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
        <span class="line-2">incididunt ut labore et dolore magna aliqua sed do eiusmod tempor</span>
        <span class="line-3">incididunt magna elit.</span>
        </div>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Testimonial.png" alt="OpthLIVE CLINICS" alt="Flower">
      <div class="carousel-caption">
        <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Testimonial-client.png" alt="testimonialimage" alt="testi1">
        <div class="comapany-name">
        <span class="line-1">Dr. Name , Founder-radiologist ,</span>
        <span class="line-2">Company Name Services</span>
        </div>
        <div class="client-speak">
        <span class="line-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
        <span class="line-2">incididunt ut labore et dolore magna aliqua sed do eiusmod tempor</span>
        <span class="line-3">incididunt magna elit.</span>
        </div>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Testimonial.png" alt="OpthLIVE CLINICS" alt="Flower">
      <div class="carousel-caption">
        <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Testimonial-client.png" alt="testimonialimage" alt="testi1">
        <div class="comapany-name">
        <span class="line-1">Dr. Name , Founder-radiologist ,</span>
        <span class="line-2">Company Name Services</span>
        </div>
        <div class="client-speak">
        <span class="line-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
        <span class="line-2">incididunt ut labore et dolore magna aliqua sed do eiusmod tempor</span>
        <span class="line-3">incididunt magna elit.</span>
        </div>
      </div> -->
  </div>

  
</div>

</div>
</div><!--section5-->
<!--section 5 ends-->
<!--section 6-->
<div class="scrollable-section" >
  <div class="container">
    <div class="ophtha-sextion1">
        <h2 class="section-title">Services</h2>
        <span class="border-green"></span>

        <p class="content-box">
        <span class="line-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
        <span class="line-2">ncididunt ut labore et dolore magna aliqua.</span>
        
        </p>

    </div>


    
    <div class="col-md-4 ophtha-box wow slideInDown" data-wow-offset="0" data-wow-duration="2s">
       <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Eye-screening-platform.png" alt="OpthLIVE TELE" class="img-responsive">
       
       <div class="box-content"> 
        <h6 class="box-title">Eye screening Platform</h6>
        <p class="content-smallbox">
        <span class="boxline-1">Whether your are a Eye care Hospital / organization </span>    
        <span class="boxline-2">having vision centres in Tier 2 cities and</span>    
        <span class="boxline-3"> community screening sites.</span>    
        </p>
        <button class="box-but"><a href="<?php echo esc_url(home_url('')); ?>/eye-screening">Read More</a></button>
       </div><!--box content-->
    </div><!--col-md-4-->

    <div class="col-md-4 ophtha-box wow slideInDown" data-wow-offset="0" data-wow-duration="2s">
       <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Trusted-reads.png" alt="OpthLIVE CLINICS" class="img-responsive">
       
       <div class="box-content"> 
        <h6 class="box-title">Trusted Reads</h6>
        <p class="content-smallbox">
        <span class="boxline-1">Ensure that your patients get an eye check up report </span>    
        <span class="boxline-2">every time they come for a diabetic  </span>    
        <span class="boxline-3">/ nephrology / endocrineproblems.</span>    
        </p>
        <button class="box-but"><a href="<?php echo esc_url(home_url('')); ?>/eye-screening">Read More</a></button>
       </div><!--box content-->
    </div><!--col-md-4-->  

    <div class="col-md-4 ophtha-box wow slideInDown" data-wow-offset="0" data-wow-duration="2s">
       <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/consulting.png" alt="OpthLIVE HMIS" class="img-responsive">
       
       <div class="box-content"> 
        <h6 class="box-title">Consulting</h6>
        <p class="content-smallbox">
        <span class="boxline-1">Specialist skills to integrate across your healthcare IT </span>    
        <span class="boxline-2">platform, in DICOM, clinical imaging,</span>    
        <span class="boxline-3"> communications, networking, encryption.</span>    
        </p>
        <button class="box-but"><a href="<?php echo esc_url(home_url('')); ?>/eye-screening">Read More</a></button>
       </div><!--box content-->
    </div><!--col-md-4-->  
   

   </div>
</div> <!--SECTION6-->
<!--section6 ends-->

<div class="clearfix"></div>
<!--section 7-->

<div class="scrollable-section" >

<div class="ophtha-sextion1">
        <h2 class="section-title">Industry Information</h2>
        <span class="border-green"></span>

        <p class="content-box">
        <span class="line-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</span>
        <span class="line-2">incididunt ut labore et dolore magna aliqua.</span>
        
        </p>

    </div>


    
     <!--<div class="col-md-4 ophtha-box">
       <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/ophthalmology.png" alt="Ophthalmology" class="img-responsive">
       
       <div class="box-content"> 
        <h6 class="box-title">Ophthalmology</h6>
        <p class="content-smallbox">
        <span class="boxline-1"> This is a flagship product in the space of preventive </span>    
        <span class="boxline-2">screening for avoidable blindness. Vision is most often los</span>    
        <span class="boxline-3">or dramatically impaired.</span>    
        </p>
        <button class="box-but">Read More</button>
       </div>box content
    </div>col-md-4-->

   <!-- <div class="col-md-4 ophtha-box">
       <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/radiologists.png" alt="Radiologists" class="img-responsive">
       
       <div class="box-content"> 
        <h6 class="box-title">Radiologists</h6>
        <p class="content-smallbox">
        <span class="boxline-1">OpthLIVE Clinics is a dedicated software for optical stores</span>    
        <span class="boxline-2">and clinics, both stand alone and retail chains which can</span>    
        <span class="boxline-3">gather patient information for</span>    
        </p>
        <button class="box-but">Read More</button>
       </div>box content
    </div>col-md-4-->  

    <!--<div class="col-md-4 ophtha-box">
       <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/optometrists.png" alt="Optometrist" class="img-responsive">
       
       <div class="box-content"> 
        <h6 class="box-title">Optometrist</h6>
        <p class="content-smallbox">
        <span class="boxline-1">he advent of new treatments for AMD and more recently,</span>    
        <span class="boxline-2">DR, which requires regular administration and patient</span>    
        <span class="boxline-3">monitoring by ophthalmologists.</span>    
        </p>
        <button class="box-but">Read More</button>
       </div>box content
    </div>col-md-4-->  

<div class="container wow slideInLeft" data-wow-offset="0" data-wow-duration="2s">
<?php
$args = array( 'numberposts' => 3 );
$lastposts = get_posts( $args );
foreach($lastposts as $post) : setup_postdata($post); ?>
<div class="col-md-4 ophtha-box frontbox-blog">
<a href="<?php echo get_permalink(); ?>">
     <?php the_post_thumbnail( 'small-featured' ); ?>                              
</a> 
  <h6 class="box-title fronttitle-blog"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
  <p class="content-smallbox front-blog">
        <?php the_excerpt(10); ?>
  </p>
</div>  
<?php endforeach; ?>
</div>


</div>


<div class="section-8">

  <div class="client-section">
    <!-- <div id="myCarouse4" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel4" data-slide-to="1"></li>
                    
                </ol>
                 
                <!-- Carousel items -->
                <!--<div class="carousel-inner">
                    
                <div class="item active">
                  <div class="row-fluid">
                    <div class="span3"><img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Clients/Aravind-eye-care.png" alt="OpthLIVE CLINICS" ></div>
                    <div class="span3"><img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Clients/Krsnaa-diagnostics.png" alt="OpthLIVE CLINICS" ></div>
                    <div class="span3"><img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Clients/operation-eyesight.png" alt="OpthLIVE CLINICS" ></div>
                  </div>
                </div><!--/item-->
                 
              <!--  <div class="item">
                  <div class="row-fluid">
                    <div class="span3"><img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Clients/primes-scans.png" alt="OpthLIVE CLINICS" ></div>
                    <div class="span3"><img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Clients/quest-teleradiology.png" alt="OpthLIVE CLINICS" ></div>
                    <div class="span3"><img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Clients/sidrp.png" alt="OpthLIVE CLINICS" ></div>
                  </div><!--/row-fluid-->
                <!--</div><!--/item-->
                <!--</div><!--/carousel-inner-->

 <!-- </div> -->
<div class="ophtha-sextion1">
        <h2 class="section-title">Clients</h2>
        <span class="border-green"></span>

        <p class="content-box">
        <span class="line-1"></span>
        <span class="line-2"></span>
        
        </p>

    </div>


    
    <div class="col-md-4 ophtha-box front-client">
       <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Clients/Aravind-eye-care.png" alt="Ophthalmology" class="img-responsive">
    </div>

    <div class="col-md-4 ophtha-box front-client">
       <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Clients/Krsnaa-diagnostics.png" alt="Radiologists" class="img-responsive">
    </div> 

    <div class="col-md-4 ophtha-box front-client">
       <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Clients/operation-eyesight.png" alt="Optometrist" class="img-responsive">
    </div> 

    <div class="col-md-4 ophtha-box front-client">
       <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Clients/primes-scans.png" alt="Ophthalmology" class="img-responsive">
    </div>

    <div class="col-md-4 ophtha-box front-client">
       <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Clients/quest-teleradiology.png" alt="Radiologists" class="img-responsive">
    </div> 

    <div class="col-md-4 ophtha-box front-client">
       <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/Clients/sidrp.png" alt="Optometrist" class="img-responsive">
    </div> 



</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header popform">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Request for Live Demo</h4>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode( '[contact-form-7 id="85" title="Live Demo"]' ); ?>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
</div>
<!--modal-->

</div><!--container-fluid-->
<?php get_footer(); ?>
