<section class="content">
        <div class="container-fluid">

                 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <center><h2>
                               Hitung Total Bobot CPL
                            </h2></center>
                    
                        </div>
                        <?php error_reporting(0); echo form_open_multipart('kurikulum/C_statistik/hitung_cpl/'.$data->id_cpl)?>
                        <div class="body">
                            
                            
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Kode CPL</th>
                                            <th>Nilai CPL</th>
                                            <th>Jumlah CPL</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                        error_reporting(0);
                                        $grand_total = 0;
                                        $total_bobot = 0;
                                        $hasil = 0;
                                        foreach($ambil_data as $ambil_data){

                                            $kode_cpl = $ambil_data->kode_cpl;

                                            $grand_total = $grand_total + $ambil_data->nilai_matkul_cpl;
                                            $id_cpl = $data->id_cpl;
                                            $id_matkul = $ambil_data->id_matkul;
                                            $id_pengampu = $ambil_data->id_pengampu;
                                            $id_jurusan = $ambil_data->id_jurusan;

                                            $sql = $this->db->query("SELECT cpl_mk.id_cpl FROM cpl_mk JOIN matkul ON cpl_mk.id_matkul=matkul.id_matkul JOIN jurusan ON matkul.id_jurusan = jurusan.id_jurusan where cpl_mk.id_cpl = '$id_cpl'");
                                            $cek_user = $sql->num_rows();
                                           // $total_bobot = $total_bobot + $ambil_data->bobot; 
                                           $hasil = ($grand_total / $cek_user);
                                           
                                        ?>
                                        <?php } ?>

                                        <tr>
                                           <td><?= $kode_cpl ?></td>
                                           <td><?= $grand_total ?></td>
                                           <td><?= $cek_user ?></td>
                                       </tr>

                                    </tbody>
                                    <td colspan="3" align="right"><strong>Rata-Rata CPL : <?= $hasil?></strong></td>
                                    <input type="hidden" name="total_cpl" value="<?= $hasil?>">
                                    <input type="hidden" name="id_cpl" value="<?= $id_cpl?>">
                                    <input type="hidden" name="id_jurusan" value="<?= $id_jurusan?>">
                                </table>
                           
                            
                        </div>
                        <div class="card-footer ">
                            <div class="modal-footer justify-content-between">
                                <?php 
                                     $sql2 = $this->db->query("SELECT cpl_mk.id_cpl FROM cpl_mk JOIN matkul ON cpl_mk.id_matkul=matkul.id_matkul JOIN jurusan ON matkul.id_jurusan = jurusan.id_jurusan where cpl_mk.id_cpl = '$id_cpl'");
                                     $cek_user2 = $sql2->num_rows();
                                    // echo $cek_user2;
                                     if($cek_user2 == 0){

                                     }else{
                                        echo '<button type="submit" class="btn btn-primary">Simpan</button>';
                                     }
                                 ?>
                                
                                 <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                    <?php echo anchor('kurikulum/C_statistik/index/', '<button class="btn btn-sm btn-danger">Kembali</div>')?>
                </div>
            </div>
        </div>
