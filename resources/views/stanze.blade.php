@extends('layouts.main-layout')

@section('content')

  <main>

    <h2>Lista Stanze DB-Hotel:</h2>
    <ul>
      @foreach ($stanze as $stanza)
        <li>
          <a href="{{ route('stanza-show', $stanza -> id) }}">
          {{ $stanza -> room_number }}
          </a>
        </li>
      @endforeach
    </ul>
    
  </main>

@endsection
