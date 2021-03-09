@extends('front.master.master')

@section('title')
E-PHOTOS | 3D
@endsection

@section('body')
<div class="view-container view-container--default motmot">
    <div style="padding-top: 0px; height:74px;" class="padding-large search-toolbar toolbar light-black-bottom-shadow white container-full maximum-in-front">
        <div class="container-table container-full ">
            <div class="container-table-cell">
                <div class="hide-on-med-and-down">
                <a class='logo_text' href="{{route('home')}}">
                            <img src="{{asset('public/front/images/logo.jpg')}}" class="" style="width:170" alt="logo">
                            </a>
               </div>
           </div>
           <div style="padding-top: 8px;" class="padding-top-large">
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
        <div class="container-table-cell   margin-right-large margin-top-xsmall">
            <div id="portal-lib-dropdown" class="white-text">
                <div class="js-stock-portal-ssr transparent sc-kpOJdX dJEFiR react-spectrum-provider spectrum spectrum--light spectrum--medium white-text">
                    <div class="sc-kGXeez fXwdhL libraries-dropdown">
                        <div style="margin-left: 30px; color:black;" class="sc-gzVnrw ihHoGK">
                            <button  data-t="libraries-dropdown-my-libraries-button" class="sc-ifAKCX sc-htoDjs gbIrHD">
                                <span data-t="libraries-dropdown-my-libraries-button-text" class="hide-on-small-and-down sc-dnqmqq lhWAdd">
                                    <span style="color:black;">My Libraries</span>
                                </span>
                                <span class="hide-on-med-and-up">
                                    <span  class="sc-iwsKbI jmMPNn">
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
                                                <a href="#
                                                " class="js-start-fmf button button--dialog"   data-t="fmf-call-to-action-long" data-product-key="/Applications/StockSubSmallAnnual" >Start now</a>
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
                    <a href="#" class="js-start-fmf button button--action"  data-t="fmf-call-to-action-short" data-product-key="/Applications/StockSubSmallAnnual">Get 10 free images.</a>
                </div>
            </div>
        </div>
    </div>

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
            <div class="v-align container-full">
                <div class="padding-left-xlarge padding-right-xlarge padding-bottom-small">
                    <div class="margin-bottom-xlarge center-align">
                        <div class="container-max">
                            <h1 class="no-margin">
                                <span class="white-text text-xslarge light" data-t="main-header-title">Find the perfect stock asset for your next creative project</span>
                            </h1>
                        </div>
                    </div>
                    

                </div>
            </div>
            
        </div>
    </div>


        <div class="grey white-smoke" data-t="discover-collections-section">
             
            <div  class="padding-medium">
                <div class="container-large-max padding-top-large">
                    <div style="margin-top: 50px;" class="row with-gutter">
                        <div style="text-align: center; margin-top: 25px;" class="audio_p">
                            <b>Explore our most-sought-after categories to find the perfect music tracks</b>
                        </div>
                        <div style="padding: 0px 13px; text" class="sc-bwzfXH IbGp">
                            <h2 style="color:#8e8e8e;
                            font-weight: 700;
                            line-height: 1.3;
                            font-size: 28px;
                            margin-bottom: 7px;
                        
                            text-align: center;" class="sc-htpNat sc-ifAKCX iTkTzy">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, error modi. Fugiat neque maiores et laudantium impedit sunt quod molestiae?</h2>
                        </div>
                        <br>
                        @foreach( $three_d -> take(3) as $item)
                        <div class=" column on-small-12 on-medium-12 on-large-4">
                            <div class="padding-bottom-xlarge">
                                <a href="#" class="js-landing-page-analytics-link container-block card   card--hoverable center-block white" data-t="discover-collections-card-1" data-ingest-clicktype="collection-card-1" data-ingest-card-title="Stock photos">
                                    <div class="card__image">
                                        <picture>
                                            <source srcset="{{asset('public/storage/uploads/image/water_mark/')}}/{{ $item -> picture }}" type="image/webp" />
                                            <img style="height:250px" src="{{asset('public/storage/uploads/image/water_mark/')}}/{{ $item -> picture }}" data-t="discover-collections-card-1-hero-image" />
                                        </picture>
                                    </div>
                                    <div style="text-align: center; height:250px" class=" card_bg_color card__content container-small-min-height audio_card_color">
                                        <h3 class="no-margin">
                                            <strong class="grey gravel-text" data-t="discover-collections-card-1-title">{{ $item -> category }}</strong>
                                        </h3>
                                        <p class="no-margin"><span class="grey gravel-text" data-t="discover-collections-card-1-description">{{ $item -> desp }}</span></p>
                                       
                                     <div class="card__action">
                                        <div class="center-align">
                                            <div class="padding-bottom-xsmall">
                                                <a href="" class="js-card-link js-landing-page-analytics-link button button--action button--silent"   data-t="fmf-call-to-action-long" data-product-key="/Applications/StockSubSmallAnnual" >Scerch</a>
                                            </div>
                                        </div>
                                    </div>
                                      </div>
                                    
                                </a>
                            </div>
                        </div>
                        @endforeach
                         
                        
                       
                    </div>
                </div>
            </div>
           
            <div  class="padding-medium">
                    <div class="container-large-max padding-top-large">
                        <div style="margin-top: 50px;" class="row with-gutter">
                            <div style="text-align: center; margin-top: 25px;" class="audio_p">
                                <b>Explore our most-sought-after categories to find the perfect music tracks</b>
                            </div>

                            <div style="padding: 0px 13px; text" class="sc-bwzfXH IbGp">
                                <h2 style="color:#8e8e8e;
                                font-weight: 700;
                                line-height: 1.3;
                                font-size: 28px;
                                margin-bottom: 7px;
                            
                                text-align: center;" class="sc-htpNat sc-ifAKCX iTkTzy">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, error modi. Fugiat neque maiores et laudantium impedit sunt quod molestiae?</h2>
                            </div>
                    
                                <br>
                            @foreach($three_d -> take(4) as $item_two)
                            <div class=" column on-small-12 on-medium-12 on-large-6">
                            <div class="padding-bottom-xlarge">
                                <a href="#" class="js-landing-page-analytics-link container-block card   card--hoverable center-block white" data-t="discover-collections-card-1" data-ingest-clicktype="collection-card-1" data-ingest-card-title="Stock photos">
                                    <div class="card__image">
                                        <picture>
                                            <source srcset="{{asset('public/uploads')}}/{{ $item_two -> picture }}" type="image/webp" />
                                            <img src="{{asset('public/uploads')}}/{{ $item_two -> picture }}" data-t="discover-collections-card-1-hero-image" />
                                        </picture>
                                    </div>
                                    <div style="text-align: center;" class=" card_bg_color card__content container-small-min-height audio_card_color">
                                        <h3 class="no-margin">
                                            <strong class="grey gravel-text" data-t="discover-collections-card-1-title">{{ $item_two -> category }}</strong>
                                        </h3>
                                        <p class="no-margin"><span class="grey gravel-text" data-t="discover-collections-card-1-description">{{ $item_two -> desp }}</span></p>
                                       
                                     <div class="card__action">
                                        <div class="center-align">
                                            <div class="padding-bottom-xsmall">
                                                <a href="" class="js-card-link js-landing-page-analytics-link button button--action button--silent"   data-t="fmf-call-to-action-long" data-product-key="/Applications/StockSubSmallAnnual" >Scerch</a>
                                            </div>
                                        </div>
                                    </div>
                                      </div>
                                    
                                </a>
                            </div>
                        </div>
                            @endforeach
                        
                        </div>
                </div>


                
            </div>
        
            <div class="padding-medium" style="background: white;" >
                    <div class="container-large-max padding-top-large">
                        <div style="margin-top: 50px;" class="row with-gutter">
                            <div style="text-align: center; margin-top: 25px;" class="audio_p">
                                <b>Explore our most-sought-after categories to find the perfect music tracks</b>
                            </div>

                            <div style="padding: 0px 13px; text" class="sc-bwzfXH IbGp">
                                <h2 style="color:#8e8e8e;
                                font-weight: 700;
                                line-height: 1.3;
                                font-size: 28px;
                                margin-bottom: 7px;
                            
                                text-align: center;" class="sc-htpNat sc-ifAKCX iTkTzy">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, error modi. Fugiat neque maiores et laudantium impedit sunt quod molestiae?</h2>
                            </div>
                    
                                <br>
                            
                                @foreach($three_d -> take(4) as $item_two)
                            <div class=" column on-small-12 on-medium-12 on-large-6">
                            <div class="padding-bottom-xlarge">
                                <a href="#" class="js-landing-page-analytics-link container-block card   card--hoverable center-block white" data-t="discover-collections-card-1" data-ingest-clicktype="collection-card-1" data-ingest-card-title="Stock photos">
                                    <div class="card__image">
                                        <picture>
                                            <source srcset="{{asset('public/uploads')}}/{{ $item_two -> picture }}" type="image/webp" />
                                            <img src="{{asset('public/uploads')}}/{{ $item_two -> picture }}" data-t="discover-collections-card-1-hero-image" />
                                        </picture>
                                    </div>
                                    <div style="text-align: center;" class=" card_bg_color card__content container-small-min-height audio_card_color">
                                        <h3 class="no-margin">
                                            <strong class="grey gravel-text" data-t="discover-collections-card-1-title">{{ $item_two -> category }}</strong>
                                        </h3>
                                        <p class="no-margin"><span class="grey gravel-text" data-t="discover-collections-card-1-description">{{ $item_two -> desp }}</span></p>
                                       
                                     <div class="card__action">
                                        <div class="center-align">
                                            <div class="padding-bottom-xsmall">
                                                <a href="" class="js-card-link js-landing-page-analytics-link button button--action button--silent"   data-t="fmf-call-to-action-long" data-product-key="/Applications/StockSubSmallAnnual" >Scerch</a>
                                            </div>
                                        </div>
                                    </div>
                                      </div>
                                    
                                </a>
                            </div>
                        </div>
                            @endforeach
                            
                        
                        </div>
                </div>


                
            </div>

        <div style="margin-top: -22px;" class="padding-medium view-container view-container--default motmot ">
            <div class="container-large-max padding-top-large">
                <div class="row with-gutter">
                    <div style="text-align: center;margin-top: 25px;" class="audio_p">
                        <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, dolorum?</b>
                    </div>
                    <div style="padding: 0px 13px; text" class="sc-bwzfXH IbGp">
                        <h2 style="color: rgb(44, 44, 44);
                        font-weight: 700;
                        line-height: 1.3;
                        font-size: 28px;
                        margin-bottom: 7px;
                        
                        text-align: center;" class="sc-htpNat sc-ifAKCX iTkTzy">Popular stock music genres and moods</h2>
                    </div>
                    
                    <br>
                    @foreach($three_d -> take(1) as $item_four)
                     <div class="column on-small-12 on-medium-12 on-large-6">
                        <div class="padding-bottom-xlarge">
                            <a href="#" class=" card card--small card--shadow card--hoverable center-block white" data-t="discover-collections-card-2" data-ingest-clicktype="collection-card-2" data-ingest-card-title="Premium stock images">
                                
                                <div style="text-align: center;" class="card__content container-small-min-height ">
                                    <h3 style="margin-top: 73px;" class="no-margin">
                                        <strong style="    font-size: 26px;color: #a3bdd4;font-family: sans-serif;" class="grey gravel-text" data-t="discover-collections-card-2-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio natus, nobis deserunt similique veniam blanditiis qui quibusdam a quos quam!</strong>
                                    </h3>
                                    
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="column on-small-12 on-medium-12 on-large-6">
                        <div class="" >
                            <a href="#" class=" card--small card--shadow card--hoverable center-block white" data-t="discover-collections-card-1" data-ingest-clicktype="collection-card-1" data-ingest-card-title="Stock photos">
                                <div class="card__image">
                                    <picture>
                                    <source srcset="{{asset('public/uploads')}}/{{$item_four->picture}}" type="image/webp" />
                                        <img src="{{asset('public/upload')}}/{{$item_four->picture}}" data-t="discover-collections-card-1-hero-image" />
                                    </picture>
                                </div>
                                
                            </a>
                        </div>
                    </div>
                    @endforeach            
                </div>
            </div>
        </div>

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
                    <div style="text-align: center" class="audio_p">
                        Explore our most-sought-after categories to find the perfect music tracks
                    </div>
                    <br>
                    @foreach($three_d -> take(3) as $item_five)
                    <div class="column on-small-12 on-medium-12 on-large-4">
                        <div class="" >
                            <a href="#" class="container-block card--small card--shadow card--hoverable center-block white" data-t="discover-collections-card-1" data-ingest-clicktype="collection-card-1" data-ingest-card-title="Stock photos">
                                <div class="card__image">
                                    <picture>
                                    <source srcset="{{asset('public/uploads')}}/{{$item_five->picture}}" type="image/webp" />
                                        <img src="{{asset('public/uploads')}}/{{$item_five->picture}}" data-t="discover-collections-card-1-hero-image" />
                                    </picture>
                                </div>
                                <div style="text-align: center;" class="card__content container-small-min-height audio_card_color">
                                    <h3  class="no-margin">
                                        <strong class="grey gravel-text" data-t="discover-collections-card-1-title">{{$item_five->category}}</strong>
                                    </h3>
                                    <p class="no-margin"><span class="grey gravel-text" data-t="discover-collections-card-2-description">{{$item_five->desp}}</span></p>

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



</div>

<div class="container">
<img class="audio_footer_banner" src="{{asset('public/front/images/memorible_background.jpg')}}" alt="Cinque Terre" width="1000" height="300">
    
</div>
        
</div>



@endsection