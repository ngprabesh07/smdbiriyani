<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>samdibiriyani</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       

     
    </head>
    <body >
        <div class="head">
            @include('components.nav_bar')
            @include('biriyani.biriyani')
            <div class="headbody">
             <h2>content </h2>
            </div>
        </div>
    </body>
</html>
