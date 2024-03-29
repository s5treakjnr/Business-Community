<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
            <!-- Critical preload -->
    <link rel="preload" href="{{ asset('css/vendors/uikit.min.css') }}" as="script">
    <link rel="preload" href="{{ asset('css/vendors/uikit.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('css/style.css') }}" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="{{ asset('fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/fa-solid-900.woff2') }}" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="{{ asset('fonts/inter-v2-latin-regular.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/inter-v2-latin-500.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/inter-v2-latin-700.woff2') }}" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendors/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

    </head>
    <body>
        <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    <header>
        <!-- header content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
                <div class="uk-container" data-uk-navbar>
                    <div class="uk-navbar-left">
                        <div class="uk-navbar-item">
                            <!-- logo begin -->
                            <a class="uk-logo" href="#">
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="{{ asset('img/in-logo-1.svg') }}" alt="logo" width="160" height="34" data-uk-img>
                            </a>
                            <!-- logo end -->
                            <!-- navigation begin -->
                            <ul class="uk-navbar-nav uk-visible@m">
                                <li><a href="index-2.html">Home<i class="fas fa-chevron-down"></i></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="#">Homepage 2</a></li>
                                            <li><a href="#">Homepage 3</a></li>
                                            <li><a href="#">Homepage 4</a></li>
                                        </ul>
                                    </div>
                                </li>
                              <li><a href="#">About</a></li>
                              <!--   
                                <li><a href="#">Company<i class="fas fa-chevron-down"></i></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Careers</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </div>
                                </li>
 -->                                <li><a href="#">Education</a></li>
                                <li><a href="#">Resources<i class="fas fa-chevron-down"></i></a>
                                    <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                        <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid>
                                            <div>
                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                    <li><a href="#">Documentation<i class="fas fa-external-link-square-alt fa-sm"></i></a></li>
                                                    <li><a href="#">Help Center</a></li>
                                                    <li><a href="#">Customers</a></li>
                                                    <li><a href="#">Roadmap</a></li>
                                                    <li><a href="#">Legal Docs<i class="fas fa-gavel fa-sm"></i></a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                    <li><a class="uk-disabled" href="#">Adipiscing elit sed do eiusmod incididunt ut labore dolore magna lorem ipsum sit dolor amet consectetur</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- navigation end -->
                        </div>
                    </div>
                    <div class="uk-navbar-right">
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">
                            <a href="{{ route('register') }}" class="uk-button uk-button-primary uk-border-rounded">Create Account</a>
                            <a href="{{ route('login') }}" class="uk-button uk-button-text"><i class="fas fa-user-circle"></i></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- header content end -->
    </header>
    <main>
        <!-- slideshow content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-light in-slideshow uk-background-cover uk-background-top-center" style="background-image: url(img/in-liquid-slide-bg.png);" data-uk-slideshow>
                <ul class="uk-slideshow-items">
                    <li>
                        <div class="uk-container">
                            <div class="uk-grid-medium" data-uk-grid>
                                <div class="uk-width-1-2@s">
                                    <div class="uk-overlay">
                                        <h1 style="font-family: 'Questrial', sans-serif; font-weight: bolder;">Opportunities don’t happen, you create them.</h1>
                                        <p class="uk-text-lead uk-visible@m">Walk with me let’s create generational wealth. Welcome to GREATNESS.</p>
                                        <a href="{{ route('register') }}" class="uk-button uk-button-default uk-border-rounded uk-visible@s">create account</a>
                                    </div>
                                </div>
                                <div class="uk-width-1-2@s">
                                    <img class="in-slide-img" src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-slide-1.svg" alt="image-slide" width="500" hcd Documentseight="400" data-uk-img>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <!-- <div class="uk-container">
                            <div class="uk-grid-medium" data-uk-grid>
                                <div class="uk-width-1-2@s">
                                    <div class="uk-overlay">
                                        <h1>If opportunity doesn't knock, build a door.</h1>
                                        <p class="uk-text-lead uk-visible@m">A trusted destination for traders worldwide, Authorised by FCA, ASIC &amp; FSCA</p>
                                        <a href="#" class="uk-button uk-button-default uk-border-rounded uk-visible@s">Discover accounts</a>
                                    </div>
                                </div>
                                <div class="uk-width-1-2@s">
                                    <img class="in-slide-img" src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-slide-2.svg" alt="image-slide" width="500" height="400" data-uk-img>
                                </div>
                            </div>
                        </div> -->
                    </li>
                </ul>
                <!-- <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
 -->                <div class="uk-section uk-padding-remove-vertical in-slideshow-features uk-visible@m">
                    <div class="uk-container">
                        <!-- <ul class="uk-grid uk-child-width-1-5@m uk-text-center" data-uk-grid>
                            <li>
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-ticker-1.svg" alt="ticker-image" data-width data-height data-uk-img>
                                <span class="uk-label uk-label-success uk-margin-left"><i class="fas fa-caret-up"></i>1,740.05</span>
                            </li>
                            <li>
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-ticker-2.svg" alt="ticker-image" data-width data-height data-uk-img>
                                <span class="uk-label uk-label-success uk-margin-left"><i class="fas fa-caret-up"></i>217.90</span>
                            </li>
                            <li>
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-ticker-3.svg" alt="ticker-image" data-width data-height data-uk-img>
                                <span class="uk-label uk-label-danger uk-margin-left"><i class="fas fa-caret-down"></i>270.97</span>
                            </li>
                            <li>
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-ticker-4.svg" alt="ticker-image" data-width data-height data-uk-img>
                                <span class="uk-label uk-label-success uk-margin-left"><i class="fas fa-caret-up"></i>3,218.51</span>
                            </li> -->
                           <!--  <li>
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-ticker-5.svg" alt="ticker-image" data-width data-height data-uk-img>
                                <span class="uk-label uk-label-danger uk-margin-left"><i class="fas fa-caret-down"></i>735.11</span>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- slideshow content end -->
        <!-- section content begin -->
        <div class="uk-section uk-section-secondary in-liquid-1">
            <div class="uk-container uk-light">
                <div class="uk-grid uk-flex uk-flex-middle">
                    <div class="uk-width-1-2@m">
                        <h2 style="font-size: 20px ; font-family: 'Questrial', sans-serif">The business community is founded by <span class="in-highlight">Samuel Asiegbu Grasik</span>. Who is also the CEO of <span class="in-highlight">Grasikz Trading Academy </span>focused on building and equipping young entrepreneurs into financial freedom from our courses with powerful business pdfs as bonus.</h2>
                    </div>

                    <div class="uk-width-1-2@m">
                        <span class=" uk-align-right@m" href="#">Find out more<i class="fas fa-angle-down uk-margin-small-left"></i></span>
                    </div>
                                    </div>
                <div class="uk-child-width-1-3@m" data-uk-grid>
                    <div>
                        <div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container">
                            <div class="uk-card-media-top">
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-object-1.svg" alt="sample-image" data-width data-height data-uk-img>
                            </div>
                            <div class="uk-card-body">
                                <h3>GRASIKZ BUSINESS COURSES</h3>
                                <p>Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container">
                            <div class="uk-card-media-top">
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-object-2.svg" alt="sample-image" data-width data-height data-uk-img>
                            </div>
                            <div class="uk-card-body">
                                <h3>GRASIKZ TRADING ACADEMY COURSES</h3>
                                <p>Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-secondary uk-border-rounded uk-cover-container">
                            <div class="uk-card-media-top">
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-object-3.svg" alt="sample-image" data-width data-height data-uk-img>
                            </div>
                            <div class="uk-card-body">
                                <h3>THE VOID IN YOUR TRADING</h3>
                                <p>Duis aute irure dolor in reprehen derit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
       <!-- section content begin -->
        <div class="uk-section in-liquid-2">
            <div class="uk-container">
                <div class="uk-grid-large uk-child-width-1-2@m" data-uk-grid>
                    <div class="uk-flex uk-flex-left">
                        <!-- <div class="uk-margin-right">
                            <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-icon-1.svg" alt="sample-icon" width="128" height="128" data-uk-img>
                        </div> -->
                        <!-- <div>
                            <h3>Expert service</h3>
                            <p>Quis autem vel eum iure reprehenderit qui in voluptate velit esse quam nihil molestiae consequatur.</p>
                            <a class="uk-button uk-button-text" href="#">Learn more<i class="fas fa-long-arrow-alt-right uk-margin-small-left"></i></a>
                        </div>
 -->                    </div>
                    <div class="uk-flex uk-flex-left">
                        <!-- <div class="uk-margin-right">
                            <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-icon-2.svg" alt="sample-icon" width="128" height="128" data-uk-img>
                        </div> -->
                        <!-- <div>
                            <h3>Fully regulated</h3>
                            <p>Quis autem vel eum iure reprehenderit qui in voluptate velit esse quam nihil molestiae consequatur.</p>
                            <a class="uk-button uk-button-text" href="#">Learn more<i class="fas fa-long-arrow-alt-right uk-margin-small-left"></i></a>
                        </div> -->
                    </div>
                    <div class="uk-flex uk-flex-left">
                       <!--  <div class="uk-margin-right">
                            <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-icon-3.svg" alt="sample-icon" width="128" height="128" data-uk-img>
                        </div> -->
                        <!-- <div>
                            <h3>Financial strength</h3>
                            <p>Quis autem vel eum iure reprehenderit qui in voluptate velit esse quam nihil molestiae consequatur.</p>
                            <a class="uk-button uk-button-text" href="#">Learn more<i class="fas fa-long-arrow-alt-right uk-margin-small-left"></i></a>
                        </div> -->
                    </div>
                    <div class="uk-flex uk-flex-left">
                        <!-- <div class="uk-margin-right">
                            <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-icon-4.svg" alt="sample-icon" width="128" height="128" data-uk-img>
                        </div> -->
