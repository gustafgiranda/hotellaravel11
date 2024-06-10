<?php
// app/Http/Controllers/RoomController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('kamar', compact('rooms'));
    }

    public function create()
    {
        return view('kamarcreate');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'jumlah_kasur' => 'required',
            'id_room_tipe' => 'required',
        ]);

        // Simpan data ke database
        Room::create($request->all());

        return redirect('/kamar');
    }

    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('kamaredit', compact('room'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'jumlah_kasur' => 'required',
            'id_room_tipe' => 'required',
        ]);

        // Update data di database
        $room = Room::findOrFail($id);
        $room->update($request->all());

        return redirect('/kamar');
    }

    public function destroy($id)
    {
        // Hapus data dari database
        $room = Room::findOrFail($id);
        $room->delete();

        return redirect('/kamar');
    }
}
