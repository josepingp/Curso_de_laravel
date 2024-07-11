<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Note;
use App\Http\Requests\NoteRequest;
use App\Http\Resources\NoteResource;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        // return response()->json(Note::all(), 200);
        //Usando el ApiResource NoteResource
        return NoteResource::collection(Note::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(NoteRequest $request): JsonResponse
    {
        $note = Note::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $note
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResource
    {
        $note = Note::find($id);
        // return response()->json($note, 200);
        return new NoteResource($note);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoteRequest $request, int $id): JsonResponse
    {
        $note = Note::find($id);
        $note->update($request->all());
        return response()->json([
            'success' => true,
            'data' => new NoteResource($note)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):JsonResponse
    {
        Note::find($id)->delete();
        return response()->json([
            'success' => true
        ], 200);
    }
}
