@extends('layout.home')

@section('content')

Poziom jakości powietrza: {{ $data['stIndexLevel']['indexLevelName'] }}

@endsection