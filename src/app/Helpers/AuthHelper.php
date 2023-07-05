<?php
namespace App\Helpers;

use Exception;

class AuthHelper{
    protected $authUserModel;
    protected $JWTHelper;
    public function __construct()
    {
        # code...
        helper(['cookie']);
        $this->authUserModel = new \App\Models\UserAuth();
        $this->JWTHelper = new \App\Helpers\JWTHelper();
    }
    public function isLogin()
    {
        # code...
        $getCookieJWT = get_cookie('Token');
        if(!$getCookieJWT){
            return false;
        }else{
            try{
                $payloadToStdClass = $this->JWTHelper->decodeToken($getCookieJWT);
                // dd($payloadToStdClass);
                if($payloadToStdClass->isLogged == true){
                    return true;
                }
            }catch(Exception $e){
                return false;
            }
        }
    }
}