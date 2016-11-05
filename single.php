<?php 
/*
 * Single Post Template File.
 */
get_header(); ?>


<section>
 


  <div class="deserve-container">       
  	<div class="wrapper-margin"> 
  		<a data-toggle="modal" data-target="#myModal">
		    <div class="float-demo" >
		      <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/live-demo.png" alt="LIVE DEMO" >
		      <span class="float-style">Request For Live Demo</span>
		     </div> 
  		</a>
        <div class="col-md-9 col-sm-8  dblog"> 
        
        <?php while ( have_posts() ) : the_post(); ?>
         <div  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
             
			<div class="blog-box">
          
            	<?php $deserve_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()),'large'); ?>

            	 <?php if($deserve_image[0] != "") { ?>

					<img src="<?php echo esc_url($deserve_image[0]); ?>" width="<?php echo $deserve_image[1]; ?>" height="<?php echo $deserve_image[2]; ?>"  alt="<?php the_title(); ?>" class="img-responsive" />
	
                <?php } ?>
                   <div class="post-data">
					
					<h2 class="single-page-title"><?php the_title(); ?></h2>
					
					 <div class="post-meta">
						<ul>
							<?php deserve_entry_meta(); ?>
												
						</ul>
                    
                    </div>
                                          
                   
                     <?php the_content(); ?>
                   
                </div>         
            </div>	
            
            </div>		
	
			      <?php endwhile; ?> 
		
			      
			      <div class="prev-next-pagination">
					  
					 <?php wp_link_pages(); ?> 
					<!-- <nav class="deserve-nav"> 
						<?php
						 // Previous/next post navigation.
						 deserve_pagination();
						 ?>
					</nav> -->
			  <!-- .nav-single -->
            </div>
			
			
			<div class="comments-article">
				 <?php comments_template(); ?>
			</div>

        </div>
		
      
       <div class="col-md-3 sidebar-wrapper">
       <?php get_sidebar(); ?>  
    	</div>
    
    </div><!--wrapper-->
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
</section>

<?php get_footer(); ?>
