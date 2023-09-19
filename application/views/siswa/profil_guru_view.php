<div id="page-wrapper">
    <section class="content-header">
      <h1 style="padding-bottom: 7px;">
        <span>Profil Guru Pembimbing</span>
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
                                      <th>Nama Guru</th>
                                      <td>:</td>
                                      <td><?php echo $nama; ?></td>
                                    </tr>
                                    <tr>
                                      <th>No. Telp.</th>
                                      <td>:</td>
                                      <td><?php echo $no; ?></td>
                                    </tr>
                                    <tr>
                                      <td colspan="3" style="text-align: center; width: 100%;">
                                        <a href="<?php echo base_url(); ?>industri" class="btn btn-danger btn-flat">KEMBALI</a>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                          <img id="foto_guru" class="img-thumbnail" src="<?php echo base_url(); ?>uploads/foto_guru/<?php echo $foto_guru; ?>">
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
  #foto_guru {
    max-height: 200px; 
    max-width: 314px; 
    width: auto;
  }

  @media screen and (max-width: 700px) {
    #foto_guru {
      max-width: 85%;
      height: auto;
    }
}
</style>