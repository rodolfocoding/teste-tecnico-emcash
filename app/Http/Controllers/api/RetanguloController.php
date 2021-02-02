<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Retangulo;
use Exception;
use Illuminate\Support\Facades\Validator;
class RetanguloController extends Controller
{
    public function index()
    {
        return Retangulo::all();
    }

    public function store(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'base' => 'required',
                'altura' => 'required'
            ]);

            if($validator->fails()) {
                return response()->json('Preencha todos os campos');
            }

            $retangulo = new Retangulo();
            $retangulo->base = $request->base;
            $retangulo->altura = $request->altura;
            $retangulo->area = $request->base * $request->altura;
            $retangulo->save();

            $return = ['Retângulo cadastrado:' => $retangulo];

            return response()->json($return);

        }catch (Exception $ex) {
            return response()->json($ex);
        }
    }
}
