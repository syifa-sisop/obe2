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
                                        <i class="material-icons">face</i> CPL & BK
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

                                    <a class="btn btn-danger" href="<?php echo base_url('kurikulum/C_matriks/delete') ?>"><i class="material-icons">delete_sweep</i></a>

                                    <a class="btn btn-warning" href="<?php echo base_url('kurikulum/C_matriks/pdf_profil') ?>" target="_blank"><i class="material-icons">insert_drive_file</i> Export (Pdf)</a>

                                    <a class="btn btn-success" href="#" target="_blank"><i class="material-icons">insert_drive_file</i> Export (Excel)</a>

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

                                    <!-- <tbody>
                                        <?php 
                                        $no = 0;
                                        foreach($cpll as $cpl4): 
                                        $no++;
                                        ?>
                                           
                                        <tr>
                                           
                                           <td class="align-justify"><?= $cpl4->kode_cpl?>. <?= $cpl4->cpl?></td>     
                                           <?php foreach ($profil as $key => $id) { ?> 
                                           <td>

                                             <input type="checkbox" id="md_checkbox_33 <?php echo $no; ?>"  class="filled-in chk-col-red" 
                                            <?php   echo ($cpl4->id_lulusan == $id->id_lulusan  ? "checked" : '');?> onclick="return false;" /> 
                                            <input type="checkbox" id="md_checkbox_33<?php echo $no; ?>"  class="filled-in chk-col-red" onclick="return false;" />
                                            <label for="md_checkbox_33 <?php echo $no; ?>"></label><?php } ?>
                                           </td>
                                            <script>
                                                console.log("TEST")
                                                // $(document).ready(function() {
                                                    // $('#submit').click(function() {
                                                        // if ($('#male').is(":checked")) {
                                                        //     alert($('#male').val());
                                                        // }
                                                        if(<?= $cpl4->id_lulusan?> == ){
                                                            console.log("OKE")
                                                        }
                                                        test = document.getElementById('md_checkbox33<?php echo $no; ?>').value;
                                                        console.log(test)
                                                        console.log(<?php echo $no; ?>)
                                                        // else if ($('#female').is(":checked")) {
                                                        //     alert($('#female').val());
                                                        // }
                                                    // })
                                                // });
                                                // function check() {
                                                //     document.getElementById("myCheck").checked = true;
                                                // }
                                            </script>
                                           
                                        </tr>  
                                        <?php endforeach;?> 
                                                                                
                                    </tbody> -->

                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        foreach($cpll as $cpl4): 
                                        $no++;
                                        ?>
                                           
                                        <tr>
                                           <td class="align-justify"><?= $cpl4->kode_cpl?>. <?= $cpl4->cpl?></td>      
                                           <?php foreach ($profil as $key => $id) { ?> 
                                           <td>
                                            <input type="checkbox" id="md_checkbox_33 <?php echo $no; ?>"  class="filled-in chk-col-red" 
                                            <?php   echo ($cpl4->id_lulusan == $id->id_lulusan  ? "checked" : '');?> onclick="return false;" />
                                            <label for="md_checkbox_33 <?php echo $no; ?>"></label><?php } ?>
                                           </td>

                                           
                                        </tr>  
                                        <?php endforeach;?> 
                                                                                
                                    </tbody>
                                </table>
                                    </div>
                                </div>


                                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_kajian"><i class="material-icons">queue</i></button>

                                    <a class="btn btn-danger" href="<?php echo base_url('kurikulum/C_matriks/delete_kajian') ?>"><i class="material-icons">delete_sweep</i></a>

                                    <a class="btn btn-warning" href="<?php echo base_url('kurikulum/C_matriks/pdf_kajian') ?>" target="_blank"><i class="material-icons">insert_drive_file</i> Export (Pdf)</a>

                                    <a class="btn btn-success" href="#" target="_blank"><i class="material-icons">insert_drive_file</i> Export (Excel)</a>

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
                                        $no = 0;
                                        foreach($cpl_kajian as $cpl_kajian): 
                                        $no++;
                                        ?>
                                           
                                        <tr>
                                           <td class="align-justify"><?= $cpl_kajian->kode_cpl?>. <?= $cpl_kajian->cpl?></td>  
                                           <?php foreach ($kajian2 as $key => $value) { ?> 
                                            
                                           <td>
                                            <input type="checkbox" id="md_checkbox_33 <?php echo $no; ?>"  class="filled-in chk-col-red" 
                                            <?php echo ($cpl_kajian->id_kajian == $value['id_kajian'] ? "checked" : '');?> onclick="return false;" />
                                            <label for="md_checkbox_33 <?php echo $no; ?>"></label><?php } ?>
                                           </td>

                                           
                                        </tr>  
                                        
                                           <?php endforeach;?>   
                                                                          
                                    </tbody>
                                </table>
                                
                            </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                                    <a class="btn btn-warning" href="<?php echo base_url('kurikulum/C_matriks/pdf_matkul') ?>" target="_blank"><i class="material-icons">insert_drive_file</i> Export (Pdf)</a>

                                    <a class="btn btn-success" href="#" target="_blank"><i class="material-icons">insert_drive_file</i> Export (Excel)</a>
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
                                        $no = 0;
                                        foreach($cpl_matkul as $cpl_mk): 
                                        $no++;
                                        ?>
                                           
                                        <tr>
                                           <td class="align-justify"><?= $cpl_mk->kode_cpl?>. <?= $cpl_mk->cpl?></td>  
                                           <?php foreach ($matkul2 as $key => $matkull) { 
                                            //echo $matkull['id_matkul'];
                                            ?> 
                                            <td>
                                            <input type="checkbox" id="md_checkbox_33 <?php echo $no; ?>"  class="filled-in chk-col-red" 
                                            <?php  echo ($cpl_mk->id_matkul == $matkull['id_matkul'] ? "checked" : '');?> onclick="return false;" />
                                            <label for="md_checkbox_33 <?php echo $no; ?>"></label><?php } ?>
                                           </td>
                        
                                        </tr>  
                                        
                                           <?php endforeach;?>    
                                                                          
                                    </tbody>
                                </table>
                                
                            </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="settings_with_icon_title">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_kajianmk"><i class="material-icons">queue</i></button>

                                    <a class="btn btn-danger" href="<?php echo base_url('kurikulum/C_matriks/delete_kajianmk') ?>"><i class="material-icons">delete_sweep</i></a>

                                    <a class="btn btn-warning" href="<?php echo base_url('kurikulum/C_matriks/pdf_kajianmk') ?>" target="_blank"><i class="material-icons">insert_drive_file</i> Export (Pdf)</a>

                                    <a class="btn btn-success" href="#" target="_blank"><i class="material-icons">insert_drive_file</i> Export (Excel)</a>

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
                                        $no = 0;
                                        foreach($kajian_matkul as $kajian_mk): 
                                        $no++;
                                        ?>
                                           
                                        <tr>
                                           <td class="align-justify"><?= $kajian_mk->nama_matkul?></td>  
                                           <?php  foreach ($kajian2 as $key => $kajian_baru) { 
                                            //echo $matkull['id_matkul'];
                                            ?> 
                                            <td>
                                            <input type="checkbox" id="md_checkbox_33 <?php echo $no; ?>"  class="filled-in chk-col-red" 
                                            <?php  echo ($kajian_mk->id_kajian == $kajian_baru['id_kajian'] ? "checked" : '');?> onclick="return false;" />
                                            <label for="md_checkbox_33 <?php echo $no; ?>"></label><?php  } ?>
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
                                         <input type="hidden" name="id_user" id="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">

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

                                          <select name="id_kajian" class="form-control" required>
                                                <option value="">-- Pilih Bahan Kajian --</option>
                                         <?php foreach($kajian2 as $kajian2):?>
                                                <option value="<?= $kajian2['id_kajian']; ?>"><?= $kajian2['nama_kajian']; ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                    </div>
                                </div>

                                <label for="matkul">CPL</label>
                                <div class="form-group after-add-more" id="after-add-more">
                                    <?php 
                                    $no = 0;
                                    foreach($cpl2 as $cpll):
                                    $no++;
                                    ?>

                                        <input type="checkbox" class="filled-in" name="id_cpl[]" value="<?= $cpll->id_cpl; ?>" id="md_checkbox_22 <?php echo $no; ?>">
                                        <label for="md_checkbox_22 <?php echo $no; ?>"><?= $cpll->kode_cpl; ?>. <?= $cpll->cpl; ?></label><br>

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
                                         <input type="hidden" name="id_user" id="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">

                                          <select name="id_kajian" class="form-control" required>
                                                <option value="">-- Pilih Bahan Kajian --</option>
                                         <?php foreach($kajian3 as $kk):?>
                                                <option value="<?= $kk->id_kajian; ?>"><?= $kk->nama_kajian; ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                    </div>
                                </div>

                                <label for="matkul">Mata Kuliah</label>
                                <div class="form-group after-add-more" id="after-add-more">
                                    <?php 
                                    $no = 0;
                                    foreach($matkul2 as $matkul_new):
                                    $no++;
                                    ?>

                                        <input type="checkbox" class="filled-in" name="id_matkul[]" value="<?= $matkul_new['id_matkul']; ?>" id="md_checkbox_25 <?php echo $no; ?>">
                                        <label for="md_checkbox_25 <?php echo $no; ?>"><?= $matkul_new['nama_matkul']; ?></label><br>

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

        </div>
    </section>

