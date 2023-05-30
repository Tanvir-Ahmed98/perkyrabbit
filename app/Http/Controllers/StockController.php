<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Stock;
use Illuminate\Support\Facades\DB;
class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        
        
        try {
                for($i=0;$i< count( $request->product_id);$i++){
                 $dataArray = [
            
                            'product_id' => $request->product_id[$i],
                            'type' => $request->type[$i],
                            'product_quantity' => $request->product_quantity[$i],
                            'product_in_stock' =>($request->product_quantity[$i]),
                            'updated_at' => now(),
                            'created_at' => now()
                
                ];
                             Stock::create($dataArray);
                }
        }  
        
         catch (\Exception $e) {
            
            dd($e->getMessage());
        }
    
        return redirect()->back()->with('success','record inserted successfully!!'); 
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
