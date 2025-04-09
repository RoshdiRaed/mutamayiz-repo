<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="برموز للدعاية والإعلان - حلول تسويقية متكاملة">
    <meta name="keywords" content="دعاية, اعلان, تسويق, هوية تجارية">
    <link rel="icon" type="image/logo.png" href="/image/logo.png">
    <title>المتميّز للدعاية والإعلان</title>

    <!-- Styles -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Favicon -->

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
