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
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
            @include('partials.flash')
          </div>

        </div>
      </div>

      @yield('content')
    </div>
    <!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>
</body>
</html>


{{-- new scrpte :!!!! --}}
