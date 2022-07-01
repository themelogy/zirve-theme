@extends('layouts.master')

@section('content')
    @component('partials.components.title', ['breadcrumbs'=>'carrental.reservation'])
        <h1 class="title">{{ trans('themes::carrental.titles.reservation car', ['car'=>$car->fullname]) }}</h1>
    @endcomponent

    <div class="container">
        <div class="booking-item-details">
            <div class="gap"></div>
            @if(Session::has('success'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        <h4>{{ Session::get('success') }}</h4>
                    </div>
                </div>
            </div>
            <hr/>
            @endif
            <div class="row">
                <div class="col-md-8">
                    <div class="thumbnail" style="padding: 20px;">
                        <h4>Rezervasyon Bilgileri</h4>
                        <table class="table table-responsive">
                            <caption class="text-left">Rezervasyon Tarihleri</caption>
                            <tr>
                                <th>Alış Tarihi</th>
                                <td>{{ $reservation->pick_at->formatLocalized('%d %B %Y') }} {{ $reservation->pick_at->format('H:i') }}</td>
                            </tr>
                            <tr>
                                <th>Dönüş Tarihi</th>
                                <td>{{ $reservation->drop_at->formatLocalized('%d %B %Y') }} {{ $reservation->drop_at->format('H:i') }}</td>
                            </tr>
                        </table>
                        <table class="table table-responsive">
                            <caption class="text-left">Alış/Dönüş Lokasyonu</caption>
                            <tr>
                                <th>Alış Lokasyonu</th>
                                <td>{{ $reservation->present()->start_location }}</td>
                            </tr>
                            <tr>
                                <th>Dönüş Lokasyonu</th>
                                <td>{{ $reservation->present()->return_location }}</td>
                            </tr>
                        </table>
                        <table class="table table-responsive">
                            <caption class="text-left">Araç</caption>
                            <tr>
                                <td>{!! $car->brand->present()->logo(40).' '.$car->fullname !!}</td>
                                <td>{{ $car->present()->price }} TL</td>
                            </tr>
                            <tr>
                                <th>Toplam (KDV Hariç)</th>
                                <td>
                                    {{ $car->present()->total_price }}
                                </td>
                            </tr>
                        </table>
                        <table class="table table-responsive">
                            <caption class="text-left">Kimlik Bilgileri</caption>
                            <tr>
                                <th>Adı Soyadı</th>
                                <td>{{ $reservation->fullname }}</td>
                            </tr>
                            <tr>
                                <th>TC Kimlik No</th>
                                <td>{{ $reservation->tc_no }}</td>
                            </tr>
                            <tr>
                                <th>Telefon</th>
                                <td>{{ $reservation->phone }}</td>
                            </tr>
                            <tr>
                                <th>GSM</th>
                                <td>{{ $reservation->mobile_phone }}</td>
                            </tr>
                            <tr>
                                <th>E-Posta</th>
                                <td>{{ $reservation->email }}</td>
                            </tr>
                            <tr>
                                <th>İstekler</th>
                                <td>{{ $reservation->requests }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    @include('carrental::partials.reservation-details')
                </div>
            </div>
            <div class="gap"></div>
        </div>
        <div class="gap gap-small"></div>
    </div>
@endsection