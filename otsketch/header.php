<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9DJSFJL1MR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9DJSFJL1MR');
</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php
	/*
	<link rel="alternate" hreflang="en-au" href="https://moddy.io/" />
	<link rel="alternate" hreflang="en-us" href="https://moddy.io/us/" />
	<link rel="alternate" hreflang="en-nz" href="https://moddy.io/nz/" />
	<link rel="alternate" hreflang="x-default" href="https://moddy.io/" />
	*/
	$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https" : "http";
	$host = $_SERVER['HTTP_HOST'];
	$request_uri = $_SERVER['REQUEST_URI'];
	$current_url = $protocol . "://" . $host . $request_uri;

	// Remove query string
	$clean_url = strtok($current_url, '?');

	// Define localized slugs
	$locale_slugs = ['uk', 'us', 'nz']; // Add more if needed

	// Remove locale prefix from URL path
	$parsed = parse_url($clean_url);
	$path = $parsed['path'] ?? '';

	$path_parts = explode('/', trim($path, '/'));

	if (in_array($path_parts[0], $locale_slugs)) {
	    // Remove the locale slug from the beginning
	    array_shift($path_parts);
	}

	$path_without_locale = implode('/', $path_parts);
	$x_default_url = $protocol . '://' . $host . '/' . $path_without_locale;
	if (!empty($path_without_locale)) {
	    $x_default_url .= '/';
	}

	// Render hreflang tags
	if ($v = get_field('hreflang_aus')) { ?>
	    <link rel="alternate" hreflang="en-au" href="<?php echo esc_url($v); ?>" />
	    <link rel="alternate" hreflang="x-default" href="<?php echo esc_url($v); ?>" />
	<?php
	}
	if ($v = get_field('hreflang_us')) { ?>
	    <link rel="alternate" hreflang="en-us" href="<?php echo esc_url($v); ?>" />
	<?php
	}
	if ($v = get_field('hreflang_nz')) { ?>
	    <link rel="alternate" hreflang="en-nz" href="<?php echo esc_url($v); ?>" />
	<?php 
	}

	if (!get_field('hreflang_aus')) { ?>
	    <link rel="alternate" hreflang="en-au" href="<?php echo esc_url($clean_url); ?>" />
	    <link rel="alternate" hreflang="x-default" href="<?php echo esc_url($x_default_url); ?>" />
	<?php
	}
	?>
    <?php /* if (isset($_COOKIE['track_request'])) { */?>
    <?php if( "moddy.wpdev.com.au" !== $_SERVER['HTTP_HOST'] ) { ?>
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P7VS3P7D');</script>
<!-- End Google Tag Manager -->
	
	<meta name="facebook-domain-verification" content="gxcdxkka9h6rw3vn1q2gdt4kdaaiwp" />
    <?php } ?>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> <?php if(get_field('page_background')) echo 'style="background-image:url('.get_field('page_background').');background-repeat:no-repeat;background-size:100% auto"';?>>
    <?php /* if (isset($_COOKIE['track_request'])) { */?>
    <?php if( "moddy.wpdev.com.au" !== $_SERVER['HTTP_HOST'] ) { ?>
	

    <?php } ?>
	<?php if(get_field('text_strip','option')):?>
	<div class="banner-fix">  <?php echo get_field('text_strip','option');?> </div>
	<?php endif;?>
	<div id="page" class="    <?php if(get_field('text_strip','option')):?> hasstrip <?php endif;?>" <?php if(get_field('visual_background')) echo 'style="background-image:url('.get_field('visual_background').');background-repeat:no-repeat;background-size:100% auto"';?> >
			<div id="mainNavigation" class="top-bar show-for-medium">
			<div class="top-bar-left">
				<a href="<?php echo home_url(); ?>" id="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/rg.png" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" ></a>
				<?php
					wp_nav_menu(array(
						'container' => '',
						'menu_id' => '',
						'menu_class' => 'menu vertical medium-horizontal dropdown',
						'theme_location' => 'primary'
					));
				?>
				
			<?php  if($t = get_field('_login', 'options')) echo '<span class="tel white"><a href="https://app.remittancego.com/">Log In</a></span>'; ?>
				<?php if($t = get_field('_login', 'options')) echo '<span class="tel"><a href="https://app.remittancego.com/">Start for free</a></span>'; ?>
			</div>
			<?php /*
			<div class="top-bar-right">
				<?php if($t = get_field('phone', 'options')) echo '<span class="tel"><a href="tel:'.$t.'">'.$t.'</a></span>'; ?>
				<?php /*<a class="button" href="<?php echo get_permalink( 21 ); ?>">Contact Us</a>
			</div>
			*/?>
		</div>
		
		<div id="mobile-header" class="hide-for-large hide-for-medium">
			<div id="mobile-topbar">
				<div class="widget_text top-bar-widget widget widget_custom_html"><div class="textwidget custom-html-widget"><?php /* if($t = get_field('phone', 'options')) echo '<span class="tel"><a href="tel:'.$t.'">Call us '.$t.'</a></span>'; */?> </div></div> 
			</div>
			<div class="grid-container">
				<div class="grid-x align-middle">
					<div class="small-8">
						<a href="<?php echo home_url(); ?>" id="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/rg.png" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" ></a>
					</div>
					<div class="small-4 cell text-right">
						<a href="#" class="nav-toggle" data-responsive-toggle="responsive-menu"><i class="fa fa-bars fa-2x" data-toggle></i></a>
					</div>
					 <div id="responsive-menu">
					 <div class="hold">
						<?php
							wp_nav_menu(array(
								'container' => '',
								'menu_id' => '',
								'menu_class' => 'vertical menu',
								'theme_location' => 'primary'
							));
						?>
						<?php
							wp_nav_menu(array(
								'container' => '',
								'menu_id' => '',
								'menu_class' => 'menu vertical medium-horizontal',
								'theme_location' => 'sub'
							));
						?>
						<div class="bottom">
						<?php if($t = get_field('_login', 'options')) echo '<span class="tel white"><a href="'.$t.'">Log In</a></span>'; ?>
						<ul class="social">
							<?php if($t = get_field('facebook', 'options')):?><li><a href="<?php echo get_field('facebook', 'options');?> " rel="noreferrer noopener" target="_blank"><svg width="7" height="13" viewBox="0 0 7 13" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.1033 2.83953H6.1537V1.01347C5.64545 0.957775 5.13446 0.930865 4.62317 0.932866C4.26945 0.91214 3.91548 0.969127 3.58613 1.09982C3.25679 1.23052 2.96006 1.43176 2.7168 1.68939C2.47354 1.94702 2.28965 2.2548 2.17805 2.59109C2.06646 2.92739 2.02986 3.28405 2.07084 3.636V5.248H0.399902V7.29333H2.07084V12.4396H4.1205V7.29333H5.72384L5.97864 5.248H4.11964V3.8388C4.1205 3.24773 4.2791 2.83953 5.1033 2.83953Z" fill="#fff"></path>
								</svg>
							</a></li><?php endif;?>
							<?php if($t = get_field('linkedin', 'options')):?><li><a href="<?php echo get_field('linkedin', 'options');?>" rel="noreferrer noopener" target="_blank"><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10.3379 10.3156V6.82112C10.3379 5.11197 9.96958 3.79224 7.96845 3.79224C7.59288 3.77934 7.22082 3.86828 6.89182 4.04961C6.56282 4.23093 6.28915 4.49787 6.09992 4.82206H6.07218V3.95667H4.17505V10.3173H6.15105V7.16555C6.15105 6.3365 6.30878 5.53428 7.33665 5.53428C8.34978 5.53428 8.36538 6.48102 8.36538 7.21834V10.3147L10.3379 10.3156Z" fill="white" fill-opacity="0.8"></path>
							<path d="M0.961426 3.95508H2.93569V10.3157H0.961426V3.95508Z" fill="white" fill-opacity="0.8"></path>
							<path d="M1.94592 0.789074C1.71784 0.788048 1.49461 0.854707 1.30454 0.980592C1.11448 1.10648 0.966156 1.28591 0.8784 1.49612C0.790645 1.70632 0.767415 1.93783 0.811658 2.16124C0.855901 2.38466 0.965623 2.58991 1.1269 2.75094C1.28817 2.91198 1.49372 3.02154 1.71747 3.06572C1.94121 3.1099 2.17305 3.0867 2.38357 2.99907C2.59408 2.91145 2.77378 2.76334 2.89985 2.57356C3.02592 2.38377 3.09268 2.16086 3.09165 1.93313C3.09165 1.6297 2.97094 1.33871 2.75607 1.12416C2.54121 0.909608 2.24978 0.789074 1.94592 0.789074Z" fill="white" fill-opacity="0.8"></path>
							</svg>
							</a></li><?php endif;?>
							<?php if($t = get_field('twitter', 'options')):?><li><a href="<?php echo get_field('twitter', 'options');?>" rel="noreferrer noopener" target="_blank"><svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11.4597 1.49536C11.0305 1.68251 10.5766 1.80685 10.112 1.86457C10.6017 1.57403 10.9677 1.11393 11.1407 0.571498C10.6823 0.843319 10.1808 1.03472 9.65787 1.13743C9.33676 0.795938 8.92049 0.558754 8.46301 0.456616C8.00552 0.354477 7.5279 0.392094 7.09204 0.564589C6.65618 0.737083 6.28218 1.0365 6.01849 1.42405C5.7548 1.8116 5.61358 2.26941 5.61313 2.73816C5.61145 2.91731 5.62976 3.09608 5.66773 3.27116C4.73733 3.22553 3.82703 2.98402 2.99637 2.56242C2.16571 2.14082 1.4334 1.54862 0.847333 0.824565C0.546133 1.3392 0.452762 1.9494 0.586291 2.53055C0.719821 3.1117 1.07018 3.61995 1.5658 3.9515C1.19567 3.94165 0.833335 3.84297 0.509333 3.66377V3.68976C0.509934 4.22976 0.696593 4.75306 1.03788 5.17154C1.37916 5.59001 1.85422 5.8781 2.38307 5.9873C2.18314 6.04004 1.97709 6.06597 1.77033 6.06443C1.62171 6.0671 1.47323 6.05374 1.32747 6.02456C1.47854 6.48869 1.76975 6.89458 2.16103 7.18637C2.5523 7.47815 3.0244 7.64149 3.51233 7.6539C2.68428 8.29997 1.66361 8.64996 0.613333 8.64796C0.426218 8.64924 0.239213 8.63853 0.0534668 8.6159C1.12276 9.30476 2.36863 9.66929 3.6406 9.66543C4.5162 9.67154 5.38428 9.50359 6.19442 9.17136C7.00455 8.83912 7.7406 8.34922 8.35979 7.73011C8.97899 7.11099 9.46899 6.37501 9.80133 5.56491C10.1337 4.75482 10.3017 3.88676 10.2957 3.01116C10.2957 2.90803 10.2957 2.80836 10.2871 2.7087C10.7484 2.3789 11.1458 1.96773 11.4597 1.49536Z" fill="white" fill-opacity="0.8"></path>
							</svg>
							</a></li><?php endif;?>
							<?php if($t = get_field('instagram', 'options')):?><li><a href="<?php echo get_field('instagram', 'options');?>" rel="noreferrer noopener" target="_blank"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M7.93879 0.580078H3.94018C3.05647 0.580078 2.20896 0.930614 1.58408 1.55457C0.959206 2.17853 0.608154 3.0248 0.608154 3.90721L0.608154 7.89994C0.608154 8.78236 0.959206 9.62862 1.58408 10.2526C2.20896 10.8765 3.05647 11.2271 3.94018 11.2271H7.93879C8.82249 11.2271 9.67001 10.8765 10.2949 10.2526C10.9198 9.62862 11.2708 8.78236 11.2708 7.89994V3.90721C11.2708 3.0248 10.9198 2.17853 10.2949 1.55457C9.67001 0.930614 8.82249 0.580078 7.93879 0.580078V0.580078ZM10.2709 7.89994C10.2703 8.51735 10.0243 9.10927 9.58711 9.54585C9.14989 9.98242 8.5571 10.228 7.93879 10.2287H3.94018C3.32187 10.228 2.72907 9.98242 2.29186 9.54585C1.85464 9.10927 1.60871 8.51735 1.60802 7.89994V3.90721C1.60871 3.2898 1.85464 2.69788 2.29186 2.26131C2.72907 1.82474 3.32187 1.57917 3.94018 1.57848H7.93879C8.5571 1.57917 9.14989 1.82474 9.58711 2.26131C10.0243 2.69788 10.2703 3.2898 10.2709 3.90721V7.89994Z" fill="white" fill-opacity="0.8"></path>
							<path d="M5.93938 3.24219C5.4122 3.24219 4.89686 3.39829 4.45853 3.69074C4.0202 3.9832 3.67856 4.39887 3.47682 4.8852C3.27508 5.37153 3.2223 5.90667 3.32514 6.42296C3.42799 6.93925 3.68185 7.41349 4.05462 7.78571C4.42739 8.15793 4.90233 8.41142 5.41937 8.51412C5.93642 8.61681 6.47235 8.5641 6.95939 8.36266C7.44644 8.16121 7.86274 7.82008 8.15562 7.38239C8.4485 6.94471 8.60482 6.43012 8.60482 5.90372C8.60482 5.19784 8.324 4.52087 7.82413 4.02173C7.32426 3.5226 6.6463 3.24219 5.93938 3.24219ZM5.93938 7.56772C5.60996 7.56772 5.28794 7.47018 5.01404 7.28743C4.74013 7.10468 4.52665 6.84494 4.40059 6.54104C4.27452 6.23714 4.24153 5.90274 4.3058 5.58012C4.37007 5.25751 4.5287 4.96116 4.76164 4.72857C4.99457 4.49598 5.29135 4.33759 5.61444 4.27342C5.93753 4.20924 6.27243 4.24217 6.57677 4.36805C6.88111 4.49393 7.14124 4.7071 7.32426 4.9806C7.50728 5.2541 7.60496 5.57566 7.60496 5.90459C7.60427 6.34547 7.42857 6.76809 7.11636 7.07984C6.80415 7.39158 6.3809 7.56703 5.93938 7.56772Z" fill="white" fill-opacity="0.8"></path>
							<path d="M8.80543 3.39741C9.00148 3.39741 9.16042 3.23871 9.16042 3.04294C9.16042 2.84718 9.00148 2.68848 8.80543 2.68848C8.60937 2.68848 8.45044 2.84718 8.45044 3.04294C8.45044 3.23871 8.60937 3.39741 8.80543 3.39741Z" fill="white" fill-opacity="0.8"></path>
							</svg>
							</a></li><?php endif;?>
							<?php if($t = get_field('youtube', 'options')) :?><li><a href="<?php echo get_field('youtube', 'options');?>" rel="noreferrer noopener" target="_blank"><svg width="13" height="9" viewBox="0 0 13 9" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11.9391 2.11936C11.8735 1.87434 11.7448 1.6508 11.5658 1.47105C11.3868 1.29131 11.1638 1.16163 10.9191 1.09496C9.41619 0.912392 7.90278 0.830742 6.38899 0.85056C4.87542 0.832543 3.36225 0.912152 1.85893 1.08889C1.61479 1.15874 1.39273 1.29021 1.21408 1.47068C1.03544 1.65114 0.906224 1.87453 0.838859 2.11936C0.674247 3.03831 0.594179 3.9704 0.599659 4.90396C0.593862 5.83753 0.673932 6.76965 0.838859 7.68856C0.905154 7.93278 1.03418 8.15542 1.21312 8.33436C1.39206 8.51331 1.6147 8.64233 1.85893 8.70863C3.36173 8.89216 4.87513 8.97497 6.38899 8.95649C7.90249 8.97566 9.41565 8.89721 10.9191 8.72163C11.1634 8.65546 11.3863 8.5265 11.5654 8.34755C11.7445 8.16859 11.8736 7.94589 11.94 7.70156C12.1043 6.78258 12.1841 5.85049 12.1783 4.91696C12.1893 3.98007 12.1095 3.04432 11.94 2.12283L11.9391 2.11936ZM5.23546 6.64163V3.16803L8.24886 4.90136L5.23546 6.64163Z" fill="white" fill-opacity="0.8"></path>
							</svg>
							</a></li><?php endif;?>
						</ul>
					</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<?php if ( is_home() ):?>
			<div class=" newhero"  >
				<div class="rec"> <canvas id="gradient-canvas" style="width:100vw;height:100vh"></canvas></div>
			  <div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-6 cell">
						<ul class="breadcrumbs"><li><a href="<?php echo home_url(); ?>">Home</a></li>
						<li>Blog</li></ul>
						<?php
							/*the_archive_title( '<h1 class="page-title">', '</h1>' );
							 the_archive_description( '<div class="archive-description">', '</div>' );*/
						?>
						<h1 class="page-title">Blog</h1>
					</div>
				</div>
			  </div>
			</div>
			</div>
		<?php elseif ( is_search() ):?>
			<div class=" newhero"  >
			<div class="rec"> <canvas id="gradient-canvas" style="width:100vw;height:100vh"></canvas></div>
			  <div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-6 cell">
						<ul class="breadcrumbs"><li><a href="<?php echo home_url(); ?>">Home</a></li>
						<li><a href="<?php echo get_permalink( 831 ); ?>">Learn</a></li>
						<li> Search Results</li></ul>
						<h1>Learn: Search Results</h1>
						<p><?php if($t = get_field('_login', 'options')) echo ' <a href="'.$t.'" class="button">Log In</a> '; ?>
							<?php if($t = get_field('_login', 'options')) echo ' <a  class="button" href="https://app.moddy.io/register?plan=monthly-3D">Get Started!</a> '; ?>
						</p>
					</div>
					<div class="large-6 medium-6 img cell">
						 
					</div>
				</div>
			  </div>
			</div>
		<?php elseif(is_404()):?>
			<div class=" newhero"  >
			  <div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-6 cell">
						<ul class="breadcrumbs"><li><a href="<?php echo home_url(); ?>">Home</a></li>
						<li><a href="<?php echo get_permalink( 831 ); ?>">Learn</a></li>
						<li><?php the_archive_title( '', '' );?></li></ul>
						<h1>Error 404: Page Not Found</h1>
						
					</div>
					<div class="large-6 medium-6 img cell">
						<?php $featured_img_url = get_field('blog_image','options');?> 
						<img src="<?php echo $featured_img_url;?>" alt="Hero Image" > 
					</div>
				</div>
			  </div>
			</div>
			</div>
			
			<section class="row columns-text " style="padding-bottom:80px;   ">
				<div class="grid-container">
					<div class="grid-x grid-padding-x  gridsarea"><div class="large-12 medium-12 cell "><div class="hold"><h2>You may not be able to find the page or file because of:</h2>
						<ol>
							<li>An <strong>out-of-date bookmark</strong>.</li>
							<li>A search engine that has an <strong>out-of-date listing for this site</strong>.</li>
							<li>A <strong>mis-typed address</strong>.</li>
						</ol>
			</div></div></div>	</div>
			</section>
		<?php elseif(is_archive()):?>
			<div class=" newhero"  >
			<?php /*<div class="rec"> <canvas id="gradient-canvas" style="width:100vw;height:100vh"></canvas></div>*/ ?>
			  <div class="grid-container">
				<?php if ( is_post_type_archive('calculators') || is_post_type_archive('home-modifications')) : ?>
						<?php $featured_img_url = get_field('blog_image_calc','options');?> 
 					<?php elseif ( is_post_type_archive('templates') || is_post_type_archive('tutorials')) : ?>
						<?php $featured_img_url = get_field('blog_image_temp','options');?> 
 					<?php elseif ( is_post_type_archive('articles') ) : ?>
						<?php $featured_img_url = get_field('blog_image_articles','options');?> 
 					<?php else:?>
						<?php $featured_img_url = get_field('blog_image','options');?> 
 					<?php endif;?>
				<div class="grid-x grid-padding-x" <?php if($featured_img_url):?>style="background-image:url(<?php echo $featured_img_url;?>)"<?php endif;?>>
					<div class="large-6 medium-6 cell">
					
						<ul class="breadcrumbs"><li><a href="<?php echo home_url(); ?>">Home</a></li>
						<li><a href="<?php echo get_permalink( 831 ); ?>">Learn</a></li>
						<li><?php the_archive_title( '', '' );?></li></ul>
						<?php if(is_post_type_archive('tutorials')):?>
							<h1>Video Tutorials</h1>
						<?php else:?>
							<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<p>', '</p>' );
							?>
						<?php endif;?>
						<?php if ( is_post_type_archive('calculators') || is_post_type_archive('home-modifications')  ) : ?>
							<?php if(get_field('description_calc','options')) echo '<p>'.get_field('description_calc','options').'</p>';?>
						<?php elseif ( is_post_type_archive('templates') || is_post_type_archive('tutorials')) :?>
							<?php if(get_field('description_temp','options')) echo '<p>'.get_field('description_temp','options').'</p>';?>
						<?php endif;?>
					</div>
 
				</div>
			  </div>
			</div>
		<?php else:?>
			<?php if(!is_singular() || is_page()):?>
 					<div class=" newhero <?php if(get_field('page_background') || get_field('visual_background')) echo 'nobg';?> "   >
					<?php if(is_page_template('pt-resources.php')): ?>
					<?php else:?>
						<div class="rec"> <canvas id="gradient-canvas" style="width:100vw;height:100vh"></canvas></div>
					<?php endif;?>
					  <div class="grid-container">
						<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>
						<div class="grid-x grid-padding-x" <?php if($featured_img_url):?>style="background-image:url(<?php echo $featured_img_url;?>)"<?php endif;?>>
							<div class="large-6 medium-6 cell">
								 <ul class="breadcrumbs"  >
									<?php  if(function_exists('bcn_display'))
									 {
										 bcn_display();
									}?>
								</ul> 
								<?php if($v = get_field('title_main')):?>
									<h1><?php echo $v;?></h1>
								<?php	else:?>
									<h1><?php the_title();?></h1>
								<?php endif;?>
								<?php if($v = get_field('_subheading_text')):?>
									<?php echo $v;?>
								<?php endif;?>
								<?php if(get_field('text_area_sub')) echo '<p>'.get_field('text_area_sub').'</p>';?>
								<?php if(is_page_template('pt-price.php')): ?>
									<?php if($list = get_field('tabs_list')): ?>
										<div class="grid-x grid-padding-x">
											<div class="large-12 medium-12 cell">
												<div class="boxed">
													<h3>Tailored Pricing</h3>
													<div class="f">
														<label for="people">How many people?</label>
														<input type="number" id="people" value="1"/>
													</div>
													<ul class="tabset">
														<?php $i = 0; foreach($list as $el):$i++; ?>
															<li><?php if($el['title_tab']) echo '<a';?>
																<?php if($i == 1) echo 'class="active"';?>
																<?php  if($el['title_tab']) echo 'href="#tab'.$i.'">'.$el['title_tab'].'</a>'; ?>
																<?php if($el['sub_title_tab']) echo '<span>'.$el['sub_title_tab'].'</span>'; ?>
															</li>
														<?php endforeach; ?>
													</ul>
												</div>
											</div>
										</div>
									<?php endif; ?>
								<?php endif; ?>
							</div>
						</div>
					  </div>
					</div>
 
			<?php endif;?>
		<?php endif;?>