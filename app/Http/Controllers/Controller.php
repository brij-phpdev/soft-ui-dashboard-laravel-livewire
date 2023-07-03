<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

//public function store(Request $request)
//    {
//        if ($request->ajax()){
//            try {
//                //  Transacciones
//                DB::beginTransaction();                              
//
//                $position    = $request->position;
//                $code_tool   = $request->code_tool;
//                $code_insert = $request->code_insert;
//                $quality     = $request->quality;                 
//
//                for($count = 0; $count < count($position); $count++)
//                {
//                    $insert = array(                        
//                        'code_insert' => $code_insert[$count],
//                        'quality'     => $quality[$count]
//                    );
//                    $insert_data[] = $insert; 
//
//                    $tool = array(
//                        'position'    => $position[$count],
//                        'code_tool'   => $code_tool[$count],
//                        'insert_id'   => $insert_data[$count]
//
//                    );
//                    $tool_data[] = $tool;
//                }
//
//                dd($tool_data);
//
//                Insert::insert($insert_data);
//                Tool::insert($tool_data);                   
//
//
//                DB::commit();
//
//            } catch (Exception $e) {
//                // anula la transacion
//                DB::rollBack();
//            }
//        }    
//    }
   
