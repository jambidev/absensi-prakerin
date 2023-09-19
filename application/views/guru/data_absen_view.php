<div id="content-wrapper">
    <section class="content-header">
      <h1 style="padding-bottom: 7px;">
        <span>Data Kegiatan Prakerin</span>
      </h1>
      <button class="btn btn-danger btn-flat" onclick="history.back(-1)"><i class="fa fa-angle-double-left" style="padding-right: 5px;"></i>Kembali</button>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Kegiatan Prakerin <b><?php echo $nama; ?></b></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table style="width: auto; table-layout: auto; " class="table table-striped table-bordered table-hover" id="dataTables-absSiswa">
                    <thead>
                    <tr>
                        <th width="5%">No.</th>
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
                                        <td>'.$data->ket_abs.'</td>
                                        <td>'.$data->isi.'</td>
                                        <td><img id="anu" onclick="klik(this)" data-toggle="modal" data-target="#modalPop" style="height:125px; width:250px;" src="'.base_url().'uploads/foto_prakerin/'.$data->foto_kegiatan.'"></td>
                                        <td>'.$newDate.'</td>
                                        <td>'.$data->status.'</td>
                                    </tr>
                                ';
                                $no++;
                            };
                        ?>
                    </tbody>
                        <!-- <td><img style="height:160px; width:120px;" src="'.base_url().'uploads/foto_siswa/'.$data->foto_siswa.'"></td> -->
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
</div>
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