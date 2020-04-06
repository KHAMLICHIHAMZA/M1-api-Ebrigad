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

    static public function delete($P_ID){
        $response = User::deletePompierByID($P_ID);
        return  json_encode($response);
    }

     //Modification d'un utilisateur
     static public function update()
     {
          
        dd('dddddd');

            $id=$_POST['post']['P_ID'];
            $nom=$_POST['post']['P_NOM'];
            $prenom=$_POST['post']['P_PRENOM'];
            $email=$_POST['post']['P_EMAIL'];
            $sexe=$_POST['post']['P_SEXE_'];
            $grade=$_POST['post']['P_GRADE'];
            $profession=$_POST['post']['P_PROFESSION'];
            $status=$_POST['post']['P_STATUT_'];
            $pompier= array("nom"=>$nom,
                         "prenom"=>$prenom,
                         "email"=>$email,
                         "sexe"=>$sexe,
                         "grade"=>$grade,
                         "profession"=>$profession,
                         "status"=>$status,
                         "id"=>$id
   );
        
      

$result =User::up($pompier);



        
         /*

         
            if(isset($_POST))
            {
            dd($_POST);


            }
        $pompier= array("nom"=>$_POST['nom'],
                        "prenom"=>$_POST['prenom'],
                        "email"=>$_POST['email'],
                        "sexe"=>$_POST['sexe'],
                        "grade"=>$_POST['grade'],
                        "profession"=>$_POST['profession'],
                        "status"=>$_POST['status_'],
                        "id"=>$_POST['P_ID'] );

        $result =User::up($pompier);
         if($result == 'ok')
         {
             header('Location: localhost/home');
         }

         */

     }
     

}
