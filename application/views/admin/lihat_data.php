 <!-- page content -->
 <div class="right_col" role="main">
     <div class="">
         <div class="page-title">
             <div class="title_left">
                 <h3>List Users</h3>
             </div>
         </div>

         <div class="clearfix"></div>

         <div class="row">
             <div class="col-md-12">
                 <?php if ($this->session->flashdata('error_msg')) { ?>
                     <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                         <span class="badge badge-pill badge-danger">Gagal</span>
                         <?= $this->session->flashdata('error_msg'); ?>
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                 <?php } else if ($this->session->flashdata('succses_msg')) { ?>
                     <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                         <span class="badge badge-pill badge-success">Berhasil</span>
                         <?= $this->session->flashdata('succses_msg'); ?>
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                 <?php } ?>
             </div>
         </div>

         <div class="row">
             <div class="col-md-12 col-sm-12 ">
                 <div class="x_panel">
                     <div class="x_title">

                         <ul class="nav navbar-right panel_toolbox">
                             <li><a class="collapse-link"></a>
                             </li>
                             <li><button onclick="document.location='<?= site_url() ?>admin/tambah_data'" class="btn btn-round btn-primary"><i class="fa fa-plus"></i> Tambah Data</button>
                             </li>
                             <li><a class="close-link"><i class="fa fa-close"></i></a>
                             </li>
                         </ul>
                         <div class="clearfix"></div>
                     </div>
                     <div class="x_content">
                         <div class="row">
                             <div class="col-sm-12">
                                 <div class="card-box table-responsive">
                                     <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                         <thead>
                                             <tr>
                                                 <th>User Id</th>
                                                 <th>Username</th>
                                                 <th>Level</th>
                                                 <th>Active</th>
                                                 <th>Action</th>

                                             </tr>
                                         </thead>

                                         <tbody>
                                             <?php foreach ($user as $data) { ?>
                                                 <tr>
                                                     <td><?= $data->user_id ?></td>
                                                     <td><?= $data->username ?></td>
                                                     <td><?= $data->level ?></td>
                                                     <td><?= $data->active ?></td>
                                                     <td>
                                                         <a onclick="deleteConfirm('<?= site_url() ?>admin/hapus_data/<?= $data->user_id ?>')" href="#!" class="btn btn-sm btn-danger">
                                                             <i class="fa fa-trash"></i>
                                                         </a>
                                                         </a>
                                                     </td>
                                                 </tr>
                                             <?php } ?>
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </div>
 <!-- /page content -->

 <script>
     function deleteConfirm(url) {
         $('#btn-delete').attr('href', url);
         $('#deleteModal').modal();
     }
 </script>
 <!-- Logout Delete Confirmation-->
 <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">X</span>
                 </button>
             </div>
             <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
                 <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
             </div>
         </div>
     </div>
 </div>