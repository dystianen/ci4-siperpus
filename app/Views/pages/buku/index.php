<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="title h3 text-grey-900">DATA BUKU</h1>

  <!--begin::Tables Widget 9-->
  <div class="mb-5 mb-xl-8">
    <!-- begin::Header -->
    <div class="card-header border-0 pt-5">
      <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a user">
        <a class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
          <i class="ki-outline ki-plus fs-2 justify-content-right"></i>Tambah Data Buku +</a>
      </div>
      <!--begin::Modal - Invite Friends-->
      <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-650px">
          <!--begin::Modal content-->
          <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
              <!--begin::Close-->
              <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                <i class="ki-outline ki-cross fs-1"></i>
              </div>
              <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
              <!--begin::Heading-->
              <div class="text-center mb-13">
                <!--begin::Title-->
                <h1 class="mb-3">Tambah master data</h1>
              </div>
            </div>
            <!--end::Heading-->
            <div class="mb-10 fv-row">
              <!--begin::Label-->
              <label class="required form-label">Judul</label>
              <form id='FrmAddData' class="mx-auto" action="<?php echo base_url() . 'Admin/add'; ?>" method="post" novalidate="novalidate">
                <!--end::Label-->
                <!--begin::Input-->
                <input type="hidden" name="id_random" value="<?php echo rand(); ?>">
                <input type="text" name="judul" class="form-control mb-2" placeholder="masukan judul"></input>
                <!--end::Input-->
                <!--begin::Description-->
                <div class="text-muted fs-7">
                  <label class="required form-label">Deskripsi</label>
                  <textarea type="text" name="deskripsi" class="form-control mb-2" placeholder="masukan deskripsi"></textarea>
                  <label class="form-label">Tanggal Berlaku</label>
                  <input name="tanggal_berlaku" placeholder="Masukkan Tanggal Berlaku" class="form-control mb-2 kt_ecommerce_edit_order_date">
                  <br>
                  <p><label class="form-label">Tanggal Expired</label>
                    <input name="tanggal_expired" placeholder="Masukkan Tanggal Expired" class="form-control mb-2 kt_ecommerce_edit_order_date">
                </div>
                <!--end::Description-->
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                  <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                    <span class="indicator-label">konfirmasi</span>
                    <span class="indicator-progress">Please wait...</span>
                  </button>
              </form>
            </div>
            <!--end::Input group-->
            <!--end::Notice-->
          </div>
          <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
      </div>
      <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Invite Friend-->
  </div>
  <!-- end::Header -->
  <!-- begin::Body -->
  <div class="card-body py-3">
    <!-- begin::Table container -->
    <div class="table-responsive">
      <!-- begin::Table -->
      <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="tabledtbuku">
        <!-- begin::Table head -->
        <thead>
          <tr class="fw-bold text-muted">
            <th class="min-w-150px">Buku</th>
            <th class="min-w-150px">Judul</th>
            <th class="min-w-150px">Penulis</th>
            <th class="min-w-150px">Penerbit</th>
            <th class="min-w-150px">Tahun Terbit</th>
            <th class="min-w-100px">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <img src=<?php echo base_url("assets/img/herrypoter.jpeg") ?>alt="book image" style="width: 50px height: 70px;">
            </td>
            <td>Harry Potter and the Sorcerer's Stone</td>
            <td>J.K Rowling</td>
            <td>Bloomsbury</td>
            <td>1997</td>
            <td>
              <button>edit</button>
              <button class="btn btn-danger btn-sm" onclick="deleteData(1)">delete</button>
            </td>
          </tr>

          <tr>
            <td>001</td>
            <td>hary</td>
            <td>blom</td>
            <td>sygyd</td>
            <td>1997</td>
            <td>
              <button>edit</button>
              <button>delete</button>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection() ?>