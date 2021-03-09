<div class="motmot">
	<header>
		<nav  class="navbar navbar--secondary theme dark-jungle fixed-nav" data-t="navbar">
			<div class="padding-right-small padding-left-small">
				<div class="left hide-on-large-only">
					<i id="hamburger-button" class="mti-icon icon-menu grey silver-sand-text padding-left-medium mti-large cursor-pointer" data-t="navbar-hamburger-button"></i>
					<div id="hamburger-menu" class="hamburger-app" data-t="navbar-hamburger-menu-section">
						<div id="hamburger-overlay" class="hamburger-app__overlay medium-black-overlay container-fixed to-all"></div>
						<aside class="hamburger-app__menu theme dark-jungle container-fixed to-the-bottom to-the-top to-the-left">
							<nav class="padding-right-small padding-left-small padding-top-xlarge padding-bottom-xlarge">
								<ul class="nav grey nav-silver-sand-text nav--animation nav--secondary">
									<li class="nav__item hide-on-md-large-and-down">
										<a class="nav__link" href="#" data-t="navbar-country-contact-button">
											<span>Sales:</span>
											<span>00000000000</span>
										</a>
									</li>
									<li class="nav__item">
										<a class="nav__link js-sell-nav" href="#" data-t="navbar-sell-button">
											<i class="mti-icon icon-upload-to-cloud padding-xsmall" data-t="navbar-sell-button-icon"></i>
											<span data-t="navbar-sell-button-text">Sell</span>
										</a>
									</li>
									<li class="nav__item">
										<a class="nav__link js-pricing-nav" href="#" data-t="navbar-pricing-button"
										data-ingest-clicktype="pricing">
										<i class="mti-icon icon-label" data-t="navbar-pricing-button-icon"></i>
										<span data-t="navbar-pricing-button-text">Pricing</span>
									</a>
								</li>
							</ul>
							<div class="padding-xsmall"></div>
							<div class="padding-left-small">
								<!--only display license badgesimg if logged in user with outstanding credit/quota-->
							</div>
							<ul class="nav grey nav-silver-sand-text nav--animation nav--secondary">
								<li class="nav__item">
									<a style="padding-right: 166px;" class="nav__link" href="{{route('photo')}}" data-t="navbar-photos-lp-button" data-ingest-clicktype="photos">Photos</a>
								</li>

								<li class="nav__item">
									<a style="padding-right: 166px;" class="nav__link" href="{{route('illustration')}}" data-t="navbar-illustrations-lp-button" data-ingest-clicktype="illustrations">Illustrations</a>
								</li>
								<li class="nav__item">
									<a style="padding-right: 166px;" class="nav__link" href="{{route('free')}}" data-t="navbar-vectors-lp-button" data-ingest-clicktype="vectors">Vectors</a>
								</li>

								<li class="nav__item">
									<a style="padding-right: 166px;" class="nav__link" href="{{route('free')}}" data-t="navbar-vectors-lp-button" data-ingest-clicktype="vectors">Logo </a>
								</li>

								<li class="nav__item">
									<a style="padding-right: 166px;" class="nav__link" href="{{route('free')}}" data-t="navbar-vectors-lp-button" data-ingest-clicktype="vectors">Content</a>
								</li>
								
								<li class="nav__item container-relative nav__more" data-id="more">
									<a class="nav__link" data-t="navbar-more-button">
										More
										<i class="mti-icon icon-arrow-down grey silver-sand-text"></i>
									</a>
									<span class="container-absolute to-the-left header-dropdown-container">
										<ul class="theme dark-jungle border-1 border-solid grey-gravel-border border-radius-4">
											<li class="nav__item float-none">
												<a class="nav__link container-block padding-left-small padding-right-small" href="{{route('three_d_view')}}" data-t="navbar-3d-lp-button" data-ingest-clicktype="3d">3D</a>
											</li>
											<li class="nav__item float-none">
												<a class="nav__link container-block padding-left-small padding-right-small" href="{{route('editorial')}}" data-t="navbar-editorial-lp-button" data-ingest-clicktype="editorial">Editorial</a>
											</li>
										</ul>
									</span>
								</li>
							</ul>

							<div  class="dropdown_min_window select-box input-box__select-box ">
								<select style="line-height: initial;font-size: inherit;;color: black;" class="js-filter-view-type" data-t="filter-asset-type">
									<option selected="selected" value="all" data-ingest-clicktype="all-asset-dropdown-selection" data-t="all-asset-dropdown-selection">
										Tools
									</option>
									<option value="images" >
										Images
									</option>
									<option value="videos" data-ingest-clicktype="videos-asset-dropdown-selection" data-t="videos-asset-dropdown-selection">
										Videos
									</option>
									<option value="audio" data-ingest-clicktype="audio-asset-dropdown-selection" data-t="audio-asset-dropdown-selection">
										Audio
									</option>
									<option value="templates" data-ingest-clicktype="templates-asset-dropdown-selection" data-t="templates-asset-dropdown-selection">
										Templates
									</option>
									
								</select>
							</div>

						</nav>
					</aside>
				</div>
			</div>
			<div class="left hide-on-med-and-down">

				

				<ul class="nav nav--inline nav-silver-sand-text nav--animation nav--secondary">
					

					<li class="nav__item ">
						<a class="nav__link" href="{{route('photo')}}" data-t="navbar-photos-lp-button" 
						data-ingest-clicktype="photos">Photos</a>
					</li>
					<li class="nav__item">
						<a class="nav__link" href="{{route('illustration')}}" data-t="navbar-illustrations-lp-button" data-ingest-clicktype="illustrations">Illustrations</a>
					</li>
					<li class="nav__item">
						<a class="nav__link" href="{{route('vector')}}" data-t="navbar-vectors-lp-button" data-ingest-clicktype="vectors">Vectors</a>
					</li>
					
					<li class="nav__item">
						<a class="nav__link" href="{{route('free')}}" data-t="navbar-vectors-lp-button" data-ingest-clicktype="vectors">Logo </a>
					</li>

					<li class="nav__item">
						<a class="nav__link" href="{{route('free')}}" data-t="navbar-vectors-lp-button" data-ingest-clicktype="vectors">Content</a>
					</li>
					
					<li class="nav__item container-relative nav__more" data-id="more">
						<a class="nav__link" data-t="navbar-more-button">
							More
							<i class="mti-icon icon-arrow-down grey silver-sand-text"></i>
						</a>
						<span class="container-absolute to-the-left header-dropdown-container">
							<ul class="theme dark-jungle border-1 border-solid grey-gravel-border border-radius-4">
								<li class="nav__item float-none">
									<a class="nav__link container-block padding-left-small padding-right-small" href="{{route('three_d_view')}}" data-t="navbar-3d-lp-button" data-ingest-clicktype="3d">3D</a>
								</li>
								<li class="nav__item float-none">
									<a class="nav__link container-block padding-left-small padding-right-small" href="{{route('editorial')}}" data-t="navbar-editorial-lp-button" data-ingest-clicktype="editorial">Editorial</a>
								</li>
							</ul>
						</span>
					</li>
				</ul>
			</div>

			
			<div  class="dropdown_max_window select-box input-box__select-box ">
				<select style="line-height: initial;font-size: inherit;color: black;" class="js-filter-view-type" data-t="filter-asset-type">
					<option selected="selected" value="all" data-ingest-clicktype="all-asset-dropdown-selection" data-t="all-asset-dropdown-selection">
						Tools
					</option>
					<option value="images">
						File Converter
					</option>
					<option value="videos">
						Image Resizer
					</option>
					<option value="audio">
						Collage Maker
					</option>
					<option value="templates">
						Color Schemes
					</option>
					<option value="3d">
						Cloud Plugins
					</option>
					
				</select>
			</div>
			

			<div class="right">
				<ul class="nav nav--inline nav-silver-sand-text nav--animation nav--secondary">
					<li class="nav__item">
						<a class="nav__link" href="" target="_blank" data-ingest-clicktype="cc-icon" data-t="navbar-creative-cloud-link">
							<i class="mti-icon mti-large icon-creative-cloud" data-t="navbar-creative-cloud-button"></i>
						</a>
					</li>
				</ul>
			</div>

			<div class="right">
				<ul id="sign-in-link" class="nav nav--inline nav-silver-sand-text nav--animation nav--secondary">
					<li class="nav__item">
						<a style="display:block; color:black;" href="{{route('login')}}">Sign In</a>
					</li>
				</ul>
			</div>

			<div style="margin-right: 21px;" class="right">
				<ul id="sign-in-link" class="nav nav--inline nav-silver-sand-text nav--animation nav--secondary">
					<li class="nav__item">
						<a style="display:block; color:black;" class="in_small_window" href="{{route('cart.index')}}">
							<i class="fas fa-cart-plus "></i>
							{{ \Cart::getTotalQuantity()}}
						</a>
					</li>
				</ul>
			</div>

			

			<div style="display:contents" class="overflow-hidden">
				<div class="right hide-on-large-and-down">
					<ul class="nav nav--inline nav-silver-sand-text nav--animation nav--secondary">
						<li class="nav__item hide-on-md-large-and-down">
							<a class="nav__link" href="#" data-t="navbar-country-contact-button">
								<span>Sales:</span>
								<span>2222222222</span>
							</a>
						</li>
						<li class="nav__item">
							<a class="nav__link js-sell-nav" href="#" data-t="navbar-sell-button">
								<i class="mti-icon icon-upload-to-cloud padding-xsmall" data-t="navbar-sell-button-icon"></i>
								<span data-t="navbar-sell-button-text">Sell</span>
							</a>
						</li>
						<li class="nav__item">
							<a class="nav__link js-pricing-nav" href="#" data-t="navbar-pricing-button"
							data-ingest-clicktype="pricing">
							<i class="mti-icon icon-label" data-t="navbar-pricing-button-icon"></i>
							<span data-t="navbar-pricing-button-text">Pricing</span>
						</a>
					</li>
				</ul>
			</div>

			<div class="right hide-on-md-xlarge-and-down">
				<div class="padding-right-medium">
					<ul id="memberLicensesCounter" class="nav nav--inline nav-silver-sand-text nav--secondary" data-t="member-licenses-counter">
					</ul>
				</div>
			</div>
		</div>

		<div class="h-align" data-t="center-stock-logo-section">
			<a href="{{route('home')}}" data-t="stock-logo-link">
				<h1 data-is-hidden="true">E-PHOTOS</h1>
				<img src="{{asset('public/front/images/E-Photos.png')}}" alt="Picture" width="140px" class="hide-on-large-only hide-on-small-only" data-t="stock-text-logo"/>
				<img src="{{asset('public/front/images/logo1.jpg')}}" alt="Picture" width="36" class="hide-on-med-and-up" data-t="stock-logo"/>
			</a>
		</div>

	</div>
