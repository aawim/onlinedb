    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>+0960 967 1072</span></li>
                        <!-- BEGIN CURRENCIES -->
                                        <!--<li class="shop-currencies">
                                            <a href="javascript:void(0);">€</a>
                                            <a href="javascript:void(0);">£</a>
                                            <a href="javascript:void(0);" class="current">$</a>
                                        </li>-->
                        <!-- END CURRENCIES -->
                        <!-- BEGIN LANGS -->
                        <!--<li class="langs-block">
                            <a href="javascript:void(0);" class="current">English </a>
                            <div class="langs-block-others-wrapper"><div class="langs-block-others">
                              <a href="javascript:void(0);">French</a>
                              <a href="javascript:void(0);">Germany</a>
                              <a href="javascript:void(0);">Turkish</a>
                            </div></div>
                        </li>-->
                        <!-- END LANGS -->
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                 
                        @if (Route::has('login'))
                        @auth
                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ url('/myaccount') }}">My Account</a></li>
                        <li><a href="{{ url('/wish') }}">My Wishlist</a></li>
                        <li><a href="#">Checkout</a></li>
                             <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                        @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endauth


                         @endif
                    </ul>
                </div>
               <!-- END TOP BAR MENU -->
          </div>
        </div>        
    </div>
    <!-- END TOP BAR -->