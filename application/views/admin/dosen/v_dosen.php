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
          if($this->session->flashdata('update_data')){
              echo '<div class="alert alert-warning alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
              echo $this->session->flashdata('update_data');
              echo '</h5></div>';
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
            <div class="card bg-purple"><p align="center">Data Dosen Prodi <?= $data2->nama?></p></div>

            <div class="card">
                        <div class="header">

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dosen">Tambah Data</button>

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
                                       
                                        foreach($dosen as $dosen):?>
                                        <tr>
                                           
                                            <td><?= $dosen['nama']?></td>
                                            <td><?= $dosen['nama_dosen']?></td>
                                            <td><?= $dosen['email']?></td>

                                                <td width="20px"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubah<?php echo $dosen['id_user']  ?>"><i class="material-icons">edit</i></button></td>

                                                <td width="20px"><?php echo anchor('admin/C_dosen/delete_dosen/'.$dosen['id_dosen'], 
                                                '<div class="btn btn-sm btn-danger"><i class="material-icons">delete_sweep</i></div>')?></td>

                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                            <?php echo anchor('admin/C_dosen/index/', '<button class="btn btn-sm btn-danger">Kembali</div>')?>
                        </div>
                    </div>
                </div>

          </div>
        </div>

        <!-- Modal -->
                <div class="modal fade" id="dosen" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('admin/C_dosen/insert/'.$data2->id_jurusan); ?>
                            
                                <form>

                                <br><label for="dosen">Nama Dosen</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <input type="hidden" name="id_dosen" id="id_dosen">
                                         <input type="hidden" name="id_jurusan" id="id_jurusan" value="<?=$data2->id_jurusan?>">
                                        <input type="text" name="nama_dosen" class="form-control" required  autocomplete="off">
                                    </div>
                                </div>             

                                <label for="password">Email</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="email" class="form-control"  autocomplete="off">
                                    </div>
                                </div>

                                <label for="password">Password</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" name="password" class="form-control"  autocomplete="off">
                                    </div>
                                </div>
                                
                                               
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link waves-effect">SAVE</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                            <?php echo form_close() ?>
                        </div>
                      </form>
                    </div>
                </div>
            </div>

            <!-- Modal Ubah-------------------------------------------------------------------------------------------------------------------------------- -->
            <?php foreach($dosen2 as $dosen):?>

             <div class="modal fade" id="ubah<?php echo $dosen->id_user;  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('admin/C_dosen/ubah/'.$data2->id_jurusan); ?>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama Dosen</label>
                                <input type="hidden" class="form-control" name="id_user" value="<?php echo $dosen->id_user;  ?>">
                                <input type="text" class="form-control" name="nama_dosen"  value="<?php echo $dosen->nama_dosen;  ?>" required  autocomplete="off">
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Email</label>
                                <input type="text" class="form-control" name="email" value="<?php echo $dosen->email;  ?>" required  autocomplete="off">
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