<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="card bg-pink">
                                <p align="center"><strong>Perhatian!!</strong> Silahkan Memilih Program Studi yang akan dilihat atau dikelola</p>
                            </div>
            </div>

            <!-- Unordered List -->
            <div class="row clearfix">
            
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <?php 
                      //if($this->session->flashdata('insert_data')){
                          //echo '<div class="alert bg-blue alert-dismissible" role="alert">
                                           // <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                         // echo $this->session->flashdata('insert_data');
                         // echo '</div>';}
                      ?>
                        <div class="header">
                            <h2>
                                Pilih mata kuliah yang akan dilihat / dikelola 
                            </h2>
                        </div>

                        <div class="body">
                            <?php 
                            foreach($matkul as $data) :?>
     
                                <a href="<?php echo base_url('dosen/C_prodi/ambil_data/'.$data->id_matkul.'/'.$data->id_pengampu) ?>"><button type="submit" class="btn btn-block btn-lg bg-primary waves-effect" name="id_matkul" value="<?= $data->id_matkul?>" name="id_pengampu" value="<?= $data->id_pengampu?>"><?php echo $data->nama_matkul ?> Kelas <?php echo $data->kelas ?></button></a><br><br>

                            <?php endforeach; ?>
                            <h2>
                                Informasi Menu 
                            </h2>

                            <hr><table class="table table-bordered table-striped table-hover">
                                <thead>
                                        <tr>
                                            <th width="30%">Menu</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>Prodi</td>
                                            <td class="align-justify">Menu ini berisi tentang setting Program Studi yang akan dilihat atau dikelola di dalam aplikasi e-OBE</td>
                                        </tr>

                                        <tr>
                                            <td>Kurikulum</td>
                                            <td class="align-justify">Menu ini berisi tentang data pendukung kurikulum (profil, CPL, bahan kajian, dosen, mata kuliah) dan matriks kurikulum (hanya Tim Kurikulum Prodi yang diijinkan mengelola data di menu ini</td>
                                        </tr>

                                        <tr>
                                            <td>RPS</td>
                                            <td class="align-justify">Menu RPS berisi tentang data detail Rencana Pembelajaran Semester (RPS) tiap mata kuliah (CPL, CPMK, Sub-CPMK, Materi Pembelajaran, Pustaka dan Tahapan Pertemuan) hanya Dosen pengampu mata kuliah yang diijinkan mengelola data RPS mata kuliah di menu ini </td>
                                        </tr>

                                        <tr>
                                            <td>Statistik</td>
                                            <td class="align-justify">Menu Statistik berisi informasi tentang Statistik distribusi CPL dan MK, CPL dan BK, Proporsi CPL, Profil Lulusan dan CPL. Statistik jumlah komponen (CPMK, Sub-CPMK dan Tahapan Pertemuan) setiap mata kuliah program studi dan Statistik aktivitas dosen atau tim kurikulum dalam pengelolaan kurikulum program studi</td>
                                        </tr>

                                        <tr>
                                            <td>MBKM</td>
                                            <td class="align-justify">Menu MBKM ini berisi data dan informasi mengenai mata kuliah MBKM program studi dan program atau kegiatan MBKM di luar program studi. Di menu ini tim kurikulum prodi dapat mengelola data dan matriks kegiatan MBKM</td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <img src="<?php echo base_url()?>assets/dashboard/images/new.png" width="90%"><br><br>

                            <a href="<?php echo base_url('') ?>">
                             <button type="button" class="btn-block btn bg-teal waves-effect">
                                    <i class="material-icons">assignment</i>
                                    <span>Panduan Singkat Aplikasi e-OBE</span>
                                </button>
                            </a><br>    
                            <br>    <a href="<?php echo base_url('') ?>">
                             <button type="button" class="btn-block btn bg-indigo waves-effect">
                                     <i class="material-icons">assignment</i>
                                    <span>Panduan Kurikulum OBE-MBKM</span>
                                </button>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Unordered List -->
            
            </div>
        </div>
    </section>

    <script src="<?php echo base_url()?>assets/dashboard/js/jquery-3.5.1.min.js"></script>

    <script>
                                $(document).ready(function(){
                                    $('#fakultas').change(function() {
                                    var id = $(this).val();
                                    $.ajax({
                                        url: "<?= base_url();?>/kurikulum/C_prodi/get_prodi",
                                        method: "POST",
                                        dataType: "JSON",
                                        data: {
                                            id: id
                                        },
                                        success: function(array) {
                                            var html = '';
                                            for (let index = 0; index < array.length; index++){
                                                html += '<option>'+array[index].nama+'</option>';
                                            }
                                            $('#prodi').html(html);
                                        }
                                    })
                                })
                            })
                            </script>