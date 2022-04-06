@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if (Auth::check())
                    @if (Auth::user()->isClient())
                        {{Auth::user()->name}} is Client
                    @elseif (Auth::user()->isPartner())
                        {{Auth::user()->name}} is Partner
                    @elseif (Auth::user()->isAdmin())
                        {{Auth::user()->name}} is Admin
                    @elseif (Auth::user()->isRoot())
                        {{Auth::user()->name}} is SuperAdmin
                    @endif
                @else
                    you are in global descktop
                @endif
            </div>
        </div>

    </div>
</div>
@endsection