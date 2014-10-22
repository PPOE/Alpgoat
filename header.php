<!DOCTYPE HTML>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<!-- Mobiel Detect -->
	<?php $detect = new Mobile_Detect(); ?>

	<!-- load the Theme Options -->
	<?php $options = get_option('scapegoat_theme_options'); ?>

	<head profile="http://gmpg.org/xfn/11">

		<title><?php wp_title(' - ', true, 'left'); ?></title>

		<!-- ♥ ♥ ♥ Oh nice, you take a look at the sourcecode. I'm flattered. ♥ ♥ ♥ -->
		<meta name="author" content="Peter Amende - Hacked by Fuchsy" />
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="google-site-verification" content="NFSfRIacLcuJDsTWS8rGWaSnSx5Qtvpxc9BfEw8wSmg" />

		<!-- Stylesheet -->
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" media="screen" />
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/plugins.css" media="screen" />
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/print.css" media="print" />
		<!--[if IE]>
			<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/ie.css" media="screen" />
		<![endif]-->

		<!-- Favicon -->
		<link rel="Shortcut Icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />

		<!-- Touch Icon -->
		<?php if($options['icon']) : ?>
			<link rel="apple-touch-icon-precomposed" href="<?php echo $options['icon']; ?>"/>
		<?php else : ?>
			<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_directory'); ?>/images/touch-icon.png"/>
		<?php endif; ?>

		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss2_url'); ?>">
		<link rel="canonical" href="<?php bloginfo('url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="index" title="<?php bloginfo('description'); ?>" href="<?php bloginfo('url'); ?>" />

		<script type="text/javascript"> // added by c3o
		function shareLinks(data) {
		  if (!data) return;
		  var url = data.url ? encodeURIComponent(data.url) : encodeURIComponent(document.location.href);
		  var title = data.title ? encodeURIComponent(data.title) : encodeURIComponent(document.title);
		  var text = data.text ? encodeURIComponent(data.text) : null;
		  var longText = data.longText ? encodeURIComponent(data.longText) : null;
		  var icon = data.icon ? encodeURIComponent(data.icon) : null;

		  var twitterAccount = 'piratenparteiat';
		  var twitterAccountDesc = encodeURIComponent('Piratenpartei');
		  var twitterUrl = 'https://twitter.com/intent/tweet?original_referer='+url+'%26related='+twitterAccount+'%3A'+twitterAccountDesc+'&text='+text+'&url='+url;

		  var facebookAppID = 217938115051868;
		  var facebookUrl = 'https://www.facebook.com/dialog/feed?link='+url+'&picture='+icon+'&name='+title+'&caption='+text+'&description='+longText+'&e2e=%7B%7D&app_id='+facebookAppID+'&locale=en_US&sdk=joey&display=popup&next='+url;
  
		  if (document.getElementsByClassName) {
		    var links = document.getElementsByClassName('share_twitter');
		    for (var i = 0; i < links.length; i++) {
		      links[i].href = twitterUrl;  
		    }
		    var links = document.getElementsByClassName('share_facebook');
		    for (var i = 0; i < links.length; i++) {
		      links[i].href = facebookUrl;  
		    }
		  }
		}
		</script>

		<?php if($options['style-option'] == 'show-special-1') : ?>
			<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/special-1.css" media="screen" />
			<?php if($options['special-1-bg-option'] == 'special-1-bg-1') : ?>
				<style>#special-header {background-image: url("<?php bloginfo('template_directory'); ?>/images/special-1-bg-blue.jpg");background-color:#5cafc6;}</style>
			<?php elseif($options['special-1-bg-option'] == 'special-1-bg-2') : ?>
				<style>#special-header {background-image: url("<?php bloginfo('template_directory'); ?>/images/special-1-bg-orange.jpg");background-color:#f80;}</style>
			<?php elseif($options['special-1-bg-option'] == 'special-1-bg-3') : ?>
				<style>#special-header {background-image: url("<?php bloginfo('template_directory'); ?>/images/special-1-bg-violet.jpg");background-color:##4B2A91;}</style>
			<?php endif; ?>
		<?php elseif($options['style-option'] == 'show-special-2') : ?>
			<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/special-2.css" media="screen" />
			<?php if($options['special-2-bg-option'] == 'special-2-bg-1') : ?>
				<style>#special-header {background-image: url("<?php bloginfo('template_directory'); ?>/images/special-1-bg-blue.jpg");background-color:#5cafc6;}</style>
			<?php elseif($options['special-2-bg-option'] == 'special-2-bg-2') : ?>
				<style>#special-header {background-image: url("<?php bloginfo('template_directory'); ?>/images/special-1-bg-orange.jpg");background-color:#f80;}</style>
			<?php elseif($options['special-2-bg-option'] == 'special-2-bg-3') : ?>
				<style>#special-header {background-image: url("<?php bloginfo('template_directory'); ?>/images/special-1-bg-violet.jpg");background-color:##4B2A91;}</style>
			<?php endif; ?>
		<?php endif; ?>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="main-nav-outside">
			<div id="main-nav-inside" class="inside">
				<nav id="main-nav" role="navigation">
					<h2 id="nav-title" class="visuallyhidden"><?php _e('Navigation','scapegoat'); ?></h2>
					<a href="#main-nav" class="menu-toggle"><?php _e('Navigation','scapegoat'); ?></a>
					<?php wp_nav_menu(array('theme_location' => 'header', 'fallback_cb' => 'fallback_menu', 'walker' => new My_Walker_Nav_Menu())); ?>
					<div class="clear"></div>
				</nav><!-- main-nav -->
			</div><!-- main-nav-inside -->
		</div><!-- main-nav-outside -->

		<?php if($options['style-option'] == 'show-special-1') : ?>
			<div id="special-header" role="banner">
				<header id="special-header-inside">
					<figure id="special-logo">
						<?php if($options['special-1-logo']) : ?>
							<a title="<?php bloginfo('name'); ?>" href="<?php bloginfo('url'); ?>">
								<img src="<?php echo $options['special-1-logo']; ?>" alt="<?php bloginfo('name'); ?>" />
							</a>
						<?php else : ?>
							<span id="special-logo-text">
								<a title="<?php bloginfo('name'); ?>" href="<?php bloginfo('url'); ?>">
									<?php bloginfo('name'); ?>
								</a>
							</span>
						<?php endif; ?>
					</figure><!-- logo -->
					<figure id="special-portrait">
						<?php if($options['special-1-portrait']) : ?>
							<img src="<?php echo $options['special-1-portrait']; ?>" />
						<?php endif; ?>
					</figure>
				</header>
			</div>
		<?php elseif($options['style-option'] == 'show-special-2') : ?>
			<div id="special-header" role="banner">
				<header id="special-header-inside">
					<figure id="special-logo">
						<?php if($options['special-2-logo']) : ?>
							<a title="<?php bloginfo('name'); ?>" href="<?php bloginfo('url'); ?>">
								<img src="<?php echo $options['special-2-logo']; ?>" alt="<?php bloginfo('name'); ?>" />
							</a>
						<?php else : ?>
							<span id="special-logo-text">
								<a title="<?php bloginfo('name'); ?>" href="<?php bloginfo('url'); ?>">
									<?php bloginfo('name'); ?>
								</a>
							</span>
						<?php endif; ?>
					</figure><!-- logo -->
					<div id="description-outer">
						<div id="description-inner">
							<aside id="header-social-links">
								<?php if($options['rss']) : ?>
									<a target="_blank" class="social-icon rss" href="<?php echo $options['rss']; ?>" title="Feed">Feed</a>
								<?php else : ?>
									<a target="_blank" class="social-icon rss" href="<?php bloginfo('rss2_url'); ?>" title="Feed">Feed</a>
								<?php endif; ?>
								<?php if($options['twitter']) : ?><a target="_blank" class="social-icon twitter" href="<?php echo $options['twitter']; ?>" title="Twitter">Twitter</a><?php endif; ?>
								<?php if($options['facebook']) : ?><a target="_blank" class="social-icon facebook" href="<?php echo $options['facebook']; ?>" title="Facebook">Facebook</a><?php endif; ?>
								<?php if($options['google']) : ?><a target="_blank" class="social-icon google" href="<?php echo $options['google']; ?>" title="Google +">Google +</a><?php endif; ?>
								<?php if($options['youtube']) : ?><a target="_blank" class="social-icon youtube" href="<?php echo $options['youtube']; ?>" title="Youtube">Youtube</a><?php endif; ?>
								<?php if($options['mail']) : ?><a target="_blank" class="social-icon mail" href="<?php echo $options['mail']; ?>" title="Mail">Mail</a><?php endif; ?>
								<?php if($options['podcast']) : ?><a target="_blank" class="social-icon podcast" href="<?php echo $options['podcast']; ?>" title="Podcast">Podcast</a><?php endif; ?>
							</aside>
							<span id="description">
								<?php bloginfo('description'); ?>
							</span>
						</div><!-- discription-inner -->
					</div><!-- discription-outer -->
					<div class="clear"></div>
					<h2 id="header-title" class="visuallyhidden"><?php bloginfo('name'); ?></h2>
				</header><!-- header-inside -->
			</div>
		<?php else : ?>
			<div id="header-outside" role="banner">
				<header id="header-inside" class="inside">
					<figure id="logo">
						<?php if($options['logo']) : ?>
							<a title="<?php bloginfo('name'); ?>" href="<?php bloginfo('url'); ?>">
								<img src="<?php echo $options['logo']; ?>" alt="<?php bloginfo('name'); ?>" />
							</a>
						<?php else : ?>
							<span id="logo-text">
								<a title="<?php bloginfo('name'); ?>" href="<?php bloginfo('url'); ?>">
									<?php bloginfo('name'); ?>
								</a>
							</span>
						<?php endif; ?>
					</figure><!-- logo -->
					<div id="description-outer">
						<div id="description-inner">
							<aside id="header-social-links">
								<?php if($options['rss']) : ?>
									<a target="_blank" class="social-icon rss" href="<?php echo $options['rss']; ?>" title="Feed">Feed</a>
								<?php else : ?>
									<a target="_blank" class="social-icon rss" href="<?php bloginfo('rss2_url'); ?>" title="Feed">Feed</a>
								<?php endif; ?>
								<?php if($options['twitter']) : ?><a target="_blank" class="social-icon twitter" href="<?php echo $options['twitter']; ?>" title="Twitter">Twitter</a><?php endif; ?>
								<?php if($options['facebook']) : ?><a target="_blank" class="social-icon facebook" href="<?php echo $options['facebook']; ?>" title="Facebook">Facebook</a><?php endif; ?>
								<?php if($options['google']) : ?><a target="_blank" class="social-icon google" href="<?php echo $options['google']; ?>" title="Google +">Google +</a><?php endif; ?>
								<?php if($options['youtube']) : ?><a target="_blank" class="social-icon youtube" href="<?php echo $options['youtube']; ?>" title="Youtube">Youtube</a><?php endif; ?>
								<?php if($options['mail']) : ?><a target="_blank" class="social-icon mail" href="<?php echo $options['mail']; ?>" title="Mail">Mail</a><?php endif; ?>
								<?php if($options['podcast']) : ?><a target="_blank" class="social-icon podcast" href="<?php echo $options['podcast']; ?>" title="Podcast">Podcast</a><?php endif; ?>
							</aside>
							<span id="description">
								<?php bloginfo('description'); ?>
							</span>
						</div><!-- discription-inner -->
					</div><!-- discription-outer -->
					<div class="clear"></div>
				</header><!-- header-inside -->
			</div><!-- header-outside -->
		<?php endif; ?>

		
		<?php if($options['style-option'] != 'show-special-1') : ?>
			<!-- Mobile Query -->
			<?php if(!$detect->isMobile() || $detect->isTablet()) : ?>
				<!-- Featured Container for Frontpage Slider and "Sidebar" -->
				<?php if (is_front_page()) : ?>
					<?php include('slider.php'); ?>
				<?php endif; ?>
				<!-- Featured Container End -->
			<?php endif; ?>
			<!-- Mobile Query -->
		<?php endif; ?>

		<div id="wrapper-outside">
			<div id="wrapper-inside" class="inside">