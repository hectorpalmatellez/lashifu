<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>辣师傅</title>
        <link rel="stylesheet" href="https://cl.staticontent.com/static-home-ui/1.76.91/css/home-main.css">
        @foreach ($css as $style)
            <link rel="stylesheet" href="{{ $style }}">
        @endforeach
    </head>
    <body>
    {!! $header !!}
    {!! $footer !!}
    @foreach ($js as $js_script)
        <script src="{{ $js_script }}"></script>
    @endforeach
    </body>
</html>
