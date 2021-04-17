@extends('layouts.master')

@section('content')
    <div class="conainer">
        <div class="row">
            <div class="col-md-12  text-center mt-5">
                <h2>cette page est non authoriser</h2>
                <a href="{{url('cvs') }} " class="btn btn-success m-4 px-5">return</a>
            </div>
        </div>
    </div>

@endsection