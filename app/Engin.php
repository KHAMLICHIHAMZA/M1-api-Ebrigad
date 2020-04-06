<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Engin extends Model
{
    //Recuperation des engins de la BDD ebrigade
    static public function getEngins(){
        $stmt = DB::table('type_vehicule')->get();
        return $stmt;
        $stmt->closeCursor();
        $stmt=null;
    }

    //Recuperation des roles des pompiers de chaque engins depuis BDD ebrigade
    static public function getRoleEngins($i)
    {
        //$stmt=DB::connect()->prepare('SELECT * FROM  type_vehicule_role WHERE TV_CODE ="'.$i.'"');
        //$stmt->execute();
        //echo $i;
        //die($i);
        $stmt = DB::table('type_vehicule_role')->select('ROLE_NAME')->where('TV_CODE',$i)->get();
        //$stmt1->bindParam(":TV_CODE",$i);
        //die(json_encode($stmt));
        return $stmt;
        $stmt->closeCursor();
        $stmt=null;
    }

    //Recuperation d'un Engin en fonction de son libelle
    static public function getEngin($i)
    {
        //$stmt=DB::connect()->prepare('SELECT TV_CODE, TV_LIBELLE FROM  type_vehicule WHERE TV_LIBELLE ="'.$i.'"');
        //$stmt->execute();
        $stmt=DB::table('type_vehicule')->select('TV_CODE','TV_LIBELLE')->where('TV_LIBELLE',$i)->get();
        return $stmt;
        $stmt->closeCursor();
        $stmt=null;
    }
}
