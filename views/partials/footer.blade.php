<footer id="main-footer" class="footer2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-12">
                <a class="logo" href="{{ LaravelLocalization::getLocalizedURL(locale(), route('homepage')) }}">
                    <img src="{{ Theme::url('img/logo/logo.svg') }}" alt="{{ setting('theme::company-name') }}" title="{{ setting('theme::company-name') }}" />
                </a>
            </div>
            <div class="col-lg-7 col-sm-12 pt25">
                {!! Block::get('page-intro') !!}
            </div>
            <div class="col-lg-2 col-sm-12">
                <div class="call-center pull-right-lg">
                    <div class="title">MÜŞTERİ HİZMETLERİ</div>
                    <div class="phone"><a id="phone-call" rel="nofollow" href="tel:{{ setting('theme::phone') }}">{{ setting('theme::phone') }}</a></div>
                </div>
                <div class="clearfix"></div>
                <div class="fifteen-year">
                    <p>15 yıllık tecrübe</p>
                </div>
            </div>
        </div>
        <div class="break"></div>
        <div class="row">
            {!! Menu::render('footer', \Themes\Zirve\Presenter\FooterMenuPresenter::class) !!}
        </div>
    </div>
    <div class="footer-bottom">
        <div class="ankara-bg"></div>
        <div class="container">
            <div class="col-lg-4 col-sm-12">
                <p class="copyrights">{{ setting('core::site-name') }} &copy; 2006 Tüm hakları saklıdır.</p>
            </div>
            <div class="col-lg-8 col-sm-12">
                @include('partials.components.socials', ['listClass'=>'list list-horizontal list-space social mb10 pull-right-lg', 'iconClass'=>'box-icon-normal round animate-icon-bottom-to-top'])
            </div>
        </div>
    </div>
</footer>