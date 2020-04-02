<?php

namespace App\Http\Controllers\Api\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerController extends Controller{
    public function index(Request $request){
        $status = 200;
        $json = [];
        try{
            $user_info = \App\Model\User::where('role_id',2)->get();
            $json['data'] = $user_info;
        }catch(\Exception $e){
            $status = 500;
            $json['error'] = trans('api.internal_server_error');
        }
        return response()->json($json)->setStatusCode($status);
    }
}
