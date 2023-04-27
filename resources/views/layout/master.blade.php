<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Unkown Page')</title>
</head>
<body>

    {{-- Start Navigation bar  --}}
    @include('layout.navbar')
    {{-- End Navigation bar  --}}


    @yield('content')

    {{-- Start side bar  --}}
    @include('layout.sidebar')
    {{-- End sibe bar  --}}



</body>
</html>
