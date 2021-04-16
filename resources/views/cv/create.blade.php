@extends('layouts.master')

@section('content')


<!-- Default form login -->
<form class="text-center border border-light p-2" action="{{ url('cvs') }}" method = "post">
  {{ csrf_field() }}
  <div class="container col-md-6 ">
    <br>
    <p class="h4 mb-4">CREATE NEW CV</p>
    
    <!-- titre -->
    <div class="form-group text-left hase-warning"><label for="">Titre</label>
    <input type="text" name="titre" id="defaultLoginFormEmail" class="form-control mb-3" placeholder="TITLE" value="{{old('titre')}} ">
  </div>
    {{-- le controle de l'afichage d'erreur --}}
      @if ($errors->get('titre'))
            <div class="alert alert-danger" role="alert">
          @foreach ($errors->get('titre') as $message)
            <li>{{$message}} </li>
        @endforeach
      </div>
      @endif
        



      <!-- presentation -->
      <div class="form-group text-left"><label for="">Presentation</label>
      <textarea type="text" name="presentation" id="defaultLoginFormPassword" class="form-control mb-3" placeholder="PRESENTATION"> {{old('presentation')}} </textarea>
      </div>
        {{-- le controle de l'afichage d'erreur --}}
        @if ($errors->get('presentation'))
        <div class="alert alert-danger" role="alert">
      @foreach ($errors->get('presentation') as $message)
        <li>{{$message}} </li>
    @endforeach
    </div>
    @endif

    {{-- add image --}}
    <div class="form-group text-left">
      <label for="">
        <input class="control" type="file" name="image">
    </label>
  </div>
  
      <!-- Sign in button -->
      <button class="btn btn-primary btn-block my-4" type="submit">create</button>
  
  
    </div>
  
  
  </form>
  <!-- Default form login -->


@endsection