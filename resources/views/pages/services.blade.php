@extends('layouts.app')
@section('content')
<h1 class="blogh1 text-center">{{$title}}</h1>
@if(count($services) > 0)
    <ul class="list-group">
    @foreach($services as $service)
        <li class="list-group-item">{{$service}}</li> 
    @endforeach
    </ul>
@endif
@endsection