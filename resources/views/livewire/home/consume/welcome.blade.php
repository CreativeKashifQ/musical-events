
<div>


    <div id="site">
    
    <!-- <div>
       <input type="file" wire:model="test_image"/>
       </div> -->

        <!-- <div class="Switcher">
			<button id="Switcher__control" class="Switcher__control"><i class="tim-cogwheel"></i></button>
			<h5>Change Color</h5>
			<ul id="colors" data-dir="app-assets/css/theme-color/">
				<li data-scheme="theme-default" data-color="#e43a90"></li>
				<li data-scheme="theme-river" data-color="#242e8a"></li>
				<li data-scheme="theme-alizarin" data-color="#673AB7"></li>
				<li data-scheme="theme-emerald" data-color="#2196f3"></li>
				<li data-scheme="theme-seven" data-color="#7940d7"></li>
				<li data-scheme="theme-carrot" data-color="#135ee4"></li>
				<li data-scheme="theme-amethyst" data-color="#07e6a5"></li>


				<li data-scheme="theme-six" data-color="#d8c600"></li>

				<li data-scheme="theme-eight" data-color="#e8300c"></li>
				<li data-scheme="theme-nine" data-color="#26cc74"></li>
			</ul>
		</div> -->



        <!--=========================-->
        <!--=        Navbar         =-->
        <!--=========================-->
       
        <header class="header header-magic-line">
            <div class="header-inner">
                <div class="tim-container clearfix">
                    <div class="header-magic-line-inner clearfix">
                        <div id="site-logo" class="float-left">

                            <a href="{{route('/')}}" class="logo-main ">
                            <h1 class="text-danger"> PopUpLive</h1>
                                <!-- <img src="app-assets/img/logo_5.png" alt="logo"> -->
                            </a>
                            

                            <a href="{{route('/')}}" class="logo-stickky ">
                            <h2 class="text-danger"> PopUpLive</h2>
                                <!-- <img src="app-assets/img/logo_5.png" alt="logo"> -->
                            </a>
                        </div>

                        <ul class="user-login">
                            <li>
                                <a href="#" class="off-opener">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li><a href="{{ route('account.consume.login') }}" class="text-dark"><i class="fa fa-user text-dark"></i>Login</a></li>
                            <li><a href="{{ route('account.consume.select-role')}}" class="text-dark"><i class="fa fa-sign-in text-dark"></i>Sign Up</a></li>


                            <li class="cart-count">
                                <a href="#">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                                    <span class="badge">3</span>
                                </a>

                                <ul class="custom-content cart-overview">
                                    <li class="cart-item clearfix">
                                        <a href="single-product.html" class="product-thumbnail">
                                            <img src="app-assets/media/product/9.jpg" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="single-product.html" class="product-title">Drums &amp;
                                                Percussion</a>
                                            <span class="product-quantity">1 x</span>
                                            <span class="product-price">
                                                <span class="currency">$</span> 300
                                            </span>
                                            <a href="#" class="product-remove tim-cross-out"></a>
                                        </div>
                                    </li>
                                    <li class="cart-item clearfix">
                                        <a href="single-product.html" class="product-thumbnail">
                                            <img src="app-assets/media/product/10.jpg" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="single-product.html" class="product-title">Rocking Guitar</a>
                                            <span class="product-quantity">2 x</span>
                                            <span class="product-price">
                                                <span class="currency">$</span> 250
                                            </span>
                                            <a href="#" class="product-remove tim-cross-out">

                                            </a>
                                        </div>
                                    </li>
                                    <li class="cart-item clearfix">
                                        <a href="single-product.html" class="product-thumbnail">
                                            <img src="app-assets/media/product/11.jpg" alt="">
                                        </a>
                                        <div class="product-details">
                                            <a href="single-product.html" class="product-title">Exclusive Headphones</a>
                                            <span class="product-quantity">3 x</span>
                                            <span class="product-price">
                                                <span class="currency">$</span> 550
                                            </span>
                                            <a href="#" class="product-remove tim-cross-out"></a>
                                        </div>
                                    </li>
                                    <li class="cart-subtotal">
                                        Sub Total
                                        <span class="amount">
                                            <span class="currency">$</span> 1100.00
                                        </span>
                                    </li>
                                    <li class="cart-actions">
                                        <a href="cart.html" class="view-cart">View Cart</a>
                                        <a href="checkout.html" class="checkout button pill small">
                                            <span class="icon-check"></span>
                                            Checkout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" class="search-trigger"><i class="fa fa-search"
                                        aria-hidden="true"></i></a>
                                <div class="search-input-wrapper">
                                    <input class="search-input" placeholder="Search" type="text">
                                </div>
                            </li>
                        </ul>

                        <div class="nav">

                            <ul class="group" id="header-menu-magic-line">
                                <li class="menu-item-has-children ">
                                    <a href="{{route('/')}}" class="text-dark" >Home </a>
                                    
                                </li>
                                <li class="menu-item-has-children current_page_item">
                                    <a href="artist.html" class="text-dark" >Aritist</a>
                                    
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="album.html" class="text-dark" >Album</a>
                                   
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="event.html" class="text-dark" >Events</a>
                                    <ul class="sub-menu">
                                        <li><a href="contact.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                            
                             
                               
                            </ul>
                        </div>
                        <!-- /.nav -->
                    </div>
                </div>
                <!-- /.tim-container -->
            </div>
            <!-- /.header-inner -->
        </header>
        <!-- /#header -->

        <div class="offset-menu-two">
            <a href="#" class="offset-closer"><img src="app-assets/img/offset-cross2.png" alt=""></a>
           
            <div class="footer-about">
                <p> There are many variations of passages of Lorem Ipsum available </p>

                <div class="footer-contact">
                    <div class="contact-details clearfix">
                        <i class="fa fa-phone"></i>
                        <p>Call: +01 245 815 8246</p>
                    </div>

                    <div class="contact-details clearfix">
                        <i class="fa fa-envelope"></i>
                        <p> info@yourdomain.com </p>
                    </div>

                    <div class="contact-details clearfix">
                        <i class="fa fa-map-marker"></i>
                        <p> 22 No. Street New York, West beas park.New York, USA </p>
                    </div>
                </div>
                <!-- /.footer-address -->
            </div>


            <div class="offset-social-two">
                <a href="">
                    <img src="app-assets/img/logo_5.png" alt="">
                </a>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>



        <!--=============================-->
        <!--=        Mobile Nav         =-->
        <!--=============================-->
        <header id="mobile-nav-wrap">
            <div class="mob-header-inner d-flex justify-content-between">
                <div id="mobile-logo" class="d-flex justify-content-start">
                    <a href="index.html"><img src="app-assets/img/logo.png" alt="Site Logo"></a>
                </div>

                <ul class="user-link nav justify-content-end">
                    <li><a href="#"><i class="fa fa-user"></i>Login</a></li>
                    <li><a href="#"><i class="fa fa-sign-in"></i>Sign Up</a></li>
                </ul>

                <div id="nav-toggle" class="nav-toggle hidden-md">
                    <div class="toggle-inner">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <!-- /.mob-header-inner -->
        </header>
        <!-- /#mobile-header -->

        <div class="mobile-menu-inner">

            <div class="mobile-nav-top-wrap">
                <div class="mob-header-inner clearfix">
                    <div class="d-flex justify-content-start mobile-logo">
                        <a href="index.html">
                            <img src="app-assets/img/logo-dark.png" alt="Site Logo">
                        </a>
                    </div>

                    <div class="close-menu">
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </div>
                <!-- /.mob-header-inner -->

                <div class="close-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
            <!-- /.mobile-nav-top-wrap -->

            <nav id="accordian">
                <ul class="accordion-menu">
                    <li>
                        <a href="#0" class="dropdownlink">Home</a>
                        <ul class="submenuItems">
                            <li><a href="index.html">Home One</a></li>
                            <li><a href="index-two.html">Home Two</a></li>
                            <li><a href="index-three.html">Home Three</a></li>
                            <li><a href="index-four.html">Home Four</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#0" class="dropdownlink">Artist</a>
                        <ul class="submenuItems">
                            <li><a href="artist.html">Artist</a></li>
                            <li><a href="artist-single.html">Artist Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="album.html">Album</a>
                    </li>
                    <li>
                        <a href="#0" class="dropdownlink">Events</a>
                        <ul class="submenuItems">
                            <li><a href="event.html">Events</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="tabs.html">Tabs</a>

                    </li>
                    <li>
                        <a href="#0" class="dropdownlink">Blog</a>
                        <ul class="submenuItems">
                            <li><a href="blog-list-right.html">Blog Standard</a></li>
                            <li><a href="blog-grid-right.html">Blog Grid</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="/gallery">Gallery</a>
                    </li>
                    <li>
                        <a href="#0" class="dropdownlink">Shop</a>
                        <ul class="submenuItems">
                            <li><a href="shop-right.html">Shop Right</a></li>
                            <li><a href="shop-left.html">Shop Left</a></li>
                            <li><a href="shop-single.html">Shop Details</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- /.mobile-menu-inner -->



        <!--============================-->
        <!--=        	Banner         =-->
        <!--============================-->
        <section class="banner-five" data-bg-image="app-assets/media/background/bg5.jpg">
       
            <div class="tim-container">
                <div id="para" class="paralax">
                    <div id="paralax-1" class="scene">
                        <div data-depth="-0.50"><img src="app-assets/media/background/mouse-move.png" alt=""></div>
                    </div>
                </div>
                <div class="baneer-five-content">
                    <div class="content sp-container">
                        <div class="sp-content">
                            <div class="sp-globe"></div>
                            <h2 class="frame-1">MILANDO</h2>
                            <h2 class="frame-2">JOHN LENNON</h2>
                            <h2 class="frame-3">PAUL McKART</h2>
                            <h2 class="frame-4">GEORGE HARRIS</h2>
       
                        </div>
                        <h3>DYNNEX HALL - March 17, 2018</h3>
                        <a class="tim-slide-btn" href="#">TICKETS</a>
                    </div>
                </div>
                <!-- /.tim-container -->
            </div>
            <!-- /.tim-container -->

            <div class="smoke-wrqpper">
                <canvas id="canvas"></canvas>
            </div>

        </section>
        <!-- /#page-header -->



        <section class="header_player style-fullwidth">

            <!-- Audio Player -->
            <div class="player-container-fullwidth">

                <!-- /.current-tracks -->
                <div id="header_player" class="jp-audio" role="application" aria-label="media player">
                    <div class="jp-type-playlist clearfix">
                        <div class="jp-gui jp-interface">
                            <div class="jp-controls">
                                <button class="jp-play" tabindex="0"><i class="fa fa-play"></i></button>
                            </div>
                            <!-- Display the track inside player -->

                            <div class="current-tracks">
                                <div id="main_player" class="jp-jplayer">

                                </div>
                                <div id="nowPlaying">
                                    <h3 class="track-name"></h3>
                                    <span class="artist-name"></span>
                                </div>
                                <!-- #nowPlaying -->
                            </div>
                            <!-- /.current-tracks -->

                            <div class="jp-progress">
                                <div class="jp-seek-bar">
                                    <div class="jp-play-bar"></div>
                                </div>
                            </div>

                            <div class="jp-duration" role="timer" aria-label="duration"></div>

                            <div class="vel-wrap">
                                <button class="jp-mute" tabindex="0"><i class="fa fa-volume-up"></i></button>

                                <div class="jp-volume-bar">
                                    <div class="jp-volume-bar-value"></div>
                                </div>

                            </div>
                            <!-- /.vel-wrap -->

                            <button id="playlist-toggle" class=""><i class="fa fa-list"></i></button>

                            <!-- Playlist -->
                            <div class="jp-playlist">
                                <ul>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

            @yield('content')



        <!--==============================-->
        <!--=        	Artist lineup         =-->
        <!--==============================-->
        <section class="section-padding-two artist-lineup">
            <div class="tim-container clearfix">
                <div class="row">
                    <div class="section-title style-four">
                        <h2>ARTIST LINEUP</h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered
                            alteration in some injected humour.</p>
                    </div>
                </div>
                <div class="swiper-container row"
                    data-swiper-config='{ "loop": true, "prevButton":".swiper-button-prev", "nextButton": ".swiper-button-next", "speed": 700, "autoplay": "5000", "slidesPerView": 6, "spaceBetween": 0, "grabCursor": true,"breakpoints": { "1300": { "slidesPerView": 4 }, "767": { "slidesPerView": 3 }, "500": { "slidesPerView": 1 }}}'>
                    <ul class="artist-line-wrapper swiper-wrapper">
                        <li class="artist-single clearfix swiper-slide">
                            <img src="app-assets/media/artist/a1.jpg" alt="">
                            <div class="artist-single-content">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                                <h6>James Hetfield</h6>
                                <p>Band: Metallica</p>
                            </div>
                        </li>

                        <li class="artist-single clearfix swiper-slide">
                            <img src="app-assets/media/artist/a2.jpg" alt="">
                            <div class="artist-single-content">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                                <h6>James Hetfield</h6>
                                <p>Band: Metallica</p>
                            </div>
                        </li>

                        <li class="artist-single clearfix swiper-slide">
                            <img src="app-assets/media/artist/a3.jpg" alt="">
                            <div class="artist-single-content">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                                <h6>James Hetfield</h6>
                                <p>Band: Metallica</p>
                            </div>
                        </li>

                        <li class="artist-single clearfix swiper-slide">
                            <img src="app-assets/media/artist/a4.jpg" alt="">
                            <div class="artist-single-content">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                                <h6>James Hetfield</h6>
                                <p>Band: Metallica</p>
                            </div>
                        </li>
                        <li class="artist-single clearfix swiper-slide">
                            <img src="app-assets/media/artist/a1.jpg" alt="">
                            <div class="artist-single-content">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                                <h6>James Hetfield</h6>
                                <p>Band: Metallica</p>
                            </div>
                        </li>

                        <li class="artist-single clearfix swiper-slide">
                            <img src="app-assets/media/artist/a2.jpg" alt="">
                            <div class="artist-single-content">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                                <h6>James Hetfield</h6>
                                <p>Band: Metallica</p>
                            </div>
                        </li>

                        <li class="artist-single clearfix swiper-slide">
                            <img src="app-assets/media/artist/a3.jpg" alt="">
                            <div class="artist-single-content">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                                <h6>James Hetfield</h6>
                                <p>Band: Metallica</p>
                            </div>
                        </li>

                        <li class="artist-single clearfix swiper-slide">
                            <img src="app-assets/media/artist/a4.jpg" alt="">
                            <div class="artist-single-content">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                                <h6>James Hetfield</h6>
                                <p>Band: Metallica</p>
                            </div>
                        </li>
                    </ul>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <!-- /.tim-container -->
        </section>
        <!-- /#about -->


        <!--==============================-->
        <!--=        	Latest release         =-->
        <!--==============================-->
        <section class="section-padding latest-relese">
            <div class="container">
                <div class="row">
                    <div class="section-title style-four">
                        <h2>LATEST RELEASE</h2>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="col-xl-10" id="moving-player">
                            <div class="row">
                                <div class="col-sm-8 col-md-9 col-lg-8">
                                    <div class="latest-album-left">
                                        <div class="cover-img">
                                            <img src="../../app-assets/media/album/cover.jpg" alt="">
                                        </div>
                                        <div class="albun-details">
                                            <h6>ALBUM INFO</h6>
                                            <p>Most happening band Blood Chain recently has released their debut album
                                                called
                                                <span>???HEAVEN???</span>. Officialy the album released on May 19, 2018 in
                                                Harmonik Studio, Venice. This <span>Alternative Rock</span> Band made 12
                                                songs with total 36:20 minutes timeline.
                                            </p>
                                            <p>The Lineup: Tony McAlpine (Guitars), Jhon Lennon (Vocal & Guitars), Mike
                                                Portnoy (Drums), Billy Shehan (Bass Guitars), Chester Krain (Keys).</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-4">
                                    <div class="latest-album-right">
                                        <h6>LISTEN DEMO NOW</h6>
                                        <div class="latest-album-btn">
                                            <a href="app-assets/media/audio/test.mp3" class="sm2_button"><i></i></a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="record-player">
                                        <div class="player-main">
                                            <img src="app-assets/media/background/record.png" alt="">
                                        </div>
                                        <div class="player-main-shade">
                                            <img src="app-assets/media/background/record-shade.png" alt="">
                                        </div>
                                        <div class="record-key">
                                            <img src="app-assets/media/background/player-key.png" alt="">
                                        </div>
                                    </div>

                                </div>




                                <div class="bubble-wrap">
                                    <div class="bubble icon-1"></div>
                                    <div class="bubble icon-2 "></div>
                                    <div class="bubble icon-3"></div>
                                    <div class="bubble icon-4"></div>

                                    <div class="bubble icon-5"></div>
                                    <div class="bubble icon-2 "></div>
                                    <div class="bubble icon-4"></div>
                                    <div class="bubble icon-5"></div>

                                    <div class="bubble icon-1"></div>
                                    <div class="bubble icon-2 "></div>


                                    <div class="bubble icon-5"></div>
                                    <div class="bubble icon-3"></div>
                                    <div class="bubble icon-3"></div>

                                    <div class="bubble icon-2 "></div>
                                    <div class="bubble icon-3"></div>
                                    <div class="bubble icon-1"></div>
                                    <div class="bubble icon-2 "></div>
                                    <div class="bubble icon-3"></div>
                                    <div class="bubble icon-4"></div>
                                    <div class="bubble icon-4"></div>
                                    <div class="bubble icon-1"></div>
                                    <div class="bubble icon-5"></div>
                                    <div class="bubble icon-1"></div>
                                    <div class="bubble icon-2 "></div>
                                    <div class="bubble icon-4"></div>
                                    <div class="bubble icon-5"></div>
                                    <div class="bubble icon-1"></div>
                                    <div class="bubble icon-2 "></div>
                                    <div class="bubble icon-1"></div>
                                    <div class="bubble icon-2 "></div>
                                    <div class="bubble icon-4"></div>
                                    <div class="bubble icon-5"></div>
                                    <div class="bubble icon-5"></div>
                                    <div class="bubble icon-1"></div>
                                    <div class="bubble icon-4"></div>
                                    <div class="bubble icon-5"></div>
                                    <div class="bubble icon-3"></div>
                                    <div class="bubble icon-4"></div>
                                    <div class="bubble icon-2 "></div>
                                    <div class="bubble icon-3"></div>
                                    <div class="bubble icon-3"></div>
                                    <div class="bubble icon-4"></div>
                                    <div class="bubble icon-1"></div>
                                    <div class="bubble icon-5"></div>
                                    <div class="bubble icon-2 "></div>
                                    <div class="bubble icon-3"></div>
                                    <div class="bubble icon-1"></div>
                                    <div class="bubble icon-3"></div>
                                    <div class="bubble icon-4"></div>
                                    <div class="bubble icon-5"></div>

                                </div>

                                <div class="bubble-wrap-right">
                                    <div class="bubble icon-1"></div>
                                    <div class="bubble icon-2 "></div>
                                    <div class="bubble icon-3"></div>
                                    <div class="bubble icon-4"></div>

                                    <div class="bubble icon-5"></div>
                                    <div class="bubble icon-2 "></div>
                                    <div class="bubble icon-4"></div>
                                    <div class="bubble icon-5"></div>

                                    <div class="bubble icon-1"></div>
                                    <div class="bubble icon-2 "></div>


                                    <div class="bubble icon-5"></div>
                                    <div class="bubble icon-3"></div>
                                    <div class="bubble icon-3"></div>

                                    <div class="bubble icon-2 "></div>
                                    <div class="bubble icon-3"></div>
                                    <div class="bubble icon-1"></div>
                                    <div class="bubble icon-2 "></div>
                                    <div class="bubble icon-3"></div>
                                    <div class="bubble icon-4"></div>
                                    <div class="bubble icon-4"></div>
                                    <div class="bubble icon-1"></div>

                                    <div class="bubble icon-5"></div>

                                    <div class="bubble icon-1"></div>
                                    <div class="bubble icon-2 "></div>

                                    <div class="bubble icon-4"></div>
                                    <div class="bubble icon-5"></div>
                                    <div class="bubble icon-1"></div>
                                    <div class="bubble icon-2 "></div>
                                    <div class="bubble icon-1"></div>

                                    <div class="bubble icon-2 "></div>
                                    <div class="bubble icon-4"></div>
                                    <div class="bubble icon-5"></div>
                                    <div class="bubble icon-5"></div>
                                    <div class="bubble icon-1"></div>
                                    <div class="bubble icon-4"></div>
                                    <div class="bubble icon-5"></div>
                                    <div class="bubble icon-3"></div>
                                    <div class="bubble icon-4"></div>

                                    <div class="bubble icon-2 "></div>
                                    <div class="bubble icon-3"></div>

                                    <div class="bubble icon-3"></div>
                                    <div class="bubble icon-4"></div>
                                    <div class="bubble icon-1"></div>
                                    <div class="bubble icon-5"></div>
                                    <div class="bubble icon-2 "></div>
                                    <div class="bubble icon-3"></div>
                                    <div class="bubble icon-1"></div>
                                    <div class="bubble icon-3"></div>
                                    <div class="bubble icon-4"></div>
                                    <div class="bubble icon-5"></div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.latest-album-info -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.tim-container -->
        </section>
        <!-- /#about -->



        <!--==============================-->
        <!--=        	Latest album         =-->
        <!--==============================-->
        <section class="three-d-album">
            <div class="section-title style-four">
                <h2>TRENDING SHOWS</h2>
                <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered
                    alteration in some injected humour.</p>
            </div>
            <div class="more-album">


                <a href="#">SEE ALL ALBUMS<i class="fa fa-play" aria-hidden="true"></i></a>

            </div>
            <div class="three-d-album-width">
                <div class="row">

                    <div class="threed-container-wrapper">
                        <div class="threed-container-inner">
                            <div class="single-3d empty-space">
                            </div>
                            <div class="single-3d">
                                <a href="#"><img src="app-assets/media/albumart/1.png" alt=""></a>
                            </div>
                            <div class="single-3d  empty-space">

                            </div>
                            <div class="single-3d">
                                <a href="#"><img src="app-assets/media/albumart/2.png" alt=""></a>
                            </div>
                            <div class="single-3d  empty-space">
                            </div>
                            <div class="single-3d">
                                <a href="#"><img src="app-assets/media/albumart/3.png" alt=""></a>
                            </div>
                            <div class="single-3d">
                                <a href="#"><img src="app-assets/media/albumart/4.png" alt=""></a>
                            </div>
                            <div class="single-3d">
                                <a href="#"><img src="app-assets/media/albumart/5.png" alt=""></a>
                            </div>
                            <div class="single-3d">
                                <a href="#"><img src="app-assets/media/albumart/6.png" alt=""></a>
                            </div>
                            <div class="single-3d">
                                <a href="#"><img src="app-assets/media/albumart/7.png" alt=""></a>
                            </div>

                            <div class="single-3d">
                                <a href="#"><img src="app-assets/media/albumart/8.png" alt=""></a>
                            </div>
                            <div class="single-3d">
                                <a href="#"><img src="app-assets/media/albumart/13.png" alt=""></a>
                            </div>
                            <div class="single-3d">
                                <a href="#"><img src="app-assets/media/albumart/10.png" alt=""></a>
                            </div>
                            <div class="single-3d  empty-space">
                            </div>
                            <div class="single-3d">
                                <a href="#"><img src="app-assets/media/albumart/11.png" alt=""></a>
                            </div>
                            <div class="single-3d  empty-space">
                            </div>
                            <div class="single-3d">
                                <a href="#"><img src="app-assets/media/albumart/12.png" alt=""></a>
                            </div>

                            <div class="single-3d  empty-space">
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- /.tim-container -->
        </section>
        <!-- /#about -->



        <!--==============================-->
        <!--=        	Show schedule        =-->
        <!--==============================-->
        <section class="show-archive">
            <div class="container">
                <div class="d-flex justify-content-center row">
                    <div class="col-xl-10">
                        <div class="section-title style-five">
                            <h2>PREVIOUS SHOWS</h2>
                            <p>There are many variations of passages of Lorem Ipsum available but the majority.</p>
                        </div>
                        <div class="show-archive-wrapper row no-gutters">
                            <div class="offset-xs-0 offset-sm-4 col-sm-4 col-6">
                                <div class="single-show-archive">
                                    <img src="app-assets/media/album/18.jpg" alt="">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="single-show-archive">
                                    <img src="app-assets/media/album/19.jpg" alt="">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <div class="single-show-archive video-archive">
                                    <img src="app-assets/media/album/20.jpg" alt="">
                                    <div class="video-player">
                                        <a href="https://www.youtube.com/watch?v=0I8GmbDU7c4"
                                            class="video-btn-three popup-video-btn">
                                            <i class="fa fa-play"></i>
                                        </a>
                                        <div class="video-btn-shade">
                                            <i class="fa fa-play"></i>
                                        </div>
                                        <div class="text">
                                            <p>Show Stoppers Time</p>
                                            <span>(Live in Tokyo, 2017)</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="single-show-archive">
                                    <img src="app-assets/media/album/21.jpg" alt="">
                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.col-xl -->
                </div>
                <!-- /.row -->
            </div>
        </section>
        <!-- /#about -->

        <!--==============================-->
        <!--=        	Show ticket        =-->
        <!--==============================-->
        <section class="section-padding show-archive">
            <div class="container">
                <div class="d-flex justify-content-center row">
                    <div class="col-xl-10">
                        <div class="section-title style-four">
                            <h2>UPCOMING SHOWS</h2>
                        </div>
                        <div class="single-show-ticket row no-guters">
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="date-time">
                                    <h6>15</h6>
                                    <p>December, 2018</p>
                                </div>

                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-7">
                                <h5>Dream Theatre (Live in London)</h5>
                                <p>23 Lee Rd, Blackheath, London SE3 9RQ, UK</p>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-2">
                                <div class="a_hover">
                                    <a href="#">TICKETS</a>
                                    <img class="svg" src="app-assets/media/background/round_black.svg" alt="">
                                    <img class="svg" src="app-assets/media/background/round.svg" alt="">
                                    <i class="fa fa-play" aria-hidden="true"></i>

                                </div>
                            </div>
                        </div>
                        <div class="single-show-ticket row no-guters">
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="date-time">
                                    <h6>15</h6>
                                    <p>January, 2018</p>
                                </div>

                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-7">
                                <h5>Maroon 5 - NEWBO EVOLVE FESTIVAL</h5>
                                <p>CEDAR RAPIDS, IA</p>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-2">
                                <div class="a_hover">
                                    <a href="#">TICKETS</a>
                                    <img class="svg" src="app-assets/media/background/round_black.svg" alt="">
                                    <img class="svg" src="app-assets/media/background/round.svg" alt="">
                                    <i class="fa fa-play" aria-hidden="true"></i>

                                </div>
                            </div>
                        </div>
                        <div class="single-show-ticket row no-guters">
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="date-time">
                                    <h6>11</h6>
                                    <p>July, 2018</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-7">
                                <h5>Red Hot Chilli Peppers</h5>
                                <p>PARQUE FUNDIDORA, MONTERRY, MEXICO</p>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-2">
                                <div class="a_hover">
                                    <a href="#">RSVP</a>
                                    <img class="svg" src="app-assets/media/background/round_black.svg" alt="">
                                    <img class="svg" src="app-assets/media/background/round.svg" alt="">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-show-ticket row no-guters">
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="date-time">
                                    <h6>10</h6>
                                    <p>January, 2018</p>
                                </div>

                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-7">
                                <h5>SYMPHONY X</h5>
                                <p>UNITED CENTER, CHICAGO, IL</p>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-2">
                                <div class="a_hover">
                                    <a href="#">TICKETS</a>
                                    <img class="svg" src="app-assets/media/background/round_black.svg" alt="">
                                    <img class="svg" src="app-assets/media/background/round.svg" alt="">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>

                        <div class="single-show-ticket row no-guters">
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <div class="date-time">
                                    <h6>27</h6>
                                    <p>November, 2018</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-7">
                                <h5>NIRVANA</h5>
                                <p>BRIDGESTONE ARENA, NASHVILLE, TN</p>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-2">
                                <div class="a_hover">
                                    <a href="#">TICKETS</a>
                                    <img class="svg" src="app-assets/media/background/round_black.svg" alt="">
                                    <img class="svg" src="app-assets/media/background/round.svg" alt="">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.latest-album-info -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.show-archive -->


        <!--============================-->
        <!--=        	Spotlight          =-->
        <!--============================-->
        <section class="section-padding-two wide_line_bg">
            <div class="container">
                <div class="d-flex justify-content-center row">
                    <div class="col-xl-10">
                        <div class="section-title style-five">
                            <h2>SPOTLIGHT</h2>
                            <p>There are many variations of passages of Lorem Ipsum available but the majority.</p>
                        </div>
                        <div class="row">
                            <div class="grid-60">
                                <div class="spotlight-inner">
                                    <img src="app-assets/media/performance/vid-1.jpg" alt="">
                                    <div class="video-player-three">
                                        <a href="https://www.youtube.com/watch?v=0I8GmbDU7c4"
                                            class="video-btn-four popup-video-btn">
                                            <i class="fa fa-play"></i>
                                        </a>
                                        <div class="video-btn-shade">
                                            <i class="fa fa-play"></i>
                                        </div>
                                        <div class="text">
                                            <p>Show Stoppers Time</p>
                                            <span>(Live in Tokyo, 2017)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-xl-8 -->
                            <div class="grid-40">
                                <div class="subscribe-two">
                                    <div class="section-title style-five">
                                        <h2>SUBSCRIBE</h2>
                                        <p>There are many variations of passages of Lorem Ipsum available but the
                                            majority.</p>
                                    </div>
                                    <form action="#">
                                        <input placeholder="Enter Your Email" type="text">
                                        <button type="submit" class="submit">send me</button>
                                    </form>
                                </div>
                                <!-- /.subscribe-two -->
                            </div>
                            <!-- /.col-xl-4 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.col-xl- -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /#about -->



        <!--======================================-->
        <!--=        	Store        	         =-->
        <!--======================================-->
        <section class="section-padding-two brand-shoparea">
            <div class="container">
                <div class="d-flex justify-content-center row">
                    <div class="col-xl-10">
                        <div class="row">
                            <div class="grid-40">
                                <div class="section-title style-six">
                                    <h2>BRAND SHOP</h2>
                                </div>
                                <div class="brand-shop-carousel">
                                    <div class="swiper-container row"
                                        data-swiper-config='{ "loop": true, "paginationClickable" :true, "autoplay": 5000, "pagination": "store-pagination", "speed": 700, "effect": "slide", "slidesPerView": 1, "spaceBetween": 0, "grabCursor": true,"breakpoints": { "1300": { "slidesPerView": 1 }, "767": { "slidesPerView": 1 }, "500": { "slidesPerView": 1 }}}'>
                                        <ul class="product-five swiper-wrapper">
                                            <li class="product-single clearfix swiper-slide">
                                                <img src="app-assets/media/product/51.jpg" alt="">
                                            </li>

                                            <li class="product-single clearfix swiper-slide">
                                                <img src="app-assets/media/product/52.jpg" alt="">
                                            </li>

                                            <li class="product-single clearfix swiper-slide">
                                                <img src="app-assets/media/product/53.jpg" alt="">
                                            </li>
                                        </ul>
                                        <div id="store-pagination"
                                            class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                                            <span class="swiper-pagination-bullet"></span>
                                            <span
                                                class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                                            <span class="swiper-pagination-bullet"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.brand-shop-carousel -->
                            </div>
                            <!-- /.col-xl-4 -->
                            <div class="grid-60">
                                <div class="section-title style-six">
                                    <h2>STORIES</h2>
                                </div>
                                <div class="soundcloud-wrapper">

                                    <iframe allow="autoplay"
                                        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/473962047&color=%23d6d6d6&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
                                    <h6>I am a blog post with an embeded soundcloud player. You can share a musician???s
                                        story here.</h6>
                                    <footer>
                                        <a href="#">READ THIS STORY<i class="fa fa-play"></i></a>
                                        <p><span>Hits</span>- 12742</p>
                                    </footer>
                                </div>
                            </div>
                            <!-- /.col-xl-8 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.col-xl- -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /#about -->


        <!--======================================-->
        <!--=        	Partners        	         =-->
        <!--======================================-->
        <section class="partners-area">
            <div class="container">
                <div class="d-flex justify-content-center row">
                    <div class="col-xl-10">

                        <div class="row">
                            <div class=" col-md-5">
                                <div class="section-title style-five float-left">
                                    <h2>OUR SPONSORS</h2>
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority.
                                        We are proud there are many variations of passages of Lorem Ipsum available.</p>
                                </div>
                            </div>
                            <div class=" col-md-7">
                                <div class="partner-swipper swiper-container row"
                                    data-swiper-config='{ "loop": true, "prevButton":".swiper-button-prev", "nextButton": ".swiper-button-next", "speed": 700, "autoplay": false, "slidesPerView": 4, "spaceBetween": 0, "grabCursor": true,"breakpoints": { "991": { "slidesPerView": 2 }, "767": { "slidesPerView": 3 }, "500": { "slidesPerView": 2 }}}'>
                                    <ul class="artist-line-wrapper swiper-wrapper">
                                        <li class="clearfix swiper-slide">
                                            <a href="#"><img src="app-assets/media/logo/21.png" alt=""></a>

                                        </li>

                                        <li class="clearfix swiper-slide">
                                            <a href="#"><img src="app-assets/media/logo/22.png" alt=""></a>

                                        </li>

                                        <li class=" clearfix swiper-slide">
                                            <a href="#"><img src="app-assets/media/logo/23.png" alt=""></a>

                                        </li>

                                        <li class="clearfix swiper-slide">
                                            <a href="#"><img src="app-assets/media/logo/24.png" alt=""></a>

                                        </li>
                                    </ul>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>

                            </div>
                            <!-- /.col-xl-4 -->


                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.col-xl- -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /#about -->


        <!--==============================-->
        <!--=        	Footer         	 =-->
        <!--==============================-->

        <footer id="footer-3">
            <div class="container">
                <div class="d-flex justify-content-center row">
                    <div class="col-xl-10">
                        <div class="footer-feed">
                            <div class="section-title style-four">
                                <h2>FROM THE FEED</h2>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="../../app-assets/media/instagram/f1.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="../../app-assets/media/instagram/f2.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="../../app-assets/media/instagram/f3.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="../../app-assets/media/instagram/f4.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="../../app-assets/media/instagram/f5.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="../../app-assets/media/instagram/f6.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="../../app-assets/media/instagram/f7.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="../../app-assets/media/instagram/f8.jpg" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-three-bottom">
                            <div class="footer-three-left">
                                <a href="#">
                                    <img src="app-assets/img/logo_5_dark.png" alt="">
                                </a>
                                <p>There are many variations of passages of Lorem Ipsum available but the majority. We
                                    are proud there are many variations of passages of Lorem Ipsum available but the
                                    majority of the users does use this.</p>
                            </div>
                            <div class="footer-three-right">
                                <ul class="footer-three-menu">
                                    <li><a href="#">Rules</a></li>
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Tickets</a></li>
                                    <li><a href="#">policy</a></li>
                                </ul>
                                <div class="footer-social-three">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                        <li><a href="#"><i class="fa fa-cloud"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vine"></i></a></li>
                                        <li><a href="#"><i class="fa fa-apple"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.col-xl- -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </footer>
        <!-- /#footer -->

        <div class="backtotop">
            <i class="fa fa-angle-up backtotop_btn"></i>
        </div>


    </div>
</div>
