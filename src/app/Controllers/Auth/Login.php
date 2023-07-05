<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Helpers\JWTHelper;
use Exception;

class Login extends BaseController
{
    public function index()
    {
        return view('Login/index');
    }
    public function edit()
    {
        # code...
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        try {

            $getInfoUser = $this->UserAuthModel->where(['email' => $email])->first();
            if (!$getInfoUser) {
                $this->session->setFlashData('info', 'Username / Password Salah');
                return redirect()->to('/')->withCookies();
            }
            if (password_verify($password, $getInfoUser['password'])) {
                $payloadJWT = [
                    'email' => $email,
                    'isLogged' => true,
                    'full_name' => $getInfoUser['full_name'],
                    'image' => $getInfoUser['image'],
                    'role'=> $getInfoUser['role']
                ];
                set_cookie('Token', $this->JWTHelper->createToken($payloadJWT), 3600, '', '/', "", false);
                return redirect()->to('/dashboard')->withCookies();
            } else {
                $this->session->setFlashData('info', 'Username / Password Salah');
                return redirect()->to('/')->withCookies();
            }
        } catch (Exception $e) {
            $this->session->setFlashData('info', 'Username / Password Salah');
            return redirect()->to('/')->withCookies();
        }
    }
    public function logout()
    {
        # code...
        delete_cookie('Token', '', '/', '');
        $this->session->setFlashData('info', 'Anda Telah Logout');
        return redirect()->to('/')->withCookies();
    }
}
