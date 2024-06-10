<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class ReserfasiController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('booking', compact('bookings'));
    }

    public function create()
    {
        return view('reserfasicreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|string|max:255',
            'id_room' => 'required|string|max:255',
            'checkin_date' => 'required|date',
            'checkout_date' => 'required|date',
            'id_room_tipe' => 'required|string|max:255',
            'total_price' => 'required|numeric',
        ]);

        Booking::create($request->all());
        return redirect()->route('reserfasi');
    }

    public function edit(Booking $booking)
    {
        return view('bookings.edit', compact('booking'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'nik' => 'required|string|max:255',
            'id_room' => 'required|string|max:255',
            'checkin_date' => 'required|date',
            'checkout_date' => 'required|date',
            'id_room_tipe' => 'required|string|max:255',
            'total_price' => 'required|numeric',
        ]);

        $booking->update($request->all());
        return redirect()->route('bookings.index');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index');
    }
}
