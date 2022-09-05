<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Matriks MBKM</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               <?php foreach($setting as $data) :?>
                                <i class="material-icons">library_books</i> Matriks MBKM Prodi <?php echo $data->nama; ?>
                            
                            </h2>
        
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">home</i> CPL & MK dalam PT
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">face</i> CPL & MK luar PT
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#settings_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">email</i> CPL & Program Non-PT
                                    </a>
                                </li>
  
                            </ul>

                            <!-- Modal Hapus Dalam-->


                <div class="modal fade " id="hapus_dalam" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Hapus Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_matriks_mbkm/delete'); ?>

                            <label for="matkul">Mata Kuliah</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         
                                          <select name="id_mbkm" class="form-control" required>
                                                <option value="">-- Pilih Mata Kuliah --</option>
                                         <?php foreach($dalam as $pro):?>
                                                <option value="<?= $pro->id_mbkm; ?>"><?= $pro->nama_mbkm; ?></option>

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

            <!-- Modal Hapus Luar-->


                <div class="modal fade " id="hapus_luar" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Hapus Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_matriks_mbkm/delete2'); ?>

                            <label for="matkul">Mata Kuliah</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         
                                          <select name="id_mbkm" class="form-control" required>
                                                <option value="">-- Pilih Mata Kuliah --</option>
                                         <?php foreach($luar as $pro2):?>
                                                <option value="<?= $pro2->id_mbkm; ?>"><?= $pro2->nama_mbkm; ?></option>

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

            <!-- Modal Hapus Non-->


                <div class="modal fade " id="hapus_non" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Hapus Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_matriks_mbkm/delete3'); ?>

                            <label for="matkul">Mata Kuliah</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         
                                          <select name="id_mbkm" class="form-control" required>
                                                <option value="">-- Pilih Mata Kuliah --</option>
                                         <?php foreach($non as $non4):?>
                                                <option value="<?= $non4->id_mbkm; ?>"><?= $non4->nama_mbkm; ?></option>

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


                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                    <b>

                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_dalam"><i class="material-icons">queue</i></button>

                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus_dalam"><i class="material-icons">delete_sweep</i></button>

                                    <!--<a class="btn btn-danger" href="<?php echo base_url('kurikulum/C_matriks_mbkm/delete') ?>"><i class="material-icons">delete_sweep</i></a>-->

                                    <br></b><br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                    
                                            <th width="400px"></th>
                                            <?php 
                                            foreach($dalam as $dalam):
                                          
                                            ?>
                                            <th><?= $dalam->kode_mbkm?> <br> <?= $dalam->nama_mbkm?></th>
                                            <?php endforeach;?>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                        $i = 0; $j = 0;
                                        foreach($cpl as $cpl): 
                                        $i++;
                                        ?>
                                           
                                        <tr>
                                           <td class="align-justify"><?= $cpl->kode_cpl?>. <?= $cpl->cpl?></td>  
                                           <?php foreach ($dalam2 as $key => $id) {
                                           $j++;
                                            ?> 

                                           <td>
                                            <input type="checkbox" id="md_checkbox_33 <?= $i; ?><?= $j; ?>"  />
                                            <label for="md_checkbox_33 <?=$i; ?><?= $j;?>"></label>
                                            <script>
                                                <?php 
                                                    foreach($dalamcpl as $pcpl){
                                                ?>
                                                        console.log("<?=$pcpl->id_cpl;?>")
                                                        if(<?= $id['id_mbkm']?> == <?=$pcpl->id_mbkm;?>){
                                                            if(<?= $cpl->id_cpl?> == <?=$pcpl->id_cpl;?>){
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
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_luar"><i class="material-icons">queue</i></button>

                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus_luar"><i class="material-icons">delete_sweep</i></button>

                                    <br></b><br>

                                    <div class="table-responsive">
                                        
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                    
                                            <th width="400px"></th>
                                            <?php 
                                            foreach($luar as $luar):
                                          
                                            ?>
                                            <th><?= $luar->kode_mbkm?> <br> <?= $luar->nama_mbkm?></th>
                                            <?php endforeach;?>

                                        </tr>            
                                    </thead>
                                    <tbody>

                                        <?php 
                                        $i = 0; $j = 0;
                                        foreach($cpl_luar as $cpl_luar): 
                                        $i++;
                                        ?>

                                        <tr>
                                           <td class="align-justify"><?= $cpl_luar->kode_cpl?>. <?= $cpl_luar->cpl?></td>  
                                           <?php foreach ($luar2 as $key => $id2) {
                                           $j++;
                                            ?> 

                                           <td>
                                            <input type="checkbox" id="md_checkbox_32 <?= $i; ?><?= $j; ?>"  />
                                            <label for="md_checkbox_32 <?=$i; ?><?= $j;?>"></label>
                                            <script>
                                                <?php 
                                                    foreach($luarcpl as $lcpl){
                                                ?>
                                                        console.log("<?=$lcpl->id_cpl;?>")
                                                        if(<?= $id2['id_mbkm']?> == <?=$lcpl->id_mbkm;?>){
                                                            if(<?= $cpl_luar->id_cpl?> == <?=$lcpl->id_cpl;?>){
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
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_non"><i class="material-icons">queue</i></button>

                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus_non"><i class="material-icons">delete_sweep</i></button>
                           
                                    <br></b><br>

                                    <div class="table-responsive">
                                        
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                    
                                            <th width="400px"></th>
                                            <?php 
                                            foreach($non as $non):
                                          
                                            ?>
                                            <th><?= $non->kode_mbkm?> <br> <?= $non->nama_mbkm?></th>
                                            <?php endforeach;?>

                                        </tr>                                        
                                    </thead>
                                    <tbody>

                                        <?php 
                                        $i = 0; $j = 0;
                                        foreach($cpl_non as $cpl_non): 
                                        $i++;
                                        ?>
                                           
                                        <tr>
                                           <td class="align-justify"><?= $cpl_non->kode_cpl?>. <?= $cpl_non->cpl?></td>  
                                           <?php foreach ($non2 as $key => $id3) { 
                                            $j++;
                                            ?> 
                                            
                                           <td>
                                            <input type="checkbox" id="md_checkbox_34 <?= $i; ?><?= $j; ?>"  />
                                            <label for="md_checkbox_34 <?=$i; ?><?= $j;?>"></label>
                                            <script>
                                                <?php 
                                                    foreach($noncpl as $ncpl){
                                                ?>
                                                        console.log("<?=$ncpl->id_cpl;?>")
                                                        if(<?= $id3['id_mbkm']?> == <?=$ncpl->id_mbkm;?>){
                                                            if(<?= $cpl_non->id_cpl?> == <?=$ncpl->id_cpl;?>){
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
                <div class="modal fade" id="edit_dalam" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Edit Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_matriks_mbkm/insert'); ?>
                            
                                <form method="POST">
                                <label for="matkul">MK dalam PT</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <input type="hidden" name="id_mbkm_cpl" id="id_mbkm_cpl">
                                         <input type="hidden" name="id_jurusan" id="id_jurusan" value="<?php echo $data->id_jurusan; ?>">
                                         <input type="hidden" name="id_user" id="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">

                                          <select name="id_mbkm" class="form-control" required>
                                                <option value="">-- Pilih MK --</option>
                                         <?php foreach($dalam2 as $dalam2):?>
                                                <option value="<?= $dalam2['id_mbkm']; ?>"><?= $dalam2['kode_mbkm']; ?> <?= $dalam2['nama_mbkm']; ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                    </div>
                                </div>

                                <label for="matkul">CPL</label>
                                <div class="form-group after-add-more" id="after-add-more">
                                    <?php 
                                    $no = 0;
                                    foreach($cpl3 as $cpl3):
                                    $no++;
                                    ?>

                                        <input type="checkbox" class="filled-in" name="id_cpl[]" value="<?= $cpl3['id_cpl']; ?>" id="md_checkbox_26 <?php echo $no; ?>">
                                        <label for="md_checkbox_26 <?php echo $no; ?>"><?= $cpl3['kode_cpl']; ?>. <?= $cpl3['cpl']; ?></label><br>

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
                <div class="modal fade" id="edit_luar" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Edit Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_matriks_mbkm/insert2'); ?>
                            
                                <form method="POST">
                                <label for="matkul">MK luar PT</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <input type="hidden" name="id_luar_cpl" id="id_luar_cpl">
                                         <input type="hidden" name="id_jurusan" id="id_jurusan" value="<?php echo $data->id_jurusan; ?>">
                                         <input type="hidden" name="id_user" id="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">

                                          <select name="id_mbkm" class="form-control" required>
                                                <option value="">-- Pilih MK --</option>
                                         <?php foreach($luar2 as $luar2):?>
                                                <option value="<?= $luar2['id_mbkm']; ?>"><?= $luar2['kode_mbkm']; ?> <?= $luar2['nama_mbkm']; ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                    </div>
                                </div>

                                <label for="matkul">CPL</label>
                                <div class="form-group after-add-more" id="after-add-more">
                                    <?php 
                                    $no = 0;
                                    foreach($cpl2 as $cpl2):
                                    $no++;
                                    ?>

                                        <input type="checkbox" class="filled-in" name="id_cpl[]" value="<?= $cpl2->id_cpl; ?>" id="md_checkbox_27 <?php echo $no; ?>">
                                        <label for="md_checkbox_27 <?php echo $no; ?>"><?= $cpl2->kode_cpl; ?>. <?= $cpl2->cpl; ?></label><br>

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
                <div class="modal fade" id="edit_non" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="text-center">
                            <h4 class="modal-title" id="defaultModalLabel">Form Edit Data</h4></div>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('kurikulum/C_matriks_mbkm/insert3'); ?>
                            
                                <form method="POST">
                                <label for="matkul">MK Program Non-PT</label>
                                <div class="form-group">
                                    <div class="form-line">
                                         <input type="hidden" name="id_non_cpl" id="id_non_cpl">
                                         <input type="hidden" name="id_jurusan" id="id_jurusan" value="<?php echo $data->id_jurusan; ?>">
                                         <input type="hidden" name="id_user" id="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">

                                          <select name="id_mbkm" class="form-control" required>
                                                <option value="">-- Pilih MK --</option>
                                         <?php foreach($non2 as $non2):?>
                                                <option value="<?= $non2['id_mbkm']; ?>"><?= $non2['kode_mbkm']; ?> <?= $non2['nama_mbkm']; ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                    </div>
                                </div>

                                 <label for="matkul">CPL</label>
                                <div class="form-group after-add-more" id="after-add-more">
                                    <?php 
                                    $no = 0;
                                    foreach($cpl4 as $cpl4):
                                    $no++;
                                    ?>

                                        <input type="checkbox" class="filled-in" name="id_cpl[]" value="<?= $cpl4->id_cpl; ?>" id="md_checkbox_28 <?php echo $no; ?>">
                                        <label for="md_checkbox_28 <?php echo $no; ?>"><?= $cpl4->kode_cpl; ?>. <?= $cpl4->cpl; ?></label><br>

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

