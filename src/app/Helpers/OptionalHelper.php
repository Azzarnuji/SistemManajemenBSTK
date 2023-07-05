<?php
namespace App\Helpers;

use Exception;

class OptionalHelper{

    protected $request;
    protected $RegistrationBSTK;
    protected $ImageManipulation;
    public function __construct()
    {
        # code...
        $this->request = \Config\Services::request();
        $this->RegistrationBSTK = new \App\Models\RegistrationBSTK;
        $this->ImageManipulation = \Config\Services::image();
    }

    /**
     * @param string $form_name name form input image
     */
    public function do_upload(string $form_name, string $folder_name)
    {
        # code...
        try{
            $upload = $this->request->getFile($form_name);
            // $this->ImageManipulation->withFile($upload)->resize(200,200,true,'height')->save(WRITEPATH . "../public/assets/test" . $upload->getRandomName(),70);s
            $upload->move(WRITEPATH . "../public/assets/img/".$folder_name."/");
            return $upload;
        }catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function newToken()
    {
        # code...
        $getNoRegistration = $this->RegistrationBSTK->orderBy('no_registration','DESC')
                                                    ->first();

        if(!$getNoRegistration){
            $tempNoRegistration = "KNM-000001";
            return $tempNoRegistration;
        }else{
            $tempNewNoRegistration = $getNoRegistration['no_registration'];
            $createTempNewNoRegistration = trim($tempNewNoRegistration,'KNM-');
            $incrementNoRegistration = str_pad($createTempNewNoRegistration + 1, 6, "0", STR_PAD_LEFT);
            $finalNoRegistration = "KNM-".$incrementNoRegistration;
            return $finalNoRegistration;
        }

    }
}