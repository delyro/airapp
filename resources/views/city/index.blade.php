@extends('layout.home')

@section('content')

<h2>Wybierz miasto</h2>

<table class="table table-borderless">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Miasto</th>
        <th scope="col">Liczba stacji pomiarowych</th>
        </tr>
    </thead>
    <tbody>
@foreach ($cities as $city)
    <tr>
    <th scope="row">{{ $loop->iteration }}</th>
    <td><a href="{{ route('city.show', ['city' => $city]) }}">{{ $city->name }}</a></td>
    <td>{{ $city->stations->count() }}</td>
    </tr>
@endforeach
</tbody>
</table>

@endsection
