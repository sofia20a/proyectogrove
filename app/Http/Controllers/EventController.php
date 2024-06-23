<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\CategoriesEvent;
use App\Models\StatusEvent;
use Illuminate\Support\Facades\Storage;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Obtener todos los eventos con información relacionada
        $events = Event::select(
            'events.id',
            'status_events.status_name',
            'categories_events.category_name',
            'events.name',
            'events.description',
            'events.priority',
            'events.image_event',
            'events.scheduled_at'
           
        )
        ->join('status_events', 'status_events.id', '=', 'events.status_events_id')
        ->join('categories_events', 'categories_events.id', '=', 'events.categories_events_id')
        ->get();

        // Determinar si la solicitud espera una respuesta JSON
        if ($request->is('api/*') || $request->wantsJson()) {
            // Retornar los eventos como una respuesta JSON
            return response()->json(['events' => $events]);
        }

        // Si la solicitud no espera JSON, devolver la vista
        $eventsAmount = count(Event::all());
        return view('admin.index', compact('events', 'eventsAmount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CategoriesEvent::all();
        $status = StatusEvent::all();
        
        return view('admin.addEvent', compact('categories', 'status'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
        $request->validate([
            'image' => 'required|file|mimes:jpg,png|max:2048', 
            'eventDate' => 'required',
            'eventHour' => 'required',
            'categories_events_id' => 'required',
            'status_events_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'priority' => 'required',
        ]);

        $file = $request->file('image');
        $file_name = 'event_' . time() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('public/images', $file_name);
        

     
     $scheduled_at = $request->eventDate . ' ' . $request->eventHour . ':00';


      $event = Event::create([
        'categories_events_id' => $request->categories_events_id,
        'status_events_id' => $request->status_events_id,
        'name' => $request->name,
        'description' => $request->description,
        'priority' => $request->priority,
        'image_event' => "/storage/images/".$file_name,
        'scheduled_at' => $scheduled_at,
      ]);
      return redirect()->route('admin.index')->with('success','Event registered successfully.');
 
    

        
    
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id , Request $request)
    {
        // Obtener el evento con la información de la categoría relacionada
        $event = Event::select(
            'events.id',
            'status_events.status_name',
            'categories_events.category_name',
            'events.name',
            'events.description',
            'events.priority',
            'events.image_event',
            'events.scheduled_at'
        )
        ->join('status_events', 'status_events.id', '=', 'events.status_events_id')
        ->join('categories_events', 'categories_events.id', '=', 'events.categories_events_id')
        ->where('events.id', $id)
        ->first();

        // Validar si se encontró el evento
        if (!$event) {
            return response()->json(['error' => 'Event not found'], 404);
        }

        // Determinar si la solicitud espera una respuesta JSON
        if ($request->is('api/*') || $request->wantsJson()) {
            // Retornar el evento como una respuesta JSON
            return response()->json(['event' => $event]);
        }

        // Si la solicitud no espera JSON, devolver la vista
        return view('admin.showEvent', compact('event'));
    }
   
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = CategoriesEvent::all();
        $status = StatusEvent::all();
        $event = Event::find($id);

        return view('admin.editEvent', compact('event', 'categories', 'status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $scheduled_at = $request->eventDate . ' ' . $request->eventHour . ':00';
        $file = $request->file('image');
        $file_name = 'event_' . time() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('public/images', $file_name);
     
        $query = Event::find($id);

    if($query){

   
  
       

            $query->update([
                'categories_events_id' => $request->categories_events_id,
                'status_events_id' => $request->status_events_id,
                'name' => $request->name,
                'image_event' => $file_name,
                'description' => $request->description,
                'scheduled_at' => $request->scheduled_at
            ]);

            return redirect()->route('admin.index')->with('success','Event updated successfully.');
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
   
        public function destroy(string $id)
        {
            //
            $result = Event::find($id);
            $result->delete();
    
            return redirect()->route('admin.index')->with('success','Event deleted successfully.');
    
        }
    }

