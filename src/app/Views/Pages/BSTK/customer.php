<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $judul; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/custom.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $data[0]->owner_no_registration; ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/'); ?>img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" id="mainContent">


                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $data[0]->owner_no_registration; ?></h1>
                    </div>
                    <form action="<?= base_url('/update-customer'); ?>" method="post">
                        <div class="row">
                            <!-- Area Chart -->
                            <div class="col-xl-12 col-lg-12">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-center">
                                        <h5 class="m-0 font-weight-bold text-primary">Konfirmasi</h5>

                                    </div>
                                    <!-- Card Body -->
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
                                                        <button type=" button" class="btn btn-<?php echo $data[0]->status == "Selesai" ? 'primary' : ($data[0]->status == "Pending" ? 'warning' : 'danger'); ?>"><?= $data[0]->status; ?></button>
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
                                        <?php if ($data[0]->status == "Pending") : ?>
                                            <div class="alert alert-danger mb-5" role="alert">
                                                Untuk Mulai Penyewaan Silahkan Cek Data Diatas, Jika Sudah Benar Harap Ceklis Form Data Benar Dibawah Ini, Kemudian Klik Tombol Mulai Penyewaan
                                                <div class="form-check mt-2 mb-2">
                                                    <input class="form-check-input" type="checkbox" value="" id="checkData" onclick="checkDataTrue()">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Data Benar
                                                    </label>
                                                </div>
                                                <p>Dengan Mengklik Tombol Mulai Penyewaan Dibawah, Anda Dianggap Setuju Oleh Kami, Bahwa Anda Tunduk Dan Taat Kepada Peraturan Penyewaan Di PT. Kamandaka Nusantara Motor / Kamandaka Premium Car.</p>
                                            </div>
                                            <button type="button" class="btn btn-primary btn-block" disabled id="btnStart">Mulai Penyewaan</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Kamandaka Premium Car 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Anda Yakin Ingin Logout?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script>
        function checkDataTrue() {
            const btnStart = $('#btnStart');
            if (btnStart.prop('type') !== 'submit') {
                btnStart.prop('type', 'submit').attr('disabled', false);
            } else {
                btnStart.prop('type', 'button').attr('disabled', true);
            }
        }
    </script>

    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <!-- <script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script> -->

</body>

</html>