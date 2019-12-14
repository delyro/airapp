@extends('layout.home')

@section('content')

<h2>Wyniki pomiarowe stacji</h2> 
<a href="{{ route('city.show', ['city' => $cityId]) }}">Powrót do wyboru stacji pomiarowych</a>

<table class="table table-borderless">
    <thead>
        <tr>
        <th scope="col">Nazwa parametru</th>
        <th scope="col">Wynik</th>
        </tr>
    </thead>
    <tbody>
    <tr>
    <td>Ogólna jakość powietrza</td>
    <td>{{ $stIndexLevel }}</td>
    </tr>
</tbody>
</table>


@endsection