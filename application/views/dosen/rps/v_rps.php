<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <?php foreach($abcd as $abcd) :?>
                <h2>RPS</h2>
            </div>

            <div class="row clearfix">
                <!-- Basic Examples -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <!-- Modal -->
                <div class="modal fade" id="tambah" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('dosen/C_rps/insert_rumpun/'.$abcd->id_matkul.'/'.$abcd->id_pengampu); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Rumpun MK</label>
                                <input type="hidden" class="form-control" name="id_deskripsimk">
                                <input type="hidden" class="form-control" name="id_matkul" value="<?= $abcd->id_matkul ?>">
                                <input type="text" class="form-control" name="rumpun_mk" required  autocomplete="off">
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Deskripsi MK</label>
                                <textarea rows="3" class="form-control no-resize auto-growth" name="deskripsi_mk"></textarea>
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

            <!-- Modal -->
                <div class="modal fade" id="tambahkajian" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('dosen/C_rps/insert_kajian/'.$abcd->id_matkul.'/'.$abcd->id_pengampu); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Bahan Kajian</label>
                                <input type="hidden" class="form-control" name="id_bahan">
                                <input type="hidden" class="form-control" name="id_matkul" value="<?= $abcd->id_matkul ?>">
                                 <textarea rows="3" class="form-control no-resize auto-growth" name="bahan_kajian"></textarea>
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

            <!-- Modal -->
                <div class="modal fade" id="tambahutama" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('dosen/C_rps/insert_utama/'.$abcd->id_matkul.'/'.$abcd->id_pengampu); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Pustaka Utama</label>
                                <input type="hidden" class="form-control" name="id_utama">
                                <input type="hidden" class="form-control" name="id_matkul" value="<?= $abcd->id_matkul ?>">
                                 <textarea rows="3" class="form-control no-resize auto-growth" name="pustaka_utama"></textarea>
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

            <!-- Modal -->
                <div class="modal fade" id="tambahpendukung" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('dosen/C_rps/insert_pendukung/'.$abcd->id_matkul.'/'.$abcd->id_pengampu); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Pustaka Pendukung</label>
                                <input type="hidden" class="form-control" name="id_pendukung">
                                <input type="hidden" class="form-control" name="id_matkul" value="<?= $abcd->id_matkul ?>">
                                 <textarea rows="3" class="form-control no-resize auto-growth" name="pustaka_pendukung"></textarea>
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


            <!-- Modal -->
                <div class="modal fade" id="tambahsyarat" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('dosen/C_rps/insert_syarat/'.$abcd->id_matkul.'/'.$abcd->id_pengampu); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Syarat</label>
                                <input type="hidden" class="form-control" name="id_syarat">
                                <input type="hidden" class="form-control" name="id_matkul" value="<?= $abcd->id_matkul ?>">
                                 <textarea rows="3" class="form-control no-resize auto-growth" name="syarat"></textarea>
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

            <!-- Modal -->
                <div class="modal fade" id="tambahmedia" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('dosen/C_rps/insert_media/'.$abcd->id_matkul.'/'.$abcd->id_pengampu); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Media Pembelajaran</label>
                                <input type="hidden" class="form-control" name="id_media">
                                <input type="hidden" class="form-control" name="id_matkul" value="<?= $abcd->id_matkul ?>">
                                 <textarea rows="2" class="form-control no-resize auto-growth" name="media"></textarea>
                              </div>

                               <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Jenis Media Pembelajaran</label>
                                <select name="jenis_media" class="form-control" required>
                                        <option value="">-- Pilih Jenis --</option>
                                        <option value="Perangkat Keras">Perangkat Keras</option>
                                        <option value="Perangkat Lunak">Perangkat Lunak</option>
                    
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

            <!-- Modal -->
                <div class="modal fade" id="tambahdetail" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('dosen/C_rps/insert_detail/'.$abcd->id_matkul.'/'.$abcd->id_pengampu); ?>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Minggu</label>
                                <input type="hidden" class="form-control" name="id_detailrps">
                                <input type="hidden" class="form-control" name="id_matkul" value="<?= $abcd->id_matkul ?>">
                                 <textarea rows="2" class="form-control no-resize auto-growth" name="minggu"></textarea>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Subcpmk</label>
                                <select name="id_subcpmk" class="form-control">
                                        <option value="">-- Pilih Subcpmk --</option>

                                         <?php foreach($subcpmk2 as $subcpmk2):?>
                                        <option value="<?= $subcpmk2['id_subcpmk']; ?>"><?= $subcpmk2['subcpmk']; ?></option>
                                    <?php endforeach; ?>
                                    </select>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Indikator Penilaian</label>
                                 <textarea rows="2" class="form-control no-resize auto-growth" name="indikator"></textarea>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kriteria & Bentuk Penilaian</label>
                                 <textarea rows="2" class="form-control no-resize auto-growth" name="kriteria"></textarea>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Bentuk Pembelajaan Luring</label>
                                 <textarea rows="2" class="form-control no-resize auto-growth" name="luring"></textarea>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Bentuk Pembelajaran Daring</label>
                                 <textarea rows="2" class="form-control no-resize auto-growth" name="daring"></textarea>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Materi Pembelajaran</label>
                                 <textarea rows="5" class="form-control no-resize auto-growth" name="materi"></textarea>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Bobot Penilaian</label>
                                 <input type="text" class="form-control" name="bobot">
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
            <?php foreach($data4 as $data4):?>

             <div class="modal fade" id="ubah" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('dosen/C_rps/ubah_rumpun/'.$abcd->id_matkul.'/'.$abcd->id_pengampu); ?>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Rumpun MK</label>
                                <input type="hidden" class="form-control" name="id_deskripsimk" value="<?php echo $data4['id_deskripsimk'];  ?>">
                                <input type="text" class="form-control" name="rumpun_mk"  value="<?php echo $data4['rumpun_mk'];  ?>" required  autocomplete="off">
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Deskripsi MK</label>
                                <textarea rows="3" class="form-control no-resize auto-growth" name="deskripsi_mk"><?php echo $data4['deskripsi_mk'];  ?></textarea>
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

 <!-- Modal Ubah-------------------------------------------------------------------------------------------------------------------------------- -->
            <?php foreach($media2 as $media2):?>

             <div class="modal fade" id="ubahmedia<?php echo $media2['id_media']  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('dosen/C_rps/ubah_media/'.$abcd->id_matkul.'/'.$abcd->id_pengampu); ?>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Media Pembelajaran</label>
                                <input type="hidden" class="form-control" name="id_media" value="<?php echo $media2['id_media'];  ?>">
                                <textarea rows="2" class="form-control no-resize auto-growth" name="media"><?php echo $media2['media'];  ?></textarea>
                              </div> 

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Jenis Media Pembelajaran</label>
                                <select name="jenis_media" class="form-control" required>
                                        <option value="<?php echo $media2['jenis_media'];  ?>"><?php echo $media2['jenis_media'];  ?></option>
                                        <option value="Perangkat Keras">Perangkat Keras</option>
                                        <option value="Perangkat Lunak">Perangkat Lunak</option>
                    
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


 <!-- Modal Ubah-------------------------------------------------------------------------------------------------------------------------------- -->
            <?php foreach($kajian2 as $kajian2):?>

             <div class="modal fade" id="ubahkajian<?php echo $kajian2['id_bahan']  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('dosen/C_rps/ubah_kajian/'.$abcd->id_matkul.'/'.$abcd->id_pengampu); ?>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Bahan Kajian</label>
                                <input type="hidden" class="form-control" name="id_bahan" value="<?php echo $kajian2['id_bahan'];  ?>">
                                <textarea rows="3" class="form-control no-resize auto-growth" name="bahan_kajian"><?php echo $kajian2['bahan_kajian'];  ?></textarea>
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

 <!-- Modal Ubah-------------------------------------------------------------------------------------------------------------------------------- -->
            <?php foreach($utama2 as $utama2):?>

             <div class="modal fade" id="ubahutama<?php echo $utama2['id_utama'];  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('dosen/C_rps/ubah_utama/'.$abcd->id_matkul.'/'.$abcd->id_pengampu); ?>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Pustaka Utama</label>
                                <input type="hidden" class="form-control" name="id_utama" value="<?php echo $utama2['id_utama'];  ?>">
                                <textarea rows="3" class="form-control no-resize auto-growth" name="pustaka_utama"><?php echo $utama2['pustaka_utama'];  ?></textarea>
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

 <!-- Modal Ubah-------------------------------------------------------------------------------------------------------------------------------- -->
            <?php foreach($pendukung2 as $pendukung2):?>

             <div class="modal fade" id="ubahpendukung<?php echo $pendukung2['id_pendukung'];  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('dosen/C_rps/ubah_pendukung/'.$abcd->id_matkul.'/'.$abcd->id_pengampu); ?>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Pustaka Pendukung</label>
                                <input type="hidden" class="form-control" name="id_pendukung" value="<?php echo $pendukung2['id_pendukung'];  ?>">
                                <textarea rows="3" class="form-control no-resize auto-growth" name="pustaka_pendukung"><?php echo $pendukung2['pustaka_pendukung'];  ?></textarea>
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

 <!-- Modal Ubah-------------------------------------------------------------------------------------------------------------------------------- -->
            <?php foreach($syarat2 as $syarat2):?>

             <div class="modal fade" id="ubahsyarat<?php echo $syarat2['id_syarat'] ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('dosen/C_rps/ubah_syarat/'.$abcd->id_matkul.'/'.$abcd->id_pengampu); ?>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Syarat</label>
                                <input type="hidden" class="form-control" name="id_syarat" value="<?php echo $syarat2['id_syarat'];  ?>">
                                <textarea rows="3" class="form-control no-resize auto-growth" name="syarat"><?php echo $syarat2['syarat'];  ?></textarea>
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

 
 <!-- Modal Ubah-------------------------------------------------------------------------------------------------------------------------------- -->
            <?php foreach($detail2 as $detail2):?>

             <div class="modal fade" id="ubahdetail<?php echo $detail2['id_detailrps'];  ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                           <?php echo form_open_multipart('dosen/C_rps/ubah_detail/'.$abcd->id_matkul.'/'.$abcd->id_pengampu); ?>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Minggu</label>
                                <input type="hidden" class="form-control" name="id_detailrps" value="<?php echo $detail2['id_detailrps'];  ?>">
                                <textarea rows="2" class="form-control no-resize auto-growth" name="minggu"><?php echo $detail2['minggu'];  ?></textarea>
                              </div>  

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Subcpmk</label>
                                <select class='form-control' id='id_subcpmk' name="id_subcpmk">
                                        <option value='<?php echo $detail2['id_subcpmk']; ?>'><?php echo $detail2['subcpmk']; ?></option>
                                        
                                        <?php 
                                        foreach ($subcpmk as $subcpmk2) {
                                        echo "<option value='$subcpmk2->id_subcpmk'>$subcpmk2->subcpmk</option>";
                                        }
                                        ?>
                                    </select>
                              </div> 

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Indikator Penilaian</label>
                                <textarea rows="2" class="form-control no-resize auto-growth" name="indikator"><?php echo $detail2['indikator'];  ?></textarea>
                              </div>  

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kriteria & Bentuk Penilaian</label>
                                <textarea rows="2" class="form-control no-resize auto-growth" name="kriteria"><?php echo $detail2['kriteria'];  ?></textarea>
                              </div>  

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Bentuk Pembelajaran Luring</label>
                                <textarea rows="2" class="form-control no-resize auto-growth" name="luring"><?php echo $detail2['luring'];  ?></textarea>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Bentuk Pembellajaran Daring</label>
                                <textarea rows="2" class="form-control no-resize auto-growth" name="daring"><?php echo $detail2['daring'];  ?></textarea>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Materi Pembelajaran</label>
                                <textarea rows="5" class="form-control no-resize auto-growth" name="materi"><?php echo $detail2['materi'];  ?></textarea>
                              </div>

                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Bobot Penilaian</label>
                                <input type="text" class="form-control" name="bobot" value="<?php echo $detail2['bobot'];  ?>">
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

                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>

                 <?php foreach($print as $print):?>
                               Tentang Mata Kuliah     <?php echo anchor('dosen/C_rps/print/'.$print['id_matkul'].'/'.$print['id_pengampu'] ,'<button class="btn btn-sm btn-primary mb-3" target="_blank" ><i class="material-icons">print</i></button>')?>
                               <a class="btn btn-success" href="<?php echo base_url('admin/C_rps/export/'. $print['id_matkul']) ?>" target="_blank">Export Excel</a>
                  <?php endforeach;?>
                  
                            </h2>

                        </div>
                        <div class="body">
                            <table class="table">
                                <?php 
                                    $sks = $data->sks_teori + $data->sks_praktek;
                                    $matkul = $data->id_matkul;
        
                                    ?>
                                    <thead>
                                        <tr>
                                            <th >Prodi MK</th>
                                            <th>: <?= $data->nama ?> <?= $data->nama_fakultas?></th>
                                        </tr>
                                        <tr>
                                            <th >Kode MK</th>
                                            <th>: <?= $data->kode_matkul ?></th>
                                        </tr>
                                        <tr>
                                            <th >Nama MK</th>
                                            <th>: <?= $data->nama_matkul ?></th>
                                        </tr>
                                        <tr>
                                            <th >SKS MK</th>
                                            <th>: <?= $sks ?></th>
                                        </tr>
                                        <tr>
                                            <th >Semester MK</th>
                                            <th>: <?= $data->semester ?></th>
                                        </tr>
                                        <tr>
                                            <th >Kategori MK</th>
                                            <th>: <?= $data->jenis_mk ?></th>
                                        </tr>
                                        <?php foreach($data2 as $data2):?>
                                        <tr>
                                            <th >Dosen Pengampu MK</th>
                                            <th>: <?= $data2->nama_dosen; ?> <?= $data2->id_matkul; ?></th>
                                        </tr>
                                        <?php endforeach ?>

                                    </thead>
                            </table>
                            <div class="header bg-grey">
                            <h2>
                               Rumpun dan Deskripsi Singkat MK  
                               <?php 
                               //echo"$data->id_matkul";
                                $matkul = $data->id_matkul;
                                $sql = $this->db->query("SELECT id_matkul FROM deskripsi_mk where id_matkul= '$matkul'");
                                $cek_user = $sql->num_rows();
                            if($cek_user){ 
                                echo '<button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#ubah"><i class="material-icons">create</i></button>';
                            } 
                            if(!$cek_user){   
                               echo '<button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#tambah"><i class="material-icons">queue</i></button>';
                             } 
                             
                                ?>     
                            </h2>
                            </div>
                            <table class="table">
                                    <thead>
                                        <?php foreach ($data3 as $data3) : ?>
                                        <tr>
                                            <th >Rumpun MK</th>
                                            <th>: <?= $data3->rumpun_mk?></th>
                                        </tr>
                                        <tr>
                                            <th >Deskripsi MK</th>
                                            <th>: <?= $data3->deskripsi_mk ?></th>
                                        </tr>
                                    <?php endforeach; ?>
                                    </thead>
                            </table>

                        
                        </div>
                    </div>
                </div>

                <!-- #END# Basic Examples -->
                <!-- With Icons -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                                CPL Prodi yang dibebankan pada MK <?php echo anchor('dosen/C_rps/insert_cpl/'.$abcd->id_matkul.'/'.$abcd->id_pengampu,'<button class="btn btn-sm btn-primary mb-3"><i class="material-icons">queue</i></button>')?>
                            </h2>

                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Aspek</th>
                                            <th>Kode CPL</th>
                                            <th>CPL</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                       
                                        foreach($cplmk as $cpl):?>
                                        <tr>
                                           <td><?= $cpl->nama_aspek?></td>
                                           <td><?= $cpl->kode_cpl?></td>
                                           <td><?= $cpl->cpl?></td>

                                                <td>
                                                    <a href="<?php echo base_url('dosen/C_rps/update/'.$cpl->id_matkul .'/'.$cpl->id_cplmk.'/'.$abcd->id_pengampu) ?>" name="id_cplmk" value="<?= $cpl->id_cplmk?>"><i class="material-icons">edit</i></a>
                                                </td>

                                                <td>
                                                    <a href="<?php echo base_url('dosen/C_rps/delete/'.$cpl->id_matkul .'/'.$cpl->id_cplmk.'/'.$abcd->id_pengampu) ?>" name="id_cplmk" value="<?= $cpl->id_cplmk?>"><i class="material-icons">delete_sweep</i></a>
                                                </td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                <!-- #END# With Icons -->
            </div>

            <div class="row clearfix">
                <!-- Basic Examples -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                               CPMK     <?php echo anchor('dosen/C_rps/insert_cpmk/'.$abcd->id_matkul.'/'.$abcd->id_pengampu,'<button class="btn btn-sm btn-primary mb-3"><i class="material-icons">queue</i></button>')?>                   
                            </h2>

                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Kode CPMK</th>
                                            <th>Deskripsi</th>
                                            <th>CPL Prodi</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                       
                                        foreach($cpmk as $cpmk):?>
                                            
                                        <tr>
                                           <td><?= $cpmk->kode_cpmk?></td>
                                           <td><?= $cpmk->cpmk?></td>
                                           <td><?= $cpmk->kode_cpl?></td>

                                                <td>
                                                    <a href="<?php echo base_url('dosen/C_rps/update_cpmk/'.$cpmk->id_matkul .'/'.$cpmk->id_cpmk.'/'.$abcd->id_pengampu) ?>" name="id_cpmk" value="<?= $cpmk->id_cpmk?>"><i class="material-icons">edit</i></a>
                                                </td>

                                                <td>
                                                    <a href="<?php echo base_url('dosen/C_rps/delete_cpmk/'.$cpmk->id_matkul .'/'.$cpmk->id_cpmk.'/'.$abcd->id_pengampu) ?>" name="id_cpmk" value="<?= $cpmk->id_cpmk?>"><i class="material-icons">delete_sweep</i></a>
                                                </td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                               
                       </div>
                    </div>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                                Sub-CPMK <?php echo anchor('dosen/C_rps/insert_subcpmk/'.$abcd->id_matkul.'/'.$abcd->id_pengampu,'<button class="btn btn-sm btn-primary mb-3"><i class="material-icons">queue</i></button>')?>

                            </h2>

                        </div>
                        <div class="body">
                            <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Kode Sub-CPMK</th>
                                            <th>Deskripsi</th>
                                            <th>CPMK</th>
                                            <th>CPL Prodi</th>
                                            <th colspan="2">Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($subcpmk as $subcpmk):?>
                                        <tr>
                                           <td><?= $subcpmk->kode_subcpmk?></td>
                                           <td><?= $subcpmk->subcpmk?></td>
                                           <td><?= $subcpmk->kode_baru?></td>
                                           <td><?= $subcpmk->kode_cpl?></td>

                                                <td>
                                                    <a href="<?php echo base_url('dosen/C_rps/update_subcpmk/'.$subcpmk->id_matkul .'/'.$subcpmk->id_subcpmk.'/'.$abcd->id_pengampu) ?>" name="id_subcpmk" value="<?= $subcpmk->id_subcpmk?>"><i class="material-icons">edit</i></a>
                                                </td>

                                                <td>
                                                    <a href="<?php echo base_url('dosen/C_rps/delete_subcpmk/'.$subcpmk->id_matkul .'/'.$subcpmk->id_subcpmk.'/'.$abcd->id_pengampu) ?>" name="id_subcpmk" value="<?= $subcpmk->id_subcpmk?>"><i class="material-icons">delete_sweep</i></a>
                                                </td>
                                           
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                </div>

                <div class="row clearfix">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                                Bahan Kajian Materi Pembelajaran <button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#tambahkajian"><i class="material-icons">queue</i></button>

                            </h2>

                        </div>
                        <div class="body">
                            <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>No</th>
                                            <th>Bahan Kajian</th>
                                            <th colspan="2">Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                       
                                        foreach($kajian as $kajian):?>
                                        <tr>
                                           <td><?= $no++;?></td>
                                           <td><?= $kajian->bahan_kajian?></td>

                                                <td>
                                                    <button type="button" class="btn btn-default  waves-float" data-toggle="modal" data-target="#ubahkajian<?php echo $kajian->id_bahan ?>"><i class="material-icons">create</i></button>
                                                </td>

                                                <td>
                                                    <a href="<?php echo base_url('dosen/C_rps/delete_kajian/'.$kajian->id_matkul .'/'.$kajian->id_bahan.'/'.$abcd->id_pengampu) ?>" name="id_bahan" value="<?= $kajian->id_bahan?>"><i class="material-icons">delete_sweep</i></a>
                                                </td>
                                           
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                                Syarat Mata Kuliah <button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#tambahsyarat"><i class="material-icons">queue</i></button>

                            </h2>

                        </div>
                        <div class="body">
                            <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>No</th>
                                            <th>Syarat</th>
                                            <th colspan="2">Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                       
                                        foreach($syarat as $syarat):?>
                                        <tr>
                                           <td><?= $no++;?></td>
                                           <td><?= $syarat->syarat?></td>

                                                <td>
                                                    <button type="button" class="btn btn-default  waves-float" data-toggle="modal" data-target="#ubahsyarat<?php echo $syarat->id_syarat ?>"><i class="material-icons">create</i></button>
                                                </td>

                                                <td>
                                                    <a href="<?php echo base_url('dosen/C_rps/delete_syarat/'.$syarat->id_matkul .'/'.$syarat->id_syarat.'/'.$abcd->id_pengampu) ?>" name="id_syarat" value="<?= $syarat->id_syarat?>"><i class="material-icons">delete_sweep</i></a>
                                                </td>
                                           
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                                Pustaka Pendukung <button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#tambahpendukung"><i class="material-icons">queue</i></button>

                            </h2>

                        </div>
                        <div class="body">
                            <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>No</th>
                                            <th>Pustaka Pendukung</th>
                                            <th colspan="2">Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                       
                                        foreach($pendukung as $pendukung):?>
                                        <tr>
                                           <td><?= $no++;?></td>
                                           <td><?= $pendukung->pustaka_pendukung?></td>

                                                <td>
                                                    <button type="button" class="btn btn-default  waves-float" data-toggle="modal" data-target="#ubahpendukung<?php echo $pendukung->id_pendukung ?>"><i class="material-icons">create</i></button>
                                                </td>

                                                <td>
                                                    <a href="<?php echo base_url('dosen/C_rps/delete_pendukung/'.$pendukung->id_matkul .'/'.$pendukung->id_pendukung.'/'.$abcd->id_pengampu) ?>" name="id_pendukung" value="<?= $pendukung->id_pendukung?>"><i class="material-icons">delete_sweep</i></a>
                                                </td>
                                           
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                                Pustaka Utama <button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#tambahutama"><i class="material-icons">queue</i></button>

                            </h2>

                        </div>
                        <div class="body">
                            <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>No</th>
                                            <th>Pustaka Utama</th>
                                            <th colspan="2">Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                       
                                        foreach($utama as $utama):?>
                                        <tr>
                                           <td><?= $no++;?></td>
                                           <td><?= $utama->pustaka_utama?></td>

                                                <td>
                                                    <button type="button" class="btn btn-default  waves-float" data-toggle="modal" data-target="#ubahutama<?php echo $utama->id_utama ?>"><i class="material-icons">create</i></button>
                                                </td>

                                                <td>
                                                    <a href="<?php echo base_url('dosen/C_rps/delete_utama/'.$utama->id_matkul .'/'.$utama->id_utama.'/'.$abcd->id_pengampu) ?>" name="id_utama" value="<?= $utama->id_utama?>"><i class="material-icons">delete_sweep</i></a>
                                                </td>
                                           
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                
            </div>


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                                Media Pembelajaran <button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#tambahmedia"><i class="material-icons">queue</i></button>

                            </h2>

                        </div>
                        <div class="body">
                            <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>No</th>
                                            <th>Media Pembelajaran</th>
                                            <th>Jenis</th>
                                            <th colspan="2">Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                       
                                        foreach($media as $media):?>
                                        <tr>
                                           <td><?= $no++;?></td>
                                           <td><?= $media->media?></td>
                                           <td><?= $media->jenis_media?></td>

                                                <td>
                                                    <button type="button" class="btn btn-default  waves-float" data-toggle="modal" data-target="#ubahmedia<?php echo $media->id_media ?>"><i class="material-icons">create</i></button>
                                                </td>

                                                <td>
                                                    <a href="<?php echo base_url('dosen/C_rps/delete_media/'.$media->id_matkul .'/'.$media->id_media.'/'.$abcd->id_pengampu) ?>" name="id_media" value="<?= $media->id_media?>"><i class="material-icons">delete_sweep</i></a>
                                                </td>
                                           
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                
            </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                                Detail RPS <button type="button" class="btn btn-info btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#tambahdetail"><i class="material-icons">queue</i></button>

                            </h2>

                        </div>
                        <div class="body">
                            <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Minggu</th>
                                            <th>Subcpmk</th>
                                            <th>Indikator</th>
                                            <th>Kriteria & Bentuk</th>
                                            <th>Luring</th>
                                            <th>Daring</th>
                                            <th>Materi Pembelajaran</th>
                                            <th width="40px">Bobot</th>
                                            <th colspan="2">Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($detail as $detail):?>
                                        <tr>
                                           <td><?= $detail->minggu?></td>
                                           <td><?= $detail->subcpmk?></td>
                                           <td><?= $detail->indikator?></td>
                                           <td><?= $detail->kriteria?></td>
                                           <td><?= $detail->luring?></td>
                                           <td><?= $detail->daring?></td>
                                           <td><?= $detail->materi?></td>
                                           <td><?= $detail->bobot?></td>

                                                <td>
                                                    <button type="button" class="btn btn-default  waves-float" data-toggle="modal" data-target="#ubahdetail<?php echo $detail->id_detailrps ?>"><i class="material-icons">create</i></button>
                                                </td>

                                                <td>
                                                    <a href="<?php echo base_url('dosen/C_rps/delete_detail/'.$detail->id_matkul .'/'.$detail->id_detailrps.'/'.$abcd->id_pengampu) ?>" name="id_detailrps" value="<?= $detail->id_detailrps?>"><i class="material-icons">delete_sweep</i></a>
                                                </td>
                                           
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