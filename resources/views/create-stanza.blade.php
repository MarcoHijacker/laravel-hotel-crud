@extends('layouts.main-layout')

@section('content')

  <main>

    <h2>Nuova Stanza:</h2>

    <form action="{{ route('stanza-store') }}" method="post">
      @csrf
      @method('POST')

      <div class="form-group">
        <label for="room_number">Room Number:</label>
        <br>
        <input type="number" name="room_number" value="">
      </div>
      <div class="form-group">
        <label for="floor">Floor:</label>
        <br>
        <input type="number" name="floor" value="">
      </div>
      <div class="form-group">
        <label for="beds">Beds:</label>
        <br>
        <input type="number" name="beds" value="">
      </div>

      <br><br>
      <button type="submit">Inserisci Stanza</button>
    </form>
    
  </main>

@endsection
