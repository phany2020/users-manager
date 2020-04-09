<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getIndex(){
        $id = Input::get('id_utilisateur');
        return users::find($id);
    }

    public function getAll(){
        return users::all();
    }

    public function postIndex(){
        if(Input::has('nom','email','mdp','etat')){
            $input = Input::all();
            if($input['nom']=='' || $input['email']=='' || $input['mdp']==''){
                return Response::make('Vous devez remplir tous les champs', 400);
            }
            else{
                $user = new users;
                $user->nom = $input['nom'];
                $user->email = $input['email'];
                $user->mdp = md5($input['mdp']);
                $user->etat = $input['etat'];
                $user->save();
                return $user;
            }
        }
        else{
            return Response::make('Vous devez remplir tous les champs', 400);
        }
    }

    public function deleteIndex(){
        $id = Input::get('id_utilisateur');
        $user = users::find($id);
        $user->delete();
    }
}
