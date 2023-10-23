<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = DB::table('rooms')->get();
        // Reservation::all();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('rooms.create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'no_kamar' => 'required|numeric',
            'type_kamar' => 'required',
            'harga' => 'required|numeric',
            'fasilitas' => 'required',
        ]);

        // Reservation::create($validatedData);
        $query = DB::table('rooms')->insert([
            'no_kamar' => $request['no_kamar'],
            'type_kamar' => $request['type_kamar'],
            'harga' => $request['harga'],
            'fasilitas' => $request['fasilitas'],
        ]);

        return redirect()->route('rooms.index')
            ->with('success', 'Rooms created successfully.');
    }

    public function show(string $id)
    {
        $rooms = DB::table('rooms')->where('id', $id)->get(); 
        // rooms::findOrFail($id);
        return view('rooms.show', compact('rooms'));
    }
    
    public function edit(string $id)
    {
        //$rooms = rooms::findOrFail($id);
        $rooms = DB::table('rooms')->where('id', $id)->get();
        return view('rooms.edit', compact('rooms'));
    }

    public function update(Request $request, string $id)
    {
         $request->validate([
            'no_kamar' => 'required|numeric',
            'type_kamar' => 'required',
            'harga' => 'required|numeric',
            'fasilitas' => 'required',
        ]);

        // $rooms = rooms::findOrFail($id);
        // $rooms->update($validatedData);

        $query = DB::table('rooms')->where('id', $id)->update([
            'no_kamar' => $request['no_kamar'],
            'type_kamar' => $request['type_kamar'],
            'harga' => $request['harga'],
            'fasilitas' => $request['fasilitas'],
        ]);

        return redirect()->route('rooms.index')
            ->with('success', 'rooms updated successfully');
    }

    public function destroy(string $id)
    {
        // $rooms = rooms::findOrFail($id);
        // $rooms->delete();

        $query = DB::table('rooms')->where('id', $id)->delete();
        return redirect()->route('rooms.index')
            ->with('success', 'Rooms deleted successfully');
    }
}
