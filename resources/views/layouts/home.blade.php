<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
        <title>{{ $title ?? config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <!--====== Animate CSS ======-->
        <link rel="stylesheet" href="assets/css/animate.css">
        
        <!--====== Slick CSS ======-->
        <link rel="stylesheet" href="assets/css/tiny-slider.css">
        
        <!--====== Line Icons CSS ======-->
        <link rel="stylesheet" href="assets/fonts/lineicons/font-css/LineIcons.css">

        <!--====== Tailwind CSS ======-->
        <link rel="stylesheet" href="assets/css/tailwindcss.css">

        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body>
        {{ $slot }}

        @livewireScripts
        <!--====== Tiny Slider js ======-->
        <script src="assets/js/tiny-slider.js"></script>
        
        <!--====== Wow js ======-->
        <script src="assets/js/wow.min.js"></script>
        
        <!--====== Main js ======-->
        <script src="assets/js/main.js"></script>

        {{-- Sweet Alert 2 --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.8/dist/sweetalert2.all.min.js"></script>
        <script>
            // Menyiapkan SweetAlert2 Toast sesuai dengan definisi Anda
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3500,
                timerProgressBar: true,
                showCloseButton: true,
                heightAuto: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
    
            // Menampilkan SweetAlert2 Toast berdasarkan jenis pesan
            document.addEventListener("DOMContentLoaded", function() {
                @if (session('toast_type'))
                    Toast.fire({
                        icon: '{{ session('toast_type') }}',
                        title: '{{ session('toast_message') }}'
                    });
                @endif
            });
        </script>
    </body>
</html>