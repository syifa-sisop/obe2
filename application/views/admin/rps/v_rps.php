<section class="content">
        <div class="container-fluid">

        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card bg-indigo"><p align="center">Data Tahun Ajaran</p></div>

            <div class="card">
                        <div class="header">

                            <div class="body">

                            <div class="table-responsive">
                                <table  class="table table-bordered table-striped table-hover js-basic-example dataTable" width="1100px">
                                    <thead>
                                        <tr>
                            
                                            <th>Tahun Ajaran</th>
                                            <th>Semester</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                       
                                        foreach($ajaran as $ajaran):?>
                                        <tr>
                                           
                                            <td><?= $ajaran->tahun_ajaran?></td>
                                            <td><?= $ajaran->semester_ajaran?></td>
                                             <td><?= $ajaran->status_ajaran?></td>

                                                <td width="20px"><?php echo anchor('admin/C_rps/lihat/'.$ajaran->id_tahun, 
                                                '<div class="btn btn-sm btn-success">Lihat Data</div>')?></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

          </div>


          

        </div>

         

      </div>
    </section>