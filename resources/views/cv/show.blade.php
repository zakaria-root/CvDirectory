@extends('layouts.master')

@section('content')
    <div class="container " >
        <div class="row">
            <div class="col-md-12 mt-5" id="app" >
                <h3> @{{ message }} </h3>
                     <div class="card ">
                         
                <h5 class="card-header h5 bg-primary">
                    <div class="row">
                        <div class="col-md-10 text-white">Experiance</div>
                        <div class="col-md-2 text-right"> <a href="#!" class="btn btn-outline-success p-2 px-3">ajouter</a></div>
                    </div>
                    
                </h5>
                
                <div class="card-body border border-primary">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="text-right">
                                <a href="" class="btn btn-warning btn-sm">editer</a>
                            </div>
                            <h3>la formatin de boostrap</h3>
                            <p>
                                If a controller action is particularly complex, you might find it 
                                convenient to dedicate 
                                 entire controller class to that single action. To accomplish 
                                 this, you may define a single 
                                 If a controller action is particularly complex, you might find it 
                                 convenient to dedicate 
                                  entire controller class to that single action. To accomplish 
                                  this, you may define a single 
                            </p>
                            <small>12/2/2015 a 1/5/2020</small>
                        </li>
                        <li class="list-group-item">
                            <div class="text-right">
                                <a href="" class="btn btn-warning btn-sm">editer</a>
                            </div>
                            <h3>la formatin de boostrap</h3>
                            <p>
                                If a controller action is particularly complex, you might find it 
                                convenient to dedicate 
                                 entire controller class to that single action. To accomplish 
                                 this, you may define a single 
                                 If a controller action is particularly complex, you might find it 
                                 convenient to dedicate 
                                  entire controller class to that single action. To accomplish 
                                  this, you may define a single 
                            </p>
                            <small>12/2/2015 a 1/5/2020</small>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
       
            
        </div>
    </div>
    

@endsection

@section('javascript')

<script>
    var app = new Vue({
        el: '#app',
        data: {
            message : 'la page show'
        }
        });
</script>


@endsection