<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">

            </div>
        </div>

        <div class="clearfix"></div>

        <div class="x_panel">
            <div class="x_title">
                <h2>Tambah User </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link">
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />

                <form class="form-label-left input_mask" method="post" action="<?= site_url() ?>admin/tambah_data">

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Kode Akun</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" class="form-control" name="user_id">

                            <?php echo "<b>" . form_error('user_id') . "</b>"; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Nama User </label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" class="form-control" name="username">
                            <?php echo "<b>" . form_error('username') . "</b>"; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Password User </label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="password" class="form-control" name="password">
                            <?php echo "<b>" . form_error('password') . "</b>"; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Level </label>
                        <div class="col-md-9 col-sm-9 ">
                            <select class="form-control" name="level">
                                <option selected="true" disabled="disabled"> Pilih Level</option>
                                <option value="admin"> Admin</option>
                                <option value="user"> User</option>
                            </select>
                            <?php echo "<b>" . form_error('level') . "</b>"; ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Status </label>
                        <div class="col-md-9 col-sm-9 ">
                            <select class="form-control" name="active">
                                <option selected="true" disabled="disabled"> Pilih Status User</option>
                                <option value="1"> Aktif</option>
                                <option value="0"> Tidak Aktif</option>
                            </select>
                            <?php echo "<b>" . form_error('active') . "</b>"; ?>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group row">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                            <button type="button" onclick="location.href = '<?php echo site_url('admin/lihat_data') ?>';" class="btn btn-primary">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>
<!-- /page content -->