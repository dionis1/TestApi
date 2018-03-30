<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produkt;
use App\Http\Resources\ProduktResource;

class ProduktController extends Controller
{
    public function index()
    {
        return ProduktResource::collection(Produkt::all());

        
    }

    public function show(Produkt $produkt)
    {
        
        return  ProduktResource::collection(Produkt::findorfail($produkt));
       
    }

    public function store(Request $request)
    {   
        if($request->has('product_name')){
            if($request->has('product_description')){
                if($request->has('product_price')){
                    if($request->has('product_quantity')){

                        $produkt = Produkt::create($request->all());
        
        
                        return response()->json($produkt);
                    }else{
                        return response()->json(['message' => 'You need to add Product Quantity '], 503);
                    }
                }else{
                    return response()->json(['message' => 'You need to add Product Price '], 503);
                }
            }else{
               return response()->json(['message' => 'You need to add Product Description '], 503);
            }
        }else{
            return response()->json(['message' => 'You need to add Product Name '], 503);
        }

        
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
