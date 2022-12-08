<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>


	<div class="topBar-wrapper bg-[#092143] py-2 border-b">

		<div class="container mx-auto">
			<div class="topBar-inner md:flex justify-between">
				<!-- Language side -->
				<div class="languages">
					<a class="text-xs text-white font-medium py-2 px-3 border-x" href="#">ENGLISH</a>
					<a class="text-xs text-white font-normal py-2 px-3 border-r" href="#">CONTURY</a>
					<span class="text-xs text-Gray font-medium ml-5">FREE SHIPPING FOR ALL ORDERS OF $150</span>
				</div>
				<!-- Social icon side -->
				<div class="site-contact-info">
					<div class="s-icon">
						<span><i class="fa-brands fa-facebook-f"></i></span>
						<span><i class="fa-brands fa-twitter"></i></span>
					</div>
					<div class="site-links">
						<a class="text-xs text-white font-medium py-2 px-3 border-x" href="#">NEWSLETTER</a>
						<a class="text-xs text-white font-medium py-2 px-3 border-r" href="#">CONTACTUS</a>
						<a class="text-xs text-white font-medium py-2 px-3 border-r" href="#">FAQs</a>
					</div>
				</div>

			</div>
		</div>

	</div>

	<!-- Top end -->

	<div class="search-wrapper bg-darkBlue py-8">
		<div class="container mx-auto">
			<div class="md:flex md:items-center md:justify-between">
				<div class="site-logo">
					<a href=""><img src="wp-content/uploads/2022/12/download.svg" alt=""></a>
				</div>

				<div class="searchBar">

				</div>

				<div class="woo-icon">

				</div>
			</div>
		</div>
	</div>


	<!-- Header start -->
	<header>

		<div class="mx-auto container">
			<div class="lg:flex lg:items-center py-3 ">
				<div class="flex justify-between items-center">
					<div>
						<div class="categories-wrapper">
							<a class="text-lightBlack text-[13px] font-bold border-x py-4 pl-5 pr-24" href="#">BROWSE CATEGORIES</a>
						</div>
						<!-- <?php if ( has_custom_logo() ) { ?>
                            <?php the_custom_logo(); ?>
						<?php } else { ?>
							<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-bold text-lg uppercase mr-[50px]">
								<?php echo get_bloginfo( 'name' ); ?>
							</a>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo( 'description' ); ?>
							</p>

						<?php } ?>
					</div> -->

					<div class="lg:hidden">
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
							<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
									<g id="icon-shape">
										<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
											  id="Combined-Shape"></path>
									</g>
								</g>
							</svg>
						</a>
					</div>
				</div>

				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
						'menu_class'      => 'lg:flex lg:-mx-4',
						'theme_location'  => 'primary',
						'li_class'        => 'lg:mx-3 pl-7 text-lightBlack text-[13px] font-bold hover:text-darkOrange',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
		</div>

	</header>
