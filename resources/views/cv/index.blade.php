@extends('layouts.master')

@section('content')
    
{{-- 
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <h3>la list de tout les cv</h3>
                <hr>
                <div class="text-right"> 
                    <a href="{{url("cvs/create")}}" class="btn btn-outline-success pull-right">NOUVEAU CV</a>
                </div>
                @foreach ($cvs as $cv)
                <div class="col-sm-6 col-md-4">
                    <!-- Card -->
                    <div class="thumbnail">
                            <img  src=".../100px180/" alt="Card image cap">
                            <div class="caption">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                                
                            </div>
                        </div>
                    </div>
                @endforeach
          <!-- Card -->
          
             
            </div>
        </div>
    </div> --}}

    <div class="container">
        <div class="col-md-12">
            <br>
            <h3>la list de tout les cv</h3>
            <hr>
            <div class="text-right"> 
                <a href="{{url("cvs/create")}}" class="btn btn-outline-success pull-right">NOUVEAU CV</a>
            </div>
            <br>
        <div class="row">
            
            @foreach ($cvs as $cv)
                
            <div class="col-sm-6 col-md-4">
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
    <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
        class="fas fa-chevron-right pl-1"></i></a>
  
    <!-- Card content -->
    <div class="card-body">
  
      <!-- Title -->
      <h4 class="card-title">{{$cv->titre}}</h4>
      <hr>
      <!-- Text -->
      <p class="card-text">{{$cv->presentation}}</p>
  
      <i>la date de la creation : {{$cv->created_at}}</i>
    </div>
    
  
    <!-- Card footer -->
    <div class="rounded-bottom mdb-color lighten-3 text-right pt-3">
        
        <form action="{{url('cvs/'.$cv->id) }} " method="post">
            {{ csrf_field()}}
            {{ method_field('DELETE') }}
            <a href="" class="btn btn-primary">detail</a>
            <a href="{{url('cvs/'.$cv->id.'/edite')}} " class="btn btn-secondary" >modifer</a>
            <button type="submit" class="btn btn-danger">supprier</button>
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
{{-- 
    <img class="card-img-top " src="{{asset('storage/'.$cv->image)}}" alt="Card image cap">                        
    <!-- Card content -->
<div class="card-body">
    
    <!-- Title -->
    <h4 class="card-title"><a>{{$cv->titre}}</a></h4>
    <!-- Text -->
    <hr>
    <p class="card-text">{{$cv->presentation}}</p>
    <p><i>la date de cration: </i>{{$cv->created_at}}</p>
        <!-- Button -->
        <form action="{{url('cvs/'.$cv->id) }} " method="post">
            {{ csrf_field()}}
            {{ method_field('DELETE') }}
            <a href="" class="btn btn-primary">detail</a>
            <a href="{{url('cvs/'.$cv->id.'/edite')}} " class="btn btn-secondary" >modifer</a>
            <button type="submit" class="btn btn-danger">supprier</button>
        </form> --}}