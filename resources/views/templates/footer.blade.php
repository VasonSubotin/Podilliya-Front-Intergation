<footer class="page_footer">
    <div class="container-fluid">
        <div class="row">
            <div class="column">
                <div class="logo">
                    <img class="img-fluid mb-2" src="{{asset('build/img/logo.svg')}}" alt="">
                </div>
                <div class="adress">
                    <span>@lang('home.footer.address')</span>
                </div>
            </div>
            <div class="column fluid">
                <nav class="footer_nav">
                    <div class="link_wrap">
                        <a href="/">@lang('home.menu.main')</a>
                    </div>
                    <div class="link_wrap">
                        <a href="/offers">@lang('home.menu.offers')</a>
                    </div>
                    <div class="link_wrap">
                        <a href="/market">@lang('home.menu.market')</a>
                    </div>
                    <div class="link_wrap">
                        <a href="/contacts">@lang('home.menu.contact')</a>
                    </div>
                </nav>
            </div>
            <div class="column">
                <div class="links_block">
                    <a href="#" class="link">Facebook</a>
                    <a href="#" class="link">Linked In</a>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row copyright_row">
            <div class="col flex-grow-0 text-nowrap copyright_col">
                <div class="copyright">© 2020 Podiliya Gold™</div>
            </div>
            <div class="col copyright_col second_copyright">
                <div class="copyright_market text-right">by <a href="http://graintrade.com.ua/" target="_blank" rel="noopener noreferrer">Graintrade.com.ua</a></div>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('build/js/main.min.js')}}"></script>