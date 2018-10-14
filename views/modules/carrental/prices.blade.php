@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'carrental.prices'])
        <h1 class="title">{{ trans('themes::carrental.titles.prices') }}</h1>
    @endcomponent
    <div class="gap"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-responsive">
                    <thead>
                    <tr>
                        <th>{{ trans('carrental::cars.title.car') }}</th>
                        <th>{{ trans('carrental::cars.form.price1') }}</th>
                        <th>{{ trans('carrental::cars.form.price2') }}</th>
                        <th>{{ trans('carrental::cars.form.price3') }}</th>
                        <th>{{ trans('carrental::cars.form.price4') }}</th>
                        <th>{{ trans('carrental::cars.form.price5') }}</th>
                        <th>{{ trans('carrental::cars.form.price6') }}</th>
                        <th>{{ trans('carrental::cars.button.reservation') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cars as $car)
                        <tr>
                            <td>{!! $car->brand->present()->logo(50).' '.$car->fullname !!}</td>
                            <td>{{ $car->prices->price1 }}</td>
                            <td>{{ $car->prices->price2 }}</td>
                            <td>{{ $car->prices->price3 }}</td>
                            <td>{{ $car->prices->price4 }}</td>
                            <td>{{ $car->prices->price5 }}</td>
                            <td>{{ $car->prices->price6 }}</td>
                            <td><a class="btn btn-default btn-sm" href="{{ $car->url }}">{{ trans('carrental::cars.button.reservation') }}</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="gap"></div>
@endsection