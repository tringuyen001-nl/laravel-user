<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header')
</head>
<body class="app sidebar-mini rtl">
<!-- Navbar-->
@include('layouts.navbar')
<!-- Sidebar menu-->
@include('layouts.sidebar')
{{--content--}}
@yield('content')
<!-- scipts -->
@include('layouts.scripts')
</body>
</html>