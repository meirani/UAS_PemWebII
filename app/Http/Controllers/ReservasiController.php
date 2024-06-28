<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Hotel;
use App\Models\Kamar;
use App\Models\Reservasi;
use App\Http\Requests\StoreReservasiRequest;
use App\Http\Requests\UpdateReservasiRequest;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservasi = Reservasi::all();
        return view('reservasis', compact('reservasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reservasi.create', [
            'hotels' => Hotel::all(),
            'kamars' => Kamar::all(),
            'users' => User::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservasiRequest $request, Hotel $hotel, Kamar $kamar, User $user)
    {
        $validateData = $request->validate([
            'tamu' => 'required|max:20',
            'tanggal' => 'required'
        ]);

        $validateData['hotel_id'] = $hotel->id;
        $validateData['kamar_id'] = $kamar->id;
        $validateData['user_id'] = $user->id;

        Reservasi::create($validateData);

        return redirect('/reservasis');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservasi $reservasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservasi $reservasi)
    {
        return view('reservasi.edit', [
            'reservasi' => $reservasi,
            'hotels' => Hotel::all(),
            'kamars' => Kamar::all(),
            'users' => User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservasiRequest $request, Reservasi $reservasi, Hotel $hotel, Kamar $kamar, User $user)
    {
        $validateData = $request->validate([
            'tamu' => 'required|max:20',
            'tanggal' => 'required'
        ]);

        $validateData['hotel_id'] = $hotel->id;
        $validateData['kamar_id'] = $kamar->id;
        $validateData['user_id'] = $user->id;

        Reservasi::where('id', $reservasi->id)->update($validateData);

        return redirect('/reservasis');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservasi $reservasi)
    {
        Reservasi::destroy($reservasi->id);

        return redirect('/reservasis');
    }
}
