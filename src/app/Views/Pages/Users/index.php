<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">List Daftar Drivers</h1>
  <button type="button" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#tambahDataModal" id="btnModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Drivers</button>
</div>
<div class="table-responsive">
  <table class="table" id="tableDrivers">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Image</th>
        <th scope="col">Role</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $number = 1; ?>
      <?php foreach ($allDataDrivers as $datas) : ?>
        <tr>
          <th scope="row"><?= $number++; ?></th>
          <td><?= $datas['full_name']; ?></td>
          <td><?= $datas['email']; ?></td>
          <td><a href="#" data-toggle="modal" data-target="#imagemodal" data-url-image="<?php echo $img = $datas['image'] == null ? base_url('/assets/' . 'img/undraw_profile.svg') : base_url('/assets/img/driver/' . $datas['image']); ?>"> <img id="imageresource" src="<?php echo $img = $datas['image'] == null ? base_url('/assets/' . 'img/undraw_profile.svg') : base_url('/assets/img/driver/' . $datas['image']); ?>" class="img-thumbnail" height="50px" width="50px" alt="" srcset=""></a></td>
          <td><?= ucfirst($datas['role']); ?></td>
          <td>
            <button type="button" class="btn btn-md btn-success mb-2">Edit</button>
            <button type="button" class="btn btn-md btn-danger mb-2" data-toggle="modal" data-target="#hapusModal" data-email="<?= $datas['email']; ?>">Hapus</button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<!-- Modal Tambah Data Driver -->
<div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDataModal" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="<?= base_url('/tambah-driver'); ?>" method="post" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Driver</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="nameDriver">Nama Driver : </label>
            <input type="text" class="form-control" id="nameDriver" required name="nameDriver">
          </div>
          <div class="form-group">
            <label for="emailDriver">Email : </label>
            <input type="email" class="form-control" id="emailDriver" required aria-describedby="emailHelp" name="emailDriver">
            <small id="emailHelp" class="form-text text-muted">Email Akan Dibuat Secara Otomatis.</small>
          </div>
          <div class="form-group">
            <label for="roleUser">Role</label>
            <select class="form-control" id="roleUser" name="roleUser" required>
              <option value="driver">Driver</option>
              <option value="admin">Admin</option>
            </select>
          </div>
          <div class="form-group">
            <label for="imageDriver">Image Driver : </label>
            <input type="file" class="form-control-file" accept="image/jpeg, image/png" id="imageDriver" name="imageDriver">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- End Modal Tambah Data Driver -->

<!-- Modal Image -->
<!-- Creates the bootstrap modal where the image will appear -->
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Image preview</h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      </div>
      <div class="modal-body">
        <img src="" id="imagepreview" class="img-fluid">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Image -->

<!-- Modal Hapus Data -->
<!-- Logout Modal-->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin Hapus Data?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Anda Yakin Ingin Hapus Data?</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="" id="btnHapusConfirm">Hapus</a>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Hapus Data -->



<script>
  $(document).ready(function() {
    $("#searchInput").on("keyup", function() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("searchInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("tableDrivers");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    });
  });
  $('#nameDriver').on('keyup', () => {
    var getValueName = $('#nameDriver').val()
    var elementEmail = $('#emailDriver')
    var createNewEmail = getValueName.replace(/\s+/g, '').toLowerCase();
    elementEmail.val(createNewEmail + "@kamandaka.com")
    console.log(getValueName)
  })
  $('#hapusModal').on('show.bs.modal', function(event) {
    var buttonHapus = $(event.relatedTarget)
    var emailDriver = buttonHapus.data('email')
    var modalHapus = $(this)
    modalHapus.find('#btnHapusConfirm').attr('href', '<?= base_url('/hapus-driver/'); ?>' + emailDriver)
  })
  $('#imagemodal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var urlImage = button.data('url-image') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('#imagepreview').attr('src', urlImage)
  })
</script>

<style>
  #tambahDataModal .modal-dialog {
    -webkit-transform: translate(0, -50%);
    -o-transform: translate(0, -50%);
    transform: translate(0, -50%);
    top: 50%;
    margin: 0 auto;
  }

  #imagemodal .modal-dialog {
    -webkit-transform: translate(0, -50%);
    -o-transform: translate(0, -50%);
    transform: translate(0, -50%);
    top: 50%;
    margin: 0 auto;
  }

  #hapusModal .modal-dialog {
    -webkit-transform: translate(0, -50%);
    -o-transform: translate(0, -50%);
    transform: translate(0, -50%);
    top: 50%;
    margin: 0 auto;
  }
</style>