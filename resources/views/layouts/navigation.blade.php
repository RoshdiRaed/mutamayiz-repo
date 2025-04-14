@include('layouts.head')
@extends('layouts.header')

<script>
    document.getElementById('mobile-menu-toggle').addEventListener('click', function () {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
