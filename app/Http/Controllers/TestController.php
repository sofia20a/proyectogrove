<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtiene todos los cursos
        $Course = Course::all();
        return response()->json($Course);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar y almacenar un nuevo curso
        $request->validate([
            'name' => 'required|string|max:255',
            'events_id' => 'required|array', // Asegura que 'events_id' sea un array
        ]);

        
        $course = Course::create([
            'name' => $request->name,
            'events_id' => json_encode($request->events_id), // Convierte el array a JSON
        ]);

        return response()->json($course, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $course = Course::find($id);

        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        // Decodifica 'events_id' de JSON a array
        $course->events_id = json_decode($course->events_id, true);

        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar y actualizar un curso existente
        $request->validate([
            'name' => 'sometimes|string|max:255',
            'events_id' => 'sometimes|array', // Asegura que 'events_id' sea un array
        ]);

        $course = Course::find($id);

        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        if ($request->has('name')) {
            $course->name = $request->name;
        }

        if ($request->has('events_id')) {
            $course->events_id = json_encode($request->events_id); // Convierte el array a JSON
        }

        $course->save();

        return response()->json($course);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Elimina un curso específico
        $course = Course::find($id);

        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }

        $course->delete();

        return response()->json(['message' => 'Course deleted successfully']);
    }
}
