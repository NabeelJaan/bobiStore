<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- Google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

	<div class="topBar-wrapper bg-darkBlue py-2 border-b border-white/10">

		<div class="container mx-auto">
			<div class="topBar-inner md:flex justify-between">
				<!-- Language side -->
				<div class="languages">
					<a class="text-white text-xs font-medium font-poppins py-2 px-3 border-x border-white/10" href="#">ENGLISH</a>
					<a class="text-white text-xs font-normal font-poppins py-2 px-3 border-r border-white/10" href="#">CONTURY</a>
					<span class="text-xs text-Gray font-poppins font-medium ml-5">FREE SHIPPING FOR ALL ORDERS OF $150</span>
				</div>
				<!-- Social icon side -->
				<div class="site-contact-info md:flex">

					<div class="s-icon flex items-center">
						<span class="mr-1">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="17px" height="17px">
								<path fill="#ffffff" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
							</svg>
						</span>

						<span class="mr-5">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="17px" height="17px">
								<path fill="#ffffff" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
							</svg>
						</span>
						
					</div>

					<div class="site-links">
						<a class="text-xs text-white font-medium font-poppins py-2 px-3 border-x border-white/10" href="#">NEWSLETTER</a>
						<a class="text-xs text-white font-medium font-poppins py-2 px-3 border-r border-white/10" href="#">CONTACTUS</a>
						<a class="text-xs text-white font-medium font-poppins py-2 px-3 border-r border-white/10" href="#">FAQs</a>
					</div>

				</div>

			</div>
		</div>

	</div>

	<!-- Top end -->

	<div class="search-wrapper bg-darkBlue py-8">
		<div class="container mx-auto">
			<div class="md:flex md:items-center md:justify-between">

				<div>
					
					<?php if ( has_custom_logo() ) { ?>
						<?php the_custom_logo(); ?>
					<?php } else { ?>
						<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-bold text-white text-xl uppercase mr-[50px]">
							<?php echo get_bloginfo( 'name' ); ?>
						</a>


					<?php } ?>
				</div>

				<div class="searchBar">

					<form>
						<div class="flex">
							<label for="search-dropdown" class="mb-2 text-sm font-medium rounded-r-full text-gray-900 sr-only dark:text-white">Your Email</label>
							<button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-full hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">All categories 
								<svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
								</svg>
							</button>
							<div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-full shadow w-44 dark:bg-gray-700" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(897px, 5637px, 0px);">
								<ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
								<li>
									<button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
								</li>
								<li>
									<button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
								</li>
								<li>
									<button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
								</li>
								<li>
									<button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
								</li>
								</ul>
							</div>
							<div class="relative w-full">
								<input type="search" id="search-dropdown" class="block text-left py-2.5 px-32 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-full border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search for products" required>
								<button type="submit" class="absolute top-0 right-0 p-[11px] text-sm font-medium text-white bg-darkOrange rounded-r-full">
									<svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
									<span class="sr-only">Search for products</span>
								</button>
							</div>
						</div>
					</form>

				</div>

				<div class="woo-icon flex items-center">

					<span class="mr-4">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" hight="20px" width="20px">
							<path fill="#ffffff" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"/>
						</svg>
					</span>

					<span class="text-white font-poppins font-medium mr-4">$0.00</span>

					<span>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" hight="20px" width="20px">
							<path fill="#ffffff" d="M352 160v-32C352 57.42 294.579 0 224 0 153.42 0 96 57.42 96 128v32H0v272c0 44.183 35.817 80 80 80h288c44.183 0 80-35.817 80-80V160h-96zm-192-32c0-35.29 28.71-64 64-64s64 28.71 64 64v32H160v-32zm160 120c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zm-192 0c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24z"/>
						</svg>
					</span>

				</div>
			</div>
		</div>
	</div>


	<!-- Header start -->
	<header>

		<div class="mx-auto container">
			<div class="lg:flex lg:items-center py-3 ">
				<div class="flex justify-between items-center">


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
						'li_class'        => 'lg:mx-3 pl-7 text-lightBlack text-[13px] font-bold hover:text-[#f4a51c]',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
		</div>

	</header>
