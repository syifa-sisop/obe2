<section class="content">
        <div class="container-fluid">

                <?php 

          if($this->session->flashdata('update_data')){
              echo '<div class="alert alert-warning alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
              echo $this->session->flashdata('update_data');
              echo '</h5></div>';
          }

          ?>
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card bg-teal"><p align="center">Profil</p></div>

            <div class="card">
                        <div class="header">

                            <div class="body">

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                                <?php foreach ($admin as $row) : ?>

                                                  <div class="modal-footer justify-content-between">
                                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubah<?php echo $row->id_admin;  ?>">Edit Data</button>                              
                                                  
                                                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#password<?php echo $row->id_user;  ?>">Ganti Password</button>  
                                              </div>

                                                <center><img src="<?php echo base_url().'uploads/'.$row->gambar ?>" style="width: 20%;"></center><br>

                                                <tr>
                                                  <th >Nama</th>
                                                  <th><?php echo $row->nama; ?></th>
                                                </tr>

                                                <tr>
                                                  <th >Alamat</th>
                                                  <th><?php echo $row->alamat; ?></th>
                                                </tr>

                                                <tr>
                                                  <th >No Telp</th>
                                                  <th><?php echo $row->no_telp; ?></th>
                                                </tr>
                                            <?php endforeach; ?>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

          </div>
        </div>

        <!-- Modal Ubah-------------------------------------------------------------------------------------------------------------------------------- -->
            <?php foreach($admin as $profil):?>

             <div class="modal fade" id="ubah<?php echo $profil->id_admin;  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('admin/C_profil/ubah'); ?>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama</label>
                                <input type="hidden" class="form-control" name="id_admin" value="<?php echo $profil->id_admin;  ?>">
                                <input type="text" class="form-control" name="nama"  value="<?php echo $profil->nama;  ?>" required  autocomplete="off">
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="<?php echo $profil->alamat;  ?>" required  autocomplete="off">
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">No Telp</label>
                                <input type="text" class="form-control" name="no_telp" value="<?php echo $profil->no_telp;  ?>" required  autocomplete="off">
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Foto</label>
                                <input type="file" class="form-control" name="userfile" value="<?php echo $profil->gambar;  ?>" autocomplete="off">
                              </div>

                              
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
 <?php endforeach;?>

<!-- END Modal Ubah -->

<?php foreach($admin as $profil):?>

             <div class="modal fade" id="password<?php echo $profil->id_user;  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('admin/C_profil/password'); ?>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Password Lama</label>
                                <input type="hidden" class="form-control" name="id_user" value="<?php echo $profil->id_user ?>">
                                <input type="password" class="form-control" name="lama"  required  autocomplete="off">
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Password Baru</label>
                                <input type="password" class="form-control" name="password1"  required  autocomplete="off">
                                <?= form_error('password1', ' <small class="text-danger">', '</small> '); ?>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Konfirmasi Password</label>
                                <input type="password" class="form-control" name="password2"  required  autocomplete="off">
                                <?= form_error('password2', ' <small class="text-danger">', '</small> '); ?>
                              </div>                           
                              
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
 <?php endforeach;?>

<!-- END Modal Ubah -->



    </div>
</section>