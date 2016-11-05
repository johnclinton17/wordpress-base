<?php 
/*
 * Main Template File.
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
        <a data-toggle="modal" data-target="#myModal">
          <div class="float-demo" >

          <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/live-demo.png" alt="LIVE DEMO" >
          <span class="float-style">Request For Live Demo</span>
          </div> 
        </a>
        <div class="col-md-9   dblog">        
            
                  <?php while ( have_posts() ) : the_post(); ?>
            
            <div class="col-md-6">
            <div class=" ophtha-box blogbox">
            	<a href="<?php echo get_permalink(); ?>">
     				<?php the_post_thumbnail( 'small-featured' ); ?>                               		
				</a> 
                <div class="post-data">
					
					<a href="<?php echo get_permalink(); ?>" class=" fronttitle-blog"><?php the_title(); ?></a>      
                </div>
                                          
                   <p class="content-smallbox front-blog">
        				<?php the_excerpt(10); ?>
  				   </p>          
            </div>

       	</div>
         <?php endwhile;  ?>     

</div>
           
            
            <div class="gallery-pagination blog-pagination">
                <ul>
						
						<?php if (function_exists('the_posts_pagination')) 
						{ ?>
								

						<li class="link_pagination" >
								<?php deserve_pagination(); ?>
						</li>
					
					<?php } else { ?>
							<li class="link_pagination"><?php previous_posts_link( '<<' ); ?> </li>

							<li class="link_pagination"><?php next_posts_link( '>>' ); ?> </li>		
					 
					
					<?php } ?>
					 
				
                </ul>
            </div>
         
        </div>
      <div class="col-md-3 sidebar-wrapper margin-bottom"> 
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
