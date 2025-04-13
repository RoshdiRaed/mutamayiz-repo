<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    @include('head')
    <link rel="icon" type="image/png" href="/image/logo.png">
</head>

<body class="bg-gradient-to-br from-purple-900 to-purple-700 text-white font-arabic min-h-screen">

    {{-- NAVBAR --}}
    @include('header')

    {{-- HERO --}}
    @include('hero')

    {{-- Our Inspiring Story --}}
    @include('story')

    {{-- SERVICES --}}
    @include('services')

    {{-- PORTFOLIO --}}
    @include('works')

    {{-- Contact Us --}}
    @include('contact')

    {{-- FOOTER --}}
    @include('footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>

</body>
</html>
