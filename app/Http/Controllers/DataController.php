<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ResponseJSON;
use Illuminate\Support\Facades\Validator;
use App\Models\Data;
use Illuminate\Support\Facades\View;

class DataController extends Controller
{
    public function showData(){
        $data = Data::all();
        return View::make('welcome', compact('data'));
    }

    public function newData(Request $request){
        if ($request->isMethod('post')) {
            $response = new ResponseJSON();
            $validator = Validator::make($request->all(), [
                'data' => 'required'
            ]);

            if ($validator->fails()) {
                $response->prepare('996');
            } else {
                $data_raw = $request->input('data');
                $data_raw = explode(",", $data_raw);
                $newData = new Data();
                $newData->date = $data_raw[0];
                $newData->blend = $data_raw[1];
                $newData->operation = $data_raw[2];
                $newData->status = $data_raw[3];
                if($newData->save()){
                    $response->prepare('100');
                } else {
                    $response->prepare('998');
                }   
            }
            return $response->show();
        }
    }
}
