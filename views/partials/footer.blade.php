
<footer id="main-footer">
    <div class="container">
        <div class="row row-wrap">
            <div class="col-md-3">
                <a class="logo" href="{{ LaravelLocalization::getLocalizedURL(locale(), route('homepage')) }}">
                    <img src="{{ Theme::url('img/logo/logo-rw.svg') }}" alt="{{ setting('theme::company-name') }} Logo" title="{{ setting('theme::company-name') }} Logo" />
                </a>
                <address>
                    <strong>{{ setting('theme::company-name') }}</strong><br>
                    {{ setting('theme::address') }}<br>
                    <abbr title="Telefon">T:</abbr> <a href="tel:{{ setting('theme::phone') }}">{{ setting('theme::phone') }}</a><br/>
                    <abbr title="Mobil">M:</abbr> <a href="tel:{{ setting('theme::mobile') }}">{{ setting('theme::mobile') }}</a><br/>
                    <abbr title="Mobil">M:</abbr> <a href="tel:{{ setting('theme::phone2') }}">{{ setting('theme::phone2') }}</a><br/>
                    <abbr title="E-mail">E:</abbr> <a href="mail:{{ setting('theme::email') }}">{{ setting('theme::email') }}</a>
                </address>
                @include('partials.components.socials', ['listClass'=>'list list-horizontal list-space social', 'iconClass'=>'box-icon-normal round animate-icon-bottom-to-top'])
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3">
                        {!! Menu::render('footer-link-1', \Themes\Autorent\Presenter\FooterMenuLinksPresenter::class) !!}
                    </div>
                    <div class="col-md-3">
                        {!! Menu::render('footer-link-2', \Themes\Autorent\Presenter\FooterMenuLinksPresenter::class) !!}
                    </div>
                    <div class="col-md-3">
                        {!! Menu::render('footer-link-3', \Themes\Autorent\Presenter\FooterMenuLinksPresenter::class) !!}
                    </div>
                    <div class="col-md-3">
                        {!! Menu::render('footer-link-4', \Themes\Autorent\Presenter\FooterMenuLinksPresenter::class) !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="col-md-12">
                <p>{{ setting('core::site-name') }} &copy; Tüm hakları saklıdır.</p>
            </div>
        </div>
    </div>
</footer>