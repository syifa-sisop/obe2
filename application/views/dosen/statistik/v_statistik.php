<section class="content">
        <div class="container-fluid">

                 <!-- Tabs With Icon Title -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?php foreach($setting as $data) :?>
                                Statistik CPL Prodi <?php echo $data->nama ?>
                            </h2>

                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">home</i> Matkul & CPL
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">face</i> Nilai Total CPL
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">insert_chart</i> Diagram
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                    
                                    <div class="table-responsive">
                                <table id="datatablesSimple"  class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Mata Kuliah</th>
                                            <th>Kode CPL</th>
                                            <th>Total Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no =1;
                                        foreach($nilai_cpl as $nilai_cpl):?>
                                        <tr>
                                           <td><?php echo $no++; ?></td>
                                           <td><?= $nilai_cpl->nama_matkul?></td>
                                           <td><?= $nilai_cpl->kode_cpl?></td>
                                           <td><?= $nilai_cpl->nilai_matkul_cpl?></td>
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
                                            <th>Total Nilai CPL</th>

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
                                            
                                           <td>
                                            <?= $cpl->total_cpl?>
                                           </td>

                                           
                                        </tr>  
                                        
                                           <?php endforeach;?>   
                                                                          
                                    </tbody>
                                </table>
                                
                            </div>

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                                    <canvas id="myChart"></canvas>
                                    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
                                      <script type="text/javascript">
                                        var ctx = document.getElementById('myChart').getContext('2d');
                                        var chart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: [
                                              <?php
                                                if (count($cpl2)>0) {
                                                  foreach ($cpl2 as $data) {
                                                    echo "'" .$data['kode_cpl']."',";
                                                  }
                                                }
                                              ?>
                                            ],
                                            datasets: [{
                                                label: 'Nilai CPL',
                                                backgroundColor: '#3f9e34',
                                                borderColor: '##93C3D2',
                                                data: [
                                                  <?php
                                                    if (count($cpl2)>0) {
                                                        
                                                       foreach ($cpl2 as $data) {
                                                        $nilai = $data['total_cpl'];
                                                        echo $data['total_cpl'] . ", ";
                                                      }
                                                    }
                                                  ?>
                                                ]
                                            }]
                                        },
                                    });
                                     
                                      </script>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <?php endforeach; ?>
            <!-- #END# Tabs With Icon Title -->

        </div>
</section>