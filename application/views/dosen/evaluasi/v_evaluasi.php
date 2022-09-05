<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <?php foreach($abcd as $abcd) :?>
                <h2>Evaluasi RPS</h2>
            </div>
            <div class="row clearfix">
                <!-- Basic Examples -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                    <!-- Modal -->
                <div class="modal fade" id="tambah" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('dosen/C_evaluasi/insert/'.$abcd->id_matkul.'/'.$abcd->id_pengampu); ?>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Minggu</label>
                                <select name="id_detailrps" class="form-control" required>
                                        <option value="">-- Pilih Minggu --</option>
                                         <?php foreach($detail2 as $detail):?>
                                        <option value="<?= $detail['id_detailrps']; ?>">Minggu ke-<?= $detail['minggu']; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Bentuk Asesment</label>
                                <select name="asesmen" class="form-control" required>
                                        <option value="">-- Pilih --</option> 
                                        <option value="Tes">Tes</option>
                                        <option value="Non Tes">Non Tes</option>
                                    </select>
                              </div>


                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Detail Asesment</label>
                                <textarea rows="3" class="form-control no-resize auto-growth" name="detail_asesmen"></textarea>
                                <input type="hidden" class="form-control" name="id_matkul" value="<?= $abcd->id_matkul ?>">
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


            <!-- Modal Ubah-------------------------------------------------------------------------------------------------------------------------------- -->
            <?php foreach($evaluasi2 as $evaluasi2):?>

             <div class="modal fade" id="ubah<?php echo $evaluasi2['id_evaluasi']  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('dosen/C_evaluasi/ubah/'.$abcd->id_matkul.'/'.$abcd->id_pengampu); ?>

                           <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Minggu</label>
                                <select name="id_detailrps" class="form-control" required>
                                        <option value="<?= $evaluasi2['id_detailrps']; ?>"><?= $evaluasi2['minggu']; ?> <?= $evaluasi2['subcpmk']; ?></option>
                                        <?php foreach($detail2 as $detail):?>
                                         <option value="<?= $detail['id_detailrps']; ?>"><?= $detail['minggu']; ?> <?= $detail['subcpmk']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Bentuk Asesmen</label>
                                <select name="asesmen" class="form-control" required>
                                        <option value="<?= $evaluasi2['asesmen']; ?>"><?= $evaluasi2['asesmen']; ?></option>
                                        <option value="Tes">Tes</option>
                                        <option value="Non Tes">Non Tes</option>
                                    </select>
                              </div>


                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Detail Asesment</label>
                                <textarea rows="3" class="form-control no-resize auto-growth" name="detail_asesmen"><?= $evaluasi2['detail_asesmen']; ?></textarea>
                                <input type="hidden" class="form-control" name="id_evaluasi" value="<?php echo $evaluasi2['id_evaluasi'];  ?>">
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

 <!-- Modal Hapus Evaluasi -->
                 <?php foreach($evaluasi as $eval):?>

                <div class="modal fade " id="hapus_evaluasi<?php echo $eval->id_evaluasi; ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Hapus Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('dosen/C_evaluasi/delete/'.$eval->id_evaluasi.'/'.$eval->id_matkul.'/'.$abcd->id_pengampu); ?>
                            
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



                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                               Evaluasi RPS 

                               <button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#tambah"><i class="material-icons">queue</i></button>

                                <?php foreach($print as $print):?>

                                  <?php echo anchor('dosen/C_evaluasi/print/'.$print['id_matkul'].'/'.$abcd->id_pengampu,'<button class="btn btn-sm btn-primary mb-3" target="_blank" ><i class="material-icons">print</i></button>')?>

                                  <a class="btn btn-success" href="<?php echo base_url('dosen/C_evaluasi/export/'. $print['id_matkul']) ?>" target="_blank">Export Excel</a>
                  <?php endforeach;?>

                  
                            </h2>

                        </div>
                        <div class="body">
                            <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                        <tr>
                            
                                            <th>Minggu</th>
                                            <th>Subcpmk</th>
                                            <th>Bentuk Asesment</th>
                                            <th>Detail Asesment</th>
                                            <th>Bobot</th>
                                            <th colspan="2">Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($evaluasi as $evaluasi):?>
                                        <tr>
                                           <td><?= $evaluasi->minggu?></td>
                                           <td><?= $evaluasi->subcpmk?></td>
                                           <td><?= $evaluasi->asesmen?></td>
                                           <td><?= $evaluasi->detail_asesmen?></td>
                                           <td><?= $evaluasi->bobot?></td>

                                                <td>
                                                    <button type="button" class="btn btn-default  waves-float" data-toggle="modal" data-target="#ubah<?php echo $evaluasi->id_evaluasi ?>"><i class="material-icons">create</i></button>
                                                </td>

                                                <td>
                                                    <button type="button" class="btn btn-default  waves-float" data-toggle="modal" data-target="#hapus_evaluasi<?php echo $evaluasi->id_evaluasi ?>"><i class="material-icons">delete_sweep</i></button>
                                                </td>

                                                <!--<td>
                                                    <a href="<?php echo base_url('dosen/C_evaluasi/delete/'.$evaluasi->id_matkul .'/'.$evaluasi->id_evaluasi.'/'.$abcd->id_pengampu) ?>" name="id_evaluasi" value="<?= $evaluasi->id_evaluasi?>"><i class="material-icons">delete_sweep</i></a>
                                                </td>-->
                                           
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                        </div>
                    </div>

                </div>
            </div>

        <?php endforeach; ?>
        </div>
</section>