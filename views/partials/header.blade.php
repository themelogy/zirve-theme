<header id="main-header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @include('partials.header.top-user')
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="navbar">
            <div class="navbar-header">
                <a class="logo" href="{{ LaravelLocalization::getLocalizedURL(locale(), route('homepage')) }}">
                    <img src="{{ Theme::url('img/logo/logo-wbg.svg') }}" alt="{{ setting('theme::company-name') }}" />
                    <span class="hidden">{{ setting('theme::company-name') }}</span>
                </a>
            </div>
            <div class="nav">
                {!! Menu::render('header', \Themes\Zirve\Presenter\HeaderMenuPresenter::class) !!}
            </div>
        </div>
    </div>
</header>