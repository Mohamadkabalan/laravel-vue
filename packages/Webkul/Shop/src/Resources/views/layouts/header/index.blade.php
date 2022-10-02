<!-- HEADER TopBar -->
<nav id="top" class="header-topbar">
    <div class="row no-margin">
        <div class="col-sm-6 ">
            <div class="pull-left header-topbar__locale">
                <div class="dropdown">
                    <div class="locale-icon">
                        <span class="icon american-english-icon"></span>
                    </div>
                    <select class="locale-switcher styled-select">
                        <option value="en" selected="selected">English</option>
                    </select>
                    <div class="select-icon-container">
                        <i class="select-icon language-arrow-icon fal fa-angle-down"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 header-topbar__login">
            <div class="action float-right">
                @if(!auth()->guard('customer')->check())
                    <a href="sign-up.html" class="btn btn-link">Sign Up</a>
                    <a href="{{route('customer.session.index')}}" class="btn btn-primary">Sign In</a>
                @else
                    <a href="{{route('customer.session.destroy')}}" class="btn btn-primary">Sign Out</a>
                @endif

            </div>
        </div>
    </div>
</nav>
<!-- END HEADER TopBar -->
<!-- HEADER MiddleBar -->
<header id="sticky-header" class="sticky-header header-middle">
    <div id="header-container" class="row col-12 remove-padding-margin velocity-divide-page">
        <a href="home-out.html" class="brand-logo"></a>
        <div class="row no-margin right searchbar">
            <div class="col-7 no-padding input-group">
                <form role="search" id="search-form" action="/">
                    <div role="toolbar" class="btn-toolbar full-width">
                        <div class="row header-search-container">
                            <div class="geolocation-container col-md-4 no-padding">
                                <input id="geolocation_search" name="geolocation_search" type="search" placeholder="City, State or Zip code" class="form-control geolocation_search">
                                <a href="#" class="link"><i class="far fa-location-arrow"></i>Current location</a>
                            </div>
                            <div class="selectdiv col-md-3  no-padding">
                                <select name="category" class="form-control fs13 styled-select">
                                    <option value="">All Categories</option>
                                    <option value="44">Booster</option>
                                </select>
                                <div class="select-icon-container">
                                    <span class="select-icon fal fa-angle-down"></span>
                                </div>
                            </div>
                            <div class="full-width col-md-5 no-padding">
                                <input id="search_products" required="required" name="term" type="search" placeholder="Search for items or shows" class="form-control ui-autocomplete-input" autocomplete="off">
                                <button type="submit" id="header-search-icon" class="btn">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-5">
                <a href="#" class="wishlist-btn">
                    <i class="far fa-heart"></i>
                    <span>Wishlist</span>
                    <!-- <span class="badge">2</span> -->
                </a>
                <a href="#" class="compare-btn">
                    <i class="far fa-compress-alt"></i>
                    <span>Compare</span>
                    <!-- <span class="badge">2</span> -->
                </a>
                <div class="mini-cart-container pull-right">
                    <div class="dropdown disable-active">
                        <button type="button" class="btn btn-link disable-box-shadow cursor-not-allowed" id="mini-cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="mini-cart-content">
                                <i class="far fa-shopping-cart"></i>
                                <span class="badge">2</span>
                                <span class="cart-text">Cart</span>
                            </div>
                            <div class="down-arrow-container">
                                <span class="fal fa-angle-down"></span>
                            </div>
                        </button>
                        <div class="dropdown-menu dropdown-menu--cart dropdown-menu-right" aria-labelledby="mini-cart">
                            <div class="cart-dropdown__content">
                                <div class="cart-dropdown__list">
                                    <div class="cart-dropdown__content-head">Products from Seller name one</div>
                                    <div class="cart-dropdown__list-item">
                                        <div class="image">
                                            <a href="#">
                                                <img src="{{ asset('images/list-item.jpg') }}" alt="Product image">
                                            </a>
                                        </div>
                                        <div>3 x</div>
                                        <div>
                                            <p>22 LR 10+1 5 BARREL 2.2 LBS</p>
                                            <p><b>$4567.00</b></p>
                                        </div>
                                        <div class="ml-auto mr-3">
                                            <a href="#">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="cart-dropdown__list-item">
                                        <div class="image">
                                            <a href="#">
                                                <img src="{{ asset('images/list-item.jpg') }}" alt="Product image">
                                            </a>
                                        </div>
                                        <div>3 x</div>
                                        <div>
                                            <p>22 LR 10+1 5 BARREL 2.2 LBS</p>
                                            <p><b>$4567.00</b></p>
                                        </div>
                                        <div class="ml-auto mr-3">
                                            <a href="#">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="cart-dropdown__content-bottom">
                                        <small>Subtotal from this seller</small>
                                        <span>$999999.00</span>
                                        <a href="#" class="btn btn-primary">Checkout</a>
                                    </div>
                                </div>
                                <div class="cart-dropdown__list">
                                    <div class="cart-dropdown__content-head">Products from Seller name two</div>
                                    <div class="cart-dropdown__list-item">
                                        <div class="image">
                                            <a href="#">
                                                <img src="{{ asset('images/list-item.jpg') }}" alt="Product image">
                                            </a>
                                        </div>
                                        <div>3 x</div>
                                        <div>
                                            <p>22 LR 10+1 5 BARREL 2.2 LBS</p>
                                            <p><b>$4567.00</b></p>
                                        </div>
                                        <div class="ml-auto mr-3">
                                            <a href="#">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="cart-dropdown__list-item">
                                        <div class="image">
                                            <a href="#">
                                                <img src="{{ asset('images/list-item.jpg') }}" alt="Product image">
                                            </a>
                                        </div>
                                        <div>3 x</div>
                                        <div>
                                            <p>22 LR 10+1 5 BARREL 2.2 LBS</p>
                                            <p><b>$4567.00</b></p>
                                        </div>
                                        <div class="ml-auto mr-3">
                                            <a href="#">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="cart-dropdown__content-bottom">
                                        <small>Subtotal from this seller</small>
                                        <span>$999999.00</span>
                                        <a href="#" class="btn btn-primary">Checkout</a>
                                    </div>
                                </div>
                                <div class="cart-dropdown__list">
                                    <div class="cart-dropdown__content-head">Products from Seller name three</div>
                                    <div class="cart-dropdown__list-item">
                                        <div class="image">
                                            <a href="#">
                                                <img src="{{ asset('images/list-item.jpg') }}" alt="Product image">
                                            </a>
                                        </div>
                                        <div>3 x</div>
                                        <div>
                                            <p>22 LR 10+1 5 BARREL 2.2 LBS</p>
                                            <p><b>$4567.00</b></p>
                                        </div>
                                        <div class="ml-auto mr-3">
                                            <a href="#">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="cart-dropdown__list-item">
                                        <div class="image">
                                            <a href="#">
                                                <img src="{{ asset('images/list-item.jpg') }}" alt="Product image">
                                            </a>
                                        </div>
                                        <div>3 x</div>
                                        <div>
                                            <p>22 LR 10+1 5 BARREL 2.2 LBS</p>
                                            <p><b>$4567.00</b></p>
                                        </div>
                                        <div class="ml-auto mr-3">
                                            <a href="#">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="cart-dropdown__content-bottom">
                                        <small>Subtotal from this seller</small>
                                        <span>$999999.00</span>
                                        <a href="#" class="btn btn-primary">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer__actions cart-dropdown__footer">
                                <a href="#">View Shopping Cart</a>
                                <span>Total: $999999.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER MiddleBar -->
