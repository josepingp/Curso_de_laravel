<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\NoteRequest;

class NoteController extends Controller
{
    // public function index($id)
    // {
    //     return view('note.index', compact('id'));
    // }

    public function index(): View
    {
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function create(): View
    {
        return view('note.create');
    }

    //Esta seria la formula simple
    // public function edit($note)
    // {
    //     $myNote = Note::find($note);
    //     return view('formulario a pintar');
    // }

    //De esta manera laravel nos lo hace mucho mas facil
    //Al declarar el parametro como Note y ser una id laravel
    //devuelve automaticamente la note de la base de datos
    public function edit(Note $note): View
    {
        return view('note.edit', compact('note'));
    }

    // C = CREATE
    public function store(Request $request): RedirectResponse
    {
        // Forma simple
        // $note = new Note;
        // $note->title = $request->title;
        // $note->description = $request->description;

        //Con el metodo del modelo
        // Note::create([
        //     'title' => $request->title,
        //     'description' => $request->description
        // ]);

        //Validar todo
        //esta es la manera estandar de hacer validaciones
        $request->validate([
            'title' => 'required|max:255|min:4',
            'description' => 'required|max:255|min:4'
        ]);
        //Ademas de metodo RequestALL
        Note::create($request->all());
        return redirect()->route('note.index')->with('success', 'Note created');
    }

    // R = READ
    public function show(Note $note): View
    {
        return view('note.show', compact('note'));
    }

    // U = UPDATE
    public function update(NoteRequest $request, Note $note): RedirectResponse
    {
        //Validar todo
        //esta es la manera estandar de hacer validaciones
        // $request->validate([
            //     'title' => 'required|max:255|min:4',
            //     'description' => 'required|max:255|min:4'
            // ]);
            //Tambien podemos crear una custom request y utilizarla
            //  asignadole el tipo de request en la cabecera
        $note->update($request->all());
        return redirect()->route('note.index')->with('success', 'Note updated');
    }

    // D = DLETE

    public function destroy(Note $note): RedirectResponse
    {
        $note->delete();
        return redirect(route('note.index'))->with('danger', 'Note destroyed');
    }
}
