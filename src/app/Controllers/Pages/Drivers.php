<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;
use App\Helpers\JWTHelper;
use Exception;

class Drivers extends BaseController{

    public function list()
    {
        # code...
        if($this->request->isAJAX()){
            $data = [
                'judul'=>'List Drivers',
                'user'=>$this->JWTHelper->decodeToken(get_cookie('Token'))->full_name,
                'role'=>$this->JWTHelper->decodeToken(get_cookie('Token'))->role,
                'allDataDrivers'=>$this->UserAuthModel->where('role','driver')->findAll()
            ];
            return view('Pages/Users/index',$data);
        }
        return redirect()->to('/dashboard')->withCookies();
    }

    public function tambahdriver()
    {
        # code...
        $data = [
            'email'=>$this->request->getVar('emailDriver'),
            'password'=>password_hash('kamandaka',PASSWORD_DEFAULT),
            'full_name'=>$this->request->getVar('nameDriver'),
            'image'=>$this->OptionalHelper->do_upload('imageDriver','driver')->getName(),
            'role'=>$this->request->getVar('roleUser'),
        ];
        try{
            $this->UserAuthModel->insert($data);
            // $this->session->setFlashData('dataSuccess','Data Berhasil Ditambahkan');
            return redirect()->to(site_url('/status/berhasil/Data Driver Berhasil Ditambahkan/00000'));
        }catch(Exception $e){
            return redirect()->to(site_url('/status/failed/Data Gagal Dibuat/00000'));
        }
        // dd($data);
    }

    public function hapusdriver(string $email)
    {
        # code...
        try{
            $this->UserAuthModel->where('email',$email)->delete();
            return redirect()->to(site_url('/status/berhasil/Data Driver Berhasil Dihapus/00000'));
        }catch(Exception $e){
            return redirect()->to(site_url('/status/berhasil/Data Driver Gagal Dihapus/00000'));
        }
    }
}