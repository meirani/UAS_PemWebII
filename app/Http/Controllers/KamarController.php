<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Kamar;
use App\Http\Requests\StoreKamarRequest;
use App\Http\Requests\UpdateKamarRequest;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kamar = Kamar::all();
        return view('kamars', compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kamar.create', [
            'hotels' => Hotel::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKamarRequest $request, Hotel $hotel)
    {
        $validateData = $request->validate([
            'nomor' => 'required|max:10'
        ]);

        $validateData['hotel_id'] = $hotel->id;

        Hotel::create($validateData);

        return redirect('/kamars');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kamar $kamar)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kamar $kamar)
    {
        return view('kamar.edit', [
            'kamar' => $kamar,
            'hotels' => Hotel::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKamarRequest $request, Kamar $kamar, Hotel $hotel)
    {
        $validateData = $request->validate([
            'nomor' => 'required|max:10'
        ]);

        $validateData['hotel_id'] = $hotel->id;

        Kamar::where('id', $kamar->id)->update($validateData);

        return redirect('/kamars');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kamar $kamar)
    {
        Kamar::destroy($kamar->id);

        return redirect('/kamars');
    }
}
