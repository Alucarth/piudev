@extends('layouts.app')
@section('Title')
<h1>{{$persona->first_name}} {{$persona->last_name}} </h1>
@endsection
@section('content')
<proyect-component :proyectos="{{json_encode($proyectos)}}" :persona="{{json_encode($persona)}}" url='{{url('store_proyect')}}' csrf='{!! csrf_field('POST') !!}' />

@endsection
