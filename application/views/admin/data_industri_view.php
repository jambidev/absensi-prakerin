<div id="content-wrapper">
    <section class="content-header">
      <h1 style="padding-bottom: 7px;">
        <span>Data Industri</span>
      </h1>
      <button class="btn btn-danger btn-flat" onclick="history.back(-1)"><i class="fa fa-angle-double-left" style="padding-right: 5px;"></i>Kembali</button>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Industri Prakerin SMK Telkom Malang 2018</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table style="width: auto; table-layout: auto; " class="table table-striped table-bordered table-hover" id="dataTables-industri">
                <thead>
                <tr>
                    <th width="5%">No.</th>
                    <th style="width: 17%;">Nama Industri</th>
                    <th style="width: 17%;">Guru Pembimbing</th>
                    <th>No. Telp</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                        $no=1;
                        foreach($industri as $data) {
                            echo '
                                <tr>
                                    <td>'.$no.'</td>
                                    <td>'.$data->nama_industri.'</td>
                                    <td>'.$data->nama_guru_pembimbing.'</td>
                                    <td>'.$data->no_telp_industri.'</td>
                                    <td>'.$data->alamat_industri.'</td>
                                    <td>'.$data->kota.'</td>
                                    <td style="width:9%;">
                                        <a href="'.base_url().'admin/editindustri/'.$data->id_user.'" class="btn btn-info btn-sm" title="Lihat Data"><i class="glyphicon glyphicon-edit"></i></a>
                                        <a href="'.base_url().'admin/deleteindustri/'.$data->id_user.'" class="btn btn-danger btn-sm" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>
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