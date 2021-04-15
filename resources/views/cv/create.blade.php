@extends('layouts.master')

@section('content')
    
<!-- Default form login -->
<form class="text-center border border-light p-2" action="{{ url('cvs') }}" method = "post">
    {{ csrf_field() }}
    <div class="container col-md-6 ">
  
      <p class="h4 mb-4">CREATE NEW CV</p>
  
      <!-- Email -->
      <input type="text" name="titre" id="defaultLoginFormEmail" class="form-control mb-3" placeholder="TITLE">
  
      <!-- Password -->
      <textarea type="text" name="presentation" id="defaultLoginFormPassword" class="form-control mb-3" placeholder="presentation"></textarea>
  
   
  
      <!-- Sign in button -->
      <button class="btn btn-info btn-block my-4" type="submit">create</button>
  
  
    </div>
  
  
  </form>
  <!-- Default form login -->


@endsection