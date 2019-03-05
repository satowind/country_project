<?php

namespace App\Http\Controllers;

use App\Country;
use App\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CountryController extends Controller

{

    public function log($action ){

        if(\Auth::user()->id){
            $user_key = \Auth::user()->id;
            $sess = \Session::getId();
            $computer_ip = \Request::ip();
        }else{
            $user_key = '';
            $sess = '';
            $computer_ip = \Request::ip();
        }

        $log = new Log;
        $log->user_id = $user_key;
        $log->type = "user";
        $log->action = $action;
        $log->computer_ip = $computer_ip;
        $log->session_id = $sess;

        $log->save();
    }


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
    public function create( Request $request)
    {
        //
        $county = new Country;

        $county->name = request()->name;
        $county->countinent = request()->countinent;

        if($county->save()){
            $this->log('created a country');
            return response()->json(['status'=> 200,'message'=>'success'],200);
        }else{
            return response()->json(['status'=> 200,'message'=>'Unsuccessful'],200);
        }


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
     * @param  \App\CountryController  $countryController
     * @return \Illuminate\Http\Response
     */
    public function show(CountryController $countryController)
    {
        //

        $countries = Country::get();

        if($countries){
            $this->log('Viewed Countries');
           return response()->json(['countries'=>$countries],200);

        }else{

            response()->json(['countries'=>[]],200);
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CountryController  $countryController
     * @return \Illuminate\Http\Response
     */
    public function edit(CountryController $countryController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CountryController  $countryController
     * @return \Illuminate\Http\Response
     */
    public function update( $id = null)
    {
        //

        if($id){
            $country = Country::findOrFail($id);

            $country->name = request()->name;
            $country->countinent = request()->countinent;

            if($country->save()){
                $this->log('updated a country');
                return response()->json(['status'=> 200,'message'=>'success'],200);
            }else{
                return response()->json(['status'=> 200,'message'=>'Unsuccessful'],200);
            }
        }else{
            return response()->json(['status'=> 200,'message'=>'id doesnt exist'],200);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CountryController  $countryController
     * @return \Illuminate\Http\Response
     */
    public function destroy(CountryController $countryController, Request $request , $id = null)
    {
        //

        if($id){
            $country = Country::findOrFail($id);

            if($country->delete()){

                $this->log('deleted a country');
                return response()->json(['status'=> 200,'message'=>'successful Delete'],200);
            }else{
                return response()->json(['status'=> 200,'message'=>'Unsuccessful'],200);
            }
        }else{
            return response()->json(['status'=> 200,'message'=>'id doesnt exist'],200);
        }

    }



}
