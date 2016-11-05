<?php 
/*
 * Search Template File.
 */
get_header(); ?>

<section>

    <div class="breadcumb-bg">
	<div class="deserve-container container">
    	<div class="site-breadcumb">
			<div class="row">
			 <div class="col-md-6 col-sm-6">
				<h1>
					<?php printf( __( 'Search Results for : %s', 'deserve' ), ' ' . get_search_query() . ' ' ); ?>
				</h1>
				
				
			 </div>
			  <div class="col-md-6 col-sm-6">
				<ol class="breadcrumb breadcrumb-menubar">
				<?php if (function_exists('deserve_custom_breadcrumbs')) deserve_custom_breadcrumbs(); ?>
				</ol>
            </div> 
            </div>
        </div>
    </div>
    </div>    

    <div class="deserve-container">       
        <div class="col-md-9 col-sm-8  dblog">        
              
					<?php if(have_posts()):?>   
					
					<?php while ( have_posts() ) : the_post(); ?>
            	<div class="col-md-6">
				<div class="blog-box">
            	
            	<?php $deserve_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()),'large'); ?>

            	 <?php if($deserve_image[0] != "") { ?>

					<a href="<?php echo get_permalink(); ?>">
					
					<img src="<?php echo esc_url($deserve_image[0]); ?>" width="<?php echo $deserve_image[1]; ?>" height="<?php echo $deserve_image[2]; ?>"  alt="<?php the_title(); ?>" class="img-responsive" />
		
					</a>
                <?php } ?>
                
                
                
                  <div class="post-data">
					
					<a href="<?php echo get_permalink(); ?>" class="blog-title"><?php the_title(); ?></a>   
					
					 <div class="post-meta">
						<ul>
							<?php deserve_entry_meta(); ?>
												
						</ul>
                    
                    </div>
                                          
                   
                     <?php the_excerpt(); ?>
                   
                </div> 
            </div>
       	</div>	
         <?php endwhile; 
         
         else : 
		   ?>
		     <div class="blog-box">
				    <div class="post-data">
					<h2><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.','deserve'); ?> </h2>
					
					</div>
					<!-- <div class="col-md-4">
						<?php get_search_form(); ?>  
					</div> -->
			</div>
      <?php  endif;?>
           
              
            <div class="gallery-pagination blog-pagination">
                <ul>
						
						<li class="link_pagination" >
					<?php deserve_pagination(); ?>
				</li>
					 
				
                </ul>
            </div>
        </div>
    <div class="col-md-3">
    <?php get_sidebar(); ?> 
    </div>
	    
    </div>
 
</section>


<?php get_footer(); ?>
