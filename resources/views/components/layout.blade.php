<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Universe Audio Xperiens</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="@if(Route::currentRouteName() == "home") body-home @elseif(Route::currentRouteName()=="music") body-1 @elseif(Route::currentRouteName()== "sound-dettaglio" )body-home @elseif(Route::currentRouteName() == "location") body-home @elseif(Route::currentRouteName()=="contatti") body-home @endif">

    {{-- components --}}
<x-navbar/>
    {{ $slot }}

<x-footer/>


</body>
</html>
