<?php

class ConcertsController extends BaseController {

    public function index(){
        return View::make('concerts/index');
    }
    public function login(){
        if(Request::isMethod("POST")){
            $pseudo = Input::get('pseudo');
            $password = Input::get('password');
            if(Auth::attempt(array('pseudo' => $pseudo, 'password' => $password))){
                $message = "Vous êtes maintenant connecter.";
                Session::flash('messageOk',$message);
                return View::make("concerts/index");
            }else {
                $message = " Votre pseudo/mot de passse est incorrect";
                Session::flash('erreurConnect', $message);
                return View::make('concerts/login');
            }
        }

        if(!Auth::check()){
            return View::make('concerts/login');
        }else{
            $message = "Vous êtes déjà connecter !";
            Session::flash('erreurMessage', $message);
            return View::make('concerts/index');
        }
    }
    public function signin(){
        if(Request::isMethod("POST")){
            $pseudo = Input::get('pseudo');
            $password = Input::get('password');
            $confpassword = Input::get('confpassword');
            $email = Input::get('email');

            if($pseudo != NULL && $password != NULL && $confpassword != NULL && $email != NULL){
                if($password == $confpassword){
                    $email = Input::get('email');
                    $pseudo = Input::get('pseudo');
                    $pasword_non_hashe = Input::get('password');
                    $password = Hash::make($pasword_non_hashe);

                    $data = new User();
                    $data->email = $email;
                    $data->pseudo = $pseudo;
                    $data->password = $password;
                    $data->administrateur = 0;

                    $data->save();

                    $message = "Compte crée.";
                    Session::flash('messageOk',$message);
                    return View::make('concerts/index');
                }else{
                    $message = " Vos mot de passe sont différents.";
                    Session::flash('erreurInscription',$message);
                    return View::make('concerts/signin');
                }
            }else{
                $message = " Vous avez oublier un ou plusieurs champs.";
                Sesssion::flash('erreurInscription',$message);
                return View::make('concerts/signin');
            }
        }
        if(!Auth::check()){
            return View::make('concerts/signin');
        }else{
            $message = "Vous êtes déjà connecter !";
            Session::flash('erreurMessage', $message);
            return View::make('concerts/index');
        }
    }
    public function logout(){
        if(Auth::check()){
            Auth::logout();
            $message = "Vous êtes déconnecter.";
            Session::flash('messageOk',$message);
            return View::make('concerts/index');
        }else{
            $message = "Vous n'êtes pas connecter !";
            Session::flash('erreurMessage', $message);
            return View::make('concerts/index');
        }
    }
}