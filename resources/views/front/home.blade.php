@extends('front.master.master')

@section('title')
E-PHOTOS
@endsection

@section('body')
<div class="view-container view-container--default motmot">
	<div class="container-relative in-front">
		<div class="overflow-hidden">
			<div class="mti-hero-image" >
				<picture>
					<source srcset="{{asset('public/front/images/home_bg.jpg')}}" type="image/webp" />
					<img data-t="main-header-hero-image" src="{{asset('public/front/images/home_bg.jpg')}}" class="mti-hero-image mti-hero-image--cover mti-hero-image--large js-hero-image-full container-full hidden">
				</picture>
			</div>
			<div
			class="mti-hero-image mti-hero-image--large js-hero-image blurry-image scaled-image"
			style="background-image: url('data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAEAA4DASIAAhEBAxEB/8QAFgABAQEAAAAAAAAAAAAAAAAAAAUG/8QAHxAAAQQCAgMAAAAAAAAAAAAAAQIDBBEABRJBFCFR/8QAFQEBAQAAAAAAAAAAAAAAAAAAAAL/xAAaEQACAgMAAAAAAAAAAAAAAAAAAUHwAjND/9oADAMBAAIRAxEAPwDPMznJC1eSht5uO3EbZbUKShPBJNVR9n6clanZTpmzlxZMt1caPZabNUjktVgGr6HeMYW1qwTyxdk//9k=');"></div>
		</div>
		<script>
			window.adobestock_heroImage.lazyLoadHeroImage(
				document.getElementsByClassName('js-hero-image')[0],
				document.getElementsByClassName('js-hero-image-full')[0]
				);
			</script>

			<div class="container-absolute to-all medium-black-overlay">
				<div class="padding-large">
					<div class="container-table container-full">
						<div class="container-table-cell">
							<div class="hide-on-med-and-down">
							<a class='logo_text' href="{{route('home')}}">
                            <img src="{{asset('public/front/images/E-Photos.png')}}" class="img-fluid" 
							style="width:188px; height:61px" alt="logo">
                            </a>
							</div>
						</div>
						<div class="container-table-cell container-absolute to-the-right margin-right-large margin-top-xsmall">
							<div id="portal-lib-dropdown" class="white-text">
								<div class="js-stock-portal-ssr transparent sc-kpOJdX dJEFiR react-spectrum-provider spectrum spectrum--light spectrum--medium white-text">
									<div class="sc-kGXeez fXwdhL libraries-dropdown">
										<div class="sc-gzVnrw ihHoGK">
											<button data-t="libraries-dropdown-my-libraries-button" class="sc-ifAKCX sc-htoDjs gbIrHD">
												<span data-t="libraries-dropdown-my-libraries-button-text" class="hide-on-small-and-down sc-dnqmqq lhWAdd">
													<span>My Libraries</span>
												</span>
												<span class="hide-on-med-and-up">
													<span class="sc-iwsKbI jmMPNn">
														<svg viewBox="0 0 36 36" focusable="false" aria-hidden="true" role="img" class="spectrum-Icon spectrum-Icon--sizeS" data-t="libraries-dropdown-mobile-label-icon">
															<path d="M33 6h-3V3a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v26a1 1 0 0 0 1 1h3v3a1 1 0 0 0 1 1h26a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1zM4 28V4h24v2H7a1 1 0 0 0-1 1v21zm28 4H8V8h14v14l4-3 4 3V8h2z"></path>
														</svg>
													</span>
												</span>
												<svg viewBox="0 0 36 36" focusable="false" aria-hidden="true" role="img" class="lib-dropdown-caret spectrum-Icon spectrum-Icon--sizeS" data-t="libraries-dropdown-down-arrow-icon">
													<path d="M8 14.02a2 2 0 0 1 3.411-1.411l6.578 6.572 6.578-6.572a2 2 0 0 1 2.874 2.773l-.049.049-7.992 7.984a2 2 0 0 1-2.825 0l-7.989-7.983A1.989 1.989 0 0 1 8 14.02z"></path>
												</svg>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="v-align container-full">
					<div class="padding-left-xlarge padding-right-xlarge padding-bottom-small">
						<div class="margin-bottom-xlarge center-align">
							<div class="container-max">
								<h1 class="no-margin">
									<span class="white-text text-xslarge light" data-t="main-header-title">Download instantly</span>
								</h1>

							</div>
						</div>
						<div class="padding-top-large">
							<form method="get" action="{{route('search')}}" class="js-search-form" data-ingest-workflow="stock-search">
								<input type="hidden" name="load_type" value="search" />
								<input type="hidden" name="native_visual_search" value="" class="js-clear-before-visual-search js-clear-after-visual-search">
								<input type="hidden" name="similar_content_id" value="" class="js-clear-before-visual-search js-clear-after-visual-search">
								<input type="hidden" name="is_recent_search" class="js-is-recent-search"/>
								<input type="hidden" name="search_type" value="usertyped" class="js-search-type"/>
								<div class="container-relative white hero-input-group">
									<div class="input-box" data-active="input">
										<div class="container-table">
											<div class="container-table-cell no-stretch">
												<div class="select-box input-box__select-box">
													<select class="js-filter-view-type" data-t="filter-asset-type">
														<option selected="selected" value="all" data-ingest-clicktype="all-asset-dropdown-selection" data-t="all-asset-dropdown-selection">
															All
														</option>
														@foreach( $category as $item )
														<option value="{{$item->slug}}" data-ingest-clicktype="images-asset-dropdown-selection" 
														data-t="images-asset-dropdown-selection">
															{{$item->category_name}}
														</option>
														@endforeach
													</select>
												</div>
											</div>
											<div class="container-table-cell container-full container-relative">
												<input name="k" class="js-search-text-input input--silent input--full light input--xlarge" type="text" placeholder="Search" data-t="search-form-text-input">
												<div class="js-search-autocomplete-container container-full container-absolute to-the-left" data-state="hidden">
													<div class="padding-top-small">
														<div class="container-relative">
															<div class="menu container-absolute container-full">
																<div class="text-regular">
																	<ul class="js-search-autocomplete-panel nav nav-heavy-metal-text nav--hover-white-smoke nav--tertiary"></ul>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="js-search-recent-container"></div>
											</div>
											<div class="container-table-cell no-stretch">
												<div class="padding-right-large">
													<i class="js-camera-icon mti-icon mti-2x mti-default-button icon-camera grey mountain-mist-text" data-t="search-bar-visual-search-icon"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>

					</div>
				</div>

			</div>
		</div>
		<div data-t="fmf-promo">
			<div id="fmf-promo" class="fmf-promo" data-t="fmf-promo" data-is-hidden="false" data-product-key="/Applications/StockSubSmallAnnual">
				<div class="hide-on-small-only">
					<div class="blue bleu-de-france">
						<div class="padding-left-xlarge padding-right-xlarge">
							<div class="padding-top-large padding-bottom-large">
								<div class="center-align">
									<div class="container-inline-block">
										<div class="container-table">
											<div class="container-table-cell">
												<span class="white-text text-large light" data="fmf-promo-text-long">Get 10 free E-PHOTOS images.</span>
											</div>
											<div class="container-table-cell">
												<div class="padding-left-large">
													<a href="" class="js-start-fmf button button--dialog"   data-t="fmf-call-to-action-long" data-product-key="/Applications/StockSubSmallAnnual" >See</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hide-on-med-and-up">
					<div class="center-align padding-top-large">
						<a href="" class="js-start-fmf button button--action"  data-t="fmf-call-to-action-short" data-product-key="/Applications/StockSubSmallAnnual">Get 10 free images.</a>
					</div>
				</div>
			</div>
		</div>


		<div class="grey white-smoke" data-t="discover-collections-section">
			<div class="padding-top-large"></div>
			<div class="center-align">
				<div class="padding-left-xlarge padding-right-xlarge">
					<h3 class="no-margin">
						<strong class="text-up text-sregular enhanced-tracking" data-t="discover-collections-title">Lorem, ipsum dolor.</strong>
					</h3>
					<div class="row">
						<div class="column on-small-10 on-small-offset-1 on-medium-8 on-medium-offset-2 on-large-4 on-large-offset-4">
							<p class="no-margin">
								<strong class="grey mountain-mist-text text-large light" data-t="discover-collections-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe perferendis repellendus inventore a?</strong>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="column on-small-12 on-medium-2 on-medium-offset-5">
							<div class="border-top-1 border-solid silver-sand-border margin-top-large"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="padding-medium">
				<div class="container-large-max padding-top-large">
					<div class="row with-gutter">
						@foreach( $product->shuffle() -> take(6) as $photo)
						<div class="column on-small-12 on-medium-6 on-large-4">
							<div class="padding-bottom-xlarge">
								<a style="" href="#" class="js-landing-page-analytics-link container-block card card--small card--shadow card--hoverable center-block white" data-t="discover-collections-card-1" data-ingest-clicktype="collection-card-1" data-ingest-card-title="Stock photos">
									<div class="card__image">
										<picture>
											<source srcset="{{asset('public/storage/uploads/image/water_mark')}}/{{ $photo -> image}}" type="image/webp" />
												<img style="height:280px" src="{{asset('public/storage/uploads/image/water_mark')}}/{{ $photo -> image}}" data-t="discover-collections-card-1-hero-image" />
											</picture>
										</div>
										<div class="card__content container-small-min-height">
											<h3 class="no-margin">
												<strong class="grey gravel-text" data-t="discover-collections-card-1-title">{{ $photo-> product_name }}</strong>
											</h3>
											<p class="no-margin"><span class="grey gravel-text" data-t="discover-collections-card-1-description">{{ $photo -> description }}</span></p>
										</div>
									</a>
								</div>
							</div>
							@endforeach

						</div>
					</div>
				</div>

				<div class="white" data-t="integration-section">
					<div class="padding-top-large"></div>
					<div class="padding-top-xlarge">
						<div class="center-align">
							<div class="padding-left-xlarge padding-right-xlarge">
								<div class="margin-bottom-large">
									<h3 class="no-margin">
										<span class="text-up text-sregular bold enhanced-tracking" data-t="integration-title">Work Faster</span>
									</h3>
								</div>

								<div class="margin-bottom-large">
									<p class="no-margin">
										<span class="grey mountain-mist-text text-large light" data-t="integration-description1">Find the perfect high-res, royalty-free, stock image to enhance your next creative project.</span>
									</p>
									<p class="no-margin">
										<span class="grey mountain-mist-text text-large light" data-t="integration-description2">Lorem ipsum dolor sit amet consectetur.</span>
									</p>
								</div>

								<div class="row">
									<div class="column on-small-12 on-medium-2 on-medium-offset-5">
										<div class="border-top-1 border-solid silver-sand-border"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="padding-top-large">
						<div class="padding-xlarge">
							<div class="container-max center-align">
								
								</div>
							</div>
						</div>

						<div class="padding-left-xlarge padding-right-xlarge">
							<div class="container-max">
								<div class="row">
									<div class="column on-small-12 on-large-4">
										<div class="padding-top-xlarge padding-bottom-large">
											<p class="no-margin">
												<span class="grey mountain-mist-text text-large light" data-t="integration-paragraph1-text">
												Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas quos nesciunt aut eaque ipsum,
												a cupiditate iure facilis dolore sint.
												</span>
											</p>
										</div>
									</div>
									<div class="column on-small-12 on-large-8">
										
										</div>
									</div>
								</div>
							</div>

							<div class="padding-large"></div>
							<div class="padding-top-xsmall"></div>
						</div>
						<div class="grey white-smoke" data-t="artist-section">
							<div class="center-align">
								<div class="padding-top-xlarge"></div>
								<div class="padding-top-large"></div>

								<div class="padding-right-xlarge padding-left-xlarge padding-bottom-medium">
									<h3 class="no-margin">
										<span class="text-sregular bold enhanced-tracking" data-t="artist-title">ARTISTS RULE</span>
									</h3>
									<p class="no-margin">
										<span class="grey mountain-mist-text text-large light" data-t="artist-description">Lorem ipsum dolor sit amet consectetur.</span>
									</p>
								</div>

								<div class="container-max">
									<div class="margin-bottom-xlarge">
										<div class="padding-right-xlarge padding-left-xlarge padding-bottom-medium">
											<div class="row">
												<div class="column on-small-12 on-medium-2 on-medium-offset-5">
													<div class="border-top-1 border-solid silver-sand-border"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="column on-small-12 on-medium-6 on-large-3">
											<div class="padding-bottom-xlarge" data-t="artist-1">
												<a href="#" data-ingest-clicktype="featured-contributor-1" data-ingest-contributor-name="Diversity Photos">
													<picture>
														<source srcset="{{asset('public/front/images/photographer.jpg')}}" type="image/webp" />
														<img style="width:100px;height:100px" src="{{asset('public/front/images/photographer.jpg')}}" class="circle responsive-img" data-t="artist-1-image" />
													</picture>
												</a>
												<div class="padding-top-medium">
													<a href="#" class="text-medium bold grey dove-text" data-t="artist-1-name" data-ingest-clicktype="featured-contributor-1" data-ingest-contributor-name="Diversity Photos">Diversity Photos</a>
												</div>
												<a href="#" class="grey dove-text" data-t="artist-1-contributor-type" data-ingest-clicktype="featured-contributor-1" data-ingest-contributor-name="Diversity Photos">Photographer</a>
											</div>
										</div>
										<div class="column on-small-12 on-medium-6 on-large-3">
											<div class="padding-bottom-xlarge" data-t="artist-1">
												<a href="#" data-ingest-clicktype="featured-contributor-1" data-ingest-contributor-name="Diversity Photos">
													<picture>
														<source srcset="{{asset('public/front/images/photographer.jpg')}}" type="image/webp" />
														<img style="width:100px;height:100px" src="{{asset('public/front/images/photographer.jpg')}}" class="circle responsive-img" data-t="artist-1-image" />
													</picture>
												</a>
												<div class="padding-top-medium">
													<a href="#" class="text-medium bold grey dove-text" data-t="artist-1-name" data-ingest-clicktype="featured-contributor-1" data-ingest-contributor-name="Diversity Photos">Diversity Photos</a>
												</div>
												<a href="#" class="grey dove-text" data-t="artist-1-contributor-type" data-ingest-clicktype="featured-contributor-1" data-ingest-contributor-name="Diversity Photos">Photographer</a>
											</div>
										</div>
										<div class="column on-small-12 on-medium-6 on-large-3">
											<div class="padding-bottom-xlarge" data-t="artist-1">
												<a href="#" data-ingest-clicktype="featured-contributor-1" data-ingest-contributor-name="Diversity Photos">
													<picture>
														<source srcset="{{asset('public/front/images/photographer.jpg')}}" type="image/webp" />
														<img style="width:100px;height:100px" src="{{asset('public/front/images/photographer.jpg')}}" class="circle responsive-img" data-t="artist-1-image" />
													</picture>
												</a>
												<div class="padding-top-medium">
													<a href="#" class="text-medium bold grey dove-text" data-t="artist-1-name" data-ingest-clicktype="featured-contributor-1" data-ingest-contributor-name="Diversity Photos">Diversity Photos</a>
												</div>
												<a href="#" class="grey dove-text" data-t="artist-1-contributor-type" data-ingest-clicktype="featured-contributor-1" data-ingest-contributor-name="Diversity Photos">Photographer</a>
											</div>
										</div>
										<div class="column on-small-12 on-medium-6 on-large-3">
											<div class="padding-bottom-xlarge" data-t="artist-1">
												<a href="#" data-ingest-clicktype="featured-contributor-1" data-ingest-contributor-name="Diversity Photos">
													<picture>
														<source srcset="{{asset('public/front/images/photographer.jpg')}}" type="image/webp" />
														<img style="width:100px;height:100px" src="{{asset('public/front/images/photographer.jpg')}}" class="circle responsive-img" data-t="artist-1-image" />
													</picture>
												</a>
												<div class="padding-top-medium">
													<a href="#" class="text-medium bold grey dove-text" data-t="artist-1-name" data-ingest-clicktype="featured-contributor-1" data-ingest-contributor-name="Diversity Photos">Diversity Photos</a>
												</div>
												<a href="#" class="grey dove-text" data-t="artist-1-contributor-type" data-ingest-clicktype="featured-contributor-1" data-ingest-contributor-name="Diversity Photos">Photographer</a>
											</div>
										</div>


									</div>

									<div class="padding-bottom-medium">
										<div class="padding-bottom-medium padding-top-medium">
											<span class="grey mountain-mist-text text-large light" data-t="artist-contributors-title">Earn royalties doing what you love</span>
										</div>
										<div class="padding-bottom-small">
											<a href="#" class="button button--action button--silent" data-t="artist-contributors-button-text" data-ingest-clicktype="become-a-contributor">See</a>
										</div>
									</div>
								</div>
								<div class="padding-top-large"></div>
							</div>
						</div>
						<div class="grey gravel" data-t="categories-section">
							<div class="padding-xlarge">
								<div class="container-max">
									<div class="row">
										<div class="column on-small-12 on-medium-12 on-large-9">
											<div class="margin-bottom-xlarge">
												<h1 class="no-margin">
													<span class="white-text text-large light" data-t="categories-title">Search smarter</span>
												</h1>
												<p class="no-margin">
													<i class="white-text light" data-t="categories-description">Check out these popular categories.</i>
												</p>
											</div>
											<div class="margin-bottom-xlarge">
												<div class="container-table container-full">
													<div class="container-table-cell">
														<div class="row">
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-1">
																				<span class="text-sregular light" data-t="categories-item-1">Animals</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-2">
																				<span class="text-sregular light" data-t="categories-item-2">Buildings and Architecture</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-3">
																				<span class="text-sregular light" data-t="categories-item-3">Business</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-4">
																				<span class="text-sregular light" data-t="categories-item-4">Drinks</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-5">
																				<span class="text-sregular light" data-t="categories-item-5">The Environment</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-6">
																				<span class="text-sregular light" data-t="categories-item-6">States of Mind</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-7">
																				<span class="text-sregular light" data-t="categories-item-7">Food</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-8">
																				<span class="text-sregular light" data-t="categories-item-8">Graphic Resources</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-9">
																				<span class="text-sregular light" data-t="categories-item-9">Hobbies and Leisure</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-10">
																				<span class="text-sregular light" data-t="categories-item-10">Industry</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-11">
																				<span class="text-sregular light" data-t="categories-item-11">Landscapes</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-12">
																				<span class="text-sregular light" data-t="categories-item-12">Lifestyle</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-13">
																				<span class="text-sregular light" data-t="categories-item-13">People</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-14">
																				<span class="text-sregular light" data-t="categories-item-14">Plants and Flowers</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-15">
																				<span class="text-sregular light" data-t="categories-item-15">Culture and Religion</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-16">
																				<span class="text-sregular light" data-t="categories-item-16">Science</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-17">
																				<span class="text-sregular light" data-t="categories-item-17">Social Issues</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-18">
																				<span class="text-sregular light" data-t="categories-item-18">Sports</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-19">
																				<span class="text-sregular light" data-t="categories-item-19">Technology</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-20">
																				<span class="text-sregular light" data-t="categories-item-20">Transport</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-21">
																				<span class="text-sregular light" data-t="categories-item-21">Travel</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-22">
																				<span class="text-sregular light" data-t="categories-item-22">News</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-23">
																				<span class="text-sregular light" data-t="categories-item-23">Entertainment</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="column on-small-6 on-medium-4">
																<div class="padding-bottom-small">
																	<ul class="nav nav-white-text nav-bleu-de-france-hover">
																		<li class="nav__item">
																			<a href="" class="nav__link js-homepage-category" data-ingest-clicktype="category-24">
																				<span class="text-sregular light" data-t="categories-item-24">Sport News</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="container-table-cell  container-relative">
														<div class="hide-on-med-and-down">
															<div class="padding-left-xlarge padding-right-xlarge">
																<div class="container-absolute to-the-top to-the-bottom to-the-left">
																	<div class="border-1 border-solid mountain-mist-border container-full-height"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="column on-small-12 on-medium-12 on-large-3">
											<div class="container-variable-small-height container-relative">
												<div class="v-align">
													<div class="center-align">
														<img src="{{asset('public/front/images/logo.jpg')}}" height="48" width="48" alt="E-PHOTOS" data-t="categories-typekit-icon" />
														<p class="white-text text-medium light" data-t="categories-typekit-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid officiis magnam impedit sequi omnis magni facilis consequuntur quos asperiores quidem?</p>
														<a href="#" target="_blank" class="button button--secondary button--silent" data-t="categories-typekit-learn-more-button-text" data-ingest-clicktype="typekit-learn-more">Learn more</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="padding-xlarge"></div>
							<div class="hide-on-large-only">
								<div class="padding-xlarge"></div>
								<div class="padding-xlarge"></div>
							</div>
						</div>

						<div class="container-absolute container-full to-the-top padding-top-xlarge maximum-in-front" id="js-visual-search-popover" data-state="hidden">
							<div class="padding-xlarge"></div>
							<div class="row">
								<div class="column on-small-10 on-small-offset-1 on-medium-6 on-medium-offset-3">
									<div class="menu menu--closable container-relative white" id="js-visual-search-popover-menu">
										<i class="alert__close mti-icon mti-large icon-close js-visualsearch-alert-close"></i>
										<h3 class="no-margin">
											<span class="grey dove-text">
												<i class="mti-icon mti-large icon-camera"></i>
												<span>Search with an image.</span>
											</span>
										</h3>
										<span id="js-vs-error" class="red lust-text text-small">&nbsp;</span>
										<div id="js-visual-search-drop-zone">
											<div class="padding-xlarge margin-top-small border-dashed border-2 silver-sand-border grey white-smoke-text white-smoke">
												<div class="padding-large">
													<div class="center-align">
														<div class="container-inline-block circle circle--medium blue picton">
															<div class="center-align padding-top-xlarge font-thin">
																<i class="margin-bottom-small smoke-text mti-icon mti-3x mti-xlarge icon-upload-to-cloud"></i>
																<form><input id="js-vsupload" class="container-none" type="file"/></form>
																<div class="grey white-smoke-text">
																	<div class='margin-bottom-xsmall'><span>Drag an image here</span></div><div class='margin-bottom-xsmall'><span>or</span></div><div class='margin-bottom-xsmall'><span><label for='js-vsupload' id='js-vsupload-link' class='grey white-smoke-text default-link cursor-pointer'>browse</label></span></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id="js-visual-search-in-progress" class="center-align margin-xlarge" data-state="hidden">
											<div class="padding-xlarge">
												<div class="padding-xlarge">
													<div class="padding-xlarge">
														<div class="padding-xlarge">
															<span class="grey dove-text padding-bottom-medium text-medium">Uploading your image...</span>
															<br>
															<i class="spinner margin-top-xlarge"></i>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					@endsection
