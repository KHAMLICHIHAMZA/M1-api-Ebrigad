<?php

namespace App\Http\Controllers;

use App\TypeIntervention;
use Illuminate\Http\Request;

class TypeInterventionsController extends Controller
{
    static public function getAllTypes(){
        $response = TypeIntervention::getTypes();
         return json_encode($response,true);
    }
}
