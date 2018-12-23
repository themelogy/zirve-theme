@component('mail::layout')
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img style="padding: 10px; max-height: 70px;" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('themes/zirve/img/logo/logo-w.png'))) }}" alt="{{ setting('theme::company-name') }}" />
        @endcomponent
    @endslot

    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            &copy; {{ date('Y') }} {{ setting('theme::company-name') }}. Tüm hakları saklıdır.
        @endcomponent
    @endslot
@endcomponent