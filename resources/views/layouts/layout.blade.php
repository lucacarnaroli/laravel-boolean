@include('partials._header')
    <header>
        @yield('header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @yield('footer')
    </footer>
        @yield('script')
@include('partials._footer')