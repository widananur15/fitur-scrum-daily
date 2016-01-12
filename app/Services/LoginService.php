<?php

namespace App\Services;

use App\LoginUser;
/**
 * Created by PhpStorm.
 * User: sts
 * Date: 12/01/16
 * Time: 15:42
 */

class LoginService {
    //function ini untuk melakukan login
    public function doLogin($login_user,$password){


        $login = LoginUser::where('username','=',$login_user)
            ->orwhere('email','=',$login_user)
            ->first();
        if(!is_null($login)){
            $password_hash = $login->password;
            if(password_verify($password,$password_hash)){

                return $login;
            }else{
                return false;
            }


        }else{
            return false;
        }

    }
}

