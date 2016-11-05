<?php
/*
 * Theme function file.
 */
if ( ! function_exists( 'deserve_setup' ) ) :
function deserve_setup() {
	
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 840;
	}
	/*
	 * Make deserve theme available for translation.
	 */
	load_theme_textdomain( 'deserve', get_template_directory() . '/languages' );
	// This theme styles the visual editor to resemble the theme style.
	add_editor_style( array( 'css/editor-style.css', deserve_font_url() ) );
	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );
	
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 672, 372, true );
	add_image_size( 'deserve-latest-post', 270, 212, true );	
	add_image_size( 'deserve-latest-post-widget', 100, 100, true );	
	add_image_size( 'deserve-home-tab-size', 94, 93, true );
	add_image_size( 'deserve-footer-logo-size', 161, 38, true );
	
	
	
	/* title tag */
	 add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Header Menu', 'deserve' ),
		'secondary' => __('Footer Menu', 'deserve'),
		
	) );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list',
	) );
	add_theme_support( 'custom-background', apply_filters( 'deserve_custom_background_args', array(
	'default-color' => 'f5f5f5',
	) ) );
	// Add support for featured content.
	add_theme_support( 'featured-content', array(
		'featured_content_filter' => 'deserve_get_featured_posts',
		'max_posts' => 6,
	) );
	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
}

endif; // deserve_setup
add_action( 'after_setup_theme', 'deserve_setup' );

/*
 * Register Istok Web Google font for deserve.
 */
function deserve_font_url() {
	$deserve_font_url = '';

	if ( 'off' !== _x( 'on', 'Istok Web font: on or off', 'deserve' ) ) {
		$deserve_font_url = add_query_arg( 'family', urlencode( 'IstokWeb-Regular:300,400,700,900,300italic,400italic,700italic' ), "//fonts.googleapis.com/css" );
	}

	return $deserve_font_url;
}



/*
 * Register widget areas.
 */
function deserve_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'deserve' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the right.', 'deserve' ),
		'before_widget' => '<div class="sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2><span>',
		'after_title'   => '</span></h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Area One', 'deserve' ),
		'id'            => 'footer-1',
		'description'   => __( 'Footer area one that appears on the footer.', 'deserve' ),
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Area Two', 'deserve' ),
		'id'            => 'footer-2',
		'description'   => __( 'Footer area two that appears on the footer.', 'deserve' ),
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Area Three', 'deserve' ),
		'id'            => 'footer-3',
		'description'   => __( 'Footer area three that appears on the footer.', 'deserve' ),
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer area four', 'deserve' ),
		'id'            => 'footer-4',
		'description'   => __( 'Footer area four that appears on the footer.', 'deserve' ),
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	;
}
add_action( 'widgets_init', 'deserve_widgets_init' );






/*** Enqueue css and js files ***/
require_once('functions/enqueue-files.php');

/*** Theme Option ***/
require_once('theme-options/theme-option.php');

/*** Custom Header ***/
require_once('functions/custom-header.php');


/**
 * Add default menu style if menu is not set from the backend.
 * 
 */
 
 
function deserve_add_menuid ($page_markup) {
preg_match('/^<div class=\"([a-z0-9-_]+)\">/i', $page_markup, $deserve_matches);
$deserve_divclass = '';
if(!empty($deserve_matches)) { $deserve_divclass = $deserve_matches[1]; }
$deserve_toreplace = array('<div class="'.$deserve_divclass.' pull-right-res">', '</div>');
$deserve_replace = array('<div class="">', '</div>');
$deserve_new_markup = str_replace($deserve_toreplace,$deserve_replace, $page_markup);
$deserve_new_markup= preg_replace('/<ul/', '<ul class="nav"', $deserve_new_markup);
return $deserve_new_markup; }
add_filter('wp_page_menu', 'deserve_add_menuid');






add_action( 'widgets_init', 'deserve_widget' );

function deserve_widget() {
    register_widget( 'deserve_info_widget' );
}

class deserve_info_widget extends WP_Widget {

