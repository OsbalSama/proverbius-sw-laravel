@extends('layouts.product-layout')
@section('product-content')
    @if ($items->isEmpty())
        noItemsLoaded
    @else
        Load Terms and Requirements
    @endif
@endsection
