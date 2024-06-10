<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booking = Booking::all();
        return view ('booking', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bookings = Booking::all();
        return view('booking', compact('bookings'));
    }

    public function stores(Request $request)
    {
        $request->validate([
            'nik' => 'required|string|max:255',
            'id_room' => 'required|string|max:255',
            'checkin_date' => 'required|date',
            'checkout_date' => 'required|date',
            'id_room_tipe' => 'required|string|max:255',
            'total_price' => 'required|numeric',
        ]);

        Booking::create([
            'nik' => $request->nik,
            'id_room' => $request->id_room,
            'checkin_date' => $request->checkin_date,
            'checkout_date' => $request->checkout_date,
            'id_room_tipe' => $request->id_room_tipe,
            'total_price' => $request->total_price,
        ]);

        return redirect()->route('booking');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'tipe' => 'required',
            'rooms' => 'required',
            'cidate' => 'required',
            'codate' => 'required',
            'harga' => 'required',
        ]);



        $store = Booking::create([
            'nik' => $request->nik,
            'id_room' => $request->rooms,
            'checkin_date' => $request->cidate,
            'checkout_date' => $request->codate,
            'id_room_tipe' => $request->tipe,
            'total_price' => $request->harga,
        ]);

        if($store){
            return redirect('/reserfasi');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
