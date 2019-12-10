@extends('layout.home')

@section('content')

<h2>Wybierz stację pomiarową</h2>

@foreach ($stations as $station)
<a href="{{ route('station.show', ['station' => $station]) }}">
<div class="badge badge-primary text-wrap" style="width: 6rem;">
    {{ $station->name }}
</div>
</a>

@endforeach


@endsection