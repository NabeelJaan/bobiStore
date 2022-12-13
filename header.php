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
					<a class="text-white text-xs font-medium py-2 px-3 border-x border-white/10" href="#">ENGLISH</a>
					<a class="text-white text-xs font-normal py-2 px-3 border-r border-white/10" href="#">CONTURY</a>
					<span class="text-xs text-Gray font-medium ml-5">FREE SHIPPING FOR ALL ORDERS OF $150</span>
				</div>
				<!-- Social icon side -->
				<div class="site-contact-info md:flex">

					<div class="s-icon md:flex">
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="20px" height="20px">
								<path fill="#ffffff" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
							</svg>
						</span>

						<span>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20px" height="20px">
								<path fill="#ffffff" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
							</svg>
						</span>
						
					</div>

					<div class="site-links">
						<a class="text-xs text-white font-medium py-2 px-3 border-x border-white/10" href="#">NEWSLETTER</a>
						<a class="text-xs text-white font-medium py-2 px-3 border-r border-white/10" href="#">CONTACTUS</a>
						<a class="text-xs text-white font-medium py-2 px-3 border-r border-white/10" href="#">FAQs</a>
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

				<div class="woo-icon">
					<span>
					
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
