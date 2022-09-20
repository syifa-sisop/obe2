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
            <div class="card bg-brown"><p align="center">Data Mata Kuliah</p></div>

            <div class="card">
                        <div class="header">

                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah Data</button>

                            <div class="body">

                            <div class="table-responsive">
                                <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable" width="1100px">
                                    <thead>
                                        <tr>
                                            <th>Prodi</th>
                                            <th>Nama Dosen 1</th>
                                            <th>Nama Dosen 2</th>
                                            <th>Nama Dosen 3</th>
                                            <th>Mata Kuliah</th>
                                            <th>Kelas</th>
                                            <th>Semester</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                       
                                        foreach($matkul as $matkul):?>
                                        <tr>
                                           
                                            <td><?= $matkul['nama']?></td>
                                            <td><?= $matkul['nama_dosen']?></td>
                                            <?php 
                                                $dosen2 = $matkul['nama_dosen2'];
                                                $sql = $this->db->query("SELECT nama_dosen FROM dosen where id_dosen = '$dosen2'");
                                               foreach ($sql->result() as $row)
                                                    { 
                                                            
                                                             echo "<td>" . $row->nama_dosen . "</td>";
                                                    }
                                             ?>

                                             <?php 
                                                $dosen3 = $matkul['nama_dosen3'];
                                                $sql = $this->db->query("SELECT nama_dosen FROM dosen where id_dosen = '$dosen3'");
                                               foreach ($sql->result() as $row)
                                                    { 
                                                            
                                                             echo "<td>" . $row->nama_dosen . "</td>";
                                                    }
                                             ?>
                                            <td><?= $matkul['nama_matkul']?></td>
                                            <td><?= $matkul['kelas']?></td>
                                            <td><?= $matkul['semester']?></td>                

                                                <td width="20px"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $matkul['id_matkulmhs']  ?>"><i class="material-icons">edit</i></button></td>

                                                <td width="20px"><?php echo anchor('mahasiswa/C_matkul/delete/'.$matkul['id_matkulmhs'], 
                                                '<div class="btn btn-sm btn-danger"><i class="material-icons">delete_sweep</i></div>')?></td>

                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="tambah" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('mahasiswa/C_matkul/tambah_aksi'); ?>
                            
                                <form>

                                <label for="fakultas">Mata Kuliah</label>
                                <input type="hidden" name="id_matkulmhs" id="id_matkulmhs">
                                    <select name="id_pengampu" class="form-control" required>
                                        <option value="">-- Pilih Matkul --</option>
                                         <?php foreach($pilih as $matkul):?>
                                        <option value="<?= $matkul['id_pengampu']; ?>"><?= $matkul['nama_matkul']; ?> Kelas <?= $matkul['kelas']; ?></option>
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

          </div>
        </div>
    </div>

    <!-- Modal Ubah-------------------------------------------------------------------------------------------------------------------------------- -->
            <?php foreach($matkul2 as $matkul2):?>

             <div class="modal fade" id="edit<?php echo $matkul2->id_matkulmhs;  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('mahasiswa/C_matkul/ubah'); ?>
                                <input type="hidden" class="form-control" name="id_matkulmhs" value="<?php echo $matkul2->id_matkulmhs;  ?>">
                     
                              <div class="mb-3">
                                  <label for="fakultas">Mata Kuliah</label>
                                
                                    <select name="id_pengampu" class="form-control" required>
                                        <option value="<?php echo $matkul2->id_pengampu;  ?>"><?php echo $matkul2->nama_matkul;  ?> Kelas <?php echo $matkul2->kelas;  ?></option>
                                         <?php foreach($pilih as $matkul):?>
                                        <option value="<?= $matkul['id_pengampu']; ?>"><?= $matkul['nama_matkul']; ?> Kelas <?= $matkul['kelas']; ?></option>
                                    <?php endforeach; ?>
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
