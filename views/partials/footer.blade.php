<footer id="main-footer" class="footer2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-12">
                <a class="logo" href="{{ LaravelLocalization::getLocalizedURL(locale(), route('homepage')) }}">
                    <img src="{{ Theme::url('img/logo/logo.svg') }}" alt="{{ setting('theme::company-name') }}" title="{{ setting('theme::company-name') }}" />
                </a>
            </div>
            <div class="col-lg-7 col-sm-12 pt25">
                <p class="text-justify"><strong>Zirve Araç Kiralama</strong> 2006 yılından beri Ankara merkezli olarak siz değerli müşterilerimize iş ve gezi amaçlı seyahatlerinizde tüm talep ve beklentilerinizi en iyi ve en hızlı şekilde gerçekleştirmedeki kararlılığıyla, <strong>ankara araç kiralama firmaları</strong> arasından <strong>ucuz araç kiralama</strong> ve en iyi hizmet anlayışına sahip olan firmamız, teknolojideki ve sektöründeki gelişmeleri, yenilikleri sizlere sunmakta gecikmeyen, filosunun genişliğiyle, yeniliğiyle, kalitesiyle ve güvenilirliğiyle siz müşterilerimize <strong>araç kiralama</strong> hizmeti vermekten her zaman mutluluk duyarız.</p>
            </div>
            <div class="col-lg-2 col-sm-12">
                <div class="call-center pull-right-lg">
                    <div class="title">MÜŞTERİ HİZMETLERİ</div>
                    <div class="phone"><a rel="nofollow" href="tel:{{ setting('theme::phone') }}">{{ setting('theme::phone') }}</a></div>
                </div>
                <div class="clearfix"></div>
                <div class="fifteen-year">
                    <p>15 yıllık tecrübe</p>
                </div>
            </div>
        </div>
        <div class="break"></div>
        <div class="row row-wrap mb20">
            <div class="col-lg-2 col-sm-4 col-xs-6 mb0">
                {!! Menu::render('footer-link-1', \Themes\Zirve\Presenter\FooterMenuLinksPresenter::class) !!}
            </div>
            <div class="col-lg-2 col-sm-4 col-xs-6 mb0">
                {!! Menu::render('footer-link-2', \Themes\Zirve\Presenter\FooterMenuLinksPresenter::class) !!}
            </div>
            <div class="col-lg-2 col-sm-4 col-xs-6 mb0">
                {!! Menu::render('footer-link-3', \Themes\Zirve\Presenter\FooterMenuLinksPresenter::class) !!}
            </div>
            <div class="col-lg-2 col-sm-4 col-xs-6 mb0">
                {!! Menu::render('footer-link-4', \Themes\Zirve\Presenter\FooterMenuLinksPresenter::class) !!}
            </div>
            <div class="col-lg-2 col-sm-4 col-xs-6 mb0">
                {!! Menu::render('footer-link-5', \Themes\Zirve\Presenter\FooterMenuLinksPresenter::class) !!}
            </div>
            <div class="col-lg-2 col-sm-4 col-xs-6 mb0">
                {!! Menu::render('footer-link-6', \Themes\Zirve\Presenter\FooterMenuLinksPresenter::class) !!}
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