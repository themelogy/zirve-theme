@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'carrental.prices'])
        <h1 class="title">{{ trans('themes::carrental.titles.prices') }}</h1>
    @endcomponent
    <div class="gap"></div>
    <div class="container car-prices">
        @foreach($cars->chunk(3) as $chunk)
        <div class="row">
            @foreach($chunk as $car)
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="thumbnail">
                    <img src="{{ $car->present()->firstImage(300,150,'fit',50) }}" alt="{{ $car->fullname }}" />
                    <div class="caption">
                        <h3>{!! $car->brand->present()->logo(50).' '.$car->fullname !!}</h3>
                        <table class="table table-responsive table-striped">
                            <tr>
                                <th>{{ trans('carrental::cars.form.price1') }}</th>
                                <td>{{ $car->prices->price1 }}</td>
                            </tr>
                            <tr>
                                <th>{{ trans('carrental::cars.form.price2') }}</th>
                                <td>{{ $car->prices->price2 }}</td>
                            </tr>
                            <tr>
                                <th>{{ trans('carrental::cars.form.price3') }}</th>
                                <td>{{ $car->prices->price3 }}</td>
                            </tr>
                            <tr>
                                <th>{{ trans('carrental::cars.form.price4') }}</th>
                                <td>{{ $car->prices->price4 }}</td>
                            </tr>
                            <tr>
                                <th>{{ trans('carrental::cars.form.price5') }}</th>
                                <td>{{ $car->prices->price1 }}</td>
                            </tr>
                            <tr>
                                <th>{{ trans('carrental::cars.form.price6') }}</th>
                                <td>{{ $car->prices->price6 }}</td>
                            </tr>
                        </table>
                        <a class="btn btn-primary btn-sm" href="{{ $car->url }}">{{ trans('carrental::cars.button.reservation') }}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
    <div class="gap"></div>
@endsection