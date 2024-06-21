<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\CategoriesEvent;
use App\Models\StatusEvent;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $events = Event::select(
            'events.id',
            'status_events.status_name',
            'categories_events.category_name',
            'events.name',
            'events.description'
        )
        ->join('status_events', 'status_events.id', '=', 'events.status_events_id')
        ->join('categories_events', 'categories_events.id', '=', 'events.categories_events_id')
        ->get();

        $eventsAmount = count(Event::all());

        return view('admin.index', compact('events','eventsAmount'));
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
      $scheduled_at = $request->eventDate . ' ' . $request->eventHour . ':00';
    
      $event = Event::create([
        'categories_events_id' => $request->categories_events_id,
        'status_events_id' => $request->status_events_id,
        'event_name' => $request->name,
        'description' => $request->description,
        'scheduled_at' => $scheduled_at,
      ]);
    
    
      return redirect()->route('admin.index')->with('success','Event registered successfully.');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
     $event = Event::find($id);
 
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
    
        //
        $query = Event::find($id);
       
        if($query){

            //check if image was uploaded
            if($file != null){
                //check if image exists to delete it
                $file_to_remove = 'storage/images/'.$request->old_image;
                if(File::exists($file_to_remove)){
                    File::delete($file_to_remove);
                }
                //to upload image, generate a new name and save it in storage
            

            $query->update([
                'categories_events_id' => $request->categories_events_id,
                'status_events_id' => $request->status_events_id,
                'name' => $request->name,
             
                'description' => $request->description,
                'scheduled_at' => $request->scheduled_at
            ]);

            return redirect()->route('admin.index')->with('success','Event updated successfully.');
        }
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

