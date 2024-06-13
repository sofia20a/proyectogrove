<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

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

        return view('admin.index', compact('events','eventsAmount'), [EventController::class],);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
