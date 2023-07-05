<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Data BSTK</h1>
    <a href="#" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="serviceBstk('list-bstk')"><i class="fas fa-backward fa-sm text-white-50"></i> List Daftar BSTK</a>
</div>
<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-center">
                <h5 class="m-0 font-weight-bold text-primary">Detail Data BSTK</h5>

            </div>
            <!-- Card Body -->
            <form action="<?= base_url('update-bstk'); ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row d-lg-flex">
                        <div class="col-lg-12 mb-4 d-lg-flex">
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group">
                                    <label for="staticEmail">No Registrasi : </label>
                                    <input type="text" readonly class="form-control-plaintext" name="noRegistrasi" id="noRegistrasi" value="<?= $data[0]->no_registration; ?>">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group">
                                    <label for="staticEmail"">Di Daftari / Di Isi Oleh Driver : </label>
                                    <input type=" text" readonly class="form-control-plaintext" name="diDaftari" id="diDaftari" value="<?= $data[0]->di_daftari_oleh; ?>">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group">
                                    <label for="staticEmail"">Status : </label>
                                    <button type="button" class="btn btn-<?php echo $data[0]->status == "Selesai" ? 'primary' : ($data[0]->status == "Pending" ? 'warning' : 'danger'); ?>"><?= $data[0]->status; ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if($data[0]->status == "Pending"):?>
                        <p class="text-center">Silahkan Copy Url Dibawah Ini Dan Buka Url Dismartphone Customer Untuk Melakukan Verifikasi</p>
                        <div class="form-group text-center">
                            <label for="staticEmail"">URL Verifikasi : </label>
                            <input type=" text" readonly class="form-control-plaintext text-center text-primary" id="idUrl" value="<?= base_url('/customer/'.$data[0]->no_registration); ?>">
                            <button type="button" class="btn btn-primary btn-sm" id="btnCopyIdUrl">Copy</button>
                            <script>
                                $('#btnCopyIdUrl').on('click',() => {
                                    var tempUrl = $('#idUrl').val()
                                    $('#idUrl').select()
                                    document.execCommand('copy')
                                    Swal.fire({
                                        icon:'success',
                                        title:'URL Dicopy'
                                    })
                                })
                            </script>
                        </div>
                    <?php endif;?>
                    <!-- <a href="<?= base_url('/customer/' . $data[0]->no_registration); ?>" class="text-center" onclick="document.execCommand('copy')"><?= base_url('/customer/' . $data[0]->no_registration); ?></a> -->
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Kendaraan</h6>
                                </div>
                                <div class="card-body d-lg-flex">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="tipeMobil">Tipe Mobil</label>
                                            <input type="text" class="form-control" readonly name="tipeMobil" id="tipeMobil" aria-describedby="emailHelp" value="<?= $data[0]->tipe_kendaraan; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="noPolisiKendaraan">No Polisi Kendaraan</label>
                                            <input type="text" class="form-control" readonly name="noPolisiKendaraan" id="noPolisiKendaraan" aria-describedby="emailHelp" value="<?= $data[0]->no_polisi_kendaraan; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="tahunKendaraan">Tahun/Warna Kendaraan</label>
                                            <input type="text" class="form-control" readonly name="tahunKendaraan" id="tahunKendaraan" aria-describedby="emailHelp" value="<?= $data[0]->tahun_kendaraan; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="noRangkaKendaraan">No Rangka Kendaraan</label>
                                            <input type="text" class="form-control" readonly name="noRangkaKendaraan" id="noRangkaKendaraan" aria-describedby="emailHelp" value="<?= $data[0]->no_rangka_kendaraan; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="noMesinKendaraan">No Mesin Kendaraan</label>
                                            <input type="text" class="form-control" readonly name="noMesinKendaraan" id="noMesinKendaraan" aria-describedby="emailHelp" value="<?= $data[0]->no_mesin_kendaraan; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggalSewa">Tanggal Sewa</label>
                                            <input type="text" class="form-control" readonly name="tanggalSewa" id="tanggalSewa" aria-describedby="emailHelp" value="<?= $data[0]->tanggal_sewa; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggalSelesaiSewa">Tanggal Selesai Sewa </label>
                                            <input type="text" class="form-control" readonly name="tanggalSelesaiSewa" id="tanggalSelesaiSewa" aria-describedby="emailHelp" value="<?= $data[0]->akhir_tanggal_sewa; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlahHariSewa">Jumalah Hari Sewa </label>
                                            <input type="text" class="form-control" readonly name="jumlahHariSewa" id="jumlahHariSewa" aria-describedby="emailHelp" value="<?= $data[0]->jumlah_hari_sewa; ?> Hari">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="fotoDepanKendaraan">Foto Depan Kendaraan</label>
                                            <img src="<?= base_url('assets/img/kendaraan/' . $data[0]->img_depan_kendaraan); ?>" class="img-thumbnail" alt="">
                                        </div>
                                        <div class="form-group">
                                            <label for="fotoSampingKananKendaraan">Foto Belakang Kendaraan</label>
                                            <img src="<?= base_url('assets/img/kendaraan/' . $data[0]->img_belakang_kendaraan); ?>" class="img-thumbnail" alt="">
                                        </div>
                                        <div class="form-group">
                                            <label for="fotoSampingKananKendaraan">Foto Samping Kanan Kendaraan</label>
                                            <img src="<?= base_url('assets/img/kendaraan/' . $data[0]->img_samping_kanan_kendaraan); ?>" class="img-thumbnail" alt="">
                                        </div>
                                        <div class="form-group">
                                            <label for="fotoSampingKiriKendaraan">Foto Samping Kiri Kendaraan</label>
                                            <img src="<?= base_url('assets/img/kendaraan/' . $data[0]->img_samping_kiri_kendaraan); ?>" class="img-thumbnail" alt="">
                                        </div>
                                        <div class="form-group">
                                            <label for="fotoBuktiMenerimaKendaraan">Foto Bukti Menerima Kendaraan</label>
                                            <img src="<?= base_url('assets/img/kendaraan/' . $data[0]->img_bukti_terima_kendaraan); ?>" class="img-thumbnail" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Penyewa</h6>
                                </div>
                                <div class="card-body">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="perusahaan">Perusahaan</label>
                                            <input type="text" class="form-control" readonly name="perusahaan" id="perusahaan" aria-describedby="emailHelp" value="<?= $data[0]->user_perusahaan; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="penanggungJawab">Penanggung Jawab</label>
                                            <input type="text" class="form-control" readonly name="penanggungJawab" id="penanggungJawab" aria-describedby="emailHelp" value="<?= $data[0]->user_penanggung_jawab; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="namaPenyewa">Nama Penerima / Penyewa</label>
                                            <input type="text" class="form-control" readonly name="namaPenyewa" id="namaPenyewa" aria-describedby="emailHelp" value="<?= $data[0]->user_penerima; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="telepon">Telepon</label>
                                            <input type="text" class="form-control" readonly name="telepon" id="telepon" aria-describedby="emailHelp" value="<?= $data[0]->user_telepon; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" readonly id="alamat" name="alamat" rows="3"><?= $data[0]->user_alamat; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="noKTP">No KTP / SIM</label>
                                            <input type="text" class="form-control" readonly name="noKTP" id="noKTP" aria-describedby="emailHelp" value="<?= $data[0]->user_no_ktp; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="fotoKTP">Foto KTP / SIM</label>
                                            <img src="<?= base_url('assets/img/user/' . $data[0]->user_ktp_img); ?>" class="img-thumbnail" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(($data['0']->status == "Disewa") || ($data['0']->status == "Pending")):?>
                        <button type="<?php echo $data[0]->status == "Selesai" ? 'button' : ($data[0]->status == "Pending" ? 'submit' : 'submit'); ?>" class="btn btn-<?php echo $data[0]->status == "Selesai" ? 'primary' : ($data[0]->status == "Pending" ? 'danger' : 'danger'); ?> btn-block">Ubah Sewa Selesai</button>
                    <?php endif;?>
                </div>
            </form>
        </div>
    </div>
</div>