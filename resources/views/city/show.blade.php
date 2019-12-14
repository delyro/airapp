@extends('layout.home')

@section('content')

<h2>Wybierz stację pomiarową</h2> 
<a href="{{ route('city.index') }}">Powrót do wyboru miast</a>

<table class="table table-borderless">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nazwa</th>
        </tr>
    </thead>
    <tbody>
@foreach ($stations as $station)
    <tr>
    <th scope="row">{{ $loop->iteration }}</th>
    <td><a href="{{ route('station.show', ['station' => $station]) }}">{{ $station->name }}</a></td>
    </tr>
@endforeach
</tbody>
</table>


@endsection