    function deserve_info_widget() {
        $deserve_widget_ops = array( 'classname' => 'deserve_info', 'description' => __('A widget that displays content, image and social links. ', 'deserve_info') );
       
        $deserve_control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'deserve-info-widget' );
       
        $this->WP_Widget( 'deserve-info-widget', __('Deserve Author Information', 'deserve_info'), $deserve_widget_ops, $deserve_control_ops );
    }
   
    function widget( $deserve_args, $deserve_instance ) {
        extract( $deserve_args );

        //Our variables from the widget settings.
        $deserve_name = $deserve_instance['content'];
		$deserve_image = $deserve_instance['image'];

        echo $before_widget;

        //Display widget
?>       
  <?php if (!empty($deserve_instance['content']) || !empty($deserve_instance['image']) || !empty($deserve_instance['facebook']) || !empty($deserve_instance['twitter']) || !empty($deserve_instance['linkedin']) || !empty($deserve_instance['google']) )   { ?>
  

  <ul>
    <li class="deserve-widget-author">
		<?php
		if(!empty($deserve_instance['image'])){ ?>
		
		<div class="logo-footer">
			
					<?php
					if(!empty($deserve_instance['image']))
					{
	
					 $deserve_image = esc_url($deserve_instance['image']);
					 $deserve_id = deserve_get_image_id_by_url($deserve_image);
					 $deserve_image = wp_get_attachment_image_src( $deserve_id, 'deserve-footer-logo-size' ); 
					?>	
					 <img alt="<?php _e('footer-logo','deserve'); ?>"  src="<?php  echo esc_url($deserve_image[0]); ?>" width="<?php  echo $deserve_image[1]; ?>" height="<?php  echo $deserve_image[2]; ?>">
					 
					
					<?php } ?>
        </div>
        <?php } ?>

   <?php   if(!empty($deserve_instance['content'])) { ?>
		<p> <?php echo $deserve_instance['content']; ?></p></li>   <?php } ?>
		<?php if ( !empty($deserve_instance['facebook']) || !empty($deserve_instance['twitter']) || !empty($deserve_instance['linkedin']) || !empty($deserve_instance['google']) )   { ?>
    
    <li class="deserve-social">
	<div class="social-icon">
              <ul>
				  	<?php if(!empty($deserve_instance['facebook'])) { ?>
				    <li>
						<a target="_blank" class="social facebook-icon" href="<?php echo esc_url($deserve_instance['facebook']); ?>">	<i class="fa fa-facebook-square fa-2x"></i></a>
					</li>
					 <?php } ?>
					
					<?php if(!empty($deserve_instance['twitter'])) { ?>
					<li>
						<a target="_blank" class="social twitter-icon" href="<?php echo esc_url($deserve_instance['twitter']); ?>">   <i class="fa fa-twitter-square fa-2x"></i></a>
					</li>
					<?php } ?>
					
					<?php if(!empty($deserve_instance['linkedin'])) { ?>
					<li>
						<a target="_blank" class="social linkedin-icon" href="<?php echo esc_url($deserve_instance['linkedin']); ?>"><i class="fa fa-linkedin-square fa-2x"></i></a>
					</li>
					<?php } ?>
					
					<?php if(!empty($deserve_instance['google'])) { ?>
					<li>
						<a target="_blank" class="social googleplus-icon" href="<?php echo esc_url($deserve_instance['google']); ?>"><i class="fa fa-google-plus-square fa-2x"></i></a>
					</li>
					<?php } ?>
              </ul>
      </div>
    </li>
    <?php } ?>
  </ul>
<?php  }      
        echo $after_widget;
    }

    //Update the widget
   
    function update( $deserve_new_instance, $deserve_old_instance ) {
        $deserve_instance = $deserve_old_instance;

        //Strip tags from title and name to remove HTML
      
        $deserve_instance['content'] = sanitize_text_field(strip_tags( $deserve_new_instance['content'] ));
		$deserve_instance['image'] = deserve_image_validation(esc_url_raw(strip_tags( $deserve_new_instance['image'] )));
		
		
        $deserve_instance['facebook'] = esc_url_raw(strip_tags( $deserve_new_instance['facebook'] ));
        $deserve_instance['twitter'] = esc_url_raw(strip_tags( $deserve_new_instance['twitter'] ));
		$deserve_instance['linkedin'] = esc_url_raw(strip_tags( $deserve_new_instance['linkedin'] ));
		$deserve_instance['google'] = esc_url_raw(strip_tags( $deserve_new_instance['google'] ));

        return $deserve_instance;
    }

   
    function form( $deserve_instance ) {
?>

        <p>
            <label for="<?php echo $this->get_field_id( 'content' ); ?>"><?php _e('Content:', 'deserve'); ?></label>
            <textarea id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>" class="author-input"><?php if(!empty($deserve_instance['content'])) { echo sanitize_text_field($deserve_instance['content']); } ?></textarea>
        </p>
        <p class="section">
        <label for="<?php echo $this->get_field_id( 'image' ); ?>"><?php _e('Image:', 'deserve'); ?></label>
        <input id="<?php echo $this->get_field_id( 'image' ); ?>"  type="text" class="upload author-input" name="<?php echo $this->get_field_name( 'image' ); ?>" value="<?php if(!empty($deserve_instance['image'])) { echo esc_url($deserve_instance['image']); } ?>" placeholder="<?php _e('No file chosen','deserve'); ?>"  />
		<?php if(!empty($deserve_instance['image'])) { ?><img src="<?php echo esc_url($deserve_instance['image']); ?>" class="author-img" /><?php } ?>
        <input id="upload_image_button" class="upload-button button" type="button" value="<?php _e( 'Upload', 'deserve' ); ?>" />
          
        </p>
        
        <p>
            <label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e('Facebook url:', 'deserve'); ?></label>
           <input type="text"  id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" value="<?php if(!empty($deserve_instance['facebook']))
             { 
				 echo esc_url($deserve_instance['facebook']); } ?>" class="author-input"  />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e('Twitter url:', 'deserve'); ?></label>
            <input  type="text"  id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" value="<?php if(!empty($deserve_instance['twitter'])) { echo esc_url($deserve_instance['twitter']); } ?>" class="author-input" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php _e('Linkedin url:', 'deserve'); ?></label>
            <input  type="text"  id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" value="<?php if(!empty($deserve_instance['linkedin'])) { echo esc_url($deserve_instance['linkedin']); } ?>" class="author-input" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'google' ); ?>"><?php _e('Google+ url:', 'deserve'); ?></label>
            <input type="text"  id="<?php echo $this->get_field_id( 'google' ); ?>" name="<?php echo $this->get_field_name( 'google' ); ?>" value="<?php if(!empty($deserve_instance['google'])) { echo esc_url($deserve_instance['google']); } ?>" class="author-input" />
        </p>
		
        
    <?php
    }
}

