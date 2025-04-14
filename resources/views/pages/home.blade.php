<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    @include('layouts.head')
    <link rel="icon" type="image/png" href="/image/logo.png">
</head>

<body class="bg-gradient-to-br from-purple-900 to-purple-700 text-white font-arabic min-h-screen">

    {{-- NAVBAR --}}
    @include('layouts.header')

    {{-- HERO --}}
    @include('partials.hero')

    {{-- Our Inspiring Story --}}
    @include('pages.story')

    {{-- SERVICES --}}
    @include('pages.services.index')

    {{-- PORTFOLIO --}}
    @include('pages.works.index')

    {{-- Contact Us --}}
    @include('pages.contact.index')

    {{-- FOOTER --}}
    @include('layouts.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>

</body>
</html>
