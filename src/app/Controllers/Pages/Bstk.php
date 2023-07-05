<?php

namespace App\Controllers\Pages;
use App\Controllers\BaseController;
use Exception;
use PhpParser\Node\Expr;

class Bstk extends BaseController
{
    
    public function list()
    {
        $getAllData = $this->RegistrationBSTK->join('detail_registration_user','detail_registration_user.owner_no_registration = registration_bstk.no_registration','right')
                                            ->join('detail_registration_image_car','detail_registration_image_car.owner_no_registration = registration_bstk.no_registration','right')
                                            ->join('detail_registration_date','detail_registration_date.owner_no_registration = registration_bstk.no_registration','right')
                                            ->join('detail_registration_car','detail_registration_car.owner_no_registration = registration_bstk.no_registration','right')
                                            ->orderBy('no_registration','DESC')
                                            ->get()->getResultArray();
        # code...
        if($this->request->isAJAX()){
            $data = [
                'judul'=>'List BSTK',
                'noRegistrasi'=>$this->OptionalHelper->newToken(),
                'user'=>$this->JWTHelper->decodeToken(get_cookie('Token'))->full_name,
                'allData'=>$getAllData
            ];
            return view('Pages/BSTK/list_bstk',$data);
        }
        return redirect()->to('/dashboard');
        
    }
    public function tambah()
    {
        if($this->request->isAJAX()){
            $data = [
                'judul'=>'List BSTK',
                'noRegistrasi'=>$this->OptionalHelper->newToken(),
                'user'=>$this->JWTHelper->decodeToken(get_cookie('Token'))->full_name
            ];
            return view('Pages/BSTK/index',$data);
        }
        return redirect()->to('/dashboard');
    }

    public function postdata()
    {
        
        # code...
        $dataRegistrationCar = [
            'owner_no_registration'=>$this->request->getVar('noRegistrasi'),
            'tipe_kendaraan'=>$this->request->getVar('tipeMobil'),
            'no_polisi_kendaraan'=>$this->request->getVar('noPolisiKendaraan'),
            'tahun_kendaraan'=>$this->request->getVar('tahunKendaraan'),
            'no_rangka_kendaraan'=>$this->request->getVar('noRangkaKendaraan'),
            'no_mesin_kendaraan'=>$this->request->getVar('noMesinKendaraan'),
        ];
        $dataRegistrationDate = [
            'owner_no_registration'=>$this->request->getVar('noRegistrasi'),
            'tanggal_sewa'=>$this->request->getVar('tanggalSewa'),
            'akhir_tanggal_sewa'=>$this->request->getVar('tanggalSelesaiSewa'),
            'jumlah_hari_sewa'=>$this->request->getVar('jumlahHariSewa'),
        ];
        $dataRegistrationImageCar = [
            'owner_no_registration'=>$this->request->getVar('noRegistrasi'),
            'img_depan_kendaraan'=>$this->OptionalHelper->do_upload('fotoDepanKendaraan','kendaraan')->getName(),
            'img_belakang_kendaraan'=>$this->OptionalHelper->do_upload('fotoBelakangKendaraan','kendaraan')->getName(),
            'img_samping_kanan_kendaraan'=>$this->OptionalHelper->do_upload('fotoSampingKananKendaraan','kendaraan')->getName(),
            'img_samping_kiri_kendaraan'=>$this->OptionalHelper->do_upload('fotoSampingKiriKendaraan','kendaraan')->getName(),
            'img_bukti_terima_kendaraan'=>$this->OptionalHelper->do_upload('fotoBuktiMenerimaKendaraan','kendaraan')->getName(),
        ];
        $dataRegistrationUser = [
            'owner_no_registration'=>$this->request->getVar('noRegistrasi'),
            'user_perusahaan'=>$this->request->getVar('perusahaan'),
            'user_penanggung_jawab'=>$this->request->getVar('penanggungJawab'),
            'user_penerima'=>$this->request->getVar('namaPenyewa'),
            'user_telepon'=>$this->request->getVar('telepon'),
            'user_alamat'=>$this->request->getVar('alamat'),
            'user_no_ktp'=>$this->request->getVar('noKTP'),
            'user_ktp_img'=>$this->OptionalHelper->do_upload('fotoKTP','user')->getName(),
        ];
        $dataRegistrationBSTK = [
            'no_registration'=>$this->request->getVar('noRegistrasi')   ,
            'owner_penyewa'=>$dataRegistrationUser['user_penerima'],
            'owner_no_ktp_user'=>$dataRegistrationUser['user_no_ktp'],
            'di_daftari_oleh'=>$this->JWTHelper->decodeToken(get_cookie('Token'))->full_name,
            'status'=>'Disewa',
            'created_at'=>$dataRegistrationDate['tanggal_sewa']
        ];
        
        try{   
            $this->RegistrationBSTK->insert($dataRegistrationBSTK);
            $this->DetailRegistrationCar->insert($dataRegistrationCar);
            $this->DetailRegistrationDate->insert($dataRegistrationDate);
            $this->DetailRegistrationImageCar->insert($dataRegistrationImageCar);
            $this->DetailRegistrationUser->insert($dataRegistrationUser);
            return redirect()->to(site_url('/status/berhasil/Data Berhasil Ditambahkan/'.$dataRegistrationBSTK['no_registration']))->withCookies();
        }catch(Exception $e){
            $this->session->setFlashData('dataFailed','Data Gagal Dibuat');
            // Redirect to route(/status) because in this function postdata() session()->setFlashData() not working
            return redirect()->to(base_url('/status/failed/Data Gagal Dibuat/00000'))->withCookies();
        }
        // return redirect()->to(site_url('/dashboard'))->withCookies();
    }
    public function updatebstk()
    {
        # code...
        try{
            $this->RegistrationBSTK->where('no_registration',$this->request->getVar('noRegistrasi'))->set(['status'=>'Selesai'])->update();
            // $this->session->setFlashData('dataSucces','Data Berhasil Diupdate');
            // Redirect to route(/status) because in this function updatebstk() session()->setFlashData() not working
            return redirect()->to(site_url('/status/berhasil/Data Berhasil Diupdate/'.$this->request->getVar('noRegistrasi')))->withCookies();
        }catch(Exception $e){
            return redirect()->to(base_url('/status/failed/Data Gagal Dibuat/00000'))->withCookies();
        }
    }

