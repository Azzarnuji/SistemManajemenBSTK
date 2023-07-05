<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Formulir Tambah Data BSTK</h1>
    <a href="#" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="serviceBstk('list-bstk')"><i class="fas fa-backward fa-sm text-white-50"></i> List Daftar BSTK</a>
</div>
<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-center">
                <h5 class="m-0 font-weight-bold text-primary">Formulir Tambah Data BSTK</h5>

            </div>
            <!-- Card Body -->
            <form action="<?= base_url('postdata');?>" method="post" enctype="multipart/form-data" id="formTambahData">
                <div class="card-body">
                    <div class="row d-lg-flex">
                        <div class="col-lg-12 mb-4 d-lg-flex">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="noRegistrasi">No Registrasi : </label>
                                    <input required type="text" readonly class="form-control-plaintext" name="noRegistrasi" id="noRegistrasi" value="<?= $noRegistrasi;?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="diDaftari"">Di Daftari / Di Isi Oleh Driver : </label>
                                    <input required type="text" readonly class="form-control-plaintext" name="diDaftari" id="diDaftari" value="<?= $user;?>">
                                </div>
                            </div>
                        </div>
                    </div>
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
                                            <input required type="text" class="form-control" name="tipeMobil" id="tipeMobil" aria-describedby="emailHelp">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="noPolisiKendaraan">No Polisi Kendaraan</label>
                                            <input required type="text" class="form-control" name="noPolisiKendaraan" id="noPolisiKendaraan" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="tahunKendaraan">Tahun/Warna Kendaraan</label>
                                            <input required type="text" class="form-control" name="tahunKendaraan" id="tahunKendaraan" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="noRangkaKendaraan">No Rangka Kendaraan</label>
                                            <input required type="text" class="form-control" name="noRangkaKendaraan" id="noRangkaKendaraan" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="noMesinKendaraan">No Mesin Kendaraan</label>
                                            <input required type="text" class="form-control" name="noMesinKendaraan" id="noMesinKendaraan" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label for="tanggalSewa">Tanggal Sewa</label>
                                            <input required type="text" class="form-control" name="tanggalSewa" id="tanggalSewa" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggalSelesaiSewa">Tanggal Selesai Sewa </label>
                                            <input required type="text" class="form-control" name="tanggalSelesaiSewa" id="tanggalSelesaiSewa" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlahHariSewa">Jumalah Hari Sewa </label>
                                            <input required type="text" class="form-control" name="jumlahHariSewa" id="jumlahHariSewa" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="fotoDepanKendaraan">Foto Depan Kendaraan</label>
                                            <input required type="file" accept="image/png, image/jpeg" class="form-control-file" name="fotoDepanKendaraan" id="fotoDepanKendaraan">
                                        </div>
                                        <div class="form-group">
                                            <label for="fotoSampingKananKendaraan">Foto Belakang Kendaraan</label>
                                            <input required type="file" accept="image/png, image/jpeg" class="form-control-file" name="fotoBelakangKendaraan" id="fotoSampingKananKendaraan">
                                        </div>
                                        <div class="form-group">
                                            <label for="fotoSampingKananKendaraan">Foto Samping Kanan Kendaraan</label>
                                            <input required type="file" accept="image/png, image/jpeg" class="form-control-file" name="fotoSampingKananKendaraan" id="fotoSampingKananKendaraan">
                                        </div>
                                        <div class="form-group">
                                            <label for="fotoSampingKiriKendaraan">Foto Samping Kiri Kendaraan</label>
                                            <input required type="file" accept="image/png, image/jpeg" class="form-control-file" name="fotoSampingKiriKendaraan" id="fotoSampingKiriKendaraan">
                                        </div>
                                        <div class="form-group">
                                            <label for="fotoBuktiMenerimaKendaraan">Foto Bukti Menerima Kendaraan</label>
                                            <input required type="file" accept="image/png, image/jpeg" class="form-control-file" name="fotoBuktiMenerimaKendaraan" id="fotoBuktiMenerimaKendaraan">
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
                                            <input required type="text" class="form-control" name="perusahaan" id="perusahaan" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="penanggungJawab">Penanggung Jawab</label>
                                            <input required type="text" class="form-control" name="penanggungJawab" id="penanggungJawab" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="namaPenyewa">Nama Penerima / Penyewa</label>
                                            <input required type="text" class="form-control" name="namaPenyewa" id="namaPenyewa" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="telepon">Telepon</label>
                                            <input required type="text" class="form-control" name="telepon" id="telepon" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="noKTP">No KTP / SIM</label>
                                            <input required type="text" class="form-control" name="noKTP" id="noKTP" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="fotoKTP">Foto KTP / SIM</label>
                                            <input required type="file" accept="image/png, image/jpeg" class="form-control-file" name="fotoKTP" id="fotoKTP">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Tambah Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>