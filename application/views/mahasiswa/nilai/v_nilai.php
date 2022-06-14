<section class="content">
        <div class="container-fluid">

        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card bg-brown"><p align="center">Data Mata Kuliah</p></div>

            <div class="card">
                        <div class="header">

                            <div class="body">

                            <div class="table-responsive">
                                <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable" width="1100px">
                                    <thead>
                                        <tr>
                                            <th>Prodi</th>
                                            <th>Nama Dosen</th>
                                            <th>Mata Kuliah</th>
                                            <th>Kelas</th>
                                            <th>Semester</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                       
                                        foreach($matkul as $matkul):?>
                                        <tr>
                                           
                                            <td><?= $matkul['nama']?></td>
                                            <td><?= $matkul['nama_dosen']?></td>
                                            <td><?= $matkul['nama_matkul']?></td>
                                            <td><?= $matkul['kelas']?></td>
                                            <td><?= $matkul['semester']?></td>                

                                                <td width="20px"><?php echo anchor('mahasiswa/C_nilai/detail/'.$matkul['id_matkul'].'/'.$matkul['id_user'], 
                                                '<div class="btn btn-sm btn-success">Lihat Nilai</div>')?></td>

                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
</section>