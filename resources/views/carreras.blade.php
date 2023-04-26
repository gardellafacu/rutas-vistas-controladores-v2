@extends('layout')

@section('content')
    <h1>Carreras</h1>
    <hr>
    <br>
    <ul>
        <li><a href="{{ route('carrera',' logistica') }}">Tecnicatura Superior en Logística</a></li>
        <li><a href="{{ route('carrera', 'análisis de sistemas') }}">Tecnicatura Superior en Análisis de Sistemas</a></li>
        <li><a href="{{ route('carrera', 'contable') }}">Tecnicatura Superior en Administración Contable</a></li>
        <li><a href="{{ route('carrera', 'rrhh') }}">Tecnicatura Superior en Administración de Recursos Humanos</a></li>
    </ul>
    <hr>
@endsection