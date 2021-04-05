<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'Key Assist - Specialists in all types of Locks &amp; Keys for Vehicles and Property | Key Assist') }}
    </title>
    <meta name="description"
        content="Locked yourself out of your car? Worried about getting locked out for hours if you forget them? Key and lock assistance for your home, car and more at any time from Key Assist." />
    <link rel="shortcut icon" href="{{asset('images/favicon-32x32.png')}}" alt="favicon">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    @livewireStyles



    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://use.fontawesome.com/455826f475.js"></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen">

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @livewireScripts
</body>

</html>
