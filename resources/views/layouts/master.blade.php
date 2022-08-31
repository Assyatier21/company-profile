<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    @include('layouts.navbar.index')
    @yield('content')
    @include('layouts.footer.index')
    @include('layouts.back-to-top')
    @include('layouts.script')
</body>

</html>
