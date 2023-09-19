<div id="content-wrapper">
    <section class="content-header">
        <h1 class="page-header">Tambah Data Industri</h1>
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
                            <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/insertindustri">
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
                                    <label>Nama Industri</label>
                                    <input class="form-control" placeholder="Nama Industri" name="nama_ind" required>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                    <label>No. Telepon</label>
                                    <input class="form-control" placeholder="No. Telepon" name="telp" type="number" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Kota</label>
                                    <select class="form-control select2" style="width: 100%" name="kota">
                                        <option>Bali</option>
                                        <option>Balikpapan</option>
                                        <option>Bandung</option>
                                        <option>Gresik & Tuban</option>
                                        <option>Jakarta</option>
                                        <option>Jember</option>
                                        <option>Kediri</option>
                                        <option>Malang</option>
                                        <option>Mataram</option>
                                        <option>Pasuruan</option>
                                        <option>Semarang</option>
                                        <option>Sidoarjo</option>
                                        <option>Solo & Madiun</option>
                                        <option>Surabaya</option>
                                        <option>Yogyakarta</option>
                                    </select>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat Industri</label>
                                    <textarea class="form-control" name="alamat"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Nama Guru Pembimbing</label>
                                    <select class="form-control select2" style="width: 100%" name="nama_guru">
                                        <?php 
                                            foreach ($nama_guru as $data) {
                                                echo '<option>'.$data->nama_guru.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <input type="submit" name="insert" value="TAMBAH" class="btn btn-primary btn-flat pull-left">
                                        </div>
                                        <div class="col-sm-4 pull-right">
                                            <a href="<?php echo base_url(); ?>admin" class="btn btn-danger btn-flat" style="float: right;">KEMBALI</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                                <div class="box box-default">
                                    <div class="box-header with-border">
                                      <h3 class="box-title">Import Data Industri</h3>
                                    </div>
                                    <div class="box-body" style="background-color: #3C8DBC; color: white;">
                                        <a href="<?php echo base_url(); ?>format_import_industri.xlsx" class="btn btn-info " download style="margin-bottom: 5px; font-weight: bold;">Download Format Import</a>
                                        <?php echo form_open_multipart('admin/importindustri');?>
                                            <input type="file" name="import" size="20" id='import' required class="pull-left" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"/>
                                            <input type="submit" value="Import Data Industri" class="pull-right" style="color: black;"/>
                                        </form>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
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