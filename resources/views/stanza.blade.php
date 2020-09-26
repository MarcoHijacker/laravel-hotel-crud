@extends('layouts.main-layout')

@section('content')

  <main>

    <h2>Dettagli Stanza DB-Hotel:</h2><br>
    <div>Room number: {{ $stanza -> room_number }} </div>

    <ul>
      <li>Floor: {{ $stanza -> floor }} </li>
      <li>Beds: {{ $stanza -> beds }} </li>
    </ul>

    <a href="{{ route('stanze-index') }}">Torna all'area STANZE!</a>
    
  </main>

@endsection
