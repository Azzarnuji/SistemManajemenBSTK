<?= $this->extend('Pages/Template/template'); ?>

<?= $this->section('Main-Content'); ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="serviceBstk('tambah-bstk')"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data BSTK</a>
</div>

<?php if (session()->getFlashdata('dataSuccess') !== null) : ?>
    <?php $url = base_url(session()->getFlashdata('urlVerification'));?>    
    <script>
        Swal.fire({
            icon: 'success',
            title: '<?= session()->getFlashdata('dataSuccess');?>',
            html: "<?= $msg = session()->getFlashdata('dataSuccess') == "Data Berhasil Diupdate" ? "Data Berhasil Diupdate" : (session()->getFlashdata('dataSuccess') == "Data Driver Berhasil Ditambahkan" ? "Data Driver Berhasil Ditambahkan" : (session()->getFlashdata('dataSuccess') == "Data Driver Berhasil Diupdate" ? "Data Driver Berhasil Diupdate" : (session()->getFlashdata('dataSuccess') == "Data Driver Berhasil Dihapus" ? "Data Driver Berhasil Dihapus" : "Data Berhasil Ditambahkan, Silahkan Copy Url Dibawah Ini Dan Buka Url Dismartphone Customer Untuk Melakukan Verifikasii, <br> <input type='text' class='form-control-plaintext text-center' id='urlVerification' readonly value ='{$url}'>"))) ?>",
            confirmButtonText: '<?= $msg = session()->getFlashdata('dataSuccess') == "Data Berhasil Diupdate" ? "OK" : (session()->getFlashdata('dataSuccess') == "Data Driver Berhasil Ditambahkan" ? "OK" : "Copy") ?>',
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                <?php if((session()->getFlashdata('dataSuccess') != "Data Berhasil Diupdate")  &&  (session()->getFlashdata('dataSuccess') != "Data Driver Berhasil Ditambahkan") && (session()->getFlashdata('dataSuccess') != "Data Driver Berhasil Dihapus")):?>
                    var tempUrl = $('#urlVerification').val()
                    $('#urlVerification').select()
                    document.execCommand('copy')
                    Swal.fire({
                        icon:'success',
                        title:'URL Dicopy'
                    })
                <?php endif;?>
            }
        })
    </script>
<?php endif; ?>
<?php if (session()->getFlashdata('dataFailed') !== null) : ?>
    <div class="alert alert-waring" role="alert">
        <?= session()->getFlashdata('dataFailed'); ?> </div>
<?php endif; ?>
<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jumlah Semua Data</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $amountData; ?> </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-car-side fa-2x fa-flip-horizontal"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Jumlah Mobil Disewa</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $amountDataDisewa; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-car fa-2x "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Jumlah Mobil Selesai Sewa</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $amountDataSelesaiSewa; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-car fa-2x "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Jumlah Driver</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $amountDrivers; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-car fa-2x "></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Pending Requests Card Example -->
    <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pending Requests</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Ringkasan Data Sedang Dalam Penyewaan</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="row">
                    <!-- Area Chart -->
                    <div class="col-xl-12 col-lg-12">
                        <div class="row">
                            <?php foreach ($allData as $data) : ?>
                                <div class="col-lg-6 mb-4">
                                    <!-- Illustrations -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">No Registrasi : <?= $data['no_registration']; ?></h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="card mb-3 border-0">
                                                <div class="row no-gutters">
                                                    <div class="col-md-4 d-lg-flex flex-lg-wrap align-content-lg-center ">
                                                        <img src="<?= base_url('assets/img/kamandaka.png'); ?>" class="img-thumbnail border-0" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-bold">Innova 2.0 V Diesel</h5>
                                                            <div class="form-group row mb-0">
                                                                <label for="staticEmail" class="col-sm-7 col-form-label">No Polisi Kendaraan :</label>
                                                                <div class="col-sm-5">
                                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $data['no_polisi_kendaraan']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-0">
                                                                <label for="staticEmail" class="col-sm-5 col-form-label">Nama Penyewa :</label>
                                                                <div class="col-sm-7">
                                                                    <input type="text" readonly class="form-control-plaintext text-break" id="staticEmail" value="<?= $data['user_penerima']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-0">
                                                                <label for="staticEmail" class="col-sm-7 col-form-label">Tanggal Awal Sewa :</label>
                                                                <div class="col-sm-5">
                                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $data['tanggal_sewa']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-0">
                                                                <label for="staticEmail" class="col-sm-7 col-form-label">Jumlah Hari Sewa :</label>
                                                                <div class="col-sm-5">
                                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $data['jumlah_hari_sewa']; ?> Hari">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-0">
                                                                <label for="staticEmail" class="col-sm-7 col-form-label">Status</label>
                                                                <div class="col-sm-5">
                                                                    <!-- <button type="button" class="btn btn-primary">
                                                            Selesai
                                                        </button> -->
                                                                    <?php if ($data['status'] == "Disewa") : ?>
                                                                        <button type="button" class="btn btn-danger">
                                                                            <?= $data['status']; ?>
                                                                        </button>
                                                                    <?php endif; ?>
                                                                    <?php if ($data['status'] == "Selesai") : ?>
                                                                        <button type="button" class="btn btn-primary">
                                                                            <?= $data['status']; ?>
                                                                        </button>
                                                                    <?php endif; ?>
                                                                    <?php if ($data['status'] == "Pending") : ?>
                                                                        <button type="button" class="btn btn-warning">
                                                                            <?= $data['status']; ?>
                                                                        </button>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-primary btn-block" onclick="serviceBstk('detail-bstk/<?= $data['no_registration']; ?>')">Lihat Selengkapnya</button>
                                        </div>
                                        <div class="card-footer text-muted text-center">
                                            Di Daftari / Di Isi Oleh : <?= $user; ?><br>
                                            Di Input Pada Tanggal : <?= $data['created_at']; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <button type="button" class="btn btn-success btn-block" onclick="serviceBstk('list-bstk')">Lihat Semua Data</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


</div>

<!-- Content Row -->

<?= $this->endSection(); ?>