// READ MORE
function deserve_change_excerpt_more( $more ) {
    return '... <div class="read-more"><a href="' . get_permalink() . '">'.__('Read More','deserve').'</a></div>';
}
add_filter('excerpt_more', 'deserve_change_excerpt_more');
function deserve_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'deserve_excerpt_length', 999 );


/* CUSTOM POST WIDGET FOR LATEST POST */

add_action( 'widgets_init', 'deserve_widget_post' );

function deserve_widget_post() {
    register_widget( 'LatestPostWidget' );
}

class LatestPostWidget extends WP_Widget
{
function LatestPostWidget()
{
$deserve_lp_widget_ops = array('classname' => 'LatestPostWidget', 'description' => 'Displays a Latest post with thumbnail' );
$this->WP_Widget('LatestPostWidget', 'Deserve Latest Post', $deserve_lp_widget_ops);
}

function form($deserve_lp_instance)
{
$deserve_lp_instance = wp_parse_args( (array) $deserve_lp_instance, array( 'title' => '' ) );
$deserve_lp_title = $deserve_lp_instance['title'];
$deserve_lp_number = isset( $deserve_lp_instance['number'] ) ? absint( $deserve_lp_instance['number'] ) : 5;
$deserve_lp_show_date = isset( $deserve_lp_instance['show_date'] ) ? (bool) $deserve_lp_instance['show_date'] : false; 
?>
<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:', 'deserve' ); ?> <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($deserve_lp_title); ?>" /></label></p>
 <p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:', 'deserve' ); ?></label>
<input id="<?php echo $this->get_field_id( 'number' ); ?>" maxlength="2" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $deserve_lp_number; ?>" size="3" /></p> 
 <p><input class="checkbox" type="checkbox" <?php checked( $deserve_lp_show_date ); ?> id="<?php echo $this->get_field_id( 'show_date' ); ?>" name="<?php echo $this->get_field_name( 'show_date' ); ?>" />
 <label for="<?php echo $this->get_field_id( 'show_date' ); ?>"><?php _e( 'Display post date?', 'deserve' ); ?></label></p>
<?php
}

function update($deserve_lp_new_instance, $deserve_lp_old_instance)
{
  $deserve_lp_instance = $deserve_lp_old_instance;
        $deserve_lp_instance['title'] = sanitize_text_field(strip_tags($deserve_lp_new_instance['title']));
        $deserve_lp_instance['number'] = (int) $deserve_lp_new_instance['number']; 
       
        $deserve_lp_instance['show_date'] = (bool) $deserve_lp_new_instance['show_date'];
		return $deserve_lp_instance;

}

function widget($args, $deserve_lp_instance)
{
extract($args, EXTR_SKIP);

echo $before_widget;
$deserve_lp_title = empty($deserve_lp_instance['title']) ? ' ' : apply_filters('widget_title', $deserve_lp_instance['title']);

if (!empty($deserve_lp_title))
echo $before_title . $deserve_lp_title . $after_title;;
  $deserve_lp_show_date = isset( $deserve_lp_instance['show_date'] ) ? $deserve_lp_instance['show_date'] : false;
  $deserve_lp_number = ( ! empty( $deserve_lp_instance['number'] ) ) ? absint( $deserve_lp_instance['number'] ) : 10;


$query = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $deserve_lp_number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );

