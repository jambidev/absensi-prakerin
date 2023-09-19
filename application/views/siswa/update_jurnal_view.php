<form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>siswa/updatejurnalnya">
    <div>
        <?php 
            $oldDate = $jurnal->tanggal;
            $newDate = date("d M Y", strtotime($oldDate));
        ?>
        <h3 class="modal-title">Tanggal <?php echo $newDate; ?>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </h3>      
    </div><hr>
    <div class="form-group hidden">
        <label>ID</label>
        <input type="text" name="idpost" class="form-control" value="<?php echo $jurnal->id_post; ?>">
    </div>
    <div class="form-group">
        <label>Absen :</label>
        <select class="form-control-static" name="ket_abs" style="width: 91.7%; border-color: #D2D6DE; padding-left: 5px;">
            <?php if ($jurnal->ket_abs == "Masuk"): ?>
                <option selected>Masuk</option>
                <option>Sakit</option>
                <option>Izin</option>
            <?php elseif ($jurnal->ket_abs == "Sakit"): ?>
                <option>Masuk</option>
                <option selected>Sakit</option>
                <option>Izin</option>
            <?php elseif ($jurnal->ket_abs == "Izin"): ?>
                <option>Masuk</option>
                <option>Sakit</option>
                <option selected>Izin</option>
            <?php endif; ?>
        </select>
    </div>
    <div class="form-group">
        <label name="isi">Keterangan</label>
        <textarea class="form-control" name="keterangan" autofocus><?php echo $jurnal->isi; ?></textarea>
    </div>
    <div class="form-group">
        <label name="up">Foto (<span class="small">Max. size 10 MB</span>)</label><br>
        <img id="foto_prakerin" src="<?php echo base_url();?>uploads/foto_prakerin/<?php echo $jurnal->foto_kegiatan; ?>" class="anu img-thumbnail">
        <div class="custom" id="input">
            <input type="file" id="foto" name="foto" onchange="readURL(this)" accept="image/*" class="change-avatar changephoto">
        </div>
    </div>
    <div class="modal-footer">
        <div class="row">
            <input type="submit" name="insert" value="UPDATE" class="btn btn-primary btn-flat pull-left">
            <div>
                <a href="<?php echo base_url(); ?>siswa" class="btn btn-danger btn-flat" data-dismiss="modal">KEMBALI</a>
            </div>
        </div>
    </div>
</form>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#foto_prakerin').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>