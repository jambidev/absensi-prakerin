<div id="content-wrapper">
    <section class="content-header">
      <h1 style="padding-bottom: 7px;">
        <span>Profil Siswa</span>
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
                                      <th>Nama Siswa</th>
                                      <td>:</td>
                                      <td><?php echo $detil->nama_siswa; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Jenis Kelamin</th>
                                      <td>:</td>
                                      <td><?php echo $detil->jenis_kelamin; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Kelas</th>
                                      <td>:</td>
                                      <td><?php echo $detil->kelas; ?></td>
                                    </tr>
                                    <tr>
                                      <th>No. Telp.</th>
                                      <td>:</td>
                                      <td><?php echo $detil->no_telp_siswa; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Jenis Kelamin</th>
                                      <td>:</td>
                                      <td><?php echo $detil->jenis_kelamin; ?></td>
                                    </tr>
                                      <th>Industri Prakerin</th>
                                      <td>:</td>
                                      <td><?php echo $detil->industri; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Kota</th>
                                      <td>:</td>
                                      <td><?php echo $detil->kota; ?></td>
                                    </tr>
                                    <tr>
                                    <tr>
                                      <th>Alamat di Prakerin</th>
                                      <td>:</td>
                                      <td><textarea readonly style="border: none; width: 100%; resize: none; outline: none;"><?php echo $detil->alamat_prakerin; ?></textarea></td>
                                    </tr>
                                    <tr>
                                      <td colspan="3" style="text-align: center; width: 100%;">
                                            <?php if ($this->session->userdata('role') == 2): ?>
                                              <a href="<?php echo base_url(); ?>guru" class="btn btn-danger btn-flat">KEMBALI</a>
                                            <?php elseif ($this->session->userdata('role') == 4): ?>
                                              <a href="<?php echo base_url(); ?>industri/datasiswa" class="btn btn-danger btn-flat">KEMBALI</a>
                                            <?php endif; ?>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                          <?php if ($detil->foto_siswa == "-" && $detil->jenis_kelamin == "Perempuan"): ?>
                            <img id="foto_siswa" src="<?php echo base_url();?>female.png" alt="Avatar" class="anu img-thumbnail">
                          <?php elseif ($detil->foto_siswa == "-" && $detil->jenis_kelamin == "Laki-Laki"): ?>
                            <img id="foto_siswa" src="<?php echo base_url();?>male.png" alt="Avatar" class="anu img-thumbnail">
                          <?php else: ?>
                            <img id="foto_siswa" src="<?php echo base_url();?>uploads/foto_siswa/<?php echo $detil->foto_siswa; ?>" alt="Avatar" class="anu img-thumbnail">
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
  #foto_siswa {
    max-height: 300px; 
    max-width: 514px; 
    width: auto;
  }

  @media screen and (max-width: 700px) {
    #foto_siswa {
      max-width: 85%;
      height: auto;
    }
}
</style>