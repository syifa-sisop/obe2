
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
                               <?php foreach($prodi as $data) :?>
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
                                    <b>

                                    <a class="btn btn-warning" href="<?php echo base_url('admin/C_matriks/pdf_profil/'.$data->id_jurusan) ?>" target="_blank"><i class="material-icons">insert_drive_file</i> Export (Pdf)</a>

                                    <a class="btn btn-success" href="<?php echo base_url() ?>" target="_blank"><i class="material-icons">insert_drive_file</i> Export (Excel)</a>

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
                                    

                                    <a class="btn btn-warning" href="<?php echo base_url('admin/C_matriks/pdf_kajian/'.$data->id_jurusan) ?>" target="_blank"><i class="material-icons">insert_drive_file</i> Export (Pdf)</a>

                                    <a class="btn btn-success" href="<?php echo base_url() ?>" target="_blank"><i class="material-icons">insert_drive_file</i> Export (Excel)</a>

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
                                    <a class="btn btn-warning" href="<?php echo base_url('admin/C_matriks/pdf_matkul/'.$data->id_jurusan) ?>" target="_blank"><i class="material-icons">insert_drive_file</i> Export (Pdf)</a>

                                    <a class="btn btn-success" href="<?php echo base_url() ?>" target="_blank"><i class="material-icons">insert_drive_file</i> Export (Excel)</a>
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
                                           <td class="align-justify"><?= $cpl_mk->kode_cpl?>. <?= $cpl_mk->cpl?></td>  
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
                                    
                                    <a class="btn btn-warning" href="<?php echo base_url('admin/C_matriks/pdf_kajianmk/'.$data->id_jurusan) ?>" target="_blank"><i class="material-icons">insert_drive_file</i> Export (Pdf)</a>

                                    <a class="btn btn-success" href="<?php echo base_url() ?>" target="_blank"><i class="material-icons">insert_drive_file</i> Export (Excel)</a>

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
                            <?php echo anchor('admin/C_matriks/index/', '<button class="btn btn-sm btn-danger">Kembali</div>')?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <!-- #END# Tabs With Icon Title -->




        </div>
    </section>

