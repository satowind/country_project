<?php

namespace App\Http\Controllers;

use App\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LogController  $logController
     * @return \Illuminate\Http\Response
     */
    public function show(LogController $logController, $size = null)
    {
        //

        if($size){
            $log = Log::paginate($size);

            return response()->json(['countries'=>$log],200);
        }else{

            $log = Log::get();

            return response()->json(['countries'=>$log],200);
        }






    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LogController  $logController
     * @return \Illuminate\Http\Response
     */
    public function edit(LogController $logController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LogController  $logController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LogController $logController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LogController  $logController
     * @return \Illuminate\Http\Response
     */
    public function destroy(LogController $logController)
    {
        //
    }
}
