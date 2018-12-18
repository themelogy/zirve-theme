@if($pages->count()>0)
<div class="bg-color line text-white slogans-home">
    <div class="container">
        <div class="title-home">
            <h1>{{ setting('theme::company-name') }}</h1>
        </div>
        <div class="gap"></div>
        <div class="row row-wrap" data-gutter="100">
            @foreach($pages as $page)
            <div class="col-md-4">
                <div class="thumb">
                    <header class="thumb-header">
                        <a href="{{ $page->url }}"><img class="img-responsive lazyloader" src="{{ $page->present()->coverImage(300,100,'fit',50) }}" alt="{{ $page->title }}" /></a>
                        <h4 class="thumb-title"><a href="{{ $page->url }}">{{ $page->title }}</a></h4>
                    </header>
                    <div class="thumb-caption">
                        <p class="thumb-desc">{{ $page->settings->sub_title->{locale()} }}</p>
                        <a href="{{ $page->url }}"><i class="fa fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif