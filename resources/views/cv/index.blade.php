@extends('layouts.master')

@section('content')
    

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <h2>la list de tout les cv</h2>
                <div class="text-right"> 
                    <a href="{{url("cvs/create")}}" class="btn btn-outline-success pull-right">NOUVEAU CV</a>
                </div>
                       
                <table class="table">
                    <caption>List of cv</caption>
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">titre</th>
                        <th scope="col">presentation</th>
                        <th scope="col">la date de creation</th>
                        <th scope="col">action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($cvs as $cv)
                        <tr>
                            <th scope="row">{{$cv->id}} <br>{{ $cv->user->name }} </th>
                            <td>{{$cv->titre}}</td>
                            <td>{{$cv->presentation}}</td>
                            <td>{{$cv->created_at}}</td>
                            <td>
                                <form action="{{url('cvs/'.$cv->id) }} " method="post">
                                    {{ csrf_field()}}
                                    {{ method_field('DELETE') }}
                                    <a href="" class="btn btn-primary">detail</a>
                                    <a href="{{url('cvs/'.$cv->id.'/edite')}} " class="btn btn-secondary" >modifer</a>
                                    <button type="submit" class="btn btn-danger">supprier</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection