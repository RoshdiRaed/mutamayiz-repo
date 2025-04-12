<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="برموز للدعاية والإعلان - حلول تسويقية متكاملة">
    <meta name="keywords" content="دعاية, اعلان, تسويق, هوية تجارية">
    <title>المتميّز للدعاية والإعلان</title>

    <!-- Styles -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/logo.png" href="/image/logo.png">
    <style>
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            right: 0;
            background: linear-gradient(to right, #fbbf24, #f59e0b);
            transition: width 0.3s ease-in-out;
        }

        .nav-link:hover::after {
            width: 100%;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-purple-900 to-purple-700 text-white font-arabic min-h-screen">
    {{-- FOOTER --}}

    @extends('footer')

    {{-- Contact Us --}}

    @extends('contact')

    {{-- PORTFOLIO --}}

    @extends('works')

    {{-- SERVICES --}}

    @extends('services')

    {{-- Our Inspiring Story --}}

    @extends('story')

    {{-- HERO --}}

    @extends('hero')

    {{-- NAVBAR --}}

    @extends('header')

    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>

</body>

</html>
