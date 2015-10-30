<?php

namespace App\Http\Controllers;

use App\App1Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class App1Control extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        return view('home');
    }
    
    public function calculo(Request $request)
    {
        
            
        $p1 = $request->input('p1');
        $p2 = $request->input('p2');
        $p3 = $request->input('p3');
        $p4 = $request->input('p4');
        $calc = new App1Model;
        
        $result_1_2 = $calc->distancia($p1, $p2);
        $result_3_4 = $calc->distancia($p3, $p4);

        
        $calc->distancia_1_2 = $result_1_2;
        $calc->distancia_3_4 = $result_3_4;
        $calc->save();
            
        
        return response()->json(array(
                                    "resultado_1_2"=>$result_1_2,
                                    "resultado_3_4"=>$result_3_4 
                                     
                                     ));
        
       // return view('calculo')->with('distancia', $result);
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
