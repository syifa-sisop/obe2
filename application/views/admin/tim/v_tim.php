
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

                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah Data</button>-->
                            

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

                                                <!--<td width="20px"><?php echo anchor('admin/C_tim/delete/'.$tim['id_profil'].'/'.$data2->id_jurusan, 
                                                '<div class="btn btn-sm btn-danger"><i class="material-icons">delete_sweep</i></div>')?></td>-->

                                                <td width="20px"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $tim['id_profil']  ?>"><i class="material-icons">delete_sweep</i></button></td>

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

         <div class="modal fade" id="tambah" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('admin/C_tim/insert/'.$data2->id_jurusan); ?>
                            
                                <form>         

                                <br><label for="dosen">Nama Dosen</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         
                                    <select id='dosen'  name="id_dosen" class="form-control" required>
                                        <option value='0'>--pilih--</option>
                                        <?php 
                                        foreach ($dosen2 as $prov) {
                                        echo "<option value='$prov[id_dosen]'>$prov[nama_dosen]</option>";
                                        }
                                        ?>
                                    </select>
                                    </div>
                                </div>       

                                <br><label for="dosen">Email</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         
                                    <select class='form-control' id='email' name="email">
                                        <option value='0'>--Email--</option>
                                    </select>
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

            <!-- Modal Hapus -->
                 <?php foreach($tim2 as $tim2):?>

                <div class="modal fade " id="hapus<?php echo $tim2->id_profil; ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Hapus Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('admin/C_tim/delete/'.$tim2->id_profil.'/'.$tim2->id_user.'/'.$tim2->id_jurusan); ?>
                            
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