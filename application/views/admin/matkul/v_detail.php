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
            <div class="card bg-blue-grey"><p align="center">Data Mata Kuliah <?=$data2->nama?> Tahun Ajaran <?=$data->tahun_ajaran?> Semester <?=$data->semester_ajaran?></p></div>

            <div class="card">
                        <div class="header">

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#matkul">Tambah Data</button>

                            <div class="body">

                            <div class="table-responsive">
                                <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Tahun Ajaran</th>
                                            <th>Program Studi</th>
                                            <th>Mata Kuliah</th>
                                            <th>Kode Matkul</th>
                                            <th>SKS Teori</th>
                                            <th>SKS Praktek</th>
                                            <th>Semester</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                       
                                        foreach($matkul as $matkul):?>
                                        <tr>
                                            <td><?= $matkul->tahun_ajaran?> <?= $matkul->semester_ajaran?></td>
                                            <td><?= $matkul->nama?></td>
                                            <td><?= $matkul->nama_matkul?></td>
                                            <td><?= $matkul->kode_matkul?></td>
                                            <td><?= $matkul->sks_teori?></td>
                                            <td><?= $matkul->sks_praktek?></td>
                                            <td><?= $matkul->semester?></td>

                                                <td width="20px"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubah<?php echo $matkul->id_matkul  ?>"><i class="material-icons">edit</i></button></td>

                                                <td width="20px"><?php echo anchor('admin/C_matkul/delete_matkul/'.$matkul->id_matkul.'/'.$data2->id_jurusan.'/'.$data->id_tahun, 
                                                '<div class="btn btn-sm btn-danger"><i class="material-icons">delete_sweep</i></div>')?></td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                            <?php echo anchor('admin/C_matkul/kelola/'.$data->id_tahun, '<button class="btn btn-sm btn-danger">Kembali</div>')?>
                        </div>
                    </div>
                </div>

          </div>


        </div>

         <!-- Modal iNput Matkul-->
                <div class="modal fade" id="matkul" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('admin/C_matkul/tambah_aksi/'.$data2->id_jurusan.'/'.$data->id_tahun); ?>
                            
                                <form>
    
                                <br><label for="matkul">Nama Mata Kuliah</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <input type="hidden" name="id_matkul" id="id_matkul">
                                         <input type="hidden" name="id_tahun" value="<?=$data->id_tahun?>">
                                         <input type="hidden" name="id_jurusan" value="<?=$data2->id_jurusan?>">
                                        <input type="text" name="nama_matkul" class="form-control" required  autocomplete="off">
                                    </div>
                                </div>

                                <label for="password">Kode Matkul</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="kode_matkul" class="form-control"  autocomplete="off">
                                    </div>
                                </div>

                                <label for="password">Jumlah SKS Teori</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" name="sks_teori" class="form-control"  autocomplete="off">
                                    </div>
                                </div>

                                <label for="password">Jumlah SKS Praktek</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" name="sks_praktek" class="form-control"  autocomplete="off">
                                    </div>
                                </div>

                                <label for="password">Semester</label>
                                <select name="semester" class="form-control" required>
                                        <option value="">-- Pilih Semester --</option>
                                        <?php 

                                        if($data->semester_ajaran == "Ganjil"){
                                            echo '<option value="I">I</option>
                                            <option value="III">III</option>
                                            <option value="V">V</option>
                                            <option value="VII">VII</option>';
                                        }else{
                                            echo '<option value="II">II</option>
                                            <option value="IV">IV</option>
                                            <option value="VI">VI</option>
                                            <option value="VIII">VIII</option>';
                                        }

                                         ?>
                                        
                                        
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


<!-- Modal Ubah Matkul -------------------------------------------------------------------------------------------------------------------- -->
            <?php foreach($matkul2 as $matkul):?>

             <div class="modal fade" id="ubah<?php echo $matkul['id_matkul'];  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('admin/C_matkul/ubah/'.$data2->id_jurusan.'/'.$data->id_tahun); ?>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama Matkul</label>
                                <input type="hidden" class="form-control" name="id_matkul" value="<?php echo $matkul['id_matkul'];  ?>">
                                <input type="text" class="form-control" name="nama_matkul"  value="<?php echo $matkul['nama_matkul'];  ?>" required  autocomplete="off">
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kode Matkul</label>
                                <input type="text" class="form-control" name="kode_matkul" value="<?php echo $matkul['kode_matkul'];  ?>" required  autocomplete="off">
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">SKS Teori</label>
                                <input type="number" class="form-control" name="sks_teori" value="<?php echo $matkul['sks_teori'];  ?>" required  autocomplete="off">
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">SKS Praktek</label>
                                <input type="number" class="form-control" name="sks_praktek" value="<?php echo $matkul['sks_praktek'];  ?>" required  autocomplete="off">
                              </div>

                              <div class="mb-3">
                                <label for="password">Semester</label>
                                <select name="semester" class="form-control" required>
                                        <option value="<?php echo $matkul['semester'];  ?>"><?php echo $matkul['semester'];  ?></option>
                                        <?php 

                                        if($data->semester_ajaran == "Ganjil"){
                                            echo '<option value="I">I</option>
                                            <option value="III">III</option>
                                            <option value="V">V</option>
                                            <option value="VII">VII</option>';
                                        }else{
                                            echo '<option value="II">II</option>
                                            <option value="IV">IV</option>
                                            <option value="VI">VI</option>
                                            <option value="VIII">VIII</option>';
                                        }

                                         ?>
                                        
                                        
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

      </div>
    </section>