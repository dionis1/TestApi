<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produkt;

class ProduktController extends Controller
{
    public function index()
    {
        $produkt = Produkt::all();

        return response()->json($produkt);
    }

    public function show(Produkt $produkt)
    {
        return response()->json($produkt);
    }

    public function store(Request $request)
    {
        $produkt = Produkt::create($request->all());

        return response()->json($produkt);
    }

    public function update(Request $request, Produkt $produkt)
    {
        $produkt->update($request->all());

        return response()->json($produkt);
    }

    public function delete(Produkt $produkt)
    {
        $produkt->delete();

        $message = "Products deleted";

        return response()->json($message);
    }
}