		if ($query->have_posts()) :
			while ( $query->have_posts() ) : $query->the_post(); ?>
         
				<div class="blog-media">
					<div class="blog-img">
						<a href="<?php echo get_permalink(); ?>">
            	
							<?php $deserve_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()),'deserve-latest-post-widget'); ?>
				
							<?php if($deserve_image != "") 
								  { ?>
								<img src="<?php echo esc_url($deserve_image[0]); ?>" width="<?php echo $deserve_image[1]; ?>" height="<?php echo $deserve_image[2];?>" class="img-responsive" alt="<?php the_title(); ?>"/>
							<?php } 
							else
							{ ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/image.jpeg" height="100" width="100" alt="<?php echo get_the_title(); ?>" class="img-responsive" />
							<?php } ?>
             	
						</a>
						
					</div>
					<div class="blog-post">					
						 <a href="<?php the_permalink() ?>" title="<?php echo esc_attr( get_the_title() ? get_the_title() : get_the_ID() ); ?>"><?php if ( get_the_title() ) the_title(); else the_ID(); ?></a> 
						    <?php if ( $deserve_lp_show_date ) : ?>          
								<p class="date-lp"><?php echo get_the_date(); ?></p>
								<?php $deserve_author= get_the_author(); 
									$deserve_author_url= esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );	
								?>
								<p><?php _e('By ', 'deserve'); ?><a href="<?php echo $deserve_author_url; ?>" rel="tag"><?php echo $deserve_author; ?></a></p>
							<?php endif; ?>
					</div>
				</div>
                
          
       <?php endwhile; endif; // end of the loop.

echo $after_widget;
}

}
add_action( 'widgets_init', create_function('', 'return register_widget("LatestPostWidget");') );




/* Deserve Entry Meta  */

/*
 * deserve Set up post entry meta.
 *
 * Meta information for current post: categories, tags, permalink, author, and date.
 */
