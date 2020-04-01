<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TypeIntervention extends Model
{
    static public function getTypes(){
        //$stmt=DB::connect()->prepare('SELECT * FROM  type_intervention');
        $stmt=DB::table('type_intervention')->get();
        //$stmt->execute();
        //return $stmt->fetchAll();
        return $stmt;
        $stmt->closeCursor();
        $stmt=null;
    }
}
