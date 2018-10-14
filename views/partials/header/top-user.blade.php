<div class="top-user-area clearfix">
    <ul class="top-user-area-list list list-horizontal list-border socials">
        <li>
            <div class="top-phone">
                <a href="tel:{{ setting('theme::phone') }}"><i class="fa fa-phone-square mr5"></i> {{ setting('theme::phone') }}</a>
            </div>
        </li>
        <li>
            @include('partials.components.socials', ['listClass'=>'list list-horizontal list-space', 'iconClass'=>''])
        </li>
        @auth
            <li class="top-user-area-avatar nav-drop">
                <a>
                    <img class="origin round" src="{{ $user->present()->gravatar() }}" alt="{{ $currentUser->fullname }}" title="{{ $currentUser->fullname }}" />{{ $currentUser->fullname }}
                </a>
                <ul class="list nav-drop-menu">
                    <li><a href="{{ route('dashboard.index') }}">Yönetim Paneli</a></li>
                </ul>
            </li>
            <li><a href="{{ LaravelLocalization::getLocalizedURL(locale(), route('logout')) }}">Çıkış</a></li>
        @endauth
        <li class="top-user-area-lang nav-drop">
            <a href="{{ LaravelLocalization::getLocalizedURL(locale(), route('homepage')) }}">
                <img src="{{ Theme::url('img/flags/32/'.locale().'.png') }}" alt="{{ LaravelLocalization::getCurrentLocaleNative() }}" title="{{ LaravelLocalization::getCurrentLocaleNative() }}" />{{ strtoupper(LaravelLocalization::getCurrentLocale()) }}<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i>
            </a>
            <ul class="list nav-drop-menu">
                @foreach(LaravelLocalization::getSupportedLocales() as $locale => $supportedLocale)
                    <li>
                        <a href="{{ LaravelLocalization::getLocalizedURL($locale, route('homepage')) }}">
                            <img class="mr10" src="{{ Theme::url('img/flags/32/'.$locale.'.png') }}" alt="{{ $supportedLocale['native'] }}" title="{{ $supportedLocale['native'] }}" /><span>{{ strtoupper($locale) }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
    </ul>
</div>