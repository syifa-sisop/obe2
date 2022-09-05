  
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

          <!-- Modal Hapus SKL-->
                <?php foreach($skl2 as $skl9):?>

                <div class="modal fade " id="hapus_skl<?php echo $skl9->id_skl; ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Hapus Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_data/delete_skl'.'/'.$skl9->id_skl); ?>
                            
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


                <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                                <?php foreach($setting as $data) :?>
                            <h2>
                                Data Kurikulum Prodi <?php echo $data->nama; ?>
                            </h2>
                    <?php endforeach; ?>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">

                                <li role="presentation" class="active">
                                    <a href="#landasan" data-toggle="tab">
                                        <i class="material-icons">airplay</i> Landasan
                                    </a>
                                </li>

                                <li role="presentation">
                                    <a href="#home_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">person</i> Profil Lulusan
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">local_library</i> CPL
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#skl_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">class</i> SKL
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">dns</i> Bahan Kajian
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#settings_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">library_books</i> Mata Kuliah
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#dosen" data-toggle="tab">
                                        <i class="material-icons">group</i> Dosen Prodi
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#pengampu" data-toggle="tab">
                                        <i class="material-icons">school</i> Pengampu MK
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#tim" data-toggle="tab">
                                        <i class="material-icons">spa</i> Tim Kurikulum
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane fade in active" id="landasan">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_landasan">Tambah Data</button>
                                    <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Landasan Filosofis</th>
                                            <th>Landasan Psikologis</th>
                                            <th>Landasan Sosiologis</th>
                                            <th>Landasan IPTEK</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($landasan as $landasan):?>
                                        <tr>
                                           <td><?= $landasan->filosofis?></td>
                                           <td><?= $landasan->psikologis?></td>
                                           <td><?= $landasan->sosiologis?></td>
                                           <td><?= $landasan->iptek?></td>

                                                <td width="20px"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubah_landasan<?php echo $landasan->id_landasan  ?>"><i class="material-icons">edit</i></button></td>

                                                <td width="20px"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus_landasan<?php echo $landasan->id_landasan  ?>"><i class="material-icons">delete_sweep</i></button></td>

                                                <!--<td width="20px"><?php echo anchor('kurikulum/C_data/delete_landasan/'.$landasan->id_landasan, 
                                                '<div class="btn btn-sm btn-danger"><i class="material-icons">delete_sweep</i></div>')?></td>-->
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                            
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="home_with_icon_title">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_profil">Tambah Data</button>
                                    <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                            
                                            <th>Kode</th>
                                            <th>Profil</th>
                                            <th>Deskripsi Profil</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($profil as $profil):?>
                                        <tr>
                                           <td><?= $profil->kode_lulusan?></td>
                                           <td><?= $profil->profil?></td>
                                           <td><?= $profil->deskripsi?></td>

                                                <td width="20px"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubah_profil<?php echo $profil->id_lulusan  ?>"><i class="material-icons">edit</i></button></td>

                                                <td width="20px"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus_profil<?php echo $profil->id_lulusan  ?>"><i class="material-icons">delete_sweep</i></button></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_cpl">Tambah Data</button><br>
                                   <br> <div class="table-responsive">
                                <table  class="table table-bordered table-striped table-hover" width="1100px">
                                    <thead>
                                        <tr>
                            
                                            <th>Kode</th>
                                            <th>Aspek</th>
                                            <th width="400px">Deskripsi CPL</th>
                                            <th>Sumber</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($cpl as $cpl):?>
                                        <tr>
                                           <td><?= $cpl['kode_cpl']?></td>
                                           <td><?= $cpl['nama_aspek']?></td>
                                           <td class="align-justify"><?= $cpl['cpl']?></td>
                                           <td class="align-justify"><?= $cpl['sumber']?></td>

                                                <td width="20px"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubah_cpl<?php echo $cpl['id_cpl']  ?>"><i class="material-icons">edit</i></button></td>

                                                <td width="20px"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus_cpl<?php echo $cpl['id_cpl']  ?>"><i class="material-icons">delete_sweep</i></button></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="skl_with_icon_title">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_skl">Tambah Data</button><br>
                                   <br> <div class="table-responsive">
                                <table  class="table table-bordered table-striped table-hover" width="1100px">
                                    <thead>
                                        <tr>
                            
                                            <th>Kode</th>
                                            <th width="400px">Deskripsi SKL</th>
                                            <th>Kode CPL</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($skl as $skl):?>
                                        <tr>
                                           <td><?= $skl['kode_skl']?></td>
                                           <td class="align-justify"><?= $skl['skl']?></td>
                                           <td class="align-justify"><?= $skl['kode_cpl']?></td>

                                                <td width="20px"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubah_skl<?php echo $skl['id_skl']  ?>"><i class="material-icons">edit</i></button></td>

                                                <td width="20px"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus_skl<?php echo $skl['id_skl']  ?>"><i class="material-icons">delete_sweep</i></button></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_kajian">Tambah Data</button>
                                    <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                            
                                            <th>Bahan Kajian</th>
                                            <th>Deskripsi</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($kajian as $kajian):?>
                                        <tr>
                                           <td><?= $kajian->nama_kajian?></td>
                                           <td><?= $kajian->deskripsi?></td>

                                                <td width="20px"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubah_kajian<?php echo $kajian->id_kajian  ?>"><i class="material-icons">edit</i></button></td>

                                                <td width="20px"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus_kajian<?php echo $kajian->id_kajian  ?>"><i class="material-icons">delete_sweep</i></button></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="settings_with_icon_title">
                                    <b>Mata Kuliah</b>
                                    <div class="table-responsive">
                                <table id="datatablesSimple"  class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tahun Ajaran</th>
                                            <th>Mata Kuliah</th>
                                            <th>Kode Matkul</th>
                                            <th>Semester</th>
                                            <th>Jenis MK</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no =1;
                                        foreach($matkul as $matkul):?>
                                        <tr>
                                           <td><?php echo $no++; ?></td>
                                           <td><?= $matkul->tahun_ajaran?> <?= $matkul->semester_ajaran?></td>
                                            <td><?= $matkul->nama_matkul?></td>
                                            <td><?= $matkul->kode_matkul?></td>
                                            <td><?= $matkul->semester?></td>
                                            <td><?= $matkul->jenis_mk?></td>

                                            <td width="20px"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubah_mk<?php echo $matkul->id_matkul  ?>"><i class="material-icons">edit</i></button></td>
                                           
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="dosen">
                                    <b>Data Dosen Prodi</b>
                                    <div class="table-responsive">
                                <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no =1;
                                        foreach($dosen as $dosen):?>
                                        <tr>
                                           <td><?php echo $no++; ?></td>
                                           <td><?= $dosen['nama_dosen']?></td>
                                           <td><?= $dosen['nip']?></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                                    
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="pengampu">
                                    <b>Pengampu MK</b>
                                    <div class="table-responsive">
                                <table id="table_id" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Dosen</th>
                                            <th>Mata Kuliah</th>
                                            <th>Kelas</th>
                                            <th>Semester</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no =1;
                                        foreach($pengampu as $pengampu):?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?= $pengampu['nama_dosen']?></td>
                                            <td><?= $pengampu['nama_matkul']?></td>
                                            <td><?= $pengampu['kelas']?></td>
                                            <td><?= $pengampu['semester']?></td> 
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tim">
                                    <b>Tim Kurikulum</b>
                                    <div class="table-responsive">
                                <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no =1;
                                        foreach($tim as $tim):?>
                                        <tr>
                                           <td><?php echo $no++; ?></td>
                                           <td><?= $tim['nama_dosen']?></td>
                                           <td><?= $tim['nip']?></td>
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
            </div>

            <!-- Modal -->
                <div class="modal fade" id="tambah_kajian" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_data/tambah_kajian'); ?>
                            
                                <form>
                                <label for="matkul">Bahan Kajian</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <input type="hidden" name="id_kajian" id="id_kajian">
                                          <?php foreach($setting as $data) :?>
                                         <input type="hidden" name="id_jurusan" value="<?php echo $data->id_jurusan ?>">
                                     <?php endforeach; ?>
                                        <textarea rows="3" class="form-control no-resize auto-growth" name="nama_kajian"></textarea>
                                    </div>
                                </div>

                                <label for="password">Deskripsi</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="3" class="form-control no-resize auto-growth" name="deskripsi"></textarea>
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
            <?php foreach($kajian2 as $profil):?>

             <div class="modal fade" id="ubah_kajian<?php echo $profil['id_kajian'];  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('kurikulum/C_data/ubah_kajian'); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Bahan Kajian</label>
                                <input type="hidden" class="form-control" name="id_kajian" value="<?php echo $profil['id_kajian'];  ?>">
                                <textarea rows="3" class="form-control no-resize auto-growth" name="nama_kajian"><?php echo $profil['nama_kajian']; ?></textarea>
                              </div>

                             <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Deskripsi</label>
                                <textarea rows="3" class="form-control no-resize auto-growth" name="deskripsi"><?php echo $profil['deskripsi']; ?></textarea>
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
                <div class="modal fade" id="tambah_landasan" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_data/tambah_landasan'); ?>
                            
                                <form>
                                <label for="matkul">Landasan Filosofis</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <input type="hidden" name="id_landasan" id="id_landasan">
                                          <?php foreach($setting as $data) :?>
                                         <input type="hidden" name="id_jurusan" value="<?php echo $data->id_jurusan ?>">
                                     <?php endforeach; ?>
                                        <textarea rows="3" class="form-control no-resize auto-growth" name="filosofis"></textarea>
                                    </div>
                                </div>

                                <label for="password">Landasan Psikologis</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="3" class="form-control no-resize auto-growth" name="psikologis"></textarea>
                                    </div>
                                </div>

                                <label for="password">Landasan Sosiologis</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="3" class="form-control no-resize auto-growth" name="sosiologis"></textarea>
                                    </div>
                                </div>

                                <label for="password">Landasan IPTEK</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="3" class="form-control no-resize auto-growth" name="iptek"></textarea>
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
            <?php foreach($landasan2 as $profil):?>

             <div class="modal fade" id="ubah_landasan<?php echo $profil['id_landasan'];  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('kurikulum/C_data/ubah_landasan'); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Landasan Filosofis</label>
                                <input type="hidden" class="form-control" name="id_landasan" value="<?php echo $profil['id_landasan'];  ?>">
                                <textarea rows="3" class="form-control no-resize auto-growth" name="filosofis"><?php echo $profil['filosofis']; ?></textarea>
                              </div>

                             <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Landasan Psikologis</label>
                                <textarea rows="3" class="form-control no-resize auto-growth" name="psikologis"><?php echo $profil['psikologis']; ?></textarea>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Landasan Sosiologis</label>
                                <textarea rows="3" class="form-control no-resize auto-growth" name="sosiologis"><?php echo $profil['sosiologis']; ?></textarea>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Landasan IPTEK</label>
                                <textarea rows="3" class="form-control no-resize auto-growth" name="iptek"><?php echo $profil['iptek']; ?></textarea>
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

