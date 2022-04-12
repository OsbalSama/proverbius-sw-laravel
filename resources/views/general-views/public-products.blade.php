@extends('layouts.app')
@section('content')
    <div class="container">        
        <div class="card-body bg-warning">
            <div class="row">
                <div class="col-11">
                    <input class="form-control mr-2" type="search" placeholder="Search">
                </div>
                <div class="col-1">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
            </div>
            <br>
            <div class="card-body bg-light">
                content
            </div>
        </div>
    </div>
@endsection
