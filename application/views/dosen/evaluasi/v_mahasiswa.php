<section class="content">
        <div class="container-fluid">

                
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card bg-brown"><p align="center">Data Evaluasi RPS (Mahasiswa)</p></div>

            <div class="card">
                        <div class="header">

                            <div class="body">

                            <div class="table-responsive">
                                <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable" width="1100px">
                                    <thead>
                                        <tr>
                                         
                                            <th>Nama Mahasiswa</th>
                                            <th>NPM</th>
                                            <th>Semester</th>
                                            <th>Nama Matkul</th>
                                            <th colspan="3">Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                       
                                        foreach($evaluasi as $evaluasi):?>
                                        <tr>
                                           
                                           
                                            <td><?= $evaluasi['nama_mhs']?></td>
                                            <td><?= $evaluasi['npm']?></td>
                                            <td><?= $evaluasi['semester']?></td>
                                            <td><?= $evaluasi['nama_matkul']?></td>                

                                                <td>
                                                    <a href="<?php echo base_url('dosen/C_evaluasimhs/detail/'.$evaluasi['id_matkul'] .'/'.$evaluasi['id_user'].'/'.$evaluasi['id_pengampu']) ?>" name="id_user" value="<?= $evaluasi['id_user']?>">Evaluasi</a>
                                                </td>

                                                <td width="20px">
                                                  <a href="<?php echo base_url('dosen/C_evaluasimhs/cetak/'.$evaluasi['id_matkul'] .'/'.$evaluasi['id_user'].'/'.$evaluasi['id_pengampu']) ?>" target="_blank"><i class="material-icons">print</i></a>
                                                </td>

                                                <td>
                                                    <a class="btn btn-success" href="<?php echo base_url('dosen/C_evaluasimhs/export/'. $evaluasi['id_matkul'].'/'.$evaluasi['id_user'].'/'.$evaluasi['id_pengampu']) ?>" target="_blank">Export Excel</a>
                                                </td>

                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                               Total Bobot per CPL Yang dibebankan pada MK <?php foreach($cplmk as $cplmk) :?>

                                   <?php error_reporting(0); ?>

                                 <a href="<?php echo base_url('dosen/C_evaluasimhs/total_semua_cpl/'.$cplmk->id_cplmk.'/'.$id->id_matkul.'/'.$id->id_pengampu) ?>" 
                                    name="id_cplmk" value="<?= $cplmk->id_cplmk?>" name="id_matkul" value="<?= $id->id_matkul?>"  name="id_pengampu" value="<?= $id->id_pengampu?>" class="btn btn-sm btn-flat btn-success" >

                                    <?php echo $cplmk->kode_cpl ?></a>
                               

                            <?php endforeach; ?>
                            </h2>

                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Kode CPL</th>
                                            <th>Total Nilai CPL</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($nilai_cpl as $nilai_cpl) :?> 
                                        <tr>
                                            <td><?= $nilai_cpl->kode_cpl?></td>
                                            <td><?= $nilai_cpl->nilai_matkul_cpl?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
        </div>
</section>