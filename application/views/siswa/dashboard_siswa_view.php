<div id="content-wrapper">
    <section class="content-header">
      <?php if($isAbsen == true): ?>
        <div class="callout callout-danger">
            <table>
                <tr>
                    <td style="width: 100%; color: white;">Anda belum absen hari ini!</td>
                    <td style="width: 25%">
                        <button type="button" data-toggle="modal" data-target="#absenModal"  class="btn btn-primary pull-right">Absen Hari Ini</button>

                    </td>
                </tr>
            </table>
        </div>
        <?php else: ?>
            <div class="callout callout-success">Terima kasih, Anda sudah absen hari ini</div>
        <?php endif; ?>
    </section>

    <!-- The Absen Modal -->
    <div class="modal fade" id="absenModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h3 class="modal-title">Tanggal <?php echo date("d M Y"); ?>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>siswa/insertjurnal">
                        <div class="form-group">
                            <label>Absen :</label>
                            <select class="form-control-static" name="ket_abs" style="width: 91.7%; border-color: #D2D6DE; padding-left: 5px;">
                                <option>Masuk</option>
                                <option>Sakit</option>
                                <option>Izin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label name="isi">Keterangan (<span class="small">Min. 5 karakter</span>)</label>
                            <textarea class="form-control" name="keterangan" onkeyup="countChar(this)" autofocus></textarea>
                        </div>
                        <div class="form-group">
                            <label name="up">Foto (<span class="small">Max. size 10 MB</span>)</label>
                            <img id="foto_prakerin" src="" class="anu img-thumbnail" style="display: none;">
                            <input type="file" id="foto" name="foto" required onchange="readURL(this)" accept="image/*">
                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <input type="submit" id="ket" name="insert" value="TAMBAH" disabled="disabled" class="btn btn-primary btn-flat pull-left">
                                <div>
                                    <a href="<?php echo base_url(); ?>admin" class="btn btn-danger btn-flat" data-dismiss="modal">KEMBALI</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Absensi Prakerin SMK Telkom Malang 2018</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table style="width: auto; table-layout: auto; " class="table table-bordered table-hover" id="dataTables-absSiswa">
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
                                            <td><img id="anu" onclick="klik(this)" data-toggle="modal" data-target="#modalPop" style="height:125px; width:250px;" src="'.base_url().'uploads/foto_prakerin/'.$data->foto_kegiatan.'" id="kegiatan"></td>
                                            <td>'.$newDate.'</td>
                                            <td style="width:13.5%;">
                                                '.$data->status.'';?><br>
                                                <?php if($data->status == 'Menunggu konfirmasi'): ?>
                                                    <a id="<?php echo $data->id_post; ?>" class="btn btn-primary hayo" style="width: 100%; margin-top: 10px;">Edit Jurnal</a>
                                                <?php endif;
                                                '
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
    </section>
    <!-- /.content -->

    <!-- image modal -->
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

    <!-- The Update Jurnal Modal -->
    <div class="modal fade" id="editJurnalModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <!-- <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div> -->

                <!-- Modal body -->
                <div class="modal-body" id="contents">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url() ?>/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".hayo").click(function(){
            var post_id = $(this).attr("id");
            $.ajax({
                url: "<?php echo base_url() ?>siswa/updatejurnal",
                type: "POST",
                data: "id="+post_id,
                cache: false,
                success: function(data){
                    $('#contents').html(data);
                    $("#editJurnalModal").modal("show");
                }
            })
        });
    });

    function countChar(val) {
        var len = val.value.length;
        if (len >= 5) {
          $('#ket').removeAttr('disabled');
        } else {
          $('#ket').attr('disabled','disabled');
        }
    };

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#foto_prakerin').attr('src', e.target.result).css('display', 'block');
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>