<div id="content-wrapper">
    <section class="content-header">
      <h1 style="padding-bottom: 7px;">
        <span>Profil Admin</span>
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
                            <form role="form" method="post" enctype="multipart/form-data" action="#">
                              <div>
                                <table class="table">
                                  <tbody>
                                    <tr>
                                      <th>Nama Admin</th>
                                      <td>:</td>
                                      <td><?php echo $detil->nama; ?></td>
                                    </tr>
                                    <tr>
                                      <th>No. Telp.</th>
                                      <td>:</td>
                                      <td><?php echo $detil->no_telp_admin; ?></td>
                                    </tr>
                                    <tr>
                                      <td colspan="3" style="text-align: center; width: 100%;">
                                        <a href="<?php echo base_url(); ?>admin/dataadmin" class="btn btn-danger btn-flat">KEMBALI</a>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                          <?php if ($detil->foto_admin == "-"): ?>
                            <img id="foto_admin" src="<?php echo base_url();?>admin.png" alt="Avatar" class="anu img-thumbnail">
                          <?php else: ?>
                            <img id="foto_admin" src="<?php echo base_url();?>uploads/foto_admin/<?php echo $detil->foto_admin; ?>" alt="Avatar" class="anu img-thumbnail">
                          <?php endif; ?>
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
<style type="text/css">
  #foto_admin {
    max-height: 300px; 
    max-width: 514px; 
    width: auto;
  }

  @media screen and (max-width: 700px) {
    #foto_admin {
      max-width: 85%;
      height: auto;
    }
}
</style>