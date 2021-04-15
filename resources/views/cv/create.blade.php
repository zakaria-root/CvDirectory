@extends('layouts.master')

@section('content')
    {{-- le controle de l'afichage d'erreur --}}
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
<form class="text-center border border-light p-2" action="{{ url('cvs') }}" method = "post">
    {{ csrf_field() }}
    <div class="container col-md-6 ">
  
      <p class="h4 mb-4">CREATE NEW CV</p>
  
      <!-- Email -->
      <input type="text" name="titre" id="defaultLoginFormEmail" class="form-control mb-3" placeholder="TITLE" value="{{old('titre')}} ">
  
      <!-- Password -->
      <textarea type="text" name="presentation" id="defaultLoginFormPassword" class="form-control mb-3" placeholder="presentation"> {{old('presentation')}} </textarea>
  
   
  
      <!-- Sign in button -->
      <button class="btn btn-info btn-block my-4" type="submit">create</button>
  
  
    </div>
  
  
  </form>
  <!-- Default form login -->


@endsection