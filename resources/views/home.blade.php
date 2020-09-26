@extends('layouts.main-layout')

@section('content')

  <main>

    <h2>Sezioni del DB-Hotel:</h2>
    <a href="{{ route('stanze-index') }}">Le nostre STANZE!</a><br>
    <a href="{{ route('stanza-create') }}">Aggiungi una STANZA!</a>
    
  </main>

@endsection
