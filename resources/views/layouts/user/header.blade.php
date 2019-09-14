<header class="header-area header-in-container clearfix">
    <div class="header-top-area">
        <div class="container">
            <div class="header-top-wap">
                <div class="language-currency-wrap">
                    <div class="same-language-currency language-style">
                        <a href="#">English <i class="fa fa-angle-down"></i></a>
                        <div class="lang-car-dropdown">
                            <ul>
                                <li><a href="#">Arabic </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="same-language-currency use-style">
                        <a href="#">USD  <i class="fa fa-angle-down"></i></a>
                        <div class="lang-car-dropdown">
                            <ul>
                                <li><a href="#">Taka (BDT) </a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="same-language-currency">
                        <p>Call Us 98880 09606</p>
                    </div>
                </div>
                <div class="header-offer">
                   <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li></li>
                        @else
                            <li class="dropdown">
                                <a href="#" role="button" aria-expanded="false">
                                   Hello {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky-bar res-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-6 col-4">
                    <div class="logo">
                        <a href="index.html">
                            <img alt="" src="{{url('public/assets/img/logo/logo.png')}}" class="img-thumbnail" width="150">
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li><a href="/punjab">Home </a>
                                </li>
                                <li><a href="#"> District Shop <i class="fa fa-angle-down"></i> </a>
                                    <ul class="mega-menu">
                                    <li>
                                        <ul>
                                            @foreach($dist as $k=>$v)
                                            <li class="mega-menu-title"><a href="{{route('districts',['d'=>$v->name])}}">{{$v->name}}</a></li>
                                            @if($k>=$dist->count()/2)
                                            @break
                                            @endif
                                            @endforeach
                                       
                                        </ul>
                                        
                                    </li>
                                    <li>
                                        <ul>
                                            @foreach($dist as $k=>$d)
                                             @if($k<=$dist->count()/2)
                                            @continue
                                            @endif
                                            <li class="mega-menu-title"><a href="{{route('districts',['d'=>$d->name])}}">{{$d->name}}</a></li>
                                            @endforeach
                                       
                                        </ul>
                                        
                                    </li>
                                    <li>
                                        <ul>
                                            <li class="mega-menu-img"><a href="shop.html"><img src="{{url('public/assets/img/banner/banner-12.png')}}" alt=""></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                </li>
                                <li><a href="#">Category <i class="fa fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        @foreach($cat as $c)
                                        <li><a href="{{route('category',['c'=>$c->name])}}">{{$c->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{route('about')}}"> About </a></li>
                                <li><a href="{{route('contact')}}"> Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-8">
                       <div class="header-right-wrap">
                        <div class="same-style header-search">
                            <a class="search-active" href="#"><i class="pe-7s-search"></i></a>
                            <div class="search-content">
                                <form action="#">
                                    <input type="text" placeholder="Search" />
                                    <button class="button-search"><i class="pe-7s-search"></i></button>
                                </form>
                            </div> 
                        </div>
                        <div class="same-style account-satting">
                            <a class="account-satting-active" href="#"><i class="pe-7s-user-female"></i></a>
                            <div class="account-dropdown">
                                <ul>
                                    @if (Auth::guest())
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    @else
                                    <li><a href="#">Wishlist  </a></li>
                                    <li><a href="{{ route('account') }}">my account</a></li>
                                    <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="same-style header-wishlist">
                            <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                        </div>
                        <div class="same-style cart-wrap">
                            <button class="icon-cart">
                                <i class="pe-7s-shopbag"></i>
                                <span class="count-style">
                                    {{Cart::getContent()->count()}}
                                </span>
                            </button>
                            <div class="shopping-cart-content">
                                <ul>
                                    @if(Cart::getContent())
                                    @foreach(Cart::getContent() as $item)
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" class="img img-thumbnail" src="{{url('public/files')}}/{{$item->attributes['img']}}"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="#">{{$item->name}}</a></h4>
                                            <h6>Qty: {{$item->quantity}}</h6>
                                            <span>Rs {{$item->price}}</span>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="{{route('cart.remove',['id'=>$item->id])}}"><i class="fa fa-times-circle"></i></a>
                                        </div>
                                    </li>
                                    @endforeach
                                    @endif
                                    
                                </ul>
                                <div class="shopping-cart-total">
                                    <!-- <h4>Shipping : <span>$20.00</span></h4> -->
                                    <h4>Total : <span class="shop-total">Rs {{Cart::getSubTotal()}}</span></h4>
                                </div>
                                <div class="shopping-cart-btn btn-hover text-center">
                                    <a href="{{route('viewcart')}}" class="default-btn" >view cart</a>
                                    <a href="{{route('checkout')}}" class="default-btn" >checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="index.html">HOME</a>
                            </li>
                            <li><a href="shop.html">Collection</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>