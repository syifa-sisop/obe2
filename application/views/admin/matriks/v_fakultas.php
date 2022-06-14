<section class="content">
        <div class="container-fluid">


            <div class="row clearfix">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div class="card bg-teal">
                                <p align="center">Lihat Data Matriks</p></div>
                    <div class="card">
                        <div class="header">

                            <div class="body">

                            <div class="table-responsive">
                                <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                            
                                            <th>Fakultas</th>
                                            <th>Kode Fakultas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                       
                                        foreach($data as $data):?>
                                        <tr>
                                           
                                            <td><?= $data['nama_fakultas']?></td>
                                            <td><?= $data['kode']?></td>

                                                <td width="20px"><?php echo anchor('admin/C_matriks/prodi/'.$data['id_fakultas'], 
                                                '<div class="btn btn-sm btn-info">Pilih</div>')?></td>
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

    

     


