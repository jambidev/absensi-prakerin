<div id="content-wrapper">
  <section class="content-header no-print">
    <h1>
      <span>Dashboard Admin</span>
    </h1>
  </section>
  <!-- Main content -->
  <section class="content no-print">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Prakerin SMK Telkom Malang <?php echo date("Y"); ?></h3>
          </div>
          <!-- Small boxes (Stat box) -->
          <div class="row" style="margin: 5px;">
            <div class="col-lg-4 col-s-3" style="margin-bottom: 10px;">
              <!-- small box -->
              <div class="small-box bg-aqua" style="margin-bottom: 40px;">
                <div class="inner">
                  <h3><?php echo $countG; ?></h3>
                  <h4>Guru Pembimbing</h4>
                </div>
                <div class="icon">
                  <i class="fa fa-user" style="margin: 3px;"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/addguru" class="small-box-footer col-lg-6" style="background-color: #00ACD7;"> Add new data <i class="fa fa-plus-circle"></i> </a>
                <a href="<?php echo base_url(); ?>admin/dataguru" class="small-box-footer col-lg-6" style="background-color: #00ACD7;"> More info <i class="fa fa-arrow-circle-right"></i> </a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-s-3">
              <!-- small box -->
              <div class="small-box bg-green" style="margin-bottom: 40px;">
                <div class="inner">
                  <h3><?php echo $countS; ?></h3>
                  <h4>Siswa</h4>
                </div>
                <div class="icon">
                  <i class="ion-ios-people" style="margin: 3px;"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/addsiswa" class="small-box-footer col-lg-6" style="background-color: #009551;"> Add new data <i class="fa fa-plus-circle"></i> </a>
                <a href="<?php echo base_url(); ?>admin/datasiswa" class="small-box-footer col-lg-6" style="background-color: #009551;"> More info <i class="fa fa-arrow-circle-right"></i> </a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-s-3">
              <!-- small box -->
              <div class="small-box bg-yellow" style="margin-bottom: 40px;">
                <div class="inner">
                  <h3><?php echo $countI; ?></h3>
                  <h4>Industri Prakerin</h4>
                </div>
                <div class="icon">
                  <i class="fa fa-building-o" style="margin: 3px;"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/addindustri" class="small-box-footer col-lg-6" style="background-color: #DA8C10;"> Add new data <i class="fa fa-plus-circle"></i> </a>
                <a href="<?php echo base_url(); ?>admin/dataindustri" class="small-box-footer col-lg-6" style="background-color: #DA8C10;"> More info <i class="fa fa-arrow-circle-right"></i> </a>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title no-print">Rekap Data Absen Siswa Tahun <?php echo date("Y"); ?></h3>
          </div>
          <!-- Small boxes (Stat box) -->
          <div class="row no-print" style="margin: 8px;">
            <div class="row">
              <div class="col-lg-3 col-sm-12 col-xs-12" style="margin-left: 5px">
                <button class="btn btn-info btn-flat pull-left" onclick="print('print')"><i class="fa fa-print"></i> Print Rekap Data Absen</button>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 pull-right">
                <div class="row">
                  <form role="form" method="post" action="<?php echo base_url(); ?>admin/dashboard">
                    <div class="col-lg-9 col-md-3 col-sm-12 col-xs-12">
                      <select name="bulan" class="form-control">
                        <option>Pilih Bulan untuk Melihat Report</option>
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                      </select>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                      <input type="submit" name="submit" class="btn btn-primary btn-block btn-flat pull-right" value="Lihat">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row no-print -->
          <div class="row">
            <div class="col-xs-12">
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <center style="padding: 8px;">
                    <h3 class="box-title" style="font-weight: 600;">Daftar Ketidakhadiran Siswa 
                      <?php 
                        $oldDate = $bulan;
                        $newDate = date("M Y", strtotime($oldDate));
                        echo $newDate; 
                      ?>
                    </h3>
                  </center>
                  <table style="width: 100%; table-layout: auto; margin-left: 10px" class="table table-bordered table-hover" id="dataTables-rekap">
                    <thead>
                      <tr>
                        <th width="5%">No.</th>
                        <th>Nama Siswa</th>
                        <th>Industri</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Alasan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $no=1;
                        foreach($absen as $data) {
                          $oldDate = $data->tanggal;
                          $newDate = date("d M Y", strtotime($oldDate));
                          echo '
                            <tr>
                            <td>'.$no.'</td>
                            <td>'.$data->nama_siswa.'</td>
                            <td>'.$data->industri.'</td>
                            <td>'.$newDate.'</td>
                            <td>'.$data->ket_abs.'</td>
                            <td>'.$data->isi.'</td>
                            </tr>
                          ';
                          $no++;
                        };
                      ?>
                    </tbody>
                  </table>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12" id="chartperbulan">
                  <h3 class="box-title">Rekap Absen Siswa <?php echo date("M Y"); ?></h3>
                </div>
              </div>
              <!-- /.row -->
              <div class="box-body">
                <div id="chartperbulan" class="col-lg-6 col-sm-12">
                  <script type="text/javascript">
                    // Build the chart
                    Highcharts.chart('chartperbulan', {
                      chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'column'
                      },
                      title: {
                      text: 'Keterangan Kehadiran Siswa (<?php $oldDate = $bulan; $newDate = date("M Y", strtotime($oldDate)); echo $newDate; ?>)'
                      },
                      xAxis: {
                        categories: ['Masuk', 'Izin', 'Sakit']
                      },
                      series: [{
                        name: "Jumlah Siswa",
                        data: [<?php echo $siswaMasukBulannya; ?>, <?php echo $siswaIzinBulannya; ?>, <?php echo $siswaSakitBulannya; ?>]
                      }],
                    });
                  </script>
                </div>
              </div>
              <!-- /.box-body -->
              </div>
          </div>
        </div>
      </div>
    </div>
  <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<script type="text/javascript">
  function script(divName) {
    var originalContent = document.body.innerHTML;
    var printContent = document.getElementById('divName').outerHTML;
    $('.no-print').css('display', 'none');
    document.body.innerHTML = printContent;
    window.print()
    document.body.innerHTML = originalContent;
  }
</script>