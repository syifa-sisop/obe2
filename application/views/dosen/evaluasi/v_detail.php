
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                
                <h2>Evaluasi RPS</h2>
            </div>
            <div class="row clearfix">
                <!-- Basic Examples -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<?php foreach($evaluasi3 as $evaluasi3):?>

                    <!-- Modal -->
                <div class="modal fade" id="tambah<?php echo $evaluasi3['id_user'];  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('dosen/C_evaluasimhs/nilai/'.$evaluasi3['id_matkul'] .'/'.$evaluasi3['id_user'].'/'.$evaluasi3['id_pengampu']); ?>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Minggu</label>
                                <select name="id_evaluasi" id="id_evaluasi" class="form-control" required>
                                        <option value="">-- Pilih Minggu --</option>
                                         <?php foreach($detail2 as $detail):?>
                                       <option value="<?= $detail['id_evaluasi']; ?>">Minggu ke-<?= $detail['minggu']; ?></option>

                                    <?php endforeach; ?>
                                    </select>
                              </div>

                              <div class="mb-3">
                              <label for="fakultas">Nilai</label>
                                <input type="hidden" name="id_evaluasimhs" id="id_evaluasimhs" >
                                <input type="hidden" name="id_matkul" id="id_matkul" value="<?php echo $evaluasi3['id_matkul'];  ?>">
                                <input type="hidden" name="id_user" id="id_user" value="<?php echo $evaluasi3['id_user'];  ?>">
                                <input type="text" class="form-control" name="nilai_mhs" required  autocomplete="off">
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
             

                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                               Evaluasi RPS <?php echo $evaluasi3['nama_mhs'];  ?> 

                                <button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#tambah<?php echo $evaluasi3['id_user'];  ?> "><i class="material-icons">queue</i></button>
                            </h2>
                                <?php endforeach;?>
                        </div>
                        <div class="body">
                            <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                        <tr>
                            
                                            <th>Minggu</th>
                                            <th>CPL</th>
                                            <th>Subcpmk</th>
                                            <th>Bentuk Asesment</th>
                                            <th>Bobot</th>
                                            <th>Nilai</th>
                                            <th>Bobot MHS</th>
                                            <th colspan="3">Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($evaluasi2 as $evaluasi2):?>
                                        <tr>
                                           <td><?= $evaluasi2->minggu?></td>
                                           <td><?= $evaluasi2->kode_cpl?></td>
                                           <td><?= $evaluasi2->subcpmk?></td>
                                           <td><?= $evaluasi2->asesmen?></td>
                                           <td><?= $evaluasi2->bobot?></td>
                                           <td><?= $evaluasi2->nilai_mhs?></td>
                                           <td><?= $evaluasi2->bobot_mhs?></td>

                                                <td>
                                                    <button type="button" class="btn btn-success  waves-float" data-toggle="modal" data-target="#hitung<?php echo $evaluasi2->id_evaluasimhs ?>">Hitung</button>
                                                </td>

                                                <td>
                                                    <button type="button" class="btn btn-warning  waves-float" data-toggle="modal" data-target="#ubah<?php echo $evaluasi2->id_evaluasimhs ?>"><i class="material-icons">create</i></button>
                                                </td>

                                                <td>
                                                    <a href="<?php echo base_url('dosen/C_evaluasimhs/delete/'.$evaluasi2->id_evaluasimhs.'/'.$evaluasi2->id_matkul .'/'. $evaluasi3['id_user'].'/'.
                                                    $evaluasi3['id_pengampu']) ?>" name="id_evaluasimhs" value="<?= $evaluasi2->id_evaluasimhs?>"><i class="material-icons">delete_sweep</i></a>
                                                </td>
                                           
                                        </tr>
                                                
                                         <?php endforeach;?>
                                    </tbody>

                                </table>
                                 <?php foreach($abcd as $abcd) :?>
                                <?php echo anchor('dosen/C_evaluasimhs/index/'.$abcd->id_matkul.'/'.$abcd->id_pengampu, '<button class="btn btn-sm btn-danger">Kembali</div>')?>

                                

                               
                        </div>
                    </div>

                </div>
            </div>

            <!-- Modal Ubah-------------------------------------------------------------------------------------------------------------------------------- -->
            <?php foreach($evaluasi5 as $eval):?>

             <div class="modal fade" id="hitung<?php echo $eval['id_evaluasimhs']  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('dosen/C_evaluasimhs/hitung/'.$evaluasi3['id_matkul'] .'/'.$evaluasi3['id_user'].'/'.$evaluasi3['id_pengampu']); ?>

                              <div class="mb-3">
                              <label for="fakultas">Nilai</label>
                                <input type="hidden" name="id_evaluasimhs" id="id_evaluasimhs" value="<?php echo $eval['id_evaluasimhs'];  ?>">
                                <input type="hidden" name="id_matkul" id="id_matkul" value="<?php echo $eval['id_matkul'];  ?>">
                                <input type="hidden" name="id_user" id="id_user" value="<?php echo $eval['id_user'];  ?>">
                                <input type="text" class="form-control" name="nilai_mhs" required  autocomplete="off" value="<?php echo $eval['nilai_mhs'];  ?>" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="fakultas">Bobot</label>
                                <input type="text" class="form-control" name="bobot" required  autocomplete="off" value="<?php echo $eval['bobot'];  ?>"readonly>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link waves-effect">Hitung</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
 <?php endforeach;?>
 

 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                               Total Bobot per CPL Yang dibebankan pada MK <?php foreach($cplmk as $cplmk) :?>

                                   
                                 <a href="<?php echo base_url('dosen/C_evaluasimhs/hitung_cpl/'. $cplmk->id_cplmk.'/'.$evaluasi3['id_user'].'/'.$evaluasi3['id_matkul'].'/'.$evaluasi3['id_pengampu']) ?>" name="id_cplmk" value="<?= $cplmk->id_cplmk?>" class="btn btn-sm btn-flat btn-success" ><?php echo $cplmk->kode_cpl ?></a>
                               

                            <?php endforeach; ?>
                            </h2>

                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Kode CPL</th>
                                            <th>Total CPL</th>
                                            <th>Total Bobot</th>
                                            <th>Hasil CPL</th>
                                            <th>Keterangan</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php foreach($bobot as $bobot):?>
                                        <tr>
                                        
                                           <td><?= $bobot->kode_cpl?></td>
                                           <td><?= $bobot->nilai_cpl?></td>
                                           <td><?= $bobot->total_bobot?></td>
                                           <td><?= $bobot->hasil_cpl?></td>
                                           <td><?= $bobot->ket_cpl?></td>
                                        
                                        </tr>
                                        <?php endforeach; ?>
                                        
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>

                <!-- Modal Ubah-------------------------------------------------------------------------------------------------------------------------------- -->
            <?php foreach($evaluasi4 as $evaluasi4):?>

             <div class="modal fade" id="ubah<?php echo $evaluasi4['id_evaluasimhs']  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('dosen/C_evaluasimhs/ubah/'.$evaluasi3['id_matkul'] .'/'.$evaluasi3['id_user'].'/'.$evaluasi3['id_pengampu']); ?>

                           <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Minggu</label>
                                <select name="id_evaluasi" class="form-control" required>
                                        <option value="<?= $evaluasi4['id_evaluasi']; ?>"><?= $evaluasi4['minggu']; ?> <?= $evaluasi4['subcpmk']; ?></option>
                                        <?php foreach($detail2 as $detail):?>
                                         <option value="<?= $detail['id_evaluasi']; ?>"><?= $detail['minggu']; ?> <?= $detail['subcpmk']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                              </div>


                              <div class="mb-3">
                              <label for="fakultas">Nilai</label>
                                <input type="hidden" name="id_evaluasimhs" id="id_evaluasimhs" value="<?php echo $evaluasi4['id_evaluasimhs'];  ?>">
                                <input type="hidden" name="id_matkul" id="id_matkul" value="<?php echo $evaluasi4['id_matkul'];  ?>">
                                <input type="hidden" name="id_user" id="id_user" value="<?php echo $evaluasi4['id_user'];  ?>">
                                <input type="text" class="form-control" name="nilai_mhs" required  autocomplete="off" value="<?php echo $evaluasi4['nilai_mhs'];  ?>">
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

            

 <?php endforeach;?>
        </div>
</section>