    public function customer(string $noRegistration)
    {
        # code...
        $getData = $this->RegistrationBSTK->where('no_registration',$noRegistration)
                                            ->join('detail_registration_user','detail_registration_user.owner_no_registration = registration_bstk.no_registration','right')
                                            ->join('detail_registration_image_car','detail_registration_image_car.owner_no_registration = registration_bstk.no_registration','right')
                                            ->join('detail_registration_date','detail_registration_date.owner_no_registration = registration_bstk.no_registration','right')
                                            ->join('detail_registration_car','detail_registration_car.owner_no_registration = registration_bstk.no_registration','right')
                                            ->get()->getResult();
        # code...
        $data = [
            'judul'=>'List BSTK',
            'data'=>$getData,
        ];
        // dd($getData);
        return view('Pages/BSTK/customer',$data);

    }

    public function status($status, $messages, $noRegistration = false)
    {
        # code...
        if($status == "berhasil"){
            $this->session->setFlashData('dataSuccess',$messages);
            $this->session->setFlashData('urlVerification',base_url('customer/'.$noRegistration));
        }elseif($status == "failed"){
            $this->session->setFlashData('dataFailed',$messages);
            $this->session->setFlashData('urlVerification',base_url('customer/'.$noRegistration));
        }
        return redirect()->to(site_url('/dashboard'))->withCookies();
    }

    public function updatecustomer()
    {
        # code...
        try{
            $this->RegistrationBSTK->where('no_registration',$this->request->getVar('noRegistrasi'))->set(['status'=>'Disewa'])->update();
            // $this->session->setFlashData('dataSucces','Data Berhasil Diupdate');
            // Redirect to route(/status) because in this function updatebstk() session()->setFlashData() not working
            return redirect()->to('/customer/'.$this->request->getVar('noRegistrasi'))->withCookies();
        }catch(Exception $e){
            return redirect()->to('/customer/'.$this->request->getVar('noRegistrasi'))->withCookies();
        }
    }
}
