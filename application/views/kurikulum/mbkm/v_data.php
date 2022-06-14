<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>MBKM / Data</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2><?php foreach($setting as $data) :?>
                                Data MBKM Prodi <?php echo $data->nama; ?>
                            </h2>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">home</i> MK MBKM dalam PT
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">swap_horiz</i> MK MBKM luar PT
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">work</i> Program MBKM Non-PT
                                    </a>
                                </li>

                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambah_dalam"><i class="material-icons">queue</i> Tambah Data</button><br><br>

                                    <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>SKS</th>
                                            <th>Semester</th>
                                            <th>Fakultas</th>
                                            <th>Prodi</th>
                                            <th>Status</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($mbkm as $mbkm):?>
                                        <tr>
                                           <td><?= $mbkm->kode_mbkm?></td>
                                           <td><?= $mbkm->nama_mbkm?></td>
                                           <td><?= $mbkm->sks_mbkm?></td>
                                           <td><?= $mbkm->semester_mbkm?></td>
                                           <td><?= $mbkm->nama_fakultas?></td>
                                           <td><?= $mbkm->nama?></td>
                                           <td><?= $mbkm->status_mbkm?></td>

                                                <td width="20px"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubah<?php echo $mbkm->id_mbkm  ?>"><i class="material-icons">edit</i></button></td>

                                                <td width="20px"><?php echo anchor('kurikulum/C_mbkm/delete/'.$mbkm->id_mbkm, 
                                                '<div class="btn btn-sm btn-danger"><i class="material-icons">delete_sweep</i></div>')?></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                    </table>
                                    </div>


                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambah_luar"><i class="material-icons">queue</i> Tambah Data</button><br><br>

                                    <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>SKS</th>
                                            <th>Semester</th>
                                            <th>Fakultas</th>
                                            <th>Prodi</th>
                                            <th>Status</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($luar as $luar):?>
                                        <tr>
                                           <td><?= $luar->kode_mbkm?></td>
                                           <td><?= $luar->nama_mbkm?></td>
                                           <td><?= $luar->sks_mbkm?></td>
                                           <td><?= $luar->semester_mbkm?></td>
                                           <td><?= $luar->nama_fakultas?></td>
                                           <td><?= $luar->nama?></td>
                                           <td><?= $luar->status_mbkm?></td>

                                                <td width="20px"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubah<?php echo $luar->id_mbkm  ?>"><i class="material-icons">edit</i></button></td>

                                                <td width="20px"><?php echo anchor('kurikulum/C_mbkm/delete/'.$luar->id_mbkm, 
                                                '<div class="btn btn-sm btn-danger"><i class="material-icons">delete_sweep</i></div>')?></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                    </table>
                                    </div>


                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambah_non"><i class="material-icons">queue</i> Tambah Data</button><br><br>

                                    <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>SKS</th>
                                            <th>Semester</th>
                                            <th>Fakultas</th>
                                            <th>Prodi</th>
                                            <th>Status</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($non as $non):?>
                                        <tr>
                                           <td><?= $non->kode_mbkm?></td>
                                           <td><?= $non->nama_mbkm?></td>
                                           <td><?= $non->sks_mbkm?></td>
                                           <td><?= $non->semester_mbkm?></td>
                                           <td><?= $non->nama_fakultas?></td>
                                           <td><?= $non->nama?></td>
                                           <td><?= $non->status_mbkm?></td>

                                                <td width="20px"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubah<?php echo $non->id_mbkm  ?>"><i class="material-icons">edit</i></button></td>

                                                <td width="20px"><?php echo anchor('kurikulum/C_mbkm/delete/'.$non->id_mbkm, 
                                                '<div class="btn btn-sm btn-danger"><i class="material-icons">delete_sweep</i></div>')?></td>
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
            <!-- #END# Tabs With Icon Title -->
             <!-- Modal -->
                <div class="modal fade" id="tambah_dalam" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_mbkm/tambah_dalam'); ?>
                            
                                <form>
                                <label for="matkul">Kode MK MBKM</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <input type="hidden" name="id_mbkm" id="id_mbkm">
                                         <input type="hidden" name="id_jurusan" value="<?php echo $data->id_jurusan ?>">
                                         <input type="hidden" name="jenis_mbkm" value="Dalam">
                                        <input type="text" class="form-control" name="kode_mbkm" required  autocomplete="off">
                                    </div>
                                </div>

                                <label for="password">Nama MK MBKM</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama_mbkm" required  autocomplete="off">
                                    </div>
                                </div>

                                <label for="password">SKS</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="sks_mbkm" required  autocomplete="off">
                                    </div>
                                </div>

                                <label for="password">Semester</label>
                                <div class="form-group">
                                    <select name="semester_mbkm" class="form-control" required>
                                        <option value="">-- Pilih Semester --</option>
                                            <option value="I">I</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                            <option value="VI">VI</option>
                                            <option value="VII">VII</option>
                                            <option value="VIII">VIII</option>;                                                                                              
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

             <!-- Modal -->
                <div class="modal fade" id="tambah_luar" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_mbkm/tambah_dalam'); ?>
                            
                                <form>
                                <label for="matkul">Kode MK MBKM</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <input type="hidden" name="id_mbkm" id="id_mbkm">
                                         <input type="hidden" name="id_jurusan" value="<?php echo $data->id_jurusan ?>">
                                         <input type="hidden" name="jenis_mbkm" value="Luar">
                                        <input type="text" class="form-control" name="kode_mbkm" required  autocomplete="off">
                                    </div>
                                </div>

                                <label for="password">Nama MK MBKM</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama_mbkm" required  autocomplete="off">
                                    </div>
                                </div>

                                <label for="password">SKS</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="sks_mbkm" required  autocomplete="off">
                                    </div>
                                </div>

                                <label for="password">Semester</label>
                                <div class="form-group">
                                    <select name="semester_mbkm" class="form-control" required>
                                        <option value="">-- Pilih Semester --</option>
                                            <option value="I">I</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                            <option value="VI">VI</option>
                                            <option value="VII">VII</option>
                                            <option value="VIII">VIII</option>;                                                                                              
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

             <!-- Modal -->
                <div class="modal fade" id="tambah_non" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_mbkm/tambah_dalam'); ?>
                            
                                <form>
                                <label for="matkul">Kode MK MBKM</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <input type="hidden" name="id_mbkm" id="id_mbkm">
                                         <input type="hidden" name="id_jurusan" value="<?php echo $data->id_jurusan ?>">
                                         <input type="hidden" name="jenis_mbkm" value="Non">
                                        <input type="text" class="form-control" name="kode_mbkm" required  autocomplete="off">
                                    </div>
                                </div>

                                <label for="password">Nama MK MBKM</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama_mbkm" required  autocomplete="off">
                                    </div>
                                </div>

                                <label for="password">SKS</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="sks_mbkm" required  autocomplete="off">
                                    </div>
                                </div>

                                <label for="password">Semester</label>
                                <div class="form-group">
                                    <select name="semester_mbkm" class="form-control" required>
                                        <option value="">-- Pilih Semester --</option>
                                            <option value="I">I</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                            <option value="VI">VI</option>
                                            <option value="VII">VII</option>
                                            <option value="VIII">VIII</option>                                                                                            
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
            <?php foreach($mbkm2 as $mbkm2):?>

             <div class="modal fade" id="ubah<?php echo $mbkm2['id_mbkm'];  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('kurikulum/C_mbkm/ubah_dalam'); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kode MK MBKM</label>
                                <input type="hidden" class="form-control" name="id_mbkm" value="<?php echo $mbkm2['id_mbkm'];  ?>">
                                <input type="text" class="form-control" name="kode_mbkm" value="<?php echo $mbkm2['kode_mbkm'];  ?>">
                              </div>

                             <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama MK MBKM</label>
                                <input type="text" class="form-control" name="nama_mbkm" value="<?php echo $mbkm2['nama_mbkm'];  ?>">
                              </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">SKS</label>
                                <input type="text" class="form-control" name="sks_mbkm" value="<?php echo $mbkm2['sks_mbkm'];  ?>">
                              </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Semester</label>
                               <select name="semester_mbkm" class="form-control" required>
                                        <option value="<?php echo $mbkm2['semester_mbkm'];  ?>"><?php echo $mbkm2['semester_mbkm'];  ?></option>
                                            <option value="I">I</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                            <option value="VI">VI</option>
                                            <option value="VII">VII</option>
                                            <option value="VIII">VIII</option>                                                                                           
                                    </select>
                              </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Status</label>
                                <select name="status_mbkm" class="form-control" required>
                                        <option value="">-- Pilih Status MBKM --</option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Tidak">Tidak</option>                                                                                        
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

<!-- END Modal Ubah -->

        <?php endforeach; ?>
        </div>
    </section>