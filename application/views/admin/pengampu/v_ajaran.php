<section class="content">
        <div class="container-fluid">

            <?php 
          if($this->session->flashdata('insert_data')){
              echo '<div class="alert bg-blue alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            ';
              echo $this->session->flashdata('insert_data');
              echo '</div>';
          }
          if($this->session->flashdata('update_data')){
              echo '<div class="alert alert-warning alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
              echo $this->session->flashdata('update_data');
              echo '</h5></div>';
          }
          if($this->session->flashdata('hapus_data')){
              echo '<div class="alert bg-pink alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
              echo $this->session->flashdata('hapus_data');
              echo '</h5></div>';
          }
          ?>
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

                                                <td width="20px"><?php echo anchor('admin/C_pengampu/kelola/'.$ajaran->id_tahun, 
                                                '<div class="btn btn-sm btn-success">Pilih</div>')?></td>
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