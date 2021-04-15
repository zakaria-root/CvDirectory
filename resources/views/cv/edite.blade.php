@extends('layouts.master')

@section('content')
    
    {{-- le controle d'afichage d'erreur --}}
    @if ( count($errors) )
    <div class="alert alert-danger" role="alert">
      <ul>
          @foreach ($errors->all() as $message)
          <li>
            {{ $message }}
          </li>
          @endforeach
        </ul>
      </div>

    @endif
    
<!-- Default form login -->
<form class="text-center border border-light p-2" action="{{ url('cvs/'.$cv->id) }}" method = "post">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <div class="container col-md-6 ">
  
      <p class="h4 mb-4">CREATE NEW CV</p>
  
      <!-- Email -->
      <input type="text" name="titre" id="defaultLoginFormEmail" class="form-control mb-3" placeholder="TITRE" value="{{$cv->titre}} ">
  
      <!-- Password -->
      <textarea type="text" name="presentation" id="defaultLoginFormPassword" class="form-control mb-3" placeholder="PRESENTATION" >{{$cv->presentation}}</textarea>
  
      <!-- Sign in button -->
      <button class="btn btn-danger btn-block my-4" type="submit">modifier</button>
  
    </div>
  
  
  </form>
  <!-- Default form login -->


@endsection>