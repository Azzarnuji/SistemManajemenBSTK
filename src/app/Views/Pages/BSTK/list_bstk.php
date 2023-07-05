<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">List Daftar BSTK</h1>
    <a href="#" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="serviceBstk('tambah-bstk')"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data BSTK</a>
</div>
<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12" id="myUl">
        <div class="row">
            <?php foreach($allData as $data) : ?> 
                <div class="col-lg-6 mb-4 searchValue">
                    <!-- Illustrations -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">No Registrasi : <?= $data['no_registration'];?></h6>
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
                                                <label for="noPolisi" class="col-sm-7 col-form-label">No Polisi Kendaraan :</label>
                                                <div class="col-sm-5">
                                                    <input type="text" readonly class="form-control-plaintext" id="noPolisi" value="<?= $data['no_polisi_kendaraan'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <label for="namaPenyewa" class="col-sm-5 col-form-label">Nama Penyewa :</label>
                                                <div class="col-sm-7">
                                                    <input type="text" readonly class="form-control-plaintext text-break" id="namaPenyewa" value="<?= $data['user_penerima'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <label for="tanggalAwalSewa" class="col-sm-7 col-form-label">Tanggal Awal Sewa :</label>
                                                <div class="col-sm-5">
                                                    <input type="text" readonly class="form-control-plaintext" id="tanggalAwalSewa" value="<?= $data['tanggal_sewa'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <label for="jumlahHariSewa" class="col-sm-7 col-form-label">Jumlah Hari Sewa :</label>
                                                <div class="col-sm-5">
                                                    <input type="text" readonly class="form-control-plaintext" id="jumlahHariSewa" value="<?= $data['jumlah_hari_sewa'];?> Hari">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <label for="status" class="col-sm-7 col-form-label">Status</label>
                                                <div class="col-sm-5">
                                                    <!-- <button type="button" class="btn btn-primary">
                                                            Selesai
                                                        </button> -->
                                                    <?php if($data['status'] == "Disewa"):?>
                                                        <button type="button" class="btn btn-danger">
                                                            <?= $data['status'];?>
                                                        </button>
                                                    <?php endif;?>
                                                    <?php if($data['status'] == "Selesai"):?>
                                                        <button type="button" class="btn btn-primary">
                                                            <?= $data['status'];?>
                                                        </button>
                                                    <?php endif;?>
                                                    <?php if($data['status'] == "Pending"):?>
                                                        <button type="button" class="btn btn-warning">
                                                            <?= $data['status'];?>
                                                        </button>
                                                    <?php endif;?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary btn-block" onclick="serviceBstk('detail-bstk/<?= $data['no_registration'];?>')">Lihat Selengkapnya</button>
                        </div>
                        <div class="card-footer text-muted text-center">
                            Di Daftari / Di Isi Oleh : <?= $user;?><br>
                            Di Input Pada Tanggal : <?= $data['created_at'];?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
  $("#searchInput").on("keyup", function() {
    var input, filter, ul, mainContent, resultValue, i, result;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    wrapElement = $('#myUl');
    // console.log(ul)
    mainContent = wrapElement.find(".searchValue");
    // console.log(mainContent)
    for (i = 0; i < mainContent.length; i++) {
        result = mainContent[i];
        // console.log(a)
        resultValue = result.innerHtml || result.innerText;
        if (resultValue.toUpperCase().indexOf(filter) > -1) {
            mainContent[i].style.display = "";
        } else {
            mainContent[i].style.display = "none";
        }
    }
  });
});
</script>