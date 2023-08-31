<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

// class EventController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         $events = Event::all();
//         return response()->json($events);
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         Event::create([
//             'title' => 'Acara Baru',
//             'start_date' => '2023-07-15',
//             'end_date' => '2023-07-16',
//         ]);
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         $event = new Event();
//         $event->title = $request->input('title');
//         $event->start_date = $request->input('start_date');
//         $event->end_date = $request->input('end_date');
//         // ... isi atribut lainnya sesuai kebutuhan
//         $event->save();

//         return response()->json(['message' => 'Event created successfully']);
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(string $id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(string $id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, string $id)
//     {
//         $event = Event::find($id);
//         if (!$event) {
//             return response()->json(['message' => 'Event not found'], 404);
//         }

//         $event->title = $request->input('title');
//         $event->start_date = $request->input('start_date');
//         $event->end_date = $request->input('end_date');
//         // ... update atribut lainnya sesuai kebutuhan
//         $event->save();

//         return response()->json(['message' => 'Event updated successfully']);
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(string $id)
//     {
//         $event = Event::find($id);
//         if (!$event) {
//             return response()->json(['message' => 'Event not found'], 404);
//         }

//         $event->delete();

//         return response()->json(['message' => 'Event deleted successfully']);
//     }
// }



class EventController extends Controller
{   
     // Function untuk menampilkan form create event
    public function index()
    {  
        $event=Event::all();
        return view('events.index', compact('event'));
        }

    // Function untuk menampilkan form create event
    public function create()
    {
        return view('events.create');
    }

    // Function untuk menyimpan event baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'pj' => 'required',
            'konsultan' => 'required',
            'nohp' => 'required',
            'kontakperson' => 'required',
            'alamat' => 'required',
            'time' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        Event::create($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Event created successfully');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.index', compact('event'));
    }

    // Function untuk menampilkan form edit event
    public function edit($id)
    {
        $event = Event::find($id);
        return view('events.edit', compact('event'));
    }

    // Function untuk mengupdate event di database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'pj' => 'required',
            'konsultan' => 'required',
            'nohp' => 'required',
            'kontakperson' => 'required',
            'alamat' => 'required',
            'time' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $event = Event::find($id);
        $event->update($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Event updated successfully');
    }

    // Function untuk menghapus event dari database
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('dashboard.index')->with('success', 'Event deleted successfully');
    }
    



    
    public function getEvents()
    {
        $events = Event::all();

        $formattedEvents = [];
        foreach ($events as $event) {
            $formattedEvents[] = [
                'title' => $event->title,
                'pj' => $event->pj,
                'konsultan' => $event->konsultan,
                'nohp' => $event->nohp,
                'kontakperson' => $event->kontakperson,
                'alamat' => $event->alamat,
                'time' => $event->time,
                'start' => $event->start_date,
                'end' => $event->end_date,
                // Tambahkan data lain yang ingin ditampilkan pada event di sini
            ];
        }

        return response()->json($formattedEvents);
    }
}

