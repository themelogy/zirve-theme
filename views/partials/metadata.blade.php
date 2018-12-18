{!! seo_helper()->render() !!}
<link rel="shortcut icon" href="{!! Theme::url('img/logo/favicon.png') !!}" type="image/png">

<script async>
    WebFontConfig = { google: {
            families: ['Roboto:400,300,100,500,700:latin-ext', 'Open Sans:400italic,400,300,600:latin-ext', 'Roboto Condensed:400,300,100,500,700:latin-ext'
            ]
        }};
    (function(d) {
        var wf = d.createElement('script'), s = d.scripts[0];
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
    })(document);
</script>

@if(app()->environment() == 'local')
    {!! Theme::style('css/bootstrap.css') !!}
    {!! Theme::style('css/font-awesome.css') !!}
    {!! Theme::style('css/icomoon.css') !!}
    {!! Theme::style('css/styles.css') !!}
@else
    <link rel="stylesheet" href="{{ elixir('css/style.min.css', 'themes/zirve') }}">
@endif

<!--[if lt IE 9]>
{!! Theme::script('js/modernizr.js') !!}
<![endif]-->


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P455NSM');</script>
<!-- End Google Tag Manager -->