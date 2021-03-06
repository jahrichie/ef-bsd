<!DOCTYPE html>
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="ie8"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>

	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	
	<!-- Meta
	================================================== -->
	
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!-- Favicons
	================================================== -->
	
	<link rel="shortcut icon" href="<?php global $data; echo $data['custom_favicon']; ?>">
	<link rel="apple-touch-icon" href="<?php get_template_directory_uri(); ?>assets/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php get_template_directory_uri(); ?>assets/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php get_template_directory_uri(); ?>assets/img/apple-touch-icon-114x114.png">
	
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >

	<div class="header-background-image"></div>

	<header id="header-global" role="banner">
	
		<div class="logo-icons container">
		
			<div class="row">
			
				<div class="header-logo six columns">

					<?php if ($data['text_logo']) { ?>
						<div id="logo-default"><a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></div>
					<?php } elseif ($data['custom_logo']) { ?>
						<div id="logo"><a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo $data['custom_logo']; ?>" alt="Header Logo" /></a></div>
					<?php } ?>
				  	
				</div><!-- end .header-logo -->
				
				<div class="icons ten columns">
				
					<ul class="social-icons">
					
						<?php if ($data["text_twitter_profile"]) { ?>
							<li><a href="<?php echo $data['text_twitter_profile']; ?>" class="twitter-link" title="View Twitter Profile"></a></li>
						<?php } if ($data["text_facebook_profile"]){ ?>
							<li><a href="<?php echo $data['text_facebook_profile']; ?>" class="facebook-link" title="View Facebook Profile"></a></li>
						<?php } if ($data["text_dribbble_profile"]){ ?>
							<li><a href="<?php echo $data['text_dribbble_profile']; ?>" class="dribbble-link" title="View Dribbble Profile"></a></li>
						<?php } if ($data["text_forrst_profile"]){ ?>
							<li><a href="<?php echo $data['text_forrst_profile']; ?>" class="forrst-link" title="View Forrst Profile"></a></li>
						<?php } if ($data["text_vimeo_profile"]){ ?>
							<li><a href="<?php echo $data['text_vimeo_profile']; ?>" class="vimeo-link" title="View Vimeo Profile"></a></li>
						<?php } if ($data["text_youtube_profile"]){ ?>
							<li><a href="<?php echo $data['text_youtube_profile']; ?>" class="youtube-link" title="View YouTube Profile"></a></li>
						<?php } if ($data["text_flickr_profile"]){ ?>
							<li><a href="<?php echo $data['text_flickr_profile']; ?>" class="flickr-link" title="View Flickr Profile"></a></li>
						<?php } if ($data["text_linkedin_profile"]){ ?>
							<li><a href="<?php echo $data['text_linkedin_profile']; ?>" class="linkedin-link" title="View Linkedin Profile"></a></li>
						<?php } if ($data["text_pinterest_profile"]){ ?>
							<li><a href="<?php echo $data['text_pinterest_profile']; ?>" class="pinterest-link" title="View Pinterest Profile"></a></li>
						<?php } if ($data["text_googleplus_profile"]){ ?>
							<li><a href="<?php echo $data['text_googleplus_profile']; ?>" class="googleplus-link" title="View Google + Profile"></a></li>
						<?php } if ($data["text_tumblr_profile"]){ ?>
							<li><a href="<?php echo $data['text_tumblr_profile']; ?>" class="tumblr-link" title="View Tumblr Profile"></a></li>
						<?php } if ($data["text_soundcloud_profile"]){ ?>
							<li><a href="<?php echo $data['text_soundcloud_profile']; ?>" class="soundcloud-link" title="View Soundcloud Profile"></a></li>
						<?php } if ($data["text_lastfm_profile"]){ ?>
							<li><a href="<?php echo $data['text_lastfm_profile']; ?>" class="lastfm-link" title="View Last FM Profile"></a></li>
						<?php } ?>
						
					</ul>
				
				</div><!-- end .icons -->
				
			</div><!-- end .row -->
			
		</div><!-- end .logo-icons container -->
		
		<div id="header-background-nav">
			
			<nav id="header-navigation" class="sixteen columns" role="navigation">
			
			<?php if (is_front_page()) { ?>
				
				<?php
				$header_menu_args = array(
				    'menu' => 'Header',
				    'theme_location' => 'Front',
				    'container' => false,
				    'menu_id' => 'navigation'
				);
				
				wp_nav_menu($header_menu_args);
				?>
				
			<?php } else { ?>
			
				<?php
				$header_menu_args = array(
				    'menu' => 'Header',
				    'theme_location' => 'Inner',
				    'container' => false,
				    'menu_id' => 'navigation'
				);
			
			wp_nav_menu($header_menu_args);
			?>
			
			<?php } ?>
	
			</nav><!-- end #header-navigation -->
		
		</div><!-- end #header-background-nav -->
			
		<?php if (is_front_page()) { ?>
		
		<div class="container">
				
			<div class="row">
			
				<?php if ($data['text_introduction']) { ?>
				<h1 id="uber-statement"><?php echo $data['text_introduction']; ?></h1>
				<?php } ?>
				
			</div>
	
		</div><!-- end .container -->
		
		<?php } else { ?>
		<?php } ?>
	
	</header><!-- end #header-global -->
	