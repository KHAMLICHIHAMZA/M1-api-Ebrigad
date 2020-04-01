<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class usersController extends Controller
{
    //Recuperation de la liste de tout les utilisateurs
    static public function getAllUser(){
        $response = User::getAll();
         return json_encode($response);
        //return $response;
    }

    // Trouver un utilisateur avec son P_CODE
    static public function FindUserByLogin($P_CODE){
        $response = User::getPompierByLogin($P_CODE);
        return  json_encode($response);
    }

    // Trouver un utilisateur avec son P_CODE
    static public function FindUserByID($P_ID){
        $response = User::getPompierByID($P_ID);
        return  json_encode($response);
    }
}
