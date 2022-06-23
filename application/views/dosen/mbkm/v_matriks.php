
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

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                    
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
           
        </div>
    </section>

