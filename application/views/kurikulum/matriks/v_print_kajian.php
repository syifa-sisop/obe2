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
                                <h6 class="text-center">Fakultas <?= $data->nama_fakultas ?></h6> <h6 class="text-center">Prodi <?= $data->nama ?></h6><h6 class="text-center">Matriks CPL & Bahan Kajian</h6></th>
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
                                            <?php if($cpl_kajian->id_kajian == $value['id_kajian'] ) { ?>
                                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                    <div class="demo-google-material-icon"> <i class="material-icons">done</i> </div>
                                                </div><?php } ?>
                                            <?php } ?>
                                           </td>

                                           
                                        </tr>  
                                        
                                           <?php endforeach;?>   
                                                                          
                                    </tbody>
                                </table>
                    
                            
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
