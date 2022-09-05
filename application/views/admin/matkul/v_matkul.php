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
            <div class="card bg-indigo"><p align="center">Data Tahun Ajaran</p></div>

            <div class="card">
                        <div class="header">

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ajaran">Tambah Data</button>

                            <div class="body">

                            <div class="table-responsive">
                                <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable" width="1100px">
                                    <thead>
                                        <tr>
                            
                                            <th>Tahun Ajaran</th>
                                            <th>Semester</th>
                                            <th>Status</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                       
                                        foreach($ajaran as $ajaran):?>
                                        <tr>
                                           
                                            <td><?= $ajaran->tahun_ajaran?></td>
                                            <td><?= $ajaran->semester_ajaran?></td>
                                             <td><?= $ajaran->status_ajaran?></td>

                                                <td width="20px"><?php echo anchor('admin/C_matkul/kelola/'.$ajaran->id_tahun, 
                                                '<div class="btn btn-sm btn-success">Kelola</div>')?></td>

                                                <td width="20px"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubahajaran<?php echo $ajaran->id_tahun  ?>"><i class="material-icons">edit</i></button></td>

                                                <td width="20px"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $ajaran->id_tahun  ?>"><i class="material-icons">delete_sweep</i></button></td>

                                                <!--<td width="20px"><?php echo anchor('admin/C_matkul/delete_ajaran/'.$ajaran->id_tahun, 
                                                '<div class="btn btn-sm btn-danger"><i class="material-icons">delete_sweep</i></div>')?></td>-->
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

          </div>


          

        </div>

         
            <!-- Modal Input Tahun Ajaran-->
                <div class="modal fade" id="ajaran" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('admin/C_matkul/tambah_ajaran'); ?>
                            
                                <form>
                                <label for="matkul">Tahun Ajaran</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <input type="hidden" name="id_tahun" id="id_tahun">
                                        <input type="text" name="tahun_ajaran" class="form-control" required  autocomplete="off">
                                    </div>
                                </div>

                                <label for="password">Semester</label>
                                <select name="semester_ajaran" class="form-control" required>
                                        <option value="">-- Pilih Semester --</option>
                                        <option value="Ganjil">Ganjil</option>
                                        <option value="Genap">Genap</option>
                                    </select>

                                <label for="password">Status</label>
                                <select name="status_ajaran" class="form-control" required>
                                        <option value="">-- Pilih Status --</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
                                               
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
            <?php foreach($ajaran2 as $matkul):?>

             <div class="modal fade" id="ubahajaran<?php echo $matkul['id_tahun'];  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('admin/C_matkul/ubah_ajaran'); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Tahun Ajaran</label>
                                <input type="hidden" class="form-control" name="id_tahun" value="<?php echo $matkul['id_tahun'];  ?>">
                                <input type="text" class="form-control" name="tahun_ajaran"  value="<?php echo $matkul['tahun_ajaran'];  ?>" required  autocomplete="off">
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Semester</label>
                                <select name="semester_ajaran" class="form-control" required>
                                        <option value="<?php echo $matkul['semester_ajaran'];  ?>"><?php echo $matkul['semester_ajaran'];  ?></option>
                                        <option value="Ganjil">Ganjil</option>
                                        <option value="Genap">Genap</option>
                                    </select>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Status</label>
                                <select name="status_ajaran" class="form-control" required>
                                        <option value="<?php echo $matkul['status_ajaran'];  ?>"><?php echo $matkul['status_ajaran'];  ?></option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
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



 <!-- Modal Hapus Tahun Ajaran-->
                 <?php foreach($ajaran2 as $ajaran):?>

                <div class="modal fade " id="hapus<?php echo $ajaran['id_tahun']; ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Hapus Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('admin/C_matkul/delete_ajaran'.'/'.$ajaran['id_tahun']); ?>
                            
                                <p>Apakah anda yakin untuk menghapus data ini?</p>
                                               
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link waves-effect">DELETE</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                            <?php echo form_close() ?>
                        </div>
                      </form>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

      </div>
    </section>