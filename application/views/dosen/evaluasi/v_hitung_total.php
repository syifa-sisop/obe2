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
                        <?php echo form_open_multipart('dosen/C_evaluasimhs/total_cpl/'.$nilai_cpl2->id_cplmk.'/'.$nilai_cpl2->id_matkul.'/'.$id->id_pengampu); ?>
                        <div class="body">
                            
                            
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Kode CPL</th>
                                            <th>Nilai CPL</th>
                                            <th>Total Mhs</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                        $grand_total = 0.000;
                                        $total_bobot = 0;
                                        $hasil = 0;
                                        foreach($nilai_cpl as $nilai_cpl){

                                            $kode_cpl = $nilai_cpl->kode_cpl;

                                            $grand_total = $grand_total + $nilai_cpl->hasil_cpl;
                                            $id_cplmk = $nilai_cpl->id_cplmk;
                                            $id_matkul = $nilai_cpl->id_matkul;
                                            $id_jurusan = $nilai_cpl->id_jurusan;
                                            $id_pengampu = $nilai_cpl->id_pengampu;

                                            $sql = $this->db->query("SELECT id_user FROM nilai_cpl where id_cplmk= '$id_cplmk' AND id_matkul = '$id_matkul' AND id_pengampu = '$id_pengampu'");
                                            $cek_user = $sql->num_rows();
                                           // $total_bobot = $total_bobot + $nilai_cpl->bobot; 
                                           $hasil = ($grand_total / $cek_user);
                                           
                                        ?>


                                         <?php } ?>
                                         <tr>
                                           <td><?= $kode_cpl ?></td>
                                           <td><?= $grand_total ?></td>
                                           <td><?= $cek_user ?></td>
                                       </tr>
                                    </tbody>
                                    <td colspan="3" align="right"><strong>Total Nilai CPL : <?= $hasil?></strong></td>
                                    <input type="hidden" name="nilai_matkul_cpl" value="<?= $hasil?>">
                                    <input type="hidden" name="id_cplmk" value="<?= $id_cplmk?>">
                                    <input type="hidden" name="id_matkul" value="<?= $id_matkul?>">
                                    <input type="hidden" name="id_jurusan" value="<?= $id_jurusan?>">
                                    <input type="hidden" name="id_pengampu" value="<?= $id->id_pengampu?>">
                                </table>
                           
                            
                        </div>
                        <div class="card-footer ">
                            <div class="modal-footer justify-content-between">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                      <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
