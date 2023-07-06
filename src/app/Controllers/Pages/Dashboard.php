<?php

namespace App\Controllers\Pages;
use App\Controllers\BaseController;
class Dashboard extends BaseController
{
    public function index()
    {
        $this->OptionalHelper->newToken();
        $getAllData = $this->RegistrationBSTK->join('detail_registration_user','detail_registration_user.owner_no_registration = registration_bstk.no_registration','right')
                                            ->join('detail_registration_image_car','detail_registration_image_car.owner_no_registration = registration_bstk.no_registration','right')
                                            ->join('detail_registration_date','detail_registration_date.owner_no_registration = registration_bstk.no_registration','right')
                                            ->join('detail_registration_car','detail_registration_car.owner_no_registration = registration_bstk.no_registration','right')
                                            ->orderBy('no_registration','DESC')
                                            ->whereIn('status',['Disewa','Pending'])
                                            ->limit(4)
                                            ->get()->getResultArray();
        
        // var_dump($this->session->getFlashdata('dataSuccess')); 
        // dd($this->RegistrationBSTK->getLastQuery());
        return view('Pages/Dashboard/index',$data);
    }
}
