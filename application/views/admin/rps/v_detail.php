<section class="content">
        <div class="container-fluid">

        <div class="row clearfix">

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card bg-blue-grey"><p align="center">Data Mata Kuliah <?=$data2->nama?> Tahun Ajaran <?=$data->tahun_ajaran?> Semester <?=$data->semester_ajaran?></p></div>

            <div class="card">
                        <div class="header">

                            <div class="body">

                            <div class="table-responsive">
                                <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Tahun Ajaran</th>
                                            <th>Program Studi</th>
                                            <th>Mata Kuliah</th>
                                            <th>Kode Matkul</th>
                                            <th>SKS Teori</th>
                                            <th>SKS Praktek</th>
                                            <th>Semester</th>
                                            <th colspan="3">Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                       
                                        foreach($matkul as $matkul):?>
                                        <tr>
                                            <td><?= $matkul->tahun_ajaran?> <?= $matkul->semester_ajaran?></td>
                                            <td><?= $matkul->nama?></td>
                                            <td><?= $matkul->nama_matkul?></td>
                                            <td><?= $matkul->kode_matkul?></td>
                                            <td><?= $matkul->sks_teori?></td>
                                            <td><?= $matkul->sks_praktek?></td>
                                            <td><?= $matkul->semester?></td>
 
                                                <td width="20px"><a href="<?php echo base_url('admin/C_rps/detail/'.$matkul->id_matkul) ?>"><i class="material-icons">remove_red_eye</i></a></td>

                                                <td width="20px">
                                                  <a href="<?php echo base_url('admin/C_rps/print/'. $matkul->id_matkul) ?>" target="_blank"><i class="material-icons">print</i></a>
                                                </td>

                                                <td width="20px">
                                              <a class="btn btn-success" href="<?php echo base_url('admin/C_rps/export/'. $matkul->id_matkul) ?>" target="_blank">Export Excel</a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                            <?php echo anchor('admin/C_rps/lihat/'.$data->id_tahun, '<button class="btn btn-sm btn-danger">Kembali</div>')?>
                        </div>
                    </div>
                </div>

          </div>


        </div>

      </div>
    </section>