<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.header')
</head>

<body>
    @include('layouts.navbar.index')
    @yield('content')
    @include('layouts.footer.index')
    @include('layouts.script')
</body>

</html>
