<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produkt;
use App\Http\Resources\ProduktResource;

class ProduktController extends Controller
{
    public function index()
    {   
        $produkt = Produkt::paginate(15);

        return ProduktResource::collection($produkt);

        
    }

    public function show(Produkt $produkt)
    {   

        $produkt = Produkt::findOrFail($produkt);

        return new  ProduktResource($produkt);
       
    }

    public function store(Request $request)
    {   
        

    $produkt = new Produkt(); ($request->all());

    $produkt->product_name = $request->product_name;
    $produkt->product_description = $request->product_description;
    $produkt->product_price =$request->product_price;
    $produkt->product_quantity =$request->product_quantity;

    $produkt->save();
   
    return new  ProduktResource($produkt);

    }

    public function update(Request $request, Produkt $produkt)
    {
        $produkt->update($request->all());

        return  ProduktResource::collection(Produkt::findorfail($produkt));
    }

    public function delete(Produkt $produkt)
    {
        $produkt->delete();

        $message = "Products deleted";

        return response()->json($message);
    }
}
