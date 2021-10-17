<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Get Pricing - Quadque Technologies Ltd</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="bg-fixed" style="background-image: url('{{asset('images/111.jpg')}}')">
            <div class="container m-auto" id="app">
                <div class="">
                    <div class="flex justify-center items-center min-h-screen">
                        <div class="w-3/4 md:w-5/12 rounded shadow-lg bg-white">
                            <div class="w-full p-5 md:p-16">
                                <form-component></form-component>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
