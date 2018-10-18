@stack('css-stack')
{!! Asset::css() !!}
@stack('css-inline')
{!! Theme::script('js/jquery.js') !!}
{!! Theme::script('js/bootstrap.js') !!}
{!! Theme::script('js/slimmenu.js') !!}
{!! Theme::script('js/bootstrap-datepicker.js') !!}
{!! Theme::script('js/datepicker-locales/bootstrap-datepicker.tr.min.js') !!}
{!! Theme::script('js/bootstrap-timepicker.js') !!}
{!! Theme::script('js/nicescroll.js') !!}
{!! Theme::script('js/dropit.js') !!}
{{-- {!! Theme::script('js/ionrangeslider.js') !!} --}}
{!! Theme::script('js/icheck.js') !!}
{!! Theme::script('js/fotorama.js') !!}
{!! Theme::script('js/typeahead.js') !!}
{{-- {!! Theme::script('js/card-payment.js') !!} --}}
{!! Theme::script('js/magnific.js') !!}
{!! Theme::script('js/owl-carousel.js') !!}
{!! Theme::script('js/fitvids.js') !!}
{{-- {!! Theme::script('js/tweet.js') !!} --}}
{{-- {!! Theme::script('js/countdown.js') !!} --}}
{!! Theme::script('js/gridrotator.js') !!}
@stack('js-stack')
{!! Asset::js() !!}
{!! Theme::script('js/custom.js?v=30') !!}
@stack('js-inline')

<script type="text/javascript">
    WebFontConfig = {
        google: {
            families: [
                'Roboto:400,300,100,500,700:latin-ext',
                'Open Sans:400italic,400,300,600:latin-ext',
                'Roboto Condensed:400,300,100,500,700:latin-ext'
            ]
        },
        timeout: 2000
    };
    (function () {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>

@include('partials.analytics')