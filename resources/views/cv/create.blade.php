@extends('layouts.master')

@section('content')


<!-- Default form login -->
<form class="text-center border border-light p-2" action="{{ url('cvs') }}" method = "post">
  {{ csrf_field() }}
  <div class="container col-md-6 ">
    
    <p class="h4 mb-4">CREATE NEW CV</p>
    
    <!-- titre -->
    <input type="text" name="titre" id="defaultLoginFormEmail" class="form-control mb-3" placeholder="TITLE" value="{{old('titre')}} ">
      
    {{-- le controle de l'afichage d'erreur --}}
      @if ($errors->get('titre'))
            <div class="alert alert-danger" role="alert">
          @foreach ($errors->get('titre') as $message)
            <li>{{$message}} </li>
        @endforeach
      </div>
      @endif
        



      <!-- presentation -->
      <textarea type="text" name="presentation" id="defaultLoginFormPassword" class="form-control mb-3" placeholder="PRESENTATION"> {{old('presentation')}} </textarea>
      
        {{-- le controle de l'afichage d'erreur --}}
        @if ($errors->get('presentation'))
        <div class="alert alert-danger" role="alert">
      @foreach ($errors->get('presentation') as $message)
        <li>{{$message}} </li>
    @endforeach
    </div>
    @endif

   
  
      <!-- Sign in button -->
      <button class="btn btn-info btn-block my-4" type="submit">create</button>
  
  
    </div>
  
  
  </form>
  <!-- Default form login -->


@endsection