</nav>

</header>

<div id="js-header-notification" class="blue crayola animated fade-in" data-state="hidden" >
	<div class="padding-small">
		<span class="white-text">
			A link to set your password has been sent to:
			<strong id="js-header-notification-email"></strong>
			To access your purchases in the future you will need a password.
		</span>
	</div>
</div>

<div id="migration-notification" class="blue bleu-de-france animated fade-in" data-state="hidden">
	<div class="padding-medium">
		<div class="hide-on-med-and-down">
			<div class="row-flex align-items-center">
				<div class="column-flex-8">
					<div class="column-flex align-items-center">
						<span class="icon-infofull white-text margin-top-xsmall align-self-baseline"></span>
						<span class="white-text margin-left-small">
							We found a license history, credits, or subscription plan in your personal profile. Would you like to transfer them to your business profile?
						</span>
					</div>
				</div>
				<div class="column-flex-4">
					<div class="column-flex align-items-center justify-flex-end">
						<a class="js-migration-notification-dismiss-link button button--quiet white-text no-wrap">
							Don&#x27;t show again
						</a>
						<div class="margin-left-xlarge">
							<a class="js-migration-notification-get-started-btn button button--dialog no-wrap">
								Get started
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="hide-on-large-only">
			<div class="flex-vertical">
				<div class="row-flex align-items-center flex-on-small-and-down">
					<span class="icon-infofull white-text margin-top-xsmall align-self-baseline"></span>
					<span class="white-text margin-left-small">
						We found a license history, credits, or subscription plan in your personal profile. Would you like to transfer them to your business profile?
					</span>
				</div>
				<div class="row-flex align-items-center flex-on-small-and-down justify-flex-end margin-top-medium">
					<a class="js-migration-notification-dismiss-link button button--quiet white-text no-wrap">
						Don&#x27;t show again
					</a>
					<div class="margin-left-xlarge">
						<a class="js-migration-notification-get-started-btn button button--dialog no-wrap">
							Get started
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


</div>
