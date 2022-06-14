<section class="content">
        <div class="container-fluid">

                 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <center><h2>
                               Hitung Bobot CPL
                            </h2></center>
<?php foreach($evaluasi3 as $evaluasi3):?>

                        </div>
                        <?php echo form_open_multipart('dosen/C_evaluasimhs/cpl/'.$evaluasi3['id_matkul'] .'/'.$evaluasi3['id_user'].'/'.$evaluasi3['id_pengampu']); ?>
                        <div class="body">
                            
                            
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Kode CPL</th>
                                            <th>Bobot</th>
                                            <th>Bobot Mhs</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $grand_total = 0;
                                        $total_bobot = 0;
                                        $hasil = 0;
                                        foreach($nilai as $nilai){

                                            $grand_total = $grand_total + $nilai->bobot_mhs; 
                                            $total_bobot = $total_bobot + $nilai->bobot; 
                                            $hasil = ($grand_total / $total_bobot)*100;
                                        ?>
                                        <tr>
                                           <td><?= $nilai->kode_cpl?></td>
                                           <td><?= $nilai->bobot?></td>
                                           <td><?= $nilai->bobot_mhs?></td>
                                       </tr>

                                        <?php } ?>

                                        <?php foreach($nilai2 as $nilai2){ ?>
                                            <input type="hidden" name="id_cplmk" value="<?= $nilai2->id_cplmk?>">
                                        <?php } ?>
                                        

                                        <td colspan="2" align="right"><strong>Total Bobot  : <?= $total_bobot?></strong></td>
                                        <input type="hidden" name="total_bobot" value="<?= $total_bobot?>">

                                        <td colspan="2" align="right"><strong>Total Bobot Mhs : <?= $grand_total?></strong></td>
                                        <input type="hidden" name="nilai_cpl" value="<?= $grand_total?>">
                                        
                                       <input type="hidden" name="id_matkul" value="<?= $evaluasi3['id_matkul']?>">
                                       <input type="hidden" name="id_user" value="<?= $evaluasi3['id_user']?>">
                                       <input type="hidden" name="id_pengampu" value="<?= $evaluasi3['id_pengampu']?>">
                                    </tbody>
                                    <td colspan="3" align="right"><strong>Hasil Nilai CPL : <?= $hasil?></strong></td>
                                    <input type="hidden" name="hasil_cpl" value="<?= $hasil?>">
                                    <?php 

                                    if($hasil >= 70){
                                        echo '<input type="hidden" name="ket_cpl" value="Lulus">';
                                    }if($hasil<= 70){
                                        echo '<input type="hidden" name="ket_cpl" value="Tidak Lulus">';
                                    }
                                     ?>
                                    
                                    
                                </table>
                            
                            
                        </div>
                        <div class="card-footer ">
                            <div class="modal-footer justify-content-between">
                                <?php echo anchor('dosen/C_evaluasimhs/detail/'.$evaluasi3['id_matkul'].'/'.$evaluasi3['id_user'].'/'.$evaluasi3['id_pengampu'], '<div class="btn btn-sm btn-danger">Kembali</div>')?>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                      <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
<?php endforeach; ?>