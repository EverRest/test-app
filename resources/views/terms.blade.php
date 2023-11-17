<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Terms And Conditions</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
<div
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
        <livewire:welcome.navigation/>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu justo eu ex semper ultrices.
                    Nullam non massa posuere, commodo turpis quis, lacinia eros. Etiam accumsan posuere augue, a congue
                    ligula hendrerit condimentum. Morbi sagittis arcu tortor, id sagittis dolor ornare mattis. Aenean
                    malesuada semper mauris, a luctus massa tempor id. Maecenas semper, turpis quis vehicula imperdiet,
                    purus dolor ornare quam, in sodales libero sem nec velit. Etiam laoreet ex at eros tincidunt
                    interdum. Vivamus vitae nisi ut justo bibendum lobortis. Cras pulvinar, elit at laoreet egestas,
                    felis nulla bibendum justo, in luctus nisl nisl at augue. Donec id imperdiet tortor. Sed nec purus
                    eget elit gravida aliquam. Phasellus dignissim augue quam, sollicitudin laoreet neque eleifend et.
                    Etiam pretium scelerisque odio mattis malesuada. Fusce rhoncus massa quis magna mattis feugiat.
                    Nulla in nisl ac magna pharetra iaculis lacinia id quam. Maecenas faucibus eleifend convallis.
                    Aenean libero mi, tristique rhoncus risus nec, convallis eleifend felis. Vestibulum sed tortor
                    mollis, eleifend nunc ut, lacinia lorem. Curabitur magna magna, accumsan ac dictum eu, aliquet et
                    libero. In vitae nisi ac elit varius facilisis. Fusce ipsum tortor, pellentesque sed diam non,
                    consequat aliquet quam. Vivamus ac tristique massa. Etiam et nisi quis nisl accumsan congue.
                    Vestibulum ac euismod odio. Integer id varius risus. Aliquam vitae tellus id nibh molestie iaculis
                    in eget arcu.

                    Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer
                    accumsan nibh a mi ornare, eget aliquam orci gravida. Suspendisse potenti. Nulla pellentesque mi sed
                    dolor luctus, ac tempor ex malesuada. Fusce massa purus, tristique semper faucibus quis, dignissim
                    sit amet elit. Praesent sodales mi risus, in sodales urna cursus ac. Aenean nec varius turpis. Ut
                    sit amet risus mi. Aenean sed quam lobortis, accumsan tellus a, volutpat ante. Nam eget velit nunc.
                    Aliquam vehicula gravida diam, vel posuere tortor pulvinar at. Vestibulum at metus metus. Donec
                    pulvinar magna sit amet lacus viverra interdum. Donec ullamcorper molestie eros in commodo. Etiam
                    hendrerit ex augue, a semper tortor maximus ac. Sed pellentesque, nunc eu commodo pretium, neque
                    nibh porttitor lorem, nec iaculis odio enim eu nisi. Integer iaculis tempus dui, quis sollicitudin
                    ligula tincidunt et. Aenean luctus, lorem quis ornare interdum, tortor metus bibendum nibh, eget
                    cursus ipsum tellus quis sem. Sed eget tincidunt augue. Nam scelerisque tortor vulputate ipsum
                    finibus lobortis. Phasellus facilisis risus sed leo iaculis bibendum. Donec eu congue neque,
                    vehicula blandit nunc.

                    Duis lectus sapien, faucibus ut leo vitae, aliquam pulvinar felis. Aliquam vitae porta nisl. Ut
                    ultrices eget nunc sollicitudin blandit. Maecenas imperdiet est et leo interdum, vel venenatis lorem
                    feugiat. Praesent orci est, feugiat ac arcu nec, bibendum hendrerit ex. Nam sit amet lorem pulvinar,
                    mattis nisl sed, ornare enim. Praesent euismod mattis dui eget tempus. Aenean ut rutrum elit, sit
                    amet tempus neque.
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
