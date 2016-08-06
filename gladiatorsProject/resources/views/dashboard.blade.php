@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h4>Hi, {{$user->name}}</h4>
                    <h5>Here you can view all the tournaments for your classes!</h5>
                </div>
                <ul>
                    <li>Class 1-A</li>
                    <li>Class 1-C</li>
                    <li>Class 2-B</li>
                </ul>
                <a href="{{ url('/addClass') }}" title=""><i class="fa fa-plus fa-btn" aria-hidden="true"></i>Add Class</a>
            </div>
        </div>
    </div>
</div>
@endsection
