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
                     <div class="card bg-teal">
                                <p align="center">Data Fakultas</p></div>
                    <div class="card">
                        <div class="header">

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#defaultModal">Tambah Data</button>

                            <div class="body">

                                <div class="table-responsive">
                                <table id="myTable" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Fakultas</th>
                                            <th>Kode</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        $no = 1;
                                        foreach($data as $fakultas):?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?= $fakultas['nama_fakultas']?></td>
                                            <td><?= $fakultas['kode']?></td>

                                                <td width="20px"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $fakultas['id_fakultas']  ?>"><i class="material-icons">edit</i></button></td>

                                                <td width="20px"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $fakultas['id_fakultas']  ?>"><i class="material-icons">delete_sweep</i></button></td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- Modal Ubah-------------------------------------------------------------------------------------------------------------------------------- -->
            <?php
               $no = 1;
               foreach($data as $fakultas): $no++;?>

             <div class="modal fade" id="edit<?php echo $fakultas['id_fakultas'];  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('admin/C_prodi/ubah'); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama Fakultas</label>
                                <input type="hidden" class="form-control" name="id_fakultas" value="<?php echo $fakultas['id_fakultas'];  ?>">
                                <input type="text" class="form-control" name="nama_fakultas"  value="<?php echo $fakultas['nama_fakultas'];  ?>" required  autocomplete="off">
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kode</label>
                                <input type="text" class="form-control" name="kode" value="<?php echo $fakultas['kode'];  ?>" required  autocomplete="off">
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

        <!-- Modal -->
                <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('admin/C_prodi/insert'); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama Fakultas</label>
                                <input type="hidden" class="form-control" name="id_fakultas">
                                <input type="text" class="form-control" name="nama_fakultas" required  autocomplete="off">
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kode</label>
                                <input type="text" class="form-control" name="kode" required  autocomplete="off">
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

<!-- Modal------------------------------------------------------------------------------------------------------------------------------------------ -->

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div class="card bg-teal">
                                <p align="center">Data Program Studi</p></div>
                    <div class="card">
                        <div class="header">

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#prodi">Tambah Data</button>

                            <div class="body">

                            <div class="table-responsive">
                                <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                            
                                            <th>Program Studi</th>
                                            <th>Fakultas</th>
                                            <th>Kode</th>
                                            <th>Koordinator Prodi</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                       
                                        foreach($prodi as $prodi):?>
                                        <tr>
                                           
                                            <td><?= $prodi->nama?></td>
                                            <td><?= $prodi->nama_fakultas?></td>
                                            <td><?= $prodi->kode_jurusan?></td>
                                            <td><?= $prodi->koordinator_jurusan?></td>


                                                <td width="20px"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubah<?php echo $prodi->id_jurusan  ?>"><i class="material-icons">edit</i></button></td>

                                                <td width="20px"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus_jurusan<?php echo $prodi->id_jurusan  ?>"><i class="material-icons">delete_sweep</i></button></td>

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

        <!-- Modal Hapus Jurusan-->
                <?php foreach($prodi2 as $prodi_new):?>

                <div class="modal fade " id="hapus_jurusan<?php echo $prodi_new['id_jurusan']; ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Hapus Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('admin/C_prodi/delete_jurusan'.'/'.$prodi_new['id_jurusan']); ?>
                            
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

 <!-- Modal Ubah-------------------------------------------------------------------------------------------------------------------------------- -->
            <?php foreach($prodi2 as $prodi):?>

             <div class="modal fade" id="ubah<?php echo $prodi['id_jurusan'];  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('admin/C_prodi/ubah_prodi'); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama prodi</label>
                                <input type="hidden" class="form-control" name="id_jurusan" value="<?php echo $prodi['id_jurusan'];  ?>">
                                <input type="text" class="form-control" name="nama"  value="<?php echo $prodi['nama'];  ?>" required  autocomplete="off">
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kode</label>
                                <input type="text" class="form-control" name="kode_jurusan" value="<?php echo $prodi['kode_jurusan'];  ?>" required  autocomplete="off">
                              </div>

                              <div class="mb-3">
                                  <label for="fakultas">Fakultas</label>
                                
                                    <select name="id_fakultas" class="form-control" required>
                                        <option value="">-- Pilih Fakultas --</option>
                                         <?php foreach($data as $fakultas):?>
                                        <option value="<?= $fakultas['id_fakultas']; ?>"><?= $fakultas['nama_fakultas']; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Koordinator Prodi</label>
                                <input type="text" class="form-control" name="koordinator_jurusan" value="<?php echo $prodi['koordinator_jurusan'];  ?>" required  autocomplete="off">
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
        
            <!-- Modal -->
                <div class="modal fade" id="prodi" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('admin/C_prodi/tambah_aksi'); ?>
                            
                                <form>
                                <label for="matkul">Nama Program Studi</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <input type="hidden" name="id_jurusan" id="id_jurusan">
                                        <input type="text" name="nama" class="form-control" required  autocomplete="off">
                                    </div>
                                </div>

                                <label for="password">Kode</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="kode_jurusan" class="form-control"  autocomplete="off">
                                    </div>
                                </div>

                                <label for="password">Koordinator Prodi</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="koordinator_jurusan" class="form-control"  autocomplete="off">
                                    </div>
                                </div>

                                <label for="fakultas">Fakultas</label>
                                
                                    <select name="id_fakultas" class="form-control" required>
                                        <option value="">-- Pilih Fakultas --</option>
                                         <?php foreach($data as $fakultas):?>
                                        <option value="<?= $fakultas['id_fakultas']; ?>"><?= $fakultas['nama_fakultas']; ?></option>
                                    <?php endforeach; ?>
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

            <!-- Modal Hapus Fakultas-->
                <?php foreach($data2 as $fakultas2):?>

                <div class="modal fade " id="hapus<?php echo $fakultas2->id_fakultas; ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Hapus Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('admin/C_prodi/delete'.'/'.$fakultas2->id_fakultas); ?>
                            
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

    

     


