<section class="content">
        <div class="container-fluid">

                <?php 
          if($this->session->flashdata('insert_data')){
              echo '<div class="alert bg-blue alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            ';
              echo $this->session->flashdata('insert_data');
              echo '</div>';
          }

          if($this->session->flashdata('hapus_data')){
              echo '<div class="alert bg-pink alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
              echo $this->session->flashdata('hapus_data');
              echo '</h5></div>';
          }
          ?>
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card bg-purple"><p align="center">Data Tim Kurikulum Prodi <?= $data2->nama?></p></div>

            <div class="card">
                        <div class="header">

                            <?php echo anchor('admin/C_tim/insert/'.$data2->id_jurusan,'<button class="btn btn-sm btn-primary mb-3">Tambah Data</button>')?>
                            

                            <div class="body">

                            <div class="table-responsive">
                                <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable" width="1100px">
                                    <thead>
                                        <tr>
                                            <th>Prodi</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                       
                                        foreach($tim as $tim):?>
                                        <tr>
                                           
                                            <td><?= $tim['nama']?></td>
                                            <td><?= $tim['nama_dosen']?></td>
                                            <td><?= $tim['email']?></td>

                                                <td width="20px"><?php echo anchor('admin/C_tim/delete/'.$tim['id_profil'].'/'.$data2->id_jurusan, 
                                                '<div class="btn btn-sm btn-danger"><i class="material-icons">delete_sweep</i></div>')?></td>

                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                            <?php echo anchor('admin/C_tim/index/', '<button class="btn btn-sm btn-danger">Kembali</div>')?>
                        </div>
                    </div>
                </div>

          </div>
        </div>

        </div>
</section>