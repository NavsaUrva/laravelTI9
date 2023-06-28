@include('frontend.layout.top')
@include('frontend.layout.menu')

<div id="layoutSidenav_content">
    <main>
            @yield('content')

        </div>
    </main>
</div>

@include('frontend.layout.bottom')