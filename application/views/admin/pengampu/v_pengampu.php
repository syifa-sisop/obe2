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
            <div class="card bg-brown"><p align="center">Data Pengampu Mata Kuliah Prodi <?= $data2->nama?> Tahun Ajaran <?= $data->tahun_ajaran?> Semester <?= $data->semester_ajaran?></p></div>

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
                                            <th>Koordinator MK</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                       
                                        foreach($pengampu as $pengampu):?>
                                        <tr>
                                           
                                            <td><?= $pengampu['nama']?></td>
                                            <td><?= $pengampu['nama_dosen']?></td>

                                            <?php 
                                                $dosen2 = $pengampu['nama_dosen2'];
                                                $sql = $this->db->query("SELECT nama_dosen FROM dosen where id_dosen = '$dosen2'");
                                               foreach ($sql->result() as $row)
                                                    { 
                                                            
                                                             echo "<td>" . $row->nama_dosen . "</td>";
                                                    }
                                             ?>

                                             <?php 
                                                $dosen3 = $pengampu['nama_dosen3'];
                                                $sql = $this->db->query("SELECT nama_dosen FROM dosen where id_dosen = '$dosen3'");
                                               foreach ($sql->result() as $row)
                                                    { 
                                                            
                                                             echo "<td>" . $row->nama_dosen . "</td>";
                                                    }
                                             ?>
                                            <td><?= $pengampu['nama_matkul']?></td>
                                            <td><?= $pengampu['kelas']?></td>
                                            <td><?= $pengampu['semester']?></td>    

                                            <?php 
                                                $koordinator = $pengampu['koordinator'];
                                                $sql = $this->db->query("SELECT nama_dosen FROM dosen where id_dosen = '$koordinator'");
                                               foreach ($sql->result() as $row)
                                                    { 
                                                            
                                                             echo "<td>" . $row->nama_dosen . "</td>";
                                                    }
                                             ?>           

                                                <td width="20px"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ubah<?php echo $pengampu['id_pengampu']  ?>"><i class="material-icons">edit</i></button></td>

                                                <td width="20px"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $pengampu['id_pengampu']  ?>"><i class="material-icons">delete_sweep</i></button></td>

                                                <!--<td width="20px"><?php echo anchor('admin/C_pengampu/delete/'.$pengampu['id_pengampu'].'/'.$data2->id_jurusan.'/'.$data->id_tahun, 
                                                '<div class="btn btn-sm btn-danger"><i class="material-icons">delete_sweep</i></div>')?></td>-->

                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                            <?php echo anchor('admin/C_pengampu/index/', '<button class="btn btn-sm btn-danger">Kembali</div>')?>
                        </div>
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
                            <?php echo form_open_multipart('admin/C_pengampu/insert/'.$data2->id_jurusan.'/'.$data->id_tahun); ?>
                            
                                <form>

                                 <br><label for="dosen">Nama Matkul</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         
                                    
                                    <select class="form-control" data-live-search="true" name="id_matkul" required>
                                        <option value="">&nbsp;&nbsp;&nbsp;-- Pilih Matkul --</option>
                                         <?php foreach($matkul as $matkul):?>
                                        <option value="<?= $matkul['id_matkul']; ?>"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $matkul['nama_matkul']; ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                    </div>
                                </div>    

                                <br><label for="dosen">Nama Dosen 1</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         
                                    <select name="id_dosen" class="form-control" data-live-search="true" required>
                                        <option value="">&nbsp;&nbsp;&nbsp;-- Pilih Dosen --</option>
                                         <?php foreach($dosen as $dosen):?>
                                        <option value="<?= $dosen->id_dosen; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $dosen->nama_dosen; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                    </div>
                                </div>       

                                <br><label for="dosen">Nama Dosen 2</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         
                                    <select name="nama_dosen2" class="form-control" data-live-search="true" required>
                                        <option value="">&nbsp;&nbsp;&nbsp;-- Pilih Dosen  --</option>
                                        <?php 
                                            $jurusan = $data2->id_jurusan;
                                                $sql = $this->db->query("SELECT nama_dosen, id_dosen FROM dosen where id_jurusan = '$jurusan'");
                                               foreach ($sql->result() as $row)
                                                    { 
                                                            
                                                            
                                                             echo '<option value="'.$row->id_dosen.'"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row->nama_dosen.'</option>';
                                                    }
                                             ?>
                                    </select>
                                    </div>
                                </div>       

                                <br><label for="dosen">Nama Dosen 3</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         
                                    <select name="nama_dosen3" class="form-control" data-live-search="true" required>
                                        <option value="">&nbsp;&nbsp;&nbsp;-- Pilih Dosen  --</option>
                                        <?php 
                                            $jurusan = $data2->id_jurusan;
                                                $sql = $this->db->query("SELECT nama_dosen, id_dosen FROM dosen where id_jurusan = '$jurusan'");
                                               foreach ($sql->result() as $row)
                                                    { 
                                                            
                                                            
                                                             echo '<option value="'.$row->id_dosen.'"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row->nama_dosen.'</option>';
                                                    }
                                             ?>
                                         
                                    </select>
                                    </div>
                                </div>             

                                <br><label for="dosen">Koordinator MK</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         
                                    <select name="koordinator" class="form-control" data-live-search="true" required>
                                        <option value="">&nbsp;&nbsp;&nbsp;-- Pilih Dosen --</option>
                                        <?php 
                                            $jurusan = $data2->id_jurusan;
                                                $sql = $this->db->query("SELECT nama_dosen, id_dosen FROM dosen where id_jurusan = '$jurusan'");
                                               foreach ($sql->result() as $row)
                                                    { 
                                                            
                                                            
                                                             echo '<option value="'.$row->id_dosen.'"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row->nama_dosen.'</option>';
                                                    }
                                             ?>
                                    </select>
                                    </div>
                                </div>          

                                <label for="password">Kelas</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="kelas" class="form-control"  autocomplete="off">
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
            <?php foreach($pengampu2 as $data):?>

             <div class="modal fade" id="ubah<?php echo $data->id_pengampu;  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('admin/C_pengampu/ubah/'.$data2->id_jurusan.'/'.$data->id_tahun); ?>

                              <br><label for="dosen">Nama Matkul</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         
                                    <select name="id_matkul" class="form-control" required>
                                        <option value="<?php echo $data->id_matkul;  ?>"><?php echo $data->nama_matkul;  ?></option>
                                         <?php foreach($matkul2 as $matkul):?>
                                        <option value="<?= $matkul->id_matkul; ?>"><?= $matkul->nama_matkul; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                    </div>
                                </div>          

                                <br><label for="dosen">Nama Dosen 1</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         
                                    <select name="id_dosen" class="form-control" data-live-search="true" required>
                                        <option value="<?php echo $data->id_dosen;  ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data->nama_dosen;  ?></option>
                                        <?php 
                                            $jurusan = $data2->id_jurusan;
                                                $sql = $this->db->query("SELECT nama_dosen, id_dosen FROM dosen where id_jurusan = '$jurusan'");
                                               foreach ($sql->result() as $row)
                                                    { 
                                                            
                                                            
                                                             echo '<option value="'.$row->id_dosen.'"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row->nama_dosen.'</option>';
                                                    }
                                             ?>
                                    </select>
                                    </div>
                                </div>       

                                <br><label for="dosen">Nama Dosen 2</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         
                                    <select name="nama_dosen2" class="form-control" data-live-search="true" required>
                                        <?php 
                                                $dosen_2 = $data->nama_dosen2;
                                                $sql = $this->db->query("SELECT nama_dosen, id_dosen FROM dosen where id_dosen = '$dosen_2'");
                                               foreach ($sql->result() as $row)
                                                    { 
                                                            
                                                             echo '<option value="'.$row->id_dosen.'"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row->nama_dosen.'</option>';
                                                    }
                                             ?>
                                        <?php 
                                            $jurusan = $data2->id_jurusan;
                                                $sql = $this->db->query("SELECT nama_dosen, id_dosen FROM dosen where id_jurusan = '$jurusan'");
                                               foreach ($sql->result() as $row)
                                                    { 
                                                            
                                                            
                                                             echo '<option value="'.$row->id_dosen.'"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row->nama_dosen.'</option>';
                                                    }
                                             ?>
                                    </select>
                                    </div>
                                </div>    

                                <br><label for="dosen">Nama Dosen 3</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         
                                    <select name="nama_dosen3" class="form-control" data-live-search="true" required>
                                        <?php 
                                                $dosen_3 = $data->nama_dosen3;
                                                $sql = $this->db->query("SELECT nama_dosen, id_dosen FROM dosen where id_dosen = '$dosen_3'");
                                               foreach ($sql->result() as $row)
                                                    { 
                                                            
                                                             echo '<option value="'.$row->id_dosen.'"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row->nama_dosen.'</option>';
                                                    }
                                             ?>
                                        <?php 
                                            $jurusan = $data2->id_jurusan;
                                                $sql = $this->db->query("SELECT nama_dosen, id_dosen FROM dosen where id_jurusan = '$jurusan'");
                                               foreach ($sql->result() as $row)
                                                    { 
                                                            
                                                            
                                                             echo '<option value="'.$row->id_dosen.'"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row->nama_dosen.'</option>';
                                                    }
                                             ?>
                                    </select>
                                    </div>
                                </div>              

                                <br><label for="dosen">Koordinator MK</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         
                                    <select name="koordinator" class="form-control" data-live-search="true" required>
                                        <?php 
                                                $koordinator = $data->koordinator;
                                                $sql = $this->db->query("SELECT nama_dosen, id_dosen FROM dosen where id_dosen = '$koordinator'");
                                               foreach ($sql->result() as $row)
                                                    { 
                                                            
                                                             echo '<option value="'.$row->id_dosen.'"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row->nama_dosen.'</option>';
                                                    }
                                             ?>
                                         <?php 
                                            $jurusan = $data2->id_jurusan;
                                                $sql = $this->db->query("SELECT nama_dosen, id_dosen FROM dosen where id_jurusan = '$jurusan'");
                                               foreach ($sql->result() as $row)
                                                    { 
                                                            
                                                            
                                                             echo '<option value="'.$row->id_dosen.'"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row->nama_dosen.'</option>';
                                                    }
                                             ?>
                                    </select>
                                    </div>
                                </div>          

                                <label for="password">Kelas</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="hidden" class="form-control" name="id_pengampu" value="<?php echo $data->id_pengampu;  ?>">
                                        <input type="text" name="kelas" class="form-control" value="<?php echo $data->kelas;  ?>"  autocomplete="off">
                                    </div>
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
<!-- Modal Hapus Pengampu-->
                <?php foreach($pengampu2 as $pengampu2):?>

                <div class="modal fade " id="hapus<?php echo $pengampu2->id_pengampu; ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Hapus Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('admin/C_pengampu/delete'.'/'.$pengampu2->id_pengampu.'/'.$pengampu2->id_jurusan.'/'.$pengampu2->id_tahun); ?>
                            
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
<script>
      $(".search").select2();
   </script>
