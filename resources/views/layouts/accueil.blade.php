<section id="slider" class="flexslider-wrap fullscreen clearfix">
    <div class="slider-wrapper">
        <div class="flexslider clearfix">
            <ul class="slides">
                <li class="clearfix"
                    style="background-image: url(img/marketinglab.jpg); background-size: cover; background-repeat: no-repeat;">
                    <div class="overlay color"></div>
                    <div class="flex-content vertical-center">
                        <div class="container">
                            <div class="caption wow fadeInLeft">
                                <h3 style="color: #ffffff; font-weight: 500;">Molengeek</h3>
                            </div>
                            <div class="caption wow fadeInUp">
                                <h1 style="color: #ffffff; font-size: 46px;">Marketing<br>LAb</h1>
                            </div>
                            {{-- <div class="caption wow fadeIn">
                                <p style="color: #ffffff; font-size: 18px;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium<br/>doloremque laudantium, totam rem aperiam.</p>
                            </div> --}}
                            <div class="caption wow fadeInUp">
                                <div class="button-normal white">
                                    @if (Route::has('login'))
                                    <div class="top-right links">
                                        @auth
                                        <a href="{{ url('/home') }}">Home</a>
                                        @else
                                        <a href="{{ route('login') }}">Login</a>
                                        @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                        @endif
                                        @endauth
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li
                    style="background-image: url(img/molengeeklab.jpg); background-size: cover; background-repeat: no-repeat;">
                    <div class="overlay color"></div>
                    <div class="flex-content vertical-center">
                        <div class="container">
                            <div class="caption wow fadeInLeft">
                                <h3 style="color: #ffffff; font-weight: 500;">Molengeek</h3>
                            </div>
                            <div class="caption wow fadeInUp">
                                <h1 style="color: #ffffff; font-size: 46px;">Marketing<br>Lab</h1>
                            </div>
                            {{-- <div class="caption wow fadeIn">
                                <p style="color: #ffffff; font-size: 18px;">Molengeek<br/>doloremque laudantium, totam rem aperiam.</p>
                            </div> --}}
                            <div class="caption wow fadeInUp">
                                <div class="button-normal white">
                                    @if (Route::has('login'))
                                    <div class="top-right links">
                                        @auth
                                        <a href="{{ url('/home') }}">Home</a>
                                        @else
                                        <a href="{{ route('login') }}">Login</a>
                                        @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                        @endif
                                        @endauth
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>