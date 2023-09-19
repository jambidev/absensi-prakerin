<div id="content-wrapper">
    <section class="content-header">
      <h1>
        <span>Profilku</span>
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
                            <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>siswa/updateprofil/<?php echo $id_sw = $this->uri->segment(3); ?>">
                                <div class="form-group">
                                    <label>Nama Siswa</label>
                                    <input class="form-control" name="nama_siswa" required value="<?php echo $nama; ?>">
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
                                <div class="form-group row">
                                  <div class="form-group col-md-6">
                                    <label>Kelas</label>
                                    <select class="form-control" name="kelas">
                                         <?php 
                                            if($kelas == "XII RPL 1")
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
                                            } else if($kelas == "XII RPL 2")
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
                                            } else if($kelas == "XII RPL 3")
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
                                            } else if($kelas == "XII RPL 4")
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
                                            } else if($kelas == "XII RPL 5")
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
                                            } else if($kelas == "XII RPL 6")
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
                                            } else if($kelas == "XII TKJ 1")
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
                                            } else if($kelas == "XII TKJ 2")
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
                                            } else if($kelas == "XII TKJ 3")
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
                                            } else if($kelas == "XII TKJ 4")
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
                                            } else if($kelas == "XII TKJ 5")
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
                                  <div class="form-group col-md-6">
                                    <label>Jenis Kelamin</label>
                                    
                                    <select class="form-control" name="jk">
                                        <?php 
                                            if($jk == "Laki-Laki")
                                            {
                                                echo "<option selected>Laki-Laki</option>
                                                      <option>Perempuan</option>";
                                            } else if($jk == "Perempuan")
                                            {
                                                echo "<option >Laki-Laki</option>
                                                      <option selected>Perempuan</option>";
                                            }
                                        ?>
                                    </select>
                                    
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="form-group col-md-6">
                                    <label>Industri Prakerin</label>
                                    <input class="form-control" name="industri" required value="<?php echo $industri; ?>">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label>Kota</label>
                                    <select class="form-control" name="kota">
                                        <?php 
                                            if($kota == "Bali")
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
                                            } else if($kota == "Balikpapan")
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
                                            } else if($kota == "Bandung")
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
                                            } else if($kota == "Gresik & Tuban")
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
                                            } else if ($kota == "Jakarta") {
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
                                            } else if ($kota == "Jember") {
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
                                            } else if ($kota == "Kediri") {
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
                                            } else if ($kota == "Malang") {
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
                                            } else if ($kota == "Mataram") {
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
                                            } else if ($kota == "Pasuruan") {
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
                                            } else if ($kota == "Semarang") {
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
                                            } else if ($kota == "Sidoarjo") {
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
                                            } else if ($kota == "Solo & Madiun") {
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
                                            } else if ($kota == "Surabaya") {
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
                                            } else if ($kota == "Yogyakarta") {
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
                                <div class="form-group">
                                    <label>No. Telp</label>
                                    <input class="form-control" type="number" name="no_telp" required value="<?php echo $no; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Alamat Selama Prakerin</label>
                                    <textarea class="form-control" name="alamat" value="" required=""><?php echo $alamat; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4 pull-left">
                                            <input type="submit" name="insert" value="UPDATE" class="btn btn-primary btn-flat">
                                        </div>
                                        <div class="col-sm-4 pull-right">
                                            <a href="<?php echo base_url(); ?>siswa" style="float: right;" class="btn btn-danger btn-flat">KEMBALI</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-3">
                          <div class="container">
                            <?php if ($foto == "-" && $jk == "Perempuan"): ?>
                              <img id="foto_siswa" src="<?php echo base_url();?>female.png" alt="Avatar" class="anu img-thumbnail">
                            <?php elseif ($foto == "-" && $jk == "Laki-Laki"): ?>
                              <img id="foto_siswa" src="<?php echo base_url();?>male.png" alt="Avatar" class="anu img-thumbnail">
                            <?php else: ?>
                              <img id="foto_siswa" src="<?php echo base_url();?>uploads/foto_siswa/<?php echo $foto; ?>" alt="Avatar" class="anu img-thumbnail">
                            <?php endif; ?>
                            <div class="middle">
                              <form id="formfoto" action="<?php echo base_url(); ?>siswa/updatefoto/<?php echo $id_sw = $this->session->userdata('id_user'); ?>" method="post" enctype="multipart/form-data">
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