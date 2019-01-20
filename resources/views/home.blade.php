@extends('layouts.uikit')

@section('content')

<div class="uk-offcanvas-content">
            <!--HEADER-->
            <header id="top-head" class="uk-position-fixed">
                <div class="uk-container uk-container-expand uk-background-primary">
                    <nav class="uk-navbar uk-light" data-uk-navbar="mode:click">
                        <div class="uk-navbar-left">
                            <a class="uk-navbar-item uk-logo" href="#">STEREMY</a>
                        </div>
                        <div class="uk-navbar-center">
                            <div class="uk-navbar-item uk-visible@s">
                                <form action="https://zzseba78.github.io/Kick-Off/dashboard.html" class="uk-search uk-search-default">
                                    <span data-uk-search-icon></span>
                                    <input class="uk-search-input search-field" type="search" placeholder="Search">
                                </form>
                            </div>
                        </div>
                        <div class="uk-navbar-right">
                            <ul class="uk-navbar-nav">
                                <li>
                                    <a href="#" data-uk-icon="icon:user"></a>
                                    <div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-left">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li class="uk-nav-header">YOUR ACCOUNT</li>
                                            <li><a href="#"><span data-uk-icon="icon: info"></span> Profile</a></li>
                                            <li><a href="#"><span data-uk-icon="icon: refresh"></span> Edit</a></li>
                                            <li><a href="#"><span data-uk-icon="icon: settings"></span> Configuration</a></li>
                                            <li class="uk-nav-divider"></li>
                                            <li><a href="#"><span data-uk-icon="icon: image"></span> Your Orders</a></li>
                                            <li class="uk-nav-divider"></li>
                                            <li><a href="#"><span data-uk-icon="icon: sign-out"></span> Logout</a></li>
                                            
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#" data-uk-icon="icon: settings"></a></li>
                                <li><a href="#" data-uk-icon="icon: cog"></a></li>
                                <li><a class="uk-navbar-toggle" data-uk-toggle data-uk-navbar-toggle-icon href="#offcanvas-nav"></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
            <!--/HEADER-->
            <!-- LEFT BAR -->
            <aside id="left-col" class="uk-light uk-visible@m">
                <div class="profile-bar">
                    <div class="uk-grid uk-grid-small uk-flex uk-flex-middle" data-uk-grid>
                        <div class="uk-width-auto"><img src="img/1.jpg" alt="" class="uk-border-circle profile-img"></div>
                        <div class="uk-width-expand">
                            <span class="uk-text-small uk-text-muted">Welcome</span>
                            <h4 class="uk-margin-remove-vertical text-light">Steremy</h4>
                        </div>
                    </div>
                </div>
                
                <div class="bar-content uk-position-relative">
                    <ul class="uk-nav-default uk-nav-parent-icon" data-uk-nav>
                        <li class="uk-nav-header">MAIN SECTIONS</li>
                        <li class="uk-parent uk-open">
                            <a href="#">Parent</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent">
                            <a href="#">Parent</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent">
                            <a href="#">Parent</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                            </ul>
                        </li>
                        <li class="uk-nav-header">SECONDARY</li>
                        <li class="uk-parent">
                            <a href="#">Parent</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent">
                            <a href="#">Parent</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                            </ul>
                        </li>
                <li class="uk-nav-header">LIST OF PAGES</li>
                        <li><a href="album.html"><span class="uk-margin-small-right" data-uk-icon="icon: image"></span> Album</a></li>
                        <li><a href="article.html"><span class="uk-margin-small-right" data-uk-icon="icon: info"></span> Article</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="login.html"><span class="uk-margin-small-right" data-uk-icon="icon: sign-in"></span> Login</a></li>
                        <li><a href="login-dark.html"><span class="uk-margin-small-right" data-uk-icon="icon: sign-in"></span> Login-Dark</a></li>
                    </ul>
                </div>
                <div class="uk-position-bottom bar-bottom">
                    <ul class="uk-subnav uk-flex uk-flex-center uk-child-width-1-6" data-uk-grid>
                        <li>
                            <a href="#" class="uk-icon-link" data-uk-icon="icon: home"></a>
                        </li>
                        <li>
                            <a href="#" class="uk-icon-link" data-uk-icon="icon: settings"></a>
                        </li>
                        <li>
                            <a href="#" class="uk-icon-link" data-uk-icon="icon: social"></a>
                        </li>
                        <li>
                            <a href="#" class="uk-icon-link" data-uk-icon="icon: comment"></a>
                        </li>
                        <li>
                            <a href="#" class="uk-icon-link" data-uk-tooltip="Sign out" data-uk-icon="icon: sign-out"></a>
                        </li>
                    </ul>
                </div>
            </aside>
            <!-- /LEFT BAR -->
            <!-- CONTENT -->

            <div id="content" data-uk-height-viewport="expand: true">
                <div class="uk-container uk-container-expand">

                            <div uk-slider="center: true; autoplay:true">

                                <div class="uk-position-relative uk-visible-toggle uk-light">

                                    <ul class="uk-slider-items uk-child-width-1-3@s uk-grid">
                                        <li>
                                            <div class="uk-card uk-card-default">
                                                <div class="uk-card-media-top">
                                                    <img src="../img/6.jpg" alt="">
                                                    <div class="uk-position-center uk-panel"><h3 class="uk-heading-bullet">Make the World Your Bussiness</h3></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-card uk-card-default">
                                                <div class="uk-card-media-top">
                                                    <img src="../img/7.jpg" alt="">
                                                    <div class="uk-position-center uk-panel"><h3>Make the World Your Bussiness</h3></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-card uk-card-default">
                                                <div class="uk-card-media-top">
                                                    <img src="../img/3.jpg" alt="">
                                                    <div class="uk-position-center uk-panel"><h3>Make the World Your Bussiness</h3></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-card uk-card-default">
                                                <div class="uk-card-media-top">
                                                    <img src="../img/4.jpg" alt="">
                                                    <div class="uk-position-center uk-panel"><h3>Make the World Your Bussiness</h3></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-card uk-card-default">
                                                <div class="uk-card-media-top">
                                                    <img src="../img/5.jpg" alt="">
                                                    <div class="uk-position-center uk-panel"><h3>Make the World Your Bussiness</h3></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                                </div>

                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

                            </div>
                    
                </div>
                <div class="uk-container">
                    <h5 class="uk-heading-line uk-text-center"><span>Pay With MPESA Online OR on Delivery</span></h5>

                    <div class="uk-h3">DEALS OF THE WEEK</div>
                        @foreach($products as $product)
                        <div class="uk-child-width-1-4@m" uk-grid>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top">
                                        <img class="img-responsive" src="{{asset('storage/products/'.$product->image)}}"
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">{{$product->name}}</h3>
                                        <p>{{$product->price}}</p>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        @endforeach
                    </div>
{{--                     {{ $products->links() }} --}}
                </div>
            </div>
            <!-- /CONTENT -->
            <!-- OFFCANVAS -->
            <div id="offcanvas-nav" data-uk-offcanvas="flip: true; overlay: true">
                <div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
                    <button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close></button>
                    <ul class="uk-nav uk-nav-default">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li class="uk-parent">
                            <a href="#">Parent</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                            </ul>
                        </li>
                        <li class="uk-nav-header">Header</li>
                        <li><a href="#js-options"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: table"></span> Item</a></li>
                        <li><a href="#"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: thumbnails"></span> Item</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: trash"></span> Item</a></li>
                    </ul>
                    <h3>Title</h3>
                    <p>KSH.2000ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            <!-- /OFFCANVAS -->
</div>
@endsection
