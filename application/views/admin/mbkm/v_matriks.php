
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
                                        $no = 0;
                                        foreach($cpl as $cpl): 
                                        $no++;
                                        ?>
                                           
                                        <tr>
                                           <td class="align-justify"><?= $cpl->kode_cpl?>. <?= $cpl->cpl?></td>  
                                           <?php foreach ($dalam2 as $key => $id) { ?> 
                                            
                                           <td>
                                            <input type="checkbox" id="md_checkbox_21 <?php echo $no; ?>"  class="filled-in chk-col-red" 
                                            <?php echo ($cpl->id_mbkm == $id['id_mbkm']  ? "checked" : '');?> onclick="return false;" />
                                            <label for="md_checkbox_21 <?php echo $no; ?>"></label><?php } ?>
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
                                        $no = 0;
                                        foreach($cpl_luar as $cpl_luar): 
                                        $no++;
                                        ?>
                                           
                                        <tr>
                                           <td class="align-justify"><?= $cpl_luar->kode_cpl?>. <?= $cpl_luar->cpl?></td>  
                                           <?php foreach ($luar2 as $key => $id2) { ?> 
                                            
                                           <td>
                                            <input type="checkbox" id="md_checkbox_21 <?php echo $no; ?>"  class="filled-in chk-col-red" 
                                            <?php echo ($cpl_luar->id_mbkm == $id2['id_mbkm']  ? "checked" : '');?> onclick="return false;" />
                                            <label for="md_checkbox_21 <?php echo $no; ?>"></label><?php } ?>
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
                                        $no = 0;
                                        foreach($cpl_non as $cpl_non): 
                                        $no++;
                                        ?>
                                           
                                        <tr>
                                           <td class="align-justify"><?= $cpl_non->kode_cpl?>. <?= $cpl_non->cpl?></td>  
                                           <?php foreach ($non2 as $key => $id3) { ?> 
                                            
                                           <td>
                                            <input type="checkbox" id="md_checkbox_21 <?php echo $no; ?>"  class="filled-in chk-col-red" 
                                            <?php echo ($cpl_non->id_mbkm == $id3['id_mbkm']  ? "checked" : '');?> onclick="return false;" />
                                            <label for="md_checkbox_21 <?php echo $no; ?>"></label><?php } ?>
                                           </td>

                                           
                                        </tr>  
                                        
                                           <?php endforeach;?>  
                                                                            
                                    </tbody>
                                </table>
                            </div>
                                </div>
                            </div>
                             <?php echo anchor('admin/mbkm/C_matriks/index/', '<button class="btn btn-sm btn-danger">Kembali</div>')?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <!-- #END# Tabs With Icon Title -->
           
        </div>
    </section>

