@extends('layouts.master')

@section('content')

    @include('carrental::home.search')

    @pageFindByOptions('settings.show_page_home', 'home')

    @carFindByOptions('settings.show_home', 'home')

    @carClasses('home.classes')

    @blogLatestPosts(10)

@endsection