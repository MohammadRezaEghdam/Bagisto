<!DOCTYPE html>
<html lang="en">

<x-AdminPanel.head></x-AdminPanel.head>

<body dir="rtl">
    {{-- Site Hader --}}
    <x-AdminPanel.site-header></x-AdminPanel.site-header>

    <section class="body-container">

        {{-- sidebar --}}
        <x-AdminPanel.sidebar></x-AdminPanel.sidebar>


        @yield('content')
        
    </section>









    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
