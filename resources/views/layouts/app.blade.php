<!doctype html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SEO Agency Website">
    <meta name="author" content="Faruq Hossen">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicone.png') }}">

    <title> @yield('title', '')</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    {{-- Style Sheets --}}

    <meta name="theme-color" content="#ffffff">


    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:title" content="Dashboard | Comment Jet">
    <meta name="twitter:description"
        content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more">
    <meta name="twitter:image" content="https://flowbite-admin-dashboard.vercel.app/">

    <!-- Facebook -->

    <meta property="og:url" content="https://flowbite-admin-dashboard.vercel.app/">
    <meta property="og:title" content="Tailwind CSS Admin Dashboard - Flowbite">
    <meta property="og:description"
        content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://flowbite-admin-dashboard.vercel.app/images/og-image.png">
    <meta property="og:image:type" content="image/png">
    <meta name="google-site-verification" content="wn1oFpUqzZ6XoS6WgEWRF3U8ZCWRvVXryKbCWix9xD0" />


    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="bg-white dark:bg-gray-900">

    @include('layouts.navigation')
    @yield('content')



    <a href="#" id="scrolltop" class=" fixed bottom-5 right-5 hidden animate-pulse ">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-12 bg-brand brorder rounded-full p-3 text-white ">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
        </svg>
    </a>
    @include('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('#scrolltop').fadeIn();
                } else {
                    $('#scrolltop').fadeOut();
                }
            });
            $('#scrolltop').click(function() {
                $('html, body').animate({
                    'scrollTop': 0
                },3000);
            });
        });
    </script>

    @stack('scripts')
</body>

</html>
