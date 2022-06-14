
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
                                <h6 class="text-center"> <?= $data->nama_fakultas ?></h6> <h6 class="text-center"> <?= $data->nama ?></h6><h6 class="text-center">RENCANA ASESMEN DAN EVALUASI (ASSESMENT AND EVALUATION PLAN)</h6></th>
                        </tr>
                       
                       </thead>
                   </table>   
                   </div>  

                   <div class="table-responsive">
                  <table class="table table-bordered table-striped ">
                            
                                    <thead>
                                        <?php 
                                        $sks = $data->sks_teori + $data->sks_praktek;
                                        $matkul = $data->id_matkul;
        
                                    ?>
                                        <tr>
                            
                                            <th>Mata Kuliah</th>
                                            <th colspan="5"><?= $data->nama_matkul?></th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Kode matkul</th>
                                            <td><?= $data->kode_matkul?></td>
                                            <th>SKS Credit</th>
                                            <td><?= $sks ?></td>
                                            <th>Semester</th>
                                            <td><?= $data->semester?></td>
                                        </tr>
                                        <tr>
                                            <th>Dosen Pengampu <br> Lecturer</th>
                                            <td colspan="5">
                                        <?php foreach($rinci as $rinci):?>
                                           <?= $rinci->nama_dosen?><br>
                                        <?php endforeach;?>
                                        </td>
                                        </tr>
                                    </thead>
                                    
                            </table>
                            <h5 align="center">Bentuk Asesmen dan Evaluasi</h5>
                            <table class="table table-bordered table-striped ">
                                <thead>
                                        <tr>
                            
                                            <th>Minggu ke- <br>(Week)</th>
                                            <th>Sub Capaian Pembelajaran MK <br>Lesson Learning Outcome (LLO)</th>
                                            <th>Bentuk Asesmen <br> (Assesment Mode)</th>
                                            <th>Bobot <br> Weight (%)</th>
                                           
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($evaluasi as $evaluasi):?>
                                        <tr>
                                           <td><?= $evaluasi->minggu?></td>
                                           <td><?= $evaluasi->subcpmk?></td>
                                           <td><?= $evaluasi->asesmen?></td>
                                           <td><?= $evaluasi->bobot?></td>

                                                
                                           
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
