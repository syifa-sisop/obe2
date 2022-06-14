<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>RPS</h2>
            </div>
            <div class="row clearfix">
                <!-- Basic Examples -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                                 Daftar Mata Kuliah
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tahun Ajaran</th>
                                            <th>Mata Kuliah</th>
                                            <th>Kode Matkul</th>
                                            <th colspan="3">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $no =1;
                                        foreach($matkul as $matkul):?>
                                        <tr>
                                           <td><?php echo $no++; ?></td>
                                           <td><?= $matkul->tahun_ajaran?> <?= $matkul->semester_ajaran?></td>
                                            <td><?= $matkul->nama_matkul?></td>
                                            <td><?= $matkul->kode_matkul?></td>

                                            <td width="20px"><a href="<?php echo base_url('kurikulum/C_rps/detail/'.$matkul->id_matkul) ?>"><i class="material-icons">remove_red_eye</i></a></td>

                                            <td width="20px">
                                              <a href="<?php echo base_url('kurikulum/C_rps/print/'. $matkul->id_matkul) ?>" target="_blank"><i class="material-icons">print</i></a>
                                            </td>

                                            <td width="20px">
                                              <a class="btn btn-success" href="<?php echo base_url('admin/C_rps/export/'. $matkul->id_matkul) ?>" target="_blank">Export Excel</a>
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
    </section>