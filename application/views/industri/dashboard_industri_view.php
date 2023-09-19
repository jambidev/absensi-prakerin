<!DOCTYPE html>
<html>
    <body>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Absensi Prakerin SMK Telkom Malang 2018 - <?php echo $this->session->userdata('jeneng'); ?></h3>
                  <h5>Guru Pembimbing: <b><?php echo $nama; ?></b></h5>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table style="width: auto; table-layout: auto; " class="table table-bordered table-hover" id="dataTables-IndAbs">
                    <thead>
                        <tr>
                            <th width="5%">No.</th>
                            <th>Nama Siswa</th>
                            <th>Keterangan</th>
                            <th>Kegiatan Prakerin</th>
                            <th>Foto Prakerin</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no=1;
                            foreach($jurnal as $data) {
                                $oldDate = $data->tanggal;
                                $newDate = date("d M Y", strtotime($oldDate));
                                echo '
                                    <tr>
                                        <td>'.$no.'</td>
                                        <td>'.$data->nama_siswa.'</td>
                                        <td>'.$data->ket_abs.'</td>
                                        <td>'.$data->isi.'</td>
                                        <td><img id="anu" onclick="klik(this)" data-toggle="modal" data-target="#modalPop" style="height:125px; width:250px;" src="'.base_url().'uploads/foto_prakerin/'.$data->foto_kegiatan.'"></td>
                                        <td>'.$newDate.'</td>
                                        <td style="width:14%;">';?>
                                            <?php 
                                                if ($data->status == 'Menunggu konfirmasi') {
                                                    echo '<p>'.$data->status.'<br></p>';
                                                    echo '<a href="'.base_url().'industri/updatestatus/'.$data->id_post.'" class="btn btn-primary btn-block">KONFIRMASI</a>';
                                                } else {
                                                    echo '<p>'.$data->status.'</p>';
                                                }
                                            ?>
                                            <?php echo '
                                        </td>
                                    </tr>
                                ';
                                $no++;
                            };
                        ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
    </body>
    <div class="modal fade" id="modalPop">
        <div class="modal-content">
            <img  id="imgPop" class="modal-body img-responsive">
            <span id="klos" class="close" data-dismiss="modal">&times;</span>
        </div>
        <script>
            function klik(element) {
                var hai = document.getElementById("imgPop");
                hai.src = element.src;
            }
        </script>
    </div>
</html>