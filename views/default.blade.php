@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'page'])
        <h1 class="title">{{ $page->title }}</h1>
    @endcomponent

    <div class="page-content mb20">
        <div class="container">
            {!! $page->body !!}

            @pageTags($page, 5)
        </div>
    </div>

    @carClasses('home.classes')
@stop
