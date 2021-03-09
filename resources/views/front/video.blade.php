@extends('front.master.master')

@section('title')
E-PHOTOS | VIDEO
@endsection

@section('body')
<div class="view-container view-container--default motmot">

	<div class="container-relative in-front">
		<div class="mti-hero-image mti-hero-image--medium overflow-hidden container-relative js-hero-video sc-hMFtBS hEEVyP">
			<video controls muted preload="none" class="container-full-expand container-absolute to-the-bottom to-the-right" poster="{{asset('public/front/videos/animal.mp4')}}" mutted="muted" autoplay="autoplay" loop="loop" > 
				<source src="{{asset('public/front/videos/animal.mp4')}}" type="video/mp4">
				</video>
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
                            <img src="{{asset('public/front/images/logo.jpg')}}" class="" style="width:170" alt="logo">
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
										<span class="white-text text-xslarge light" data-t="main-header-title">Discover royalty-free music from top artists</span>
									</h1>
								</div>
							</div>
							<div class="padding-top-large">
								<form method="get" action="/search" class="js-search-form" data-ingest-workflow="stock-search">
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
															<option value="images" data-ingest-clicktype="images-asset-dropdown-selection" data-t="images-asset-dropdown-selection">
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
															<option value="3d" data-ingest-clicktype="3d-asset-dropdown-selection" data-t="3d-asset-dropdown-selection">
																3D
															</option>
															<option value="free" data-ingest-clicktype="free-asset-dropdown-selection" data-t="free-asset-dropdown-selection">
																Free
															</option>
															<option value="premium" data-ingest-clicktype="premium-asset-dropdown-selection" data-t="premium-asset-dropdown-selection">
																Premium
															</option>
															<option value="editorial" data-ingest-clicktype="editorial-asset-dropdown-selection" data-t="editorial-asset-dropdown-selection">
																Editorial
															</option>
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
					<div class="container-absolute to-the-bottom to-the-right">
						<div class="margin-xlarge padding-xlarge">
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
													<span class="white-text text-large light" data="fmf-promo-text-long">Get 10 free E-PHOTOS photo.</span>
												</div>
												<div class="container-table-cell">
													<div class="padding-left-large">
														<a href="" class="js-start-fmf button button--dialog"   data-t="fmf-call-to-action-long" data-product-key="/Applications/StockSubSmallAnnual" >Start now</a>
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

				<div style="margin-top: -22px;" class="padding-medium view-container view-container--default 
				motmot grey white-smoke">
					<div class="container-large-max padding-top-large">
						<div class="row with-gutter">
							
							<br>
							@foreach( $video -> take(4) as $item )
							<div class="column on-small-12 on-medium-6 on-large-3">
								<div class="padding-bottom-xlarge" >
									<a href="#" class=" card--small card--shadow card--hoverable center-block white" data-t="discover-collections-card-1" data-ingest-clicktype="collection-card-1" data-ingest-card-title="Stock photos">
										<div class="card__image">
											<video width="100%" height="240" controls muted preload="none" class="card__image container-full-expand container-absolute to-the-bottom to-the-right" 
                                            	poster="{{asset('public/storage/uploads/video')}}/{{ $item -> video_file }}" mutted="muted" autoplay="autoplay" loop="loop" > 
											<source src="{{asset('public/storage/uploads/video')}}/{{ $item -> video_file }}" type="video/mp4">
											</video>
										</div>
											
									</a>
								</div>
							</div>
							@endforeach
							</div>
                            
						</div>
					</div>
				</div>

				
				<div class="padding-top-large"></div>
				<div style="margin-top: -22px;" class="padding-medium view-container view-container--default motmot grey white-smoke">
					<div class="container-large-max padding-top-large">
						<div class="row with-gutter">
							<div style="padding: 0px 13px; text" class="sc-bwzfXH IbGp">
								<h2 style="color: rgb(44, 44, 44);
								font-weight: 700;
								line-height: 1.3;
								font-size: 28px;
								margin-bottom: 7px;
								margin-top: 25px;
								text-align: center;" class="sc-htpNat sc-ifAKCX iTkTzy">Popular stock music genres and moods</h2>
							</div>
							<div style="text-align:center " class="audio_p">
								Explore our most-sought-after categories to find the perfect music tracks
							</div>
							<br>

							@foreach( $video -> take(6) as $item_two )
							<div class="column on-small-12 on-medium-6 on-large-4">
								<div class="padding-bottom-xlarge" >
									<a href="#" class="container-block card--small card--shadow card--hoverable center-block white" data-t="discover-collections-card-1" data-ingest-clicktype="collection-card-1" data-ingest-card-title="Stock photos">
										<div class="card__image">
											<video width="100%" height="240" controls muted preload="none" class="card__image container-full-expand container-absolute to-the-bottom to-the-right" 
                                            	poster="{{asset('public/storage/uploads/video')}}/{{ $item_two -> video_file }}" mutted="muted" autoplay="autoplay" loop="loop" > 
											<source src="{{asset('public/storage/uploads/video')}}/{{ $item_two -> video_file }}" type="video/mp4">
											</video>
										</div>
										<div style="text-align: left;" class="card__content container-small-min-height ">
											<h3  class="no-margin">
												<strong class="grey gravel-text" data-t="discover-collections-card-1-title">{{ $item_two->category }}</strong>
											</h3>
											<p class="no-margin"><span class="grey gravel-text" data-t="discover-collections-card-2-description">{{ $item_two->video_desp }}</span></p>

										</div>
									</a>
								</div>
							</div>
							@endforeach
							
						</div>
					</div>
				</div>

				<div style="background:white;" class="padding-medium view-container view-container--default motmot grey white-smoke">
					<div class="container-large-max padding-top-large">
						<div class="row with-gutter">
							<div style="padding: 0px 13px; text" class="sc-bwzfXH IbGp">
								<h2 style="color: rgb(44, 44, 44);
								font-weight: 700;
								line-height: 1.3;
								font-size: 28px;
								margin-bottom: 7px;
								margin-top: 25px;
								text-align: center;" class="sc-htpNat sc-ifAKCX iTkTzy">Popular stock music genres and moods</h2>
							</div>
							<div style="text-align:center " class="audio_p">
								Explore our most-sought-after categories to find the perfect music tracks
							</div>
							<br>

							@foreach($video -> take(4) as $item)
							<div class="column on-small-12 on-medium-6 on-large-6">
								<div class="padding-bottom-xlarge" >
									<a href="#" class=" card--small card--shadow card--hoverable center-block white" data-t="discover-collections-card-1" data-ingest-clicktype="collection-card-1" data-ingest-card-title="Stock photos">
										<div class="card__image">
										<video width="100%" height="340" controls muted preload="none" class="card__image container-full-expand container-absolute to-the-bottom to-the-right" 
                                            	poster="{{asset('public/storage/uploads/video')}}/{{ $item -> video_file }}" mutted="muted" autoplay="autoplay" loop="loop" > 
											<source src="{{asset('public/storage/uploads/video')}}/{{ $item -> video_file }}" type="video/mp4">
											</video>
										</div>
										<div style="margin-left: -18px;" class="audio_p card__content container-small-min-height ">
											<h3  class="no-margin">
												<strong class="grey gravel-text" data-t="discover-collections-card-1-title">{{ $item -> category }}</strong>
											</h3>
											<p class="no-margin"><span class="grey gravel-text" data-t="discover-collections-card-2-description">{{ $item-> video_desp }}</span></p>

										</div>
									</a>
								</div>
							</div>
							@endforeach

						</div>
					</div>
				</div>

			</div>
		</div>


		<div class="padding-medium view-container view-container--default motmot grey white-smoke">
			<div class="container-large-max padding-top-large">
				<div class="row with-gutter">
					
					<br>
					@foreach($video -> take(1) as $item)

					<div class="column on-small-12 on-medium-12 on-large-6">
						<div class="padding-bottom-xlarge" >
							<a href="#" class=" card--small card--shadow card--hoverable center-block white" data-t="discover-collections-card-1" data-ingest-clicktype="collection-card-1" data-ingest-card-title="Stock photos">
								<div class="card__image">
								<video width="100%" height="auto" controls muted preload="none" class="card__image container-full-expand container-absolute to-the-bottom to-the-right" 
                                            	poster="{{asset('public/storage/uploads/video')}}/{{ $item -> video_file }}" mutted="muted" autoplay="autoplay" loop="loop" > 
											<source src="{{asset('public/storage/uploads/video')}}/{{ $item -> video_file }}" type="video/mp4">
											</video>
								</div>
								
							</a>
						</div>
					</div>
					<div class="column on-small-12 on-medium-12 on-large-6">
						<div class="padding-bottom-xlarge" >
							<a href="#" class=" card--small card--shadow card--hoverable center-block white" data-t="discover-collections-card-1" data-ingest-clicktype="collection-card-1" data-ingest-card-title="Stock photos">
								
								<div style="text-align: left;" class="card__content container-small-min-height ">
									<h3 style=" padding: 18px 77px;
									font-size: 35px;
									font-family: 'Playfair Display', serif;
									line-height: 1.5;
									text-align: center;
									color:whitesmoke !important;" class="no-margin">
									<strong class="grey gravel-text" data-t="discover-collections-card-1-title">{{ $item -> video_desp }}</strong>
								</h3>
								
								<button style="margin-left: 40%;" class="btn btn-prymary box_btn">See more</button>
							</div>
						</a>
					</div>
					@endforeach
				</div>
				
			</div>
		</div>
	</div>
	

</div>



@endsection