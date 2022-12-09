<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class adafruitcontroller extends Controller
{
    public function humedad (Request $request){
        $response = Http::get("https://io.adafruit.com/api/v2/Abel0120/feeds/default-dot-humedad?X-AIO-KEY=aio_nFdz91zKSQCuOpVqj3rnGwU7XaS0",[]);

        return response()->json([
            "status"=>201,
            "message"=>"Correcto",
            "error"=>null,
            "sensores"=>$response->object()->id,
           "datas"=>$response->object()->last_value,
            ],201);
        }  
        
        public function luz (){
            $response = Http::get("https://io.adafruit.com/api/v2/Abel0120/feeds/default-dot-luz?X-AIO-KEY=aio_nFdz91zKSQCuOpVqj3rnGwU7XaS0",[]);
    
            return response()->json([
                "status"=>201,
                "message"=>"Correcto",
                "error"=>null,
                "sensores"=>$response->object()->id,
               "datas"=>$response->object()->last_value,
                ],201);
            } 

            public function corrientemax (){
                $response = Http::get("https://io.adafruit.com/api/v2/Abel0120/feeds/default-dot-imax?X-AIO-KEY=aio_nFdz91zKSQCuOpVqj3rnGwU7XaS0",[]);
        
                return response()->json([
                    "status"=>201,
                    "message"=>"Correcto",
                    "error"=>null,
                    "sensores"=>$response->object()->id,
                   "datas"=>$response->object()->last_value,
                    ],201);
                } 

                public function corrientemin (){
                    $response = Http::get("https://io.adafruit.com/api/v2/Abel0120/feeds/default-dot-imin?X-AIO-KEY=aio_nFdz91zKSQCuOpVqj3rnGwU7XaS0",[]);
            
                    return response()->json([
                        "status"=>201,
                        "message"=>"Correcto",
                        "error"=>null,
                        "sensores"=>$response->object()->id,
                       "datas"=>$response->object()->last_value,
                        ],201);
                    } 

                    public function corrientewatts (){
                        $response = Http::get("https://io.adafruit.com/api/v2/Abel0120/feeds/default-dot-watts?X-AIO-KEY=aio_nFdz91zKSQCuOpVqj3rnGwU7XaS0",[]);
                
                        return response()->json([
                            "status"=>201,
                            "message"=>"Correcto",
                            "error"=>null,
                            "sensores"=>$response->object()->id,
                           "datas"=>$response->object()->last_value,
                            ],201);
                        } 

                        public function temperatura (){
                            $response = Http::get("https://io.adafruit.com/api/v2/Abel0120/feeds/default-dot-temperatura?X-AIO-KEY=aio_nFdz91zKSQCuOpVqj3rnGwU7XaS0",[]);
                    
                            return response()->json([
                                "status"=>201,
                                "message"=>"Correcto",
                                "error"=>null,
                                "sensores"=>$response->object()->id,
                               "datas"=>$response->object()->last_value,
                                ],201);
                            } 
}
