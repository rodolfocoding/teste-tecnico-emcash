<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Triangulo;
use Exception;
use Illuminate\Support\Facades\Validator;

class TrianguloController extends Controller
{
    public function index()
    {
        return Triangulo::all();
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

            $triangulo = new Triangulo();
            $triangulo->base = $request->base;
            $triangulo->altura = $request->altura;
            $triangulo->area = ($request->base * $request->altura) / 2;
            $triangulo->save();

            $return = ['Triângulo cadastrado:' => $triangulo];

            return response()->json($return);

        }catch (Exception $ex) {
            return response()->json($ex);
        }


    }
}
