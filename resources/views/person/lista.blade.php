@extends('layouts.app')

@section("title")
<h1>Personas</h1>
@endsection

@section('content')
<person-list :personas="{{json_encode($personas)}}" url="{{url('proyectos/')}}" />
@endsection
