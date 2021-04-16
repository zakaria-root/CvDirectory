@extends('layouts.master')

@section('content')
    
<!-- Default form login -->
<form class="text-center border border-light p-2 " action="{{ url('cvs/'.$cv->id) }}" method = "post">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <div class="container col-md-6 ">
  
      <p class="h4 mb-4">MODIFIER CV</p>
  
      <!-- Email -->
      <input type="text" name="titre" id="defaultLoginFormEmail" class=" form-control mb-3 " placeholder="TITRE" value="{{$cv->titre}} ">
        {{-- le controle de l'afichage d'erreur --}}
        @if ($errors->get('titre'))
        <div class="alert alert-danger" role="alert">
      @foreach ($errors->get('titre') as $message)
        <li>{{$message}} </li>
    @endforeach
  </div>
  @endif
      <!-- Password -->
      <textarea type="text" name="presentation" id="defaultLoginFormPassword" class="form-control mb-3" placeholder="PRESENTATION" >{{$cv->presentation}}</textarea>
        {{-- le controle de l'afichage d'erreur --}}
        @if ($errors->get('titre'))
        <div class="alert alert-danger" role="alert">
      @foreach ($errors->get('titre') as $message)
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
      <button class="btn btn-danger btn-block my-4" type="submit">modifier</button>
  
    </div>
  
  
  </form>
  <!-- Default form login -->


@endsection>