<?php

namespace App\Http\Controllers;

use App\Engin;
use Illuminate\Http\Request;

class EnginsController extends Controller
{
    //Recuperation de la liste des engins sauvegarder sur la BDD sous format Json
    static public function getAllEngins(){
        $response = Engin::getEngins();
         return json_encode($response,true);
    } 
    
    //Recuperation de tout les Roles d'un engin sauvegarder sur la BDD sous format Json
    static public function getAllRolesEngins(){
        $Role=array();
        $response = Engin::getEngins();
        foreach($response as $e){
            $Var= Engin::getRoleEngins($e->TV_CODE);
            array_push($Role, $Var);
        }
        //die(print_r($Role));
        return json_encode($Role,true);
    }

    //Recuperation de l'apreviation et le libelle de chaque engin sauvegarder sur la BDD sous format Json
    static public function getEngin($TV_LIBELLE){
        $response = Engin::getEngin($TV_LIBELLE);
        return json_encode($response,true);
    }

    //Recuperation des postes de chaque engin de la BDD
    static public function getRolesEngin($TV_CODE){
        $response = Engin::getRoleEngins($TV_CODE);
        //die($response);
        $Role=array();
        foreach($response as $e){
          array_push($Role, $e);
        }
        return json_encode($Role,true);
    }
}
