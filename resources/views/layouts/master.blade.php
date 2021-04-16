<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/theme.css' )}}" rel="stylesheet" >
</head>
<body>
    
      @include('partials.menu')

      @include('partials.flash')

      @yield('content')
    </div>
</body>
</html>


{{-- new scrpte :!!!! --}}
