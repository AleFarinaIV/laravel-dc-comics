<footer>

    <section id="top_footer">

        <div class="bg_footer text-white position-relative">
            <div class="container p-4">
                <div class="row">
                    <div class="col-4">
                        <div class="row">
                            <div class="col-4 p-0">
                                <h6>DC COMICS</h6>
                                <ul class="list-unstyled">
    
                                    @foreach($dc_comics as $item)
                                        <li>
                                            <a href="{{ $item['url'] }}">{{ $item['label'] }}</a>
                                        </li>
                                    @endforeach
    
                                </ul>
                                <h6>SHOP</h6>
                                <ul class="list-unstyled">
                                    @foreach($shop_section as $item)
                                        <li>
                                            <a href="{{ $item['url'] }}">{{ $item['label'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-4 p-0">
                                <h6>DC</h6>
                                <ul class="list-unstyled">
                                    @foreach($dc_section as $item)
                                        <li>
                                            <a href="{{ $item['url'] }}">{{ $item['label'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-4 p-0">
                                <h6>SITES</h6>
                                <ul class="list-unstyled">
                                    @foreach($sites_section as $item)
                                        <li>
                                            <a href="{{ $item['url'] }}">{{ $item['label'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-0">
                        <p class="fs-12">All Site Content and <i class="bi bi-c-circle"></i> 2020 DC Entertainment,
                            unless otherwise <a class="text-decoration-none text-primary" href="">noted here</a>. All
                            rights
                            reserved. <br>
                            <a class="text-decoration-none text-primary" href="#">Cookies Settings</a>
                        </p>
                    </div>
                    <div class="col-8">
                        <img id="logo_jumbo_dc" class="position-absolute" src="{{ Vite::asset('../resources/img/dc-logo-bg.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="bottom_footer">

        <div class="bg_grey py-4 position-relative z-1">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <button><a href="#">SIGN-UP NOW!</a></button>
                        <div id="footer-right" class="d-flex align-items-center justify-content-between">
                            <h4><a href="#">FOLLOW US</a></h4>
                            <div id="icon-container">

                                @foreach($social_media as $item)
                                    <a href="{{ $item['url'] }}">
                                        <img src="{{ Vite::asset($item['icon_url']) }}" alt="">
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


</footer>