@extends('layout')

@section('content')
<h1>Formulaire des étudiants</h1>
<ul>
    @foreach ($data as $gestion )
        <li>{{ $gestion }} </li>
    @endforeach
</ul>
@endsection