@extends('front.master.master')

@section('title')
@endsection

@section('body')
<div class="view-container view-container--default motmot">


    <div class="container-relative in-front">
        <div class="overflow-hidden">
            <div class="mti-hero-image" >
                <picture>
                    <source srcset="{{asset('public/front/images/other_banner.jpg')}}" type="image/webp" />
                    <img style="height:325px" data-t="main-header-hero-image" src="{{asset('public/front/images/other_banner.jpg')}}" class="mti-hero-image mti-hero-image--cover mti-hero-image--large js-hero-image-full container-full hidden">
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
                                    <span class="white-text text-xslarge light" data-t="main-header-title">Discover royalty-free stock illustrations</span>
                                </h1>
                            </div>
                        </div>
                        <div class="padding-top-large">
                            <form method="get" action="{{route('search')}}" class="js-search-form" data-ingest-workflow="stock-search">
                                
                                <div class="container-relative white hero-input-group">
                                    <div class="input-box" data-active="input">
                                        <div class="container-table">
                                            <div class="container-table-cell no-stretch">
                                                <div class="select-box input-box__select-box">
                                                    <select name="slug" class="js-filter-view-type" data-t="filter-asset-type">
                                                        <option selected="selected" value="all" data-ingest-clicktype="all-asset-dropdown-selection" data-t="all-asset-dropdown-selection">
                                                            All
                                                        </option>
                                                        @foreach( $category as $item )
														<option value="{{$item->id}}">
															{{$item->category_name}}
														</option>
														@endforeach
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="container-table-cell container-full container-relative">
                                                <input name="search" class="js-search-text-input input--silent input--full light input--xlarge" type="text" placeholder="Search" data-t="search-form-text-input">
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
                                                <span class="white-text text-large light" data="fmf-promo-text-long">Get 10 free E-PHPTOS illustrations.</span>
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


            <div  class="padding-medium">
                <div class="container-large-max padding-top-large">
                    <div class="row with-gutter">
                        
                        
                        @if(count($product)>0)
                        <div style="padding: 0px 13px;" class="sc-bwzfXH IbGp">
                            <h2 style="color: rgb(44, 44, 44);
                            font-weight: 700;
                            line-height: 1.3;
                            text-align: center;
                            font-size: 28px;
                            margin-bottom: 7px;
                            margin-top: 25px;
                            text-align: left;" class="sc-htpNat sc-ifAKCX iTkTzy">Your Search Result</h2>
                            <br><br>
                        </div>
                        @foreach( $product->shuffle() as $item)
                      
                        <div class="photo_card_padding column on-small-12 on-medium-6 on-large-4">
                            <div  class="padding-bottom-xlarge">
                                <a href="{{route('product_view', $item->subcat_id)}}" class="js-landing-page-analytics-link container-block card card--shadow card--hoverable center-block whitesmoke"
                                 data-t="discover-collections-card-1" data-ingest-clicktype="collection-card-1" data-ingest-card-title="Stock photos">
                                    <div class="card__image">
                                        <picture>
                                        <source srcset="{{asset('public/storage/uploads/image/water_mark')}}/{{$item->image}}" type="image/webp" alt="picture" />
                                            <img style="height: 250px;" src="{{asset('public/storage/uploads/image/water_mark')}}/{{$item->image}}" data-t="discover-collections-card-1-hero-image" alt="picture"/>
                                        </picture>
                                    </div>
                                    <div style="height:125px;" class="card__content container-small-min-height audio_card_color">
                                        <h3 class="no-margin">
                                            <strong class="grey gravel-text" data-t="discover-collections-card-1-title"><a href="{{route('product_view', $item->subcat_id)}}">{{ $item -> product_name }} </a></strong>
                                        </h3>
                                        <p class="no-margin"><span class="grey gravel-text" data-t="discover-collections-card-1-description"><b>{{ $item ->subcategory_info ->subcategory_name }}</b></span></p>

                                        <p class="no-margin"><span class="grey gravel-text" data-t="discover-collections-card-1-description">{{ $item -> description }}</span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div style="padding: 0px 13px;" class="sc-bwzfXH IbGp">
                            <h2 style="color: rgb(44, 44, 44);
                            font-weight: 700;
                            line-height: 1.3;
                            text-align: center;
                            font-size: 28px;
                            margin-bottom: 7px;
                            margin-top: 25px;
                            text-align: left;" class="sc-htpNat sc-ifAKCX iTkTzy">No data Found</h2>
                            <br><br>
                        </div>
                        <img src="{{asset('public/front/images/search.jpg')}}"  style="width:500px; height:350px;" alt="picture">
                        @endif




                    </div>
                </div>
            </div>


        </div>

        </div>

    </div>



</div>


        
</div>



@endsection
