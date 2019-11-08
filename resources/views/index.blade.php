<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @section('htmlheader')
        @include('htmlheader')
    @show
    <body>
        @section('body')
            @include('body')
        @show
    </body>
</html>
