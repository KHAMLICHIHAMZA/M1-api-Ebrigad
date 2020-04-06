<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    public function construct(){}
    //Recuperation de tout les pompiers existant dans la BDD
    static public function getAll()
    {
        $stmt=DB::table('pompier')->get();
        return $stmt;
        $stmt->close();
        $stmt=null;
    }
    //Recuperation d'un seul pompier existant dans la BDD avec son Login "P_CODE"
    static public function getPompierByLogin($P_CODE)
    {
        //$stmt=DB::connect()->prepare('SELECT * FROM pompier WHERE P_CODE LIKE :P_CODE');
        $stmt=DB::table('pompier')->select()->where('P_CODE',$P_CODE)->get();
        //$stmt->bindParam(':P_CODE',$P_CODE);
        return $stmt;
        $stmt->close();
        $stmt=null;
    }
    //Recuperation d'un seul pompier existant dans la BDD avec son identifiant "P_ID"
    static public function getPompierByID($P_ID)
    {
        //$stmt=DB::connect()->prepare('SELECT * FROM pompier WHERE P_CODE LIKE :P_CODE');
        $stmt=DB::table('pompier')->select()->where('P_ID',$P_ID)->get();
        //$stmt->bindParam(':P_CODE',$P_CODE);
        return $stmt;
        $stmt->close();
        $stmt=null;
    }

    //Modification d'un utilisateur sur la BDD
    static public function up($pompier)
    {

        $stmt=DB::table('pompier')->where('P_ID',$pompier['id'])->update([
            `P_NOM`=> $pompier['nom'],
            `P_PRENOM`=> $pompier['prenom'],
            `P_SEXE`=> $pompier['sexe'],
            `P_GRADE`=> $pompier['grade'],
            `P_PROFESSION`=> $pompier['profession'],
            `P_STATUT`=> $pompier['status'],
            `P_EMAIL`=> $pompier['email']

            //$_POST['name'] => $_POST['content'],
            //$_POST['title'] => $_POST['titleMsg']
        ]);
        //Execution de la requette
        $stmt->execute();
        //Fermeture et Initialisation du curseur
        $stmt->close;
        $stmt = null;

    }
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
