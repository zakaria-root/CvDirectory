@extends('layouts.master')

@section('content')
    


    <div class="container">
        <div class="col-md-12">
            <br>
            <h3>La list de tout les cv</h3>
            <hr>
            <div class="text-right"> 
                <a href="{{url("cvs/create")}}" class="btn btn-outline-success pull-right">NOUVEAU CV</a>
            </div>
            <br>
        <div class="row">
            
            @foreach ($cvs as $cv)
                
            <div class="col-sm-6 col-md-4 mb-2">
                <div class="thumbnail">
                    <!-- Card -->
<div class="card">

    <!-- Card image -->
    <div class="view overlay">
      <img class="card-img-top img-thumbnail" src="{{asset('storage/'.$cv->image)}}" alt="Card image cap" style="width: 350px;height:300px">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
  
    <!-- Button -->
  
        <div class="card-body">
    <!-- Card content -->
  
    <!-- Title -->
    <h4 class="card-title">{{$cv->titre}}</h4>
    <hr>
      <!-- Text -->
      <p class="card-text">{{$cv->presentation}}</p>
  
      <i>la date de la creation : {{$cv->created_at}}</i>
    </div>
    
    <div class="text-right mr-2 mb-2">
            <form action="{{url('cvs/'.$cv->id) }} " method="post">
        {{ csrf_field()}}
        {{ method_field('DELETE') }}
        <a href="" class="btn btn-primary">detail</a>
        <a href="{{url('cvs/'.$cv->id.'/edite')}} " class="btn btn-secondary" >modifer</a>
        @can('delete', $cv)
            
        <button type="submit" class="btn btn-danger">supprier</button>
        @endcan
    </form> 
    </div>

  

  
  </div>
  <!-- Card -->
                </div>
            </div>
            @endforeach
        </div>
    </div>


@endsection
