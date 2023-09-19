<div id="content-wrapper">
    <section class="content-header">
      <h1 style="padding-bottom: 7px;">
        <span>Profil <?php echo $this->session->userdata('jeneng'); ?></span>
      </h1>
    </section>
    <section class="content">
      <!-- /.row -->
      <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-green">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/updateprofil/<?php echo $id_ad = $this->session->userdata('id_user'); ?>">
                                <div class="form-group">
                                  <label>Nama</label>
                                  <input class="form-control" placeholder="Nama" name="nama_admin" required value="<?php echo $nama; ?>">
                                </div>
                                <div class="form-group row">
                                  <div class="form-group col-md-6">
                                    <label>Username</label>
                                    <input class="form-control" name="username" required value="<?php echo $user; ?>">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" name="password" required value="<?php echo $pass; ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                    <label>No. Telp.</label>
                                    <input class="form-control" placeholder="Nama Guru" name="no_telp" required value="<?php echo $no; ?>">
                                  </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4 pull-left">
                                            <input type="submit" name="insert" value="UPDATE" class="btn btn-primary btn-flat">
                                        </div>
                                        <div class="col-sm-4 pull-right">
                                            <a href="<?php echo base_url(); ?>admin" style="float: right;" class="btn btn-danger btn-flat">KEMBALI</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-3">
                          <div class="container">
                            <?php if ($foto == "-"): ?>
                              <img id="foto_guru" src="<?php echo base_url();?>admin.png" alt="Avatar" class="anu img-thumbnail">
                            <?php else: ?>
                              <img id="foto_admin" src="<?php echo base_url();?>uploads/foto_admin/<?php echo $foto; ?>" alt="Avatar" class="anu img-thumbnail">
                            <?php endif; ?>
                            <div class="middle">
                              <form id="formfoto" action="<?php echo base_url(); ?>admin/updatefotoadmin/<?php echo $id_ad = $this->session->userdata('id_user'); ?>" method="post" enctype="multipart/form-data">
                                <div class="custom" id="input">
                                  <label id="labelnya" style="background-color: rgba(0,0,0,.3); color: white; padding: 5px; border-radius: 50%; line-height: 670%; width: 100%;"><i class="fa fa-camera"></i>
                                    EDIT PHOTO
                                    <input type="file" id="foto" name="foto" accept="image/*" class="change-avatar changephoto" onchange="this.form.submit()">
                                  </label>
                                </div>
                              </form>
                            </div>
                          </div>
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
      <!-- /.row -->
    </section>
</div>
<style type="text/css">
  #foto_admin {
    max-height: 250px; 
    max-width: 464px; 
    width: auto;
  }

  @media screen and (max-width: 700px) {
    #foto_admin {
      max-width: 85%;
      height: auto;
      display: block;
      margin: auto;
    }
  }

  .changephoto{
      z-index: 999;
      line-height: 0;
      font-size: 0;
      position: absolute;
      opacity: 0;
      filter: alpha(opacity = 0);-ms-filter: "alpha(opacity=0)";
      margin: 0;
      padding:0;
      left:0;
  }

  .custom-input-file:hover .uploadPhoto { display: block; }

  .container {
    position: relative;
    max-height: 300px; 
    max-width: 514px; 
    width: auto;
  }

  .anu {
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
  }

  .middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%)
  }

  .container:hover .anu {
    opacity: 0.3;
  }

  .container:hover .middle {
    opacity: 1;
  }

  #labelnya {
    cursor: pointer;
  }

</style>