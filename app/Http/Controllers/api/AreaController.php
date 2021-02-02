<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Exception;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\DB;

class AreaController extends Controller
{
    public function show()
    {
        try{
            $triangulos = DB::table('triangulos')->select('area')->get();

            $total_triangulos = $triangulos->sum('area');

            $retangulos = DB::table('retangulos')->select('area')->get();

            $total_retangulos = $retangulos->sum('area');

            $total_areas = $total_triangulos + $total_retangulos;

            $return = ['Soma das áreas dos polígonos' => $total_areas];

            return response()->json($return);
        }catch(Exception $ex) {
            return response()->json($ex);
        }
    }
}
