<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                
                <h2>Evaluasi RPS</h2>
            </div>
            <div class="row clearfix">
                <!-- Basic Examples -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                               Daftar Nilai

                                
                            </h2>
                        </div>
                        <div class="body">
                            <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                        <tr>
                            
                                            <th>Minggu</th>
                                            <th>Bentuk Asesment</th>
                                            <th>Nilai</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($evaluasi2 as $evaluasi2):?>
                                        <tr>
                                           <td><?= $evaluasi2->minggu?></td>
                                           <td><?= $evaluasi2->asesmen?></td>
                                           <td><?= $evaluasi2->nilai_mhs?></td>
                                           
                                        </tr>
                                                
                                         <?php endforeach;?>
                                    </tbody>

                                </table>
                                <?php echo anchor('mahasiswa/C_nilai/index/', '<button class="btn btn-sm btn-danger">Kembali</div>')?>                 
                        </div>
                    </div>

                </div>
            </div>

                </div>
            </div>
        </div>
</section>