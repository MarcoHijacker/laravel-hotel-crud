<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stanza;

class StanzaController extends Controller
{
  public function index() {
    $stanze = Stanza::all();
    return view('stanze', compact('stanze'));
  }

  public function show($id) {
    $stanza = Stanza::findOrFail($id); // Qui metto in $stanza solo l'elemento cercato per ID
    return view('stanza', compact('stanza')); // Vado nella pagina dei dettagli singola stanza su stanza.blade.php e compatto in essa la $stanza richiesta tramite ID
  }

  public function create() {
    return view('create-stanza');
   }

  public function store(Request $request) {
     $data = $request -> all();
     $stanza = Stanza::create($data);
     return redirect() -> route('stanze-index');
  }
  
}
