<noscript id="deferred-styles">
@stack('css-stack')
{!! Asset::css() !!}
</noscript>

@stack('css-inline')

{!! Theme::script('js/jquery.js', ['defer']) !!}
<script src="{{ elixir('js/vendor.min.js', 'themes/zirve') }}" defer></script>

{!! Theme::script('js/owl-carousel.js', ['defer']) !!}

@stack('js-stack')
{!! Asset::js() !!}

<script src="{{ elixir('js/custom.min.js', 'themes/zirve') }}" defer></script>

@stack('js-inline')

@include('partials.analytics')