<!-- Modal Ubah-------------------------------------------------------------------------------------------------------------------------------- -->
            <?php foreach($matkul2 as $matkul2):?>

             <div class="modal fade" id="ubah_mk<?php echo $matkul2['id_matkul'];  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('kurikulum/C_data/ubah_mk'); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Mata Kuliah</label>
                                <input type="hidden" class="form-control" name="id_matkul" value="<?php echo $matkul2['id_matkul'];  ?>">
                                <input type="text" class="form-control"  value="<?php echo $matkul2['nama_matkul'];  ?> " required  readonly>
                              </div><br>

                             <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Jenis MK</label>
                                <select name="jenis_mk" class="form-control" required>
                                        <option value="">-- Pilihan --</option>
                                        <option value="MKWU">MKDU</option>
                                        <option value="MKU">MKU</option>
                                        <option value="MKF">MKF</option>
                                        <option value="MK Prodi">MK Prodi</option>
                                        <option value="MK MBKM">MK MBKM</option>
                                    </select>
                              </div><br>                         

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
                <div class="modal fade" id="tambah_skl" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_data/tambah_skl'); ?>
                            
                                <form>
                                <label for="matkul">Kode SKL</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <input type="hidden" name="id_skl" id="id_skl">
                                          <?php foreach($setting as $data) :?>
                                         <input type="hidden" name="id_jurusan" value="<?php echo $data->id_jurusan ?>">
                                     <?php endforeach; ?>
                                        <input type="text" name="kode_skl" class="form-control" required  autocomplete="off">
                                    </div>
                                </div>

                                 

                                <label for="password">Deskripsi SKL</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="3" class="form-control no-resize auto-growth" name="skl"></textarea>
                                    </div>
                                </div>

                                 <label for="fakultas">CPL</label>
                                    <div class="form-group">
                                    <select name="id_cpl" class="form-control" required>
                                        <option value="">-- Pilih CPL --</option>
                                         <?php foreach($cpl2 as $cpl_data):?>
                                        <option value="<?= $cpl_data->id_cpl; ?>"><?= $cpl_data->kode_cpl; ?></option>
                                    <?php endforeach; ?>
                                    </select>
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
            <?php foreach($skl2 as $skl2):?>

             <div class="modal fade" id="ubah_skl<?php echo $skl2->id_skl;  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('kurikulum/C_data/ubah_skl'); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kode SKL</label>
                                <input type="hidden" class="form-control" name="id_skl" value="<?php echo $skl2->id_skl;  ?>">
                                <input type="text" class="form-control" name="kode_skl"  value="<?php echo $skl2->kode_skl;  ?>" required  autocomplete="off">
                              </div><br>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Deskripsi SKL</label>
                                <textarea rows="3" class="form-control no-resize auto-growth" name="skl"><?php echo $skl2->skl; ?></textarea>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">CPL</label>
                                <select name="id_cpl" class="form-control" required>
                                        <option value="<?php echo $skl2->id_cpl;  ?>"><?php echo $skl2->kode_cpl;  ?></option>
                                         <?php foreach($cpl2 as $cpl_data):?>
                                        <option value="<?= $cpl_data->id_cpl; ?>"><?= $cpl_data->kode_cpl; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                              </div><br>

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
                <div class="modal fade" id="tambah_profil" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_data/tambah_profil'); ?>
                            
                                <form>
                                <label for="matkul">Kode</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <input type="hidden" name="id_lulusan" id="id_lulusan">
                                          <?php foreach($setting as $data) :?>
                                         <input type="hidden" name="id_jurusan" value="<?php echo $data->id_jurusan ?>">
                                     <?php endforeach; ?>
                                        <input type="text" name="kode_lulusan" class="form-control" required  autocomplete="off">
                                    </div>
                                </div>

                                <label for="password">Profil</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="profil" class="form-control"  autocomplete="off">
                                    </div>
                                </div>

                                <label for="password">Deskripsi Profil</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="3" class="form-control no-resize auto-growth" name="deskripsi"></textarea>
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
            <?php foreach($profil2 as $profil):?>

             <div class="modal fade" id="ubah_profil<?php echo $profil['id_lulusan'];  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('kurikulum/C_data/ubah_profil'); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kode</label>
                                <input type="hidden" class="form-control" name="id_lulusan" value="<?php echo $profil['id_lulusan'];  ?>">
                                <input type="text" class="form-control" name="kode_lulusan"  value="<?php echo $profil['kode_lulusan'];  ?>" required  autocomplete="off">
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Profil</label>
                                <input type="text" class="form-control" name="profil" value="<?php echo $profil['profil'];  ?>" required  autocomplete="off">
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Deskripsi</label>
                                <textarea rows="3" class="form-control no-resize auto-growth" name="deskripsi"><?php echo $profil['deskripsi']; ?></textarea>
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
                <div class="modal fade" id="tambah_cpl" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_data/tambah_cpl'); ?>
                            
                                <form>
                                <label for="matkul">Kode CPL</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <input type="hidden" name="id_cpl" id="id_cpl">
                                          <?php foreach($setting as $data) :?>
                                         <input type="hidden" name="id_jurusan" value="<?php echo $data->id_jurusan ?>">
                                     <?php endforeach; ?>
                                        <input type="text" name="kode_cpl" class="form-control" required  autocomplete="off">
                                    </div>
                                </div>

                                 <label for="fakultas">Aspepk</label>
                                    <div class="form-group">
                                    <select name="id_aspek" class="form-control" required>
                                        <option value="">-- Pilih Aspek --</option>
                                         <?php foreach($aspek as $aspek):?>
                                        <option value="<?= $aspek['id_aspek']; ?>"><?= $aspek['nama_aspek']; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>

                                <label for="password">Deskripsi CPL</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="3" class="form-control no-resize auto-growth" name="cpl"></textarea>
                                    </div>
                                </div>

                                 <label for="password">Sumber</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="sumber" class="form-control"  autocomplete="off">
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
            <?php foreach($cpl2 as $cpl):?>

             <div class="modal fade" id="ubah_cpl<?php echo $cpl->id_cpl;  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('kurikulum/C_data/ubah_cpl'); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kode CPL</label>
                                <input type="hidden" class="form-control" name="id_cpl" value="<?php echo $cpl->id_cpl;  ?>">
                                <input type="text" class="form-control" name="kode_cpl"  value="<?php echo $cpl->kode_cpl;  ?>" required  autocomplete="off">
                              </div><br>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Aspek</label>
                                <select name="id_aspek" class="form-control" required>
                                        <option value="<?php echo $cpl->id_aspek;  ?>"><?php echo $cpl->nama_aspek;  ?></option>
                                         <?php foreach($aspek2 as $aspek):?>
                                        <option value="<?= $aspek->id_aspek; ?>"><?= $aspek->nama_aspek; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                              </div><br>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Deskripsi CPL</label>
                                <textarea rows="3" class="form-control no-resize auto-growth" name="cpl"><?php echo $cpl->cpl; ?></textarea>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Sumber</label>
                                <input type="text" class="form-control" name="sumber" value="<?php echo $cpl->sumber;  ?>" autocomplete="off">
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



<!-- Modal Hapus Landasan-->
                <?php foreach($landasan2 as $land):?>

                <div class="modal fade " id="hapus_landasan<?php echo $land['id_landasan']; ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Hapus Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_data/delete_landasan'.'/'.$land['id_landasan']); ?>
                            
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

<!-- Modal Hapus bahan kajian-->
                <?php foreach($kajian2 as $kaj):?>

                <div class="modal fade " id="hapus_kajian<?php echo $kaj['id_kajian']; ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Hapus Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_data/delete_kajian'.'/'.$kaj['id_kajian']); ?>
                            
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

         
<!-- Modal Hapus Profil Lulusan-->
                <?php foreach($profil2 as $prof):?>

                <div class="modal fade " id="hapus_profil<?php echo $prof['id_lulusan']; ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Hapus Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_data/delete'.'/'.$prof['id_lulusan']); ?>
                            
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

    <!-- Modal Hapus CPL-->
                <?php foreach($cpl3 as $cpl_dt):?>

                <div class="modal fade " id="hapus_cpl<?php echo $cpl_dt->id_cpl; ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Hapus Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_data/delete_cpl'.'/'.$cpl_dt->id_cpl.'/'.$cpl_dt->id_cplmk); ?>
                            
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