function deserve_entry_meta() {

	$deserve_categories_list = get_the_category_list(',','');
	
	$deserve_tag_list = get_the_tag_list('', ',' );
	
	$deserve_author= get_the_author();
	
	$deserve_author_url= esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );
	
	$deserve_comments = wp_count_comments(get_the_ID()); 	
	
	$deserve_date = sprintf( '<time datetime="%1$s">%2$s</time>',
		sanitize_text_field( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);
?>	
	
                <li><?php _e('By ', 'deserve'); ?><a href="<?php echo $deserve_author_url; ?>" rel="tag"><?php echo $deserve_author; ?></a></li>
                  <?php if(!empty($deserve_categories_list)) { ?><li><?php _e('In ', 'deserve'); ?><?php echo $deserve_categories_list; ?></li><?php } ?>
                <li><?php _e('Posted On ', 'deserve'); ?><?php echo $deserve_date; ?></li>
               <?php if(!empty($deserve_tag_list)) { ?><li><?php _e('Tags ', 'deserve'); ?><?php echo $deserve_tag_list; ?></li><?php } ?>
                <li><?php comments_number( '', __('1 comment', 'deserve'), __('% comments', 'deserve') ); ?></li>
		
<?php 	
}


/*** Breadcrumbs ***/
require_once('functions/breadcrumbs.php');








add_filter( 'comment_form_default_fields', 'deserve_comment_placeholders' );
/**
 * Change default fields, add placeholder and change type attributes.
 *
 * @param  array $fields
 * @return array
 */
function deserve_comment_placeholders( $deserve_fields )
{
    $deserve_fields['author'] = str_replace(
        '<input',
        '<input placeholder="'

            . _x(
                'Name',
                'comment form placeholder',
                'deserve'
                )
            . '"',
        $deserve_fields['author']
    );
    $deserve_fields['email'] = str_replace(
        '<input',
        '<input  placeholder="'
            . _x(
                'Email',
                'comment form placeholder',
                'deserve'
                )
            . '"',
        $deserve_fields['email']
        
    );
    
    
    $deserve_fields['url'] = str_replace(
        '<input',
        '<input  placeholder="'
            . _x(
                'Website',
                'comment form placeholder',
                'deserve'
                )
            . '"',
        $deserve_fields['url']
        
    );
    
    
  
    

    return $deserve_fields;
}
add_filter( 'comment_form_defaults', 'deserve_textarea_insert' );
function deserve_textarea_insert( $deserve_fields )
{
        $deserve_fields['comment_field'] = str_replace(
            '</textarea>',
            ''. _x(
                'message',
                'comment form placeholder ',
                'deserve'
                )
            . ''. '</textarea>',
            $deserve_fields['comment_field']
        );
    return $deserve_fields;
}



function deserve_get_image_id_by_url($image_url) {
    global $wpdb;
    $dserve_prefix = $wpdb->prefix;
    $deserve_attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM " . $dserve_prefix . "posts" . " WHERE guid='%s';", $image_url ));
    return $deserve_attachment[0];
}

function deserve_pagination()
{
	if(is_single()){
		the_post_navigation( array(
			'prev_text' => '<span class="deserve-nav-previous">%title</span>',
			'next_text' => '<span class="deserve-nav-next">%title</span>',
		) );
	}else{	
		the_posts_pagination( array(
			
				'prev_text'  =>'<<',
				'next_text'  =>'>>',							
			) );						
	}
}








/************font script*******/
function wpb_add_google_fonts() {

wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700,600', false ); 
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

function wpb_add_google_fonts1() {

wp_enqueue_style( 'wpb-google-fonts1', 'https://fonts.googleapis.com/css?family=Roboto+Slab:400,700', false ); 
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts1' );



function deserve_scripts() {
wp_enqueue_style( 'deserve-sectionscroll', get_template_directory_uri() . '/css/section-scroll.css' );
	// Theme stylesheet.
	wp_enqueue_style( 'deserve-style', get_stylesheet_uri() );


}

add_image_size( 'small-featured', 360 );