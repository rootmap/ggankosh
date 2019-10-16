<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
    <body>
        <div class="page-wrapper">
            @include('partials.navbar')
            @include('partials.messages')
            @yield('content')
            @include('partials.footer')
        </div>
        @include('partials.scripts')
    </body>
    @include('partials.toastr')
</html>
