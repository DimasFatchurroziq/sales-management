<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Payment;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events=Event::all();
        $customers=Customer::all();
        $employees=Employee::all();
        return view('dashboard.index', compact('events','customers','employees'));    
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
        $request->validate([
            'title' => 'required',
            'pj' => 'required',
            'consultant' => 'required',
            'cp' => 'required',
            'phone' => 'required',
            //'kontakperson' => 'required',
            'address' => 'required',
            'time' => 'required',
            'start_date' => 'required',
        ]);

        $dataEvent = [
            'title' => $request->input('title'),
            'time' => $request->input('time'),
            'start_date' => $request->input('start_date'),
        ];
    
        $dataEmployee = [
            'employee_name' => $request->input('pj'),
            'position' => 'Consultant',
            'employee_name' => $request->input('consultant'),
            'position' => 'PJ',
        ];

        $dataCustomer = [
            'customer_name' => $request->input('cp'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
        ];

        Event::create($dataEvent);
        Customer::create($dataCustomer);
        Employee::create($dataEmployee);
        
        return redirect()->route('dashboard.index')->with('success', 'Event created successfully');
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