<!--                         <div>
                            <h3>Integrated support</h3>
                            <p>Quis autem vel eum iure reprehenderit qui in voluptate velit esse quam nihil molestiae consequatur.</p>
                            <a class="uk-button uk-button-text" href="#">Learn more<i class="fas fa-long-arrow-alt-right uk-margin-small-left"></i></a>
                        </div> -->
                    </div>
                 </div>
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m uk-margin-medium-top">
                        <div class="uk-card uk-card-default uk-card-body uk-background-contain uk-background-top-left" style="background-image: url(/img/in-liquid-card-bg.png);" data-uk-img>
                            <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-3@m uk-text-center" data-uk-grid>
                                <div class="uk-width-1-1">
                                    <h4><span style="font-family: 'Questrial', sans-serif; font-weight: bolder;">Why 'The Business Community' ?</span></h4>
                                </div>
                                <div>
                                    <span class="in-icon-wrap circle">1</span>
                                    <p>Learn at your own pace and access learning materials anywhere.</p>
                                </div>
                                <div>
                                    <span class="in-icon-wrap circle">2</span>
                                    <p>HustleHearted Series podcasts.</p>
                                </div>
                                <div>
                                    <span class="in-icon-wrap circle">3</span>
                                    <p>Lifetime membership.</p>
                                </div>
                                <div>
                                    <span class="in-icon-wrap circle">4</span>
                                    <p>Trade ideas and setups.</p>
                                </div>
                                <div>
                                    <span class="in-icon-wrap circle">5</span>
                                    <p>Join community of actively profitable traders.</p>
                                </div>
                                <div>
                                    <span class="in-icon-wrap circle">6</span>
                                    <p>Personal Growth, Health, Mindset (shift) and many more…</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section uk-section-muted uk-padding-large in-liquid-3 uk-background-contain uk-background-center-center" style="background-image: url(img/in-liquid-3-bg.png);" data-uk-img>
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m uk-inline">
                        <div class="uk-grid-large uk-flex uk-flex-middle uk-flex-right" data-uk-grid>
                            <div class="uk-position-top-left">
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-3-mockup.png" alt="sample-images" width="650" height="469" data-uk-img>
                            </div>
                            <div class="uk-width-1-2@m">
                                <span class="uk-label in-liquid-label uk-margin-bottom">Available on multiple platforms</span>
                                <h2 class="uk-margin-remove" style="font-size: 20px ; font-family: 'Questrial', sans-serif">World class trade<br>classes without a doubt.</h2>
                                <p>Need help?.We're on several social-media platforms.</p>
                                <div class="uk-grid-small uk-child-width-1-3 uk-child-width-1-4@m uk-margin-medium-top uk-text-center" data-uk-grid>
                                    <div>
                                        <i class="fab fa-facebook in-icon-wrap"></i>
                                        <!-- <i class="fa-brands fa-facebook in-icon-wrap"></i> -->
                                        <p class="uk-text-small">Facebook</p>
                                    </div>
                                    <div>
                                        <i class="fab fa-whatsapp in-icon-wrap"></i>
                                        <p class="uk-text-small">Whatsapp</p>
                                    </div>
                                    <div>
                                        <i class="fab fa-youtube in-icon-wrap"></i>
                                        <p class="uk-text-small">Youtube</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section in-liquid-4">
            <div class="uk-container">
                <!-- <div class="uk-grid uk-flex uk-flex-middle">
                    <div class="uk-width-1-2@m">
                        <h2>Stay ahead of the curved.</h2>
                    </div>
                    <div class="uk-width-1-2@m uk-visible@m">
                        <a class="uk-button uk-button-text uk-align-right@m" href="#">Show all<i class="fas fa-angle-right uk-margin-small-left"></i></a>
                    </div>
                </div> -->
                <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-3@m in-blog-4" data-uk-grid>
                   <!--  <div class="uk-flex uk-flex-left">
                        <div class="in-liquid-category">
                            <p class="uk-text-small uk-text-uppercase"><span>News</span></p>
                        </div>
                        <div>
                            <article class="uk-article">
                                <h5 class="uk-margin-remove-bottom">
                                    <a href="#">Wall Street cautious on 'frothy' stocks, warn bitcoin bubble</a>
                                </h5>
                                <p class="uk-text-small uk-text-muted uk-margin-top">
                                    By <a href="#">Reuters</a>
                                    <span class="uk-margin-small-left uk-margin-small-right">•</span>
                                    Jan 8, 2021
                                </p>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit ...</p>
                                <a class="uk-button uk-button-text uk-margin-top" href="#">Read more<i class="fas fa-long-arrow-alt-right uk-margin-small-left"></i></a>
                            </article>
                        </div>
                    </div> -->
                   <!--  <div class="uk-flex uk-flex-left">
                        <div class="in-liquid-category">
                            <p class="uk-text-small uk-text-uppercase"><span>Analysis</span></p>
                        </div>
                        <div>
                            <article class="uk-article">
                                <h5 class="uk-margin-remove-bottom">
                                    <a href="#">Will AUD/USD Hit 0.8000 In The Foreseeable Future?</a>
                                </h5>
                                <p class="uk-text-small uk-text-muted uk-margin-top">
                                    By <a href="#">JFD Team</a>
                                    <span class="uk-margin-small-left uk-margin-small-right">•</span>
                                    Jan 4, 2021
                                </p>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit ...</p>
                                <a class="uk-button uk-button-text uk-margin-top" href="#">Read more<i class="fas fa-long-arrow-alt-right uk-margin-small-left"></i></a>
                            </article>
                        </div>
                    </div> -->
                    <!-- <div class="uk-flex uk-flex-left uk-visible@m">
                        <div class="in-liquid-category">
                            <p class="uk-text-small uk-text-uppercase"><span>Education</span></p>
                        </div> -->
                       <!--  <div>
                            <article class="uk-article">
                                <h5 class="uk-margin-remove-bottom">
                                    <a href="#">How Can You Use Volatility to Your Advantage</a>
                                </h5>
                                <p class="uk-text-small uk-text-muted uk-margin-top">
                                    By <a href="#">Barry Norman</a>
                                    <span class="uk-margin-small-left uk-margin-small-right">•</span>
                                    Dec 16, 2020
                                </p>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit ...</p>
                                <a class="uk-button uk-button-text uk-margin-top" href="#">Read more<i class="fas fa-long-arrow-alt-right uk-margin-small-left"></i></a>
                            </article>
                        </div> -->
                    </div>
                </div>
               <!--  <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m uk-inline">
                        <div class="uk-grid-medium uk-child-width-1-3@s uk-child-width-1-4@m uk-text-center uk-margin-medium-top" data-uk-grid>
                            <div>
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-award.svg" alt="wave-award" width="71" height="58" data-uk-img>
                                <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best CFD Broker</h6>
                                <p class="uk-text-small uk-margin-remove-top">TradeON Summit 2020</p>
                            </div>
                            <div>
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-award.svg" alt="wave-award" width="71" height="58" data-uk-img>
                                <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best Execution Broker</h6>
                                <p class="uk-text-small uk-margin-remove-top">Forex EXPO Dubai 2020</p>
                            </div>
                            <div>
                                 <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-award.svg" alt="wave-award" width="71" height="58" data-uk-img>
                                <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best Trading Platform</h6>
                                <p class="uk-text-small uk-margin-remove-top">London Summit 2020</p>
                            </div>
                            <div class="uk-visible@m">
                                <img src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-award.svg" alt="wave-award" width="71" height="58" data-uk-img>
                                <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best Broker Asia</h6>
                                <p class="uk-text-small uk-margin-remove-top">iFX EXPO 2020</p>
                            </div>
                        </div>
                    </div>
                </div> --> -->
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section uk-section-muted in-liquid-5 uk-background-contain uk-background-top-center in-offset-bottom-40" style="background-image: url(img/in-liquid-5-bg.png);">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m">
                        <div class="uk-text-center">
                            <h4>Payment methods.</h4>
                        </div>
                        <div class="uk-grid-collapse uk-child-width-1-2@s uk-child-width-1-6@m uk-text-center uk-margin-medium in-client-logo-6" data-uk-grid>
                            <div class="uk-tile">
                                <img class="uk-margin-remove" src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-payment-1.svg" alt="payment-image" width="167" height="55" data-uk-img>
                            </div>
                            <div class="uk-tile">
                                <img class="uk-margin-remove" src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-payment-2.svg" alt="payment-image" width="167" height="55" data-uk-img>
                            </div>
                            <div class="uk-tile">
                                <img class="uk-margin-remove" src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-payment-3.svg" alt="payment-image" width="167" height="55" data-uk-img>
                            </div>
                            <div class="uk-tile">
                                <img class="uk-margin-remove" src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-payment-4.svg" alt="payment-image" width="167" height="55" data-uk-img>
                            </div>
                            <div class="uk-tile">
                                <img class="uk-margin-remove" src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-payment-5.svg" alt="payment-image" width="167" height="55" data-uk-img>
                            </div>
                            <div class="uk-tile">
                                <img class="uk-margin-remove" src="{{ asset('img/in-lazy.gif') }}" data-src="img/in-liquid-payment-6.svg" alt="payment-image" width="167" height="55" data-uk-img>
                            </div>
                        </div>
                        <div class="uk-text-center uk-text-small in-border-text">
                            <p><span>Don't see a payment methods that works for you?<br class="uk-hidden@m"> We have other options.<br class="uk-hidden@m"> <a class="uk-button uk-button-small uk-button-primary uk-border-rounded uk-margin-left" href="#">More options<i class="fab fa-whatsapp uk-margin-small-left"></i></a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- section content end -->
    </main>
    <footer>
        <!-- footer content begin -->
        <div class="uk-section uk-section-secondary in-footer-feature uk-margin-medium-top">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m">
                        <div class="uk-grid uk-child-width-1-3@s" data-uk-grid>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-right">
                                    <i class="fas fa-history in-icon-wrap"></i>
                                </div>
                                <div>
                                    <h6 class="uk-margin-remove">25 years of Excellence</h6>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle uk-flex-center@m">
                                <div class="uk-margin-right">
                                    <i class="fas fa-trophy in-icon-wrap"></i>
                                </div>
                                <div>
                                    <h6 class="uk-margin-remove">15+ Global Awards</h6>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle uk-flex-right@m">
                                <div class="uk-margin-right">
                                    <i class="fas fa-phone-alt in-icon-wrap"></i>
                                </div>
                                <div>
                                    <h6 class="uk-margin-remove">24/5 Customer Support</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section uk-background-secondary uk-light">
            <div class="uk-container uk-text-small">
                <div class="uk-child-width-1-2@m" data-uk-grid>
                    <div class="in-footer-logo">
                        <img src="img/in-lazy.gif" data-src="img/in-logo-1.svg" alt="logo" width="127" height="27" data-uk-img>
                    </div>
                    <div class="uk-flex uk-flex-right@m">
                        <div class="in-footer-socials">
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-telegram-plane"></i></a>
                        </div>
                        <a class="uk-button uk-button-text uk-margin-large-left uk-visible@m" href="#">Company News</a>
                        <a class="uk-button uk-button-text uk-margin-large-left uk-visible@m" href="#">Partnership</a>
                    </div>
                </div>
                <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-large-top" data-uk-grid>
                    <div>
                        <h5>Markets</h5>
                        <ul class="uk-list uk-link-text">
                            <li><a href="#">Share CFDs</a></li>
                            <li><a href="#">Forex</a></li>
                            <li><a href="#">Indices</a></li>
                            <li><a href="#">Commodities</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5>Trading Platforms</h5>
                        <ul class="uk-list uk-link-text">
                            <li><a href="#">Web platform</a></li>
                            <li><a href="#">Trading apps</a></li>
                            <li><a href="#">MetaTrader 5</a></li>
                            <li><a href="#">Compare features</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5>Account Types</h5>
                        <ul class="uk-list uk-link-text">
                            <li><a href="#">Demo account</a></li>
                            <li><a href="#">Standart account</a></li>
                            <li><a href="#">ECN account</a></li>
                            <li><a href="#">Islamic acount</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5>Learn to Trade</h5>
                        <ul class="uk-list uk-link-text">
                            <li><a href="#">News and trade ideas</a></li>
                            <li><a href="#">Trading strategy</a></li>
                            <li><a href="#">Forex trading course</a></li>
                        </ul>
                    </div>
                </div>
                <div class="uk-grid uk-margin-large-top">
                    <div class="uk-width-1-1">
                        <p class="uk-heading-line uk-margin-large-bottom"><span>Copyright ©2021 Liquid Inc. All Rights Reserved.</span></p>
                        <p class="in-trading-risk">Trading derivatives and leveraged products carries a high level of risk, including the risk of losing substantially more than your initial investment. It is not suitable for everyone. Before you make any decision in relation to a financial product you should obtain and consider our Product Disclosure Statement (PDS) and Financial Services Guide (FSG) available on our website and seek independent advice if necessary</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer content end -->
        <!-- totop begin -->
        <div class="uk-visible@m">
            <a href="#" class="in-totop fas fa-chevron-up" data-uk-scroll></a>
        </div>
        <!-- totop end -->
    </footer>
    <!-- Javascript -->
    <script src="js/vendors/uikit.min.js"></script>
    <script src="js/vendors/blockit.min.js"></script>
    <script src="js/config-theme.js"></script>
    </body>
</html>
