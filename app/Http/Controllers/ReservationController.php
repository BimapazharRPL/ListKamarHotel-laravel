<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = DB::table('reservations')->get();
        // Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        return view('reservations.create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'nama' => 'required',
            'checkin_date' => 'required|date',
            'checkout_date' => 'required|date',
            'no_kamar' => 'required|numeric',
            'type_kamar' => 'required',
            'jumlah_tamu' => 'required|integer',
            'total' => 'required|numeric',
        ]);

        // Reservation::create($validatedData);
        $query = DB::table('reservations')->insert([
            'nama' => $request['nama'], 
            'checkin_date' => $request['checkin_date'],
            'checkout_date' => $request['checkout_date'],
            'no_kamar' => $request['no_kamar'],
            'type_kamar' => $request['type_kamar'],
            'jumlah_tamu' => $request['jumlah_tamu'],
            'total' => $request['total'],
        ]);

        return redirect()->route('reservations.index')
            ->with('success', 'Reservation created successfully.');
    }

    public function show(string $id)
    {
        $reservation = DB::table('reservations')->where('id', $id)->get(); 
        // Reservation::findOrFail($id);
        return view('reservations.show', compact('reservation'));
    }

    public function edit(string $id)
    {
        //$reservation = Reservation::findOrFail($id);
        $reservation = DB::table('reservations')->where('id', $id)->get();
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, string $id)
    {
         $request->validate([
            'nama' => 'required',
            'checkin_date' => 'required|date',
            'checkout_date' => 'required|date',
            'no_kamar' => 'required|numeric',
            'jumlah_tamu' => 'required|integer',
            'total' => 'required|numeric',
        ]);

        // $reservation = Reservation::findOrFail($id);
        // $reservation->update($validatedData);

        $query = DB::table('reservations')->where('id', $id)->update([
            'nama' => $request['nama'], 
            'checkin_date' => $request['checkin_date'],
            'checkout_date' => $request['checkout_date'],
            'no_kamar' => $request['no_kamar'],
            'type_kamar' => $request['type_kamar'],
            'jumlah_tamu' => $request['jumlah_tamu'],
            'total' => $request['total'],
        ]);

        return redirect()->route('reservations.index')
            ->with('success', 'Reservation updated successfully');
    }

    public function destroy(string $id)
    {
        // $reservation = Reservation::findOrFail($id);
        // $reservation->delete();

        $query = DB::table('reservations')->where('id', $id)->delete();
        return redirect()->route('reservations.index')
            ->with('success', 'Reservation deleted successfully');
    }
}
