@extends('layout.home')

@section('content')

<h2>Wybierz miasto</h2>

@foreach ($cities as $city)
<a href="{{ route('city.show', ['city' => $city]) }}">
<div class="badge badge-primary text-wrap" style="width: 6rem;">
    {{ $city->name }}
</div>
</a>

@endforeach


@endsection
