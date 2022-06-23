<div class="container-fluid">

                <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover" width="100px">
                      <thead>
                       
                        <tr>
                                <th width="200px"><img src="<?php echo base_url()?>uploads/logoupnbaru.png" style="width: 60%;" align="left"></th>
                                <th><h6 class="text-center">UNIVERSITAS PEMBANGUNAN NASIONAL VETERAN JAWA TIMUR</h6>  
                                <h6 class="text-center">Fakultas <?= $data->nama_fakultas ?></h6> <h6 class="text-center">Prodi <?= $data->nama ?></h6><h6 class="text-center">Matriks CPL & Mata Kuliah</h6></th>
                        </tr>
                       
                       </thead>
                   </table>   
                   </div>  

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
                    
                    
                            
                   </div> 

                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col text-left">
                  
                  <b><p class="text-end"></p>
                  <br>
                  
                </div>

               
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <br><br><table>
                    <thead>
                      

                    </thead>
                  
                  </table>

                  </tbody> 

                  </thead>
                </table>

                  <script type="text/javascript">
                   var css = '@page { size: landscape; }',
                        head = document.head || document.getElementsByTagName('head')[0],
                        style = document.createElement('style');

                    style.type = 'text/css';
                    style.media = 'print';

                    if (style.styleSheet){
                      style.styleSheet.cssText = css;
                    } else {
                      style.appendChild(document.createTextNode(css));
                    }

                    head.appendChild(style);

                   window.print();
                  </script>
                
                </div>
                <!-- /.col -->
              </div><br><br>
            </div>

                
         </div>
