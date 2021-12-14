<!--
 Upper Header Section
-->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="topNav">
        <div class="container">
            <div class="alignR">
                <div class="pull-left socialNw">
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-youtube"></span></a>
                    {{-- <a href="#"><span class="icon-tumblr"></span></a> --}}
                </div>
                <a class="active" href="{{ route('home') }}"> <span class="icon-home"></span> Home</a>
                @if (Auth::check())
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="icon-user"></span> {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}"><span class="icon-user"></span> Login</a>
                    <a href="{{ route('register') }}"><span class="icon-edit"></span> Free Register </a>
                @endif
                <a href="cart.html"><span class="icon-shopping-cart"></span> 2 Item(s) - <span
                        class="badge badge-warning"> $448.42</span></a>
            </div>
        </div>
    </div>
</div>
