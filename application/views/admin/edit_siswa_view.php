<div id="content-wrapper">
    <section class="content-header">
      <h1 style="padding-bottom: 7px;">
        <span>Edit Data Siswa</span>
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
                            <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/updatesiswa/<?php echo $id_sw = $this->uri->segment(3); ?>">
                                <div class="form-group">
                                    <label>Nama Siswa</label>
                                    <input class="form-control" placeholder="Nama siswa" name="nama_siswa" required value="<?php echo $detil->nama_siswa; ?>">
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-6">
                                    <label>Username</label>
                                    <input class="form-control" placeholder="Username" name="username" required value="<?php echo $detill->username; ?>">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" placeholder="Password" name="password" required value="<?php echo $detill->password; ?>">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-6">
                                    <div class="form-group">
                                      <label>Kelas</label>
                                      <select class="form-control select2" name="kelas"  style="width: 100%;">
                                           <?php 
                                              if($detil->kelas == "XII RPL 1")
                                              {
                                                  echo "<option selected>XII RPL 1</option>
                                                        <option>XII RPL 2</option>
                                                        <option>XII RPL 3</option>
                                                        <option>XII RPL 4</option>
                                                        <option>XII RPL 5</option>
                                                        <option>XII RPL 6</option>
                                                        <option>XII TKJ 1</option>
                                                        <option>XII TKJ 2</option>
                                                        <option>XII TKJ 3</option>
                                                        <option>XII TKJ 4</option>
                                                        <option>XII TKJ 5</option>";
                                              } else if($detil->kelas == "XII RPL 2")
                                              {
                                                  echo "<option>XII RPL 1</option>
                                                        <option selected>XII RPL 2</option>
                                                        <option>XII RPL 3</option>
                                                        <option>XII RPL 4</option>
                                                        <option>XII RPL 5</option>
                                                        <option>XII RPL 6</option>
                                                        <option>XII TKJ 1</option>
                                                        <option>XII TKJ 2</option>
                                                        <option>XII TKJ 3</option>
                                                        <option>XII TKJ 4</option>
                                                        <option>XII TKJ 5</option>";
                                              } else if($detil->kelas == "XII RPL 3")
                                              {
                                                  echo "<option>XII RPL 1</option>
                                                        <option>XII RPL 2</option>
                                                        <option selected>XII RPL 3</option>
                                                        <option>XII RPL 4</option>
                                                        <option>XII RPL 5</option>
                                                        <option>XII RPL 6</option>
                                                        <option>XII TKJ 1</option>
                                                        <option>XII TKJ 2</option>
                                                        <option>XII TKJ 3</option>
                                                        <option>XII TKJ 4</option>
                                                        <option>XII TKJ 5</option>";
                                              } else if($detil->kelas == "XII RPL 4")
                                              {
                                                  echo "<option>XII RPL 1</option>
                                                        <option>XII RPL 2</option>
                                                        <option>XII RPL 3</option>
                                                        <option selected>XII RPL 4</option>
                                                        <option>XII RPL 5</option>
                                                        <option>XII RPL 6</option>
                                                        <option>XII TKJ 1</option>
                                                        <option>XII TKJ 2</option>
                                                        <option>XII TKJ 3</option>
                                                        <option>XII TKJ 4</option>
                                                        <option>XII TKJ 5</option>";
                                              } else if($detil->kelas == "XII RPL 5")
                                              {
                                                  echo "<option>XII RPL 1</option>
                                                        <option>XII RPL 2</option>
                                                        <option>XII RPL 3</option>
                                                        <option>XII RPL 4</option>
                                                        <option selected>XII RPL 5</option>
                                                        <option>XII RPL 6</option>
                                                        <option>XII TKJ 1</option>
                                                        <option>XII TKJ 2</option>
                                                        <option>XII TKJ 3</option>
                                                        <option>XII TKJ 4</option>
                                                        <option>XII TKJ 5</option>";
                                              } else if($detil->kelas == "XII RPL 6")
                                              {
                                                  echo "<option>XII RPL 1</option>
                                                        <option>XII RPL 2</option>
                                                        <option>XII RPL 3</option>
                                                        <option>XII RPL 4</option>
                                                        <option>XII RPL 5</option>
                                                        <option selected>XII RPL 6</option>
                                                        <option>XII TKJ 1</option>
                                                        <option>XII TKJ 2</option>
                                                        <option>XII TKJ 3</option>
                                                        <option>XII TKJ 4</option>
                                                        <option>XII TKJ 5</option>";
                                              } else if($detil->kelas == "XII TKJ 1")
                                              {
                                                  echo "<option>XII RPL 1</option>
                                                        <option>XII RPL 2</option>
                                                        <option>XII RPL 3</option>
                                                        <option>XII RPL 4</option>
                                                        <option>XII RPL 5</option>
                                                        <option>XII RPL 6</option>
                                                        <option selected>XII TKJ 1</option>
                                                        <option>XII TKJ 2</option>
                                                        <option>XII TKJ 3</option>
                                                        <option>XII TKJ 4</option>
                                                        <option>XII TKJ 5</option>";
                                              } else if($detil->kelas == "XII TKJ 2")
                                              {
                                                  echo "<option>XII RPL 1</option>
                                                        <option>XII RPL 2</option>
                                                        <option>XII RPL 3</option>
                                                        <option>XII RPL 4</option>
                                                        <option>XII RPL 5</option>
                                                        <option>XII RPL 6</option>
                                                        <option>XII TKJ 1</option>
                                                        <option selected>XII TKJ 2</option>
                                                        <option>XII TKJ 3</option>
                                                        <option>XII TKJ 4</option>
                                                        <option>XII TKJ 5</option>";
                                              } else if($detil->kelas == "XII TKJ 3")
                                              {
                                                  echo "<option>XII RPL 1</option>
                                                        <option>XII RPL 2</option>
                                                        <option>XII RPL 3</option>
                                                        <option>XII RPL 4</option>
                                                        <option>XII RPL 5</option>
                                                        <option>XII RPL 6</option>
                                                        <option>XII TKJ 1</option>
                                                        <option>XII TKJ 2</option>
                                                        <option slected>XII TKJ 3</option>
                                                        <option>XII TKJ 4</option>
                                                        <option>XII TKJ 5</option>";
                                              } else if($detil->kelas == "XII TKJ 4")
                                              {
                                                  echo "<option>XII RPL 1</option>
                                                        <option>XII RPL 2</option>
                                                        <option>XII RPL 3</option>
                                                        <option>XII RPL 4</option>
                                                        <option>XII RPL 5</option>
                                                        <option>XII RPL 6</option>
                                                        <option>XII TKJ 1</option>
                                                        <option>XII TKJ 2</option>
                                                        <option>XII TKJ 3</option>
                                                        <option selected>XII TKJ 4</option>
                                                        <option>XII TKJ 5</option>";
                                              } else if($detil->kelas == "XII TKJ 5")
                                              {
                                                  echo "<option>XII RPL 1</option>
                                                        <option>XII RPL 2</option>
                                                        <option>XII RPL 3</option>
                                                        <option>XII RPL 4</option>
                                                        <option>XII RPL 5</option>
                                                        <option>XII RPL 6</option>
                                                        <option>XII TKJ 1</option>
                                                        <option>XII TKJ 2</option>
                                                        <option>XII TKJ 3</option>
                                                        <option>XII TKJ 4</option>
                                                        <option selected>XII TKJ 5</option>";
                                              }
                                          ?>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label>Jenis Kelamin</label>
                                    
                                    <select class="form-control" name="jk">
                                        <?php 
                                            if($detil->jenis_kelamin == "Laki-Laki")
                                            {
                                                echo "<option selected>Laki-Laki</option>
                                                      <option>Perempuan</option>";
                                            } else if($detil->jenis_kelamin == "Perempuan")
                                            {
                                                echo "<option >Laki-Laki</option>
                                                      <option selected>Perempuan</option>";
                                            }
                                        ?>
                                    </select>
                                    
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-6">
                                    <label>Industri Prakerin</label>
                                    <input class="form-control" placeholder="Industri Prakerin" name="industri" required value="<?php echo $detil->industri; ?>">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <div class="form-group">
                                      <label>Kota</label>
                                    <select class="form-control select2" name="kota"  style="width: 100%;">
                                        <?php 
                                            if($detil->kota == "Bali")
                                            {
                                                echo "<option selected>Bali</option>
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
                                                      <option>Yogyakarta</option>";
                                            } else if($detil->kota == "Balikpapan")
                                            {
                                                echo "<option>Bali</option>
                                                      <option selected>Balikpapan</option>
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
                                                      <option>Yogyakarta</option>";
                                            } else if($detil->kota == "Bandung")
                                            {
                                                echo "<option>Bali</option>
                                                      <option>Balikpapan</option>
                                                      <option selected>Bandung</option>
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
                                                      <option>Yogyakarta</option>";
                                            } else if($detil->kota == "Gresik & Tuban")
                                            {
                                                echo "<option>Bali</option>
                                                      <option>Balikpapan</option>
                                                      <option>Bandung</option>
                                                      <option selected>Gresik & Tuban</option>
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
                                                      <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Jakarta") {
                                              echo "<option>Bali</option>
                                                    <option>Balikpapan</option>
                                                    <option>Bandung</option>
                                                    <option>Gresik & Tuban</option>
                                                    <option selected>Jakarta</option>
                                                    <option>Jember</option>
                                                    <option>Kediri</option>
                                                    <option>Malang</option>
                                                    <option>Mataram</option>
                                                    <option>Pasuruan</option>
                                                    <option>Semarang</option>
                                                    <option>Sidoarjo</option>
                                                    <option>Solo & Madiun</option>
                                                    <option>Surabaya</option>
                                                    <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Jember") {
                                              echo "<option>Bali</option>
                                                    <option>Balikpapan</option>
                                                    <option>Bandung</option>
                                                    <option>Gresik & Tuban</option>
                                                    <option>Jakarta</option>
                                                    <option selected>Jember</option>
                                                    <option>Kediri</option>
                                                    <option>Malang</option>
                                                    <option>Mataram</option>
                                                    <option>Pasuruan</option>
                                                    <option>Semarang</option>
                                                    <option>Sidoarjo</option>
                                                    <option>Solo & Madiun</option>
                                                    <option>Surabaya</option>
                                                    <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Kediri") {
                                              echo "<option>Bali</option>
                                                    <option>Balikpapan</option>
                                                    <option>Bandung</option>
                                                    <option>Gresik & Tuban</option>
                                                    <option>Jakarta</option>
                                                    <option>Jember</option>
                                                    <option selected>Kediri</option>
                                                    <option>Malang</option>
                                                    <option>Mataram</option>
                                                    <option>Pasuruan</option>
                                                    <option>Semarang</option>
                                                    <option>Sidoarjo</option>
                                                    <option>Solo & Madiun</option>
                                                    <option>Surabaya</option>
                                                    <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Malang") {
                                              echo "<option>Bali</option>
                                                    <option>Balikpapan</option>
                                                    <option>Bandung</option>
                                                    <option>Gresik & Tuban</option>
                                                    <option>Jakarta</option>
                                                    <option>Jember</option>
                                                    <option>Kediri</option>
                                                    <option selected>Malang</option>
                                                    <option>Mataram</option>
                                                    <option>Pasuruan</option>
                                                    <option>Semarang</option>
                                                    <option>Sidoarjo</option>
                                                    <option>Solo & Madiun</option>
                                                    <option>Surabaya</option>
                                                    <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Mataram") {
                                              echo "<option>Bali</option>
                                                    <option>Balikpapan</option>
                                                    <option>Bandung</option>
                                                    <option>Gresik & Tuban</option>
                                                    <option>Jakarta</option>
                                                    <option>Jember</option>
                                                    <option>Kediri</option>
                                                    <option>Malang</option>
                                                    <option selected>Mataram</option>
                                                    <option>Pasuruan</option>
                                                    <option>Semarang</option>
                                                    <option>Sidoarjo</option>
                                                    <option>Solo & Madiun</option>
                                                    <option>Surabaya</option>
                                                    <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Pasuruan") {
                                              echo "<option>Bali</option>
                                                    <option>Balikpapan</option>
                                                    <option>Bandung</option>
                                                    <option>Gresik & Tuban</option>
                                                    <option>Jakarta</option>
                                                    <option>Jember</option>
                                                    <option>Kediri</option>
                                                    <option>Malang</option>
                                                    <option>Mataram</option>
                                                    <option selected>Pasuruan</option>
                                                    <option>Semarang</option>
                                                    <option>Sidoarjo</option>
                                                    <option>Solo & Madiun</option>
                                                    <option>Surabaya</option>
                                                    <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Semarang") {
                                              echo "<option>Bali</option>
                                                    <option>Balikpapan</option>
                                                    <option>Bandung</option>
                                                    <option>Gresik & Tuban</option>
                                                    <option>Jakarta</option>
                                                    <option>Jember</option>
                                                    <option>Kediri</option>
                                                    <option>Malang</option>
                                                    <option>Mataram</option>
                                                    <option>Pasuruan</option>
                                                    <option selected>Semarang</option>
                                                    <option>Sidoarjo</option>
                                                    <option>Solo & Madiun</option>
                                                    <option>Surabaya</option>
                                                    <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Sidoarjo") {
                                              echo "<option>Bali</option>
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
                                                    <option selected>Sidoarjo</option>
                                                    <option>Solo & Madiun</option>
                                                    <option>Surabaya</option>
                                                    <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Solo & Madiun") {
                                              echo "<option>Bali</option>
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
                                                    <option selected>Solo & Madiun</option>
                                                    <option>Surabaya</option>
                                                    <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Surabaya") {
                                              echo "<option>Bali</option>
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
                                                    <option selected>Surabaya</option>
                                                    <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Yogyakarta") {
                                              echo "<option>Bali</option>
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
                                                    <option selected>Yogyakarta</option>";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <input class="form-control" placeholder="No. Telepon" name="telp" type="number" required value="<?php echo $detil->no_telp_siswa; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Alamat Selama Prakerin</label>
                                    <textarea class="form-control" name="alamat" value=""><?php echo $detil->alamat_prakerin; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4 pull-left">
                                            <input type="submit" name="insert" value="UPDATE" class="btn btn-primary btn-flat">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-3">
                          <div class="container">
                            <?php if ($detil->foto_siswa == "-" && $detil->jenis_kelamin == "Perempuan"): ?>
                              <img id="foto_siswa" src="<?php echo base_url();?>female.png" alt="Avatar" class="anu img-thumbnail">
                            <?php elseif ($detil->foto_siswa == "-" && $detil->jenis_kelamin == "Laki-Laki"): ?>
                              <img id="foto_siswa" src="<?php echo base_url();?>male.png" alt="Avatar" class="anu img-thumbnail">
                            <?php else: ?>
                              <img id="foto_siswa" src="<?php echo base_url();?>uploads/foto_siswa/<?php echo $detil->foto_siswa; ?>" alt="Avatar" class="anu img-thumbnail">
                            <?php endif; ?>
                            <div class="middle">
                              <form id="formfoto" action="<?php echo base_url(); ?>admin/updatefotosiswa/<?php echo $id_sw = $this->uri->segment(3); ?>" method="post" enctype="multipart/form-data">
                                <div class="custom" id="input">
                                  <label id="labelnya" style="background-color: rgba(0,0,0,.3); color: white; padding: 5px; border-radius: 50%; line-height: 670%; width: 100%;">
                                    <i class="fa fa-camera"></i>
                                    EDIT PHOTO
                                    <input type="file" id="foto" name="foto" accept="image/*" class="change-avatar changephoto" onchange="this.form.submit()">
                                  </label>
                                </div>
                              </form>
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
      display: block;
      margin: auto;
    }
  }

  @media screen and (max-width: 700px) {
    #labelnya {
      top: 10%;
      left: 50%;
      transform: translate(-10%, -10%);
      -ms-transform: translate(-10%, -10%);
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
    margin: auto;
    display: block;
  }

  .middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
  }

  .container:hover .anu {
    opacity: 0.3;
  }

  .container:hover .middle {
    opacity: 1;
  }

  #labelnya {
    cursor: pointer;
    vertical-align: middle;
    margin-left: 12.5%;
  }

</style>