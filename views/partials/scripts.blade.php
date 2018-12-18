<noscript id="deferred-styles">
@stack('css-stack')
{!! Asset::css() !!}
</noscript>

@stack('css-inline')

{!! Theme::script('js/jquery.min.js', ['defer']) !!}
<script src="{{ elixir('js/vendor.min.js', 'themes/zirve') }}" defer></script>

{!! Theme::script('js/owl-carousel.js', ['defer']) !!}

@stack('js-stack')
{!! Asset::js() !!}

<script src="{{ elixir('js/custom.min.js', 'themes/zirve') }}" defer></script>

@stack('js-inline')

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P455NSM" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->