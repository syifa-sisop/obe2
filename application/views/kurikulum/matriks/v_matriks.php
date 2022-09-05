<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Matriks Kurikulum</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               <?php foreach($setting as $data) :?>
                                <i class="material-icons">library_books</i> Matriks Kurikulum Prodi <?php echo $data->nama; ?>
                            
                            </h2>
        
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">home</i> CPL & Profil
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">face</i> SKL & BK
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">email</i> CPL & Mata Kuliah
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#settings_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">settings</i> BK & Mata Kuliah
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                    <b><!--<a href="<?php echo base_url('kurikulum/C_matriks/insert') ?>"><button type="button" class="btn btn-primary"><i class="material-icons">queue</i></button></a>-->

                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_profil"><i class="material-icons">queue</i></button>

                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus_profil"><i class="material-icons">delete_sweep</i></button>

                                    <a class="btn btn-warning" href="<?php echo base_url('kurikulum/C_matriks/pdf_profil') ?>" target="_blank"><i class="material-icons">insert_drive_file</i> Export (Pdf)</a>

                                    

                                    <br></b><br>
                                    <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <?php 
                                        //$id_lulusan = $data->id_lulusan;
                                        $sql = $this->db->query("SELECT id_lulusan FROM profil_cpl where id_lulusan = 17");
                                        $cek_user = $sql->num_rows();

                                            $query = $this->db->query("SELECT * FROM profil_cpl where id_lulusan = 15")->row();
                                            //echo $query->id_lulusan;
                                    ?>
                                    
                                    <thead>
                                        <tr>
                                    
                                            <th width="400px"></th>
                                            <?php 
                                            foreach($profil2 as $data3):
                                          
                                            ?>
                                            <th><?= $data3['kode_lulusan']?> <br> <?= $data3['profil']?></th>
                                            <?php endforeach;?>

                                        </tr>
                                        
                                    </thead>

                                    <tbody>
                                        <?php 
                                        $i = 0; $j = 0;
                                        foreach($cpll as $cpl4): 
                                        $i++;
                                        ?>
                                           
                                        <tr>
                                           
                                           <td class="align-justify"><?= $cpl4->kode_cpl?>. <?= $cpl4->cpl?></td>     
                                           <?php foreach ($profil as $key => $id) { 
                                            $j++;

                                            ?>
                                           <td>
                                            <input type="checkbox" id="md_checkbox_33 <?= $i; ?><?= $j; ?>"  />
                                            <label for="md_checkbox_33 <?=$i; ?><?= $j;?>"></label>
                                            <script>
                                                <?php 
                                                    foreach($profilcpl as $pcpl){
                                                ?>
                                                        console.log("<?=$pcpl->id_cpl;?>")
                                                        if(<?= $id->id_lulusan?> == <?=$pcpl->id_lulusan;?>){
                                                            if(<?= $cpl4->id_cpl?> == <?=$pcpl->id_cpl;?>){
                                                                document.getElementById('md_checkbox_33 <?= $i; ?><?= $j; ?>').checked = true;
                                                            }
                                                        }
                                                <?php 
                                                    }
                                                ?>
                                            </script>
                                            <?php } ?>
                                           </td>
                                            
                                           
                                        </tr>  
                                        <?php endforeach;?> 
                                                                                
                                    </tbody>
                                </table>
                                    </div>
                                </div>


                                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_kajian"><i class="material-icons">queue</i></button>

                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus_kajian"><i class="material-icons">delete_sweep</i></button>

                                    <a class="btn btn-warning" href="<?php echo base_url('kurikulum/C_matriks/pdf_kajian') ?>" target="_blank"><i class="material-icons">insert_drive_file</i> Export (Pdf)</a>

                                    

                                    <br></b><br>

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                    
                                            <th width="400px"></th>
                                            <?php 
                                            foreach($kajian as $kajian):
                                          
                                            ?>
                                            <th><?= $kajian->nama_kajian?></th>
                                            <?php endforeach;?>

                                        </tr>

                                        
                                    </thead>

                                    <tbody>

                                         <?php 
                                        $i = 0; $j = 0;
                                        foreach($skl_kajian as $skl_kajian): 
                                        $i++;
                                        ?>
                                           
                                        <tr>
                                           <td class="align-justify"><?= $skl_kajian->kode_skl?></td>  
                                           <?php foreach ($kajian2 as $key => $value) { 
                                            $j++;
                                            ?> 
                                            
                                           <td>
                                            <input type="checkbox" id="md_checkbox_31 <?= $i; ?><?= $j; ?>"  />
                                            <label for="md_checkbox_31 <?=$i; ?><?= $j;?>"></label>
                                            <script>
                                                <?php 
                                                    foreach($kajianskl as $kcpl){
                                                ?>
                                                        console.log("<?=$kcpl->id_skl;?>")
                                                        if(<?= $value['id_kajian']?> == <?=$kcpl->id_kajian;?>){
                                                            if(<?= $skl_kajian->id_skl?> == <?=$kcpl->id_skl;?>){
                                                                document.getElementById('md_checkbox_31 <?= $i; ?><?= $j; ?>').checked = true;
                                                            }
                                                        }
                                                <?php 
                                                    }
                                                ?>
                                            </script>
                                            <?php } ?>
                                           </td>

                                           
                                        </tr>  
                                        
                                           <?php endforeach;?>   
                                                                          
                                    </tbody>
                                </table>
                                
                            </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                                    <a class="btn btn-warning" href="<?php echo base_url('kurikulum/C_matriks/pdf_matkul') ?>" target="_blank"><i class="material-icons">insert_drive_file</i> Export (Pdf)</a>

                                    
                                    <br></b><br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                    
                                            <th width="400px"></th>
                                            <?php 
                                            foreach($matkul as $matkul):
                                          
                                            ?>
                                            <th><?= $matkul->nama_matkul?></th>
                                            <?php endforeach;?>

                                        </tr>

                                        
                                    </thead>

                                    <tbody> 

                                         <?php 
                                        $i = 0; $j = 0;
                                        foreach($cpl_matkul as $cpl_mk): 
                                        $i++;
                                        ?>
                                           
                                        <tr>
                                           <td class="align-justify"><?= $cpl_mk->kode_cpl?></td>  
                                           <?php foreach ($matkul2 as $key => $matkull) { 
                                            $j++;
                                            ?> 

                                           <td>
                                            <input type="checkbox" id="md_checkbox_32 <?= $i; ?><?= $j; ?>"  />
                                            <label for="md_checkbox_32 <?=$i; ?><?= $j;?>"></label>
                                            <script>
                                                <?php 
                                                    foreach($matkulcpl as $mcpl){
                                                ?>
                                                        console.log("<?=$mcpl->id_cpl;?>")
                                                        if(<?= $matkull['id_matkul']?> == <?=$mcpl->id_matkul;?>){
                                                            if(<?= $cpl_mk->id_cpl?> == <?=$mcpl->id_cpl;?>){
                                                                document.getElementById('md_checkbox_32 <?= $i; ?><?= $j; ?>').checked = true;
                                                            }
                                                        }
                                                <?php 
                                                    }
                                                ?>
                                            </script>
                                            <?php } ?>
                                           </td>
                        
                                        </tr>  
                                        
                                           <?php endforeach;?>    
                                                                          
                                    </tbody>
                                </table>
                                
                            </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="settings_with_icon_title">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_kajianmk"><i class="material-icons">queue</i></button>

                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus_kajianmk"><i class="material-icons">delete_sweep</i></button>

                                    <a class="btn btn-warning" href="<?php echo base_url('kurikulum/C_matriks/pdf_kajianmk') ?>" target="_blank"><i class="material-icons">insert_drive_file</i> Export (Pdf)</a>

                                    

                                    <br></b><br>

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                    
                                            <th width="400px"></th>
                                            <?php 
                                            foreach($kajian2 as $kajian_new):
                                          
                                            ?>
                                            <th><?= $kajian_new['nama_kajian']?></th>
                                            <?php endforeach;?>

                                        </tr>

                                        
                                    </thead>

                                    <tbody>
                                        <?php 
                                        $i = 0; $j = 0;
                                        foreach($kajian_matkul as $kajian_mk): 
                                        $i++;
                                        ?>
                                           
                                        <tr>
                                           <td class="align-justify"><?= $kajian_mk->nama_matkul?></td>  
                                           <?php  foreach ($kajian2 as $key => $kajian_baru) { 
                                            $j++;
                                            ?> 

                                            <td>
                                            <input type="checkbox" id="md_checkbox_34 <?= $i; ?><?= $j; ?>"  />
                                            <label for="md_checkbox_34 <?=$i; ?><?= $j;?>"></label>
                                            <script>
                                                <?php 
                                                    foreach($matkulkajian as $mkajian){
                                                ?>
                                                        console.log("<?=$mkajian->id_matkul;?>")
                                                        if(<?= $kajian_baru['id_kajian']?> == <?=$mkajian->id_kajian;?>){
                                                            if(<?= $kajian_mk->id_matkul?> == <?=$mkajian->id_matkul;?>){
                                                                document.getElementById('md_checkbox_34 <?= $i; ?><?= $j; ?>').checked = true;
                                                            }
                                                        }
                                                <?php 
                                                    }
                                                ?>
                                            </script>
                                            <?php } ?>
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
                </div>
                <?php endforeach; ?>
            </div>
            <!-- #END# Tabs With Icon Title -->

            <!-- Modal -->
                <div class="modal fade" id="edit_profil" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Edit Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_matriks/insert'); ?>
                            
                                <form method="POST">
                                <label for="matkul">Profil Lulusan</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <input type="hidden" name="id_profil_cpl" id="id_profil_cpl">
                                         <input type="hidden" name="id_jurusan" id="id_jurusan" value="<?php echo $data->id_jurusan; ?>">
                                         

                                          <select name="id_lulusan" class="form-control" required>
                                                <option value="">-- Pilih Profil Lulusan --</option>
                                         <?php foreach($profil2 as $profil2):?>
                                                <option value="<?= $profil2['id_lulusan']; ?>"><?= $profil2['kode_lulusan']; ?> <?= $profil2['profil']; ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                    </div>
                                </div>

                                <label for="matkul">CPL</label>
                                <div class="form-group after-add-more" id="after-add-more">
                                    <?php 
                                    $no = 0;
                                    foreach($cpl as $cpl):
                                    $no++;
                                    ?>

                                        <input type="checkbox" class="filled-in" name="id_cpl[]" value="<?= $cpl['id_cpl']; ?>" id="md_checkbox_21 <?php echo $no; ?>">
                                        <label for="md_checkbox_21 <?php echo $no; ?>"><?= $cpl['kode_cpl']; ?>. <?= $cpl['cpl']; ?></label><br>

                                    <?php endforeach; ?>
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

            <!-- Modal Hapus Profil Lulusan-->
                <?php foreach($profil_cpl2 as $prof):?>

                <div class="modal fade " id="hapus_profil" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Hapus Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_matriks/delete'); ?>

                            <label for="matkul">Profil Lulusan</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         
                                          <select name="id_lulusan" class="form-control" required>
                                                <option value="">-- Pilih Profil Lulusan --</option>
                                         <?php foreach($profil as $pro):?>
                                                <option value="<?= $pro->id_lulusan; ?>"><?= $pro->kode_lulusan; ?> <?= $pro->profil; ?></option>

                                        <?php endforeach; ?>
                                    </select>

                                    </div>
                                </div>
                            
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

             <!-- Modal -->
                <div class="modal fade" id="edit_kajian" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Edit Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_matriks/insert_kajian'); ?>
                            
                                <form method="POST">
                                <label for="matkul">Bahan Kajian</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <input type="hidden" name="id_kajiancpl" id="id_kajiancpl">
                                         <input type="hidden" name="id_jurusan" id="id_jurusan" value="<?php echo $data->id_jurusan; ?>">
                                         <input type="hidden" name="id_user" id="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">

                                          <select name="id_kajian" data-live-search="true" class="form-control" required>
                                                <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- Pilih Bahan Kajian --</option>
                                         <?php foreach($kajian2 as $kajian2):?>
                                                <option value="<?= $kajian2['id_kajian']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $kajian2['nama_kajian']; ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                    </div>
                                </div>

                                <label for="matkul">SKL</label>
                                <div class="form-group after-add-more" id="after-add-more">
                                    <?php 
                                    $no = 0;
                                    foreach($skl as $cpll):
                                    $no++;
                                    ?>

                                        <input type="checkbox" class="filled-in" name="id_skl[]" value="<?= $cpll->id_skl; ?>" id="md_checkbox_22 <?php echo $no; ?>">
                                        <label for="md_checkbox_22 <?php echo $no; ?>"><?= $cpll->kode_skl; ?>. <?= $cpll->skl; ?></label><br>

                                    <?php endforeach; ?>
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

             <!-- Modal Hapus Kajian SKL-->

                <div class="modal fade " id="hapus_kajian" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Hapus Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_matriks/delete_kajian'); ?>

                            <label for="matkul">Bahan Kajian</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         
                                          <select name="id_kajian" class="form-control" required>
                                                <option value="">-- Pilih Bahan Kajian --</option>
                                         <?php foreach($kajian3 as $kaj):?>
                                                <option value="<?= $kaj->id_kajian; ?>"> <?= $kaj->nama_kajian; ?></option>

                                        <?php endforeach; ?>
                                    </select>

                                    </div>
                                </div>
                            
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


            <!-- Modal -->
                <div class="modal fade" id="edit_kajianmk" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Edit Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_matriks/insert_kajianmk'); ?>
                        
                                <form method="POST">
                                <label for="matkul">Bahan Kajian</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <input type="hidden" name="id_kajianmk" id="id_kajianmk">
                                         <input type="hidden" name="id_jurusan" id="id_jurusan" value="<?php echo $data->id_jurusan; ?>">
                                         

                                          <select name="id_matkul" data-live-search="true" class="form-control" required>
                                                <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- Pilih Mata Kuliah --</option>
                                         <?php foreach($matkul2 as $matkul_new):?>
                                                <option value="<?= $matkul_new['id_matkul']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $matkul_new['nama_matkul']; ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                    </div>
                                </div>

                                <label for="matkul">Bahan Kajian</label>
                                <div class="form-group after-add-more" id="after-add-more">
                                    <?php 
                                    $no = 0;
                                    foreach($kajian3 as $kajian_dt):
                                    $no++;
                                    ?>

                                        <input type="checkbox" class="filled-in" name="id_kajian[]" value="<?= $kajian_dt->id_kajian; ?>" id="md_checkbox_25 <?php echo $no; ?>">
                                        <label for="md_checkbox_25 <?php echo $no; ?>"><?= $kajian_dt->nama_kajian; ?></label><br>

                                    <?php endforeach; ?>
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

            <!-- Modal Hapus Kajian MK-->

                <div class="modal fade " id="hapus_kajianmk" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Hapus Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_matriks/delete_kajianmk'); ?>

                            <label for="matkul">Mata Kuliah</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         
                                          <select name="id_matkul" class="form-control" required>
                                                <option value="">-- Pilih Mata Kuliah --</option>
                                         <?php foreach($matkul2 as $kaj):?>
                                                <option value="<?= $kaj['id_matkul']; ?>"> <?= $kaj['nama_matkul']; ?></option>

                                        <?php endforeach; ?>
                                    </select>

                                    </div>
                                </div>
                            
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

        </div>
    </section>

