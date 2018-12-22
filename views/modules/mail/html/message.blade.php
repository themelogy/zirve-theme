@component('mail::layout')
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img style="padding: 10px; max-height: 70px;" src="data:image/svg+xml,%3C%3Fxml version='1.0' encoding='utf-8'%3F%3E%3C!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --%3E%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='269.9px' height='100px' viewBox='0 0 269.9 100' style='enable-background:new 0 0 269.9 100;' xml:space='preserve'%3E%3Cstyle type='text/css'%3E .st0%7Bfill:%23FFFFFF;%7D%0A%3C/style%3E%3Cg%3E%3Cpath class='st0' d='M0.5,95.6L42.1,38c1.4-1.8,0-4.4-2.2-4.4H7.2c0-8.6,6.8-15.4,15.1-15.4H78L39.9,75.9c-1.3,1.8,0.1,4.3,2.2,4.3 h203L3,100C0.6,100.1-0.8,97.5,0.5,95.6'/%3E%3Cpath class='st0' d='M75.7,69.6l9.2-51.5h12.4c1.7,0,3,1.5,2.6,3.2l-9.2,51.5H78.3C76.6,72.6,75.4,71.1,75.7,69.6'/%3E%3Cpath class='st0' d='M86.9,8c0,3.9,3.2,5.9,6.6,5.9c4.2,0,9-2.7,9-7.9c0-4-3.3-6-6.6-6C91.5,0,86.9,2.7,86.9,8'/%3E%3Cpath class='st0' d='M131.5,71.2l-8.1-14.9c-0.5-0.8-1.4-1.4-2.4-1.4h-4.4l-2.7,15.4c-0.2,1.3-1.4,2.2-2.6,2.2H97.6l9.3-52.4 c0.2-1.3,1.4-2.2,2.6-2.2h24.7c12.6,0,18.5,7.5,18.5,16c0,9.5-4.7,16.2-15,19.2l11.6,19.3h-15.6C132.9,72.6,131.9,72.1,131.5,71.2 M120.4,32.6l-2,10.9H130c8-0.5,10.9-13.1,2.2-13.1h-9.1C121.8,30.3,120.6,31.3,120.4,32.6'/%3E%3Cpath class='st0' d='M184,72.6h-11.5c-1.3,0-2.3-0.8-2.6-2l-12.7-52.5h13.4c1.3,0,2.4,0.8,2.6,2.1l7.9,34.4L202,19.4 c0.5-0.8,1.4-1.4,2.3-1.4h14.1l-32,53.3C185.9,72.2,185,72.6,184,72.6'/%3E%3Cpath class='st0' d='M246.5,72.6h-30.9l9.7-54.6h44.5c-1.4,7.5-7.9,13-15.6,13h-15.8l-1.4,7.8h29c-1.4,7.3-7.7,12.6-15.2,12.6h-16 l-1.5,8.2h29C260.9,67.2,254.2,72.6,246.5,72.6'/%3E%3C/g%3E%3C/svg%3E%0A" alt="{{ setting('theme::company-name') }}" />
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