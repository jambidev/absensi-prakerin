<div id="content-wrapper">
    <section class="content-header">
      <h1 style="padding-bottom: 7px;">
        <span>Tambah Data Admin</span>
      </h1>
      <button class="btn btn-danger btn-flat" onclick="history.back(-1)"><i class="fa fa-angle-double-left" style="padding-right: 5px;"></i>Kembali</button>
    </section>
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-green">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/insertadmin">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                        <label>Username</label>
                                        <input class="form-control" placeholder="Username" name="username" type="text" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Password</label>
                                        <input class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Admin</label>
                                        <input class="form-control" placeholder="Nama Admin" name="nama_admin" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Foto</label>
                                        <input type="file" id="foto" name="foto">
                                    </div>
                                    <div class="form-group">
                                        <label>No. Telepon</label>
                                        <input class="form-control" placeholder="No. Telepon" name="telp" type="number">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4 pull-left">
                                                <input type="submit" name="insert" value="TAMBAH" class="btn btn-primary btn-flat">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </section>
</div>