<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/theme.css' )}}" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>
<body>
    
      @include('partials.menu')
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
            @include('partials.flash')
          </div>

        </div>
      </div>

      @yield('content')

    @yield('javascript')
<!-- MDB -->
</body>
</html>


{{-- new scrpte :!!!! --}}
