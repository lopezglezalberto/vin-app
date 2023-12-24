<?php

namespace App\Http\Controllers;

use App\Models\Vins;
use App\Models\EquipmentCode;
use App\Models\PlaceProduction;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\VinsResource;

use Illuminate\Http\Request;

class VinsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vins = Vins::all();

        return VinsResource::collection(Vins::all());

        //return response()->json(compact('vins'));
        //return view('vins.index')->with('vins', $vins);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

            $rules = array(
                 'equipment_code' => 'required',
                 'place_production' => 'required',
                 'version' => 'required'
            );
    
        $messages = array(
            'equipment_code.required' => 'Este campo es requerido',
            'place_production.required' => 'Este campo es requerido',
            'version.required' => 'Este campo es requerido',
        );
    
        $validator = Validator::make($request->all(), $rules, $messages);
    
        if ($validator->passes()) { 

            $equipment_code = EquipmentCode::where('code', $input['equipment_code'])->get()->first();
            $place_production = PlaceProduction::where('code', $input['place_production'])->get()->first();
        
            $vin = new Vins();
            $vin->equipment_code_id = $equipment_code->id;
            $vin->place_production_id = $place_production->id;
            $vin->year_issue = $input['year_issue'];
            $vin->version = $input['version'];
            $vin->serial_number = $input['serial_number'];
            $vin->vin = $input['code'];
            $vin->save(); 
    
            return response()->json(compact('vin'));
        }

        return response()->json([
            'success' => false,
            'errors' => $validator->getMessageBag()->toArray()
        ]);
    }

    public function getSerialNumber(Request $request)
    {
        $input = $request->all();
       
        $vin = Vins::orderBy('id', 'desc')->get()->first();

        if(!empty($vin)){
            $new_serial_number = $vin->serial_number + 1;

            return response()->json(strval($new_serial_number)); 
        }  

        $new_serial_number = '1000000';

        return response()->json($new_serial_number); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vins  $vins
     * @return \Illuminate\Http\Response
     */
    public function show(Vins $vins)
    {
        return response()->json(compact('vin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vins  $vins
     * @return \Illuminate\Http\Response
     */
    public function edit(Vins $vins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vins  $vins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vins $vins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vins  $vins
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vins $vins)
    {
        //
    }
}
