<?php
namespace App\Helpers;
require __DIR__ . '../../../vendor/autoload.php';

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
class JWTHelper{

    private $key = "qwertyuiopasdfghjklzxcvbnm9ik8ujnmyh1wsdcfvbnhytrfghjnbvfd";
    protected $instanceJWT;
    public function __construct()
    {
        # code...
        $this->instanceJWT = new \Firebase\JWT\JWT;
    }
    public function createToken(array $payload): string
    {
        # code...
        try{
            $jwt = JWT::encode($payload, $this->key, 'HS256');
            return $jwt;

        }catch(Exception $e){
            return $e->getMessage();
        }
    }
    public function decodeToken(string $payload)
    {
        try{
            $jwtDecode = JWT::decode($payload,new Key($this->key,'HS256'));
            return $jwtDecode;

        }catch(Exception $e){
            return $e->getMessage();
        }
        # code...
    }

}