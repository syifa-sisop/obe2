<section class="content">
        <div class="container-fluid">


            <div class="row clearfix">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div class="card bg-teal">
                 
                                <p align="center">Detail Matriks Profil Lulusan & CPL</p></div> 

                    <div class="card">
                        <div class="header">

                            <div class="body">
                               <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                        <tr>
                            
                                            <th>CPL yang di Pilih</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                       
                                        foreach($profil_cpl as $profil_cpl):?>
                                        <tr>
                                           
                                            <td><?= $profil_cpl->kode_cpl?>. <?= $profil_cpl->cpl?></td>

                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                    </table>
                                    </div>
                                
                            
                            <?php echo anchor('kurikulum/C_matriks/', '<button class="btn btn-sm btn-danger">Kembali</div>')?>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>


            </div>
    </section>

    

     


