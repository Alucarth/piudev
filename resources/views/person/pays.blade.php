@extends('layouts.app')


@section('content')
<h1>Pagos</h1>

<pays-component :pays="{{json_encode($pays)}}" :proyecto="{{json_encode($proyecto)}}" url='{{url('store_pay')}}'   csrf='{!! csrf_field('POST') !!}' />
{{-- <person-list :personas="{{json_encode($personas)}}" url="{{url('proyectos/')}}" /> --}}
@endsection
