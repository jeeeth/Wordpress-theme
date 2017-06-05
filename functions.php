<?php
function kural_script_enqueue() {

	//styles

	wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css',array(),'1.0.0',all);

	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',array(),'1.0.0',all);

	wp_enqueue_style( 'carousel', get_template_directory_uri(). '/css/style.css',array(),'1.0.0',all);

	wp_enqueue_style( 'style', get_stylesheet_uri() , array(), '2.0.3' , all);
	//scripts

	wp_enqueue_script( 'jquery', get_template_directory_uri(). '/js/jquery.min.js',array(),'1.0.0',all);

	wp_enqueue_script( 'bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js',array(),'1.0.0',all);

	//wp_enqueue_script( 'main', get_template_directory_uri(). '/js/main.js',array(),'1.0.3',all);
}

add_action( 'wp_enqueue_scripts', 'kural_script_enqueue' );




// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');


// nav menus registering the menu
function register_my_menus(){
	register_nav_menus(
		array(
			'primary' => __('Primary Menu'),
			'footer'  => __('Footer Menu'),
			'footer2'  => __('Footer Menu 2')
		));
	}
	add_action( 'init', 'register_my_menus' );


	// dymanic logo section
	function themeslug_theme_customizer( $wp_customize ) {
		$wp_customize->add_section( 'themeslug_logo_section' , array(
			'title'       => __( 'Logo', 'themeslug' ),
			'priority'    => 30,
			'description' => 'Upload a logo to replace the default site name and description in the header',
			) );

			$wp_customize->add_setting( 'themeslug_logo' );

			$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'themeslug_logo', array(
				'label'    => __( 'Logo', 'themeslug' ),
				'section'  => 'themeslug_logo_section',
				'settings' => 'themeslug_logo',
				) ) );
			}
			add_action( 'customize_register', 'themeslug_theme_customizer' );



			// dynamic bootstrap silder secetion
			add_action( 'init', 'custom_bootstrap_slider' );
			/**
			* Register a Custom post type for.
			*/
			function custom_bootstrap_slider() {
				$labels = array(
					'name'               => _x( 'Slider', 'post type general name'),
					'singular_name'      => _x( 'Slide', 'post type singular name'),
					'menu_name'          => _x( 'Bootstrap Slider', 'admin menu'),
					'name_admin_bar'     => _x( 'Slide', 'add new on admin bar'),
					'add_new'            => _x( 'Add New', 'Slide'),
					'add_new_item'       => __( 'Name'),
					'new_item'           => __( 'New Slide'),
					'edit_item'          => __( 'Edit Slide'),
					'view_item'          => __( 'View Slide'),
					'all_items'          => __( 'All Slide'),
					'featured_image'     => __( 'Featured Image', 'text_domain' ),
					'search_items'       => __( 'Search Slide'),
					'parent_item_colon'  => __( 'Parent Slide:'),
					'not_found'          => __( 'No Slide found.'),
					'not_found_in_trash' => __( 'No Slide found in Trash.'),
				);

				$args = array(
					'labels'             => $labels,
					'menu_icon'	     => 'dashicons-star-half',
					'description'        => __( 'Description.'),
					'public'             => true,
					'publicly_queryable' => true,
					'show_ui'            => true,
					'show_in_menu'       => true,
					'query_var'          => true,
					'rewrite'            => true,
					'capability_type'    => 'post',
					'has_archive'        => true,
					'hierarchical'       => true,
					'menu_position'      => null,
					'supports'           => array('title','editor','thumbnail')
				);

				register_post_type( 'slider', $args );
			}


			// featured images section

			function featured_image_section() {
				// add featured image
				add_theme_support( 'post-thumbnails' );
				add_image_size( 'small_thumbnail', 180  , 120, true );
				add_image_size( 'banner_image',  1000 ,  200 ,   array('left','right') );
				// add post formats
				add_theme_support( 'post-formats', array(
					'aside','gallery', 'link'
				) );
			}
			add_action( 'after_setup_theme','featured_image_section');

			// menu creation
			function wp_nav_menu_no_ul($menuname)
			{
				$options = array(
					'echo' => false,
					'container' => false,
					'theme_location' => $menuname,
					'fallback_cb'=> 'fall_back_menu'
				);
				$menu = wp_nav_menu($options);
				echo preg_replace(array(
					'#^<ul[^>]*>#',
					'#</ul>$#'
				), '', $menu);
			}


			function dynamic_carousal($carousal){ ?>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<?php $slider = get_posts(array('post_type' => $carousal, 'posts_per_page' => 5)); ?>
						<?php $count = 0; ?>
						<?php foreach($slider as $slide): ?>
							<div class="item <?php echo ($count == 0) ? 'active' : ''; ?>">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" class="img-responsive"/></a>
							</div>
							<?php $count++; ?>
						<?php endforeach; ?>
					</div>
				</div>

				<?php
			}
			?>
