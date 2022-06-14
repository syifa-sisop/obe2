<section class="content">
        <div class="container-fluid">


            <div class="row clearfix">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div class="card bg-teal">
                                <p align="center">Lihat Data Statistik MBKM</p></div>
                    <div class="card">
                        <div class="header">

                            <div class="body">

                            <div class="table-responsive">
                                <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                            
                                            <th>Program Studi</th>
                                            <th>Kode</th>
                                            <th>Koordinator Prodi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                       
                                        foreach($prodi as $prodi):?>
                                        <tr>
                                           
                                            <td><?= $prodi->nama?></td>
                                            <td><?= $prodi->kode_jurusan?></td>
                                            <td><?= $prodi->koordinator_jurusan?></td>

                                                <td width="20px"><?php echo anchor('admin/mbkm/C_matriks/detail/'.$prodi->id_jurusan, 
                                                '<div class="btn btn-sm btn-info">Pilih</div>')?></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                                 
                            </div>
                            <?php echo anchor('admin/mbkm/C_matriks/index/', '<button class="btn btn-sm btn-danger">Kembali</div>')?>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>


            </div>
    </section>

    

     


