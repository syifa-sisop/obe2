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
                    <div class="card">
                        <div class="header">
                                <?php foreach($setting as $data) :?>
                            <h2>
                                Data Kurikulum Prodi <?php echo $data->nama; ?>
                            </h2>
                    <?php endforeach; ?>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">

                                <li role="presentation" class="active">
                                    <a href="#landasan" data-toggle="tab">
                                        <i class="material-icons">airplay</i> Landasan
                                    </a>
                                </li>

                                <li role="presentation">
                                    <a href="#home_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">person</i> Profil Lulusan
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">local_library</i> CPL
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#skl_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">class</i> SKL
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">dns</i> Bahan Kajian
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#settings_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">library_books</i> Mata Kuliah
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#dosen" data-toggle="tab">
                                        <i class="material-icons">group</i> Dosen Prodi
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#pengampu" data-toggle="tab">
                                        <i class="material-icons">school</i> Pengampu MK
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#tim" data-toggle="tab">
                                        <i class="material-icons">spa</i> Tim Kurikulum
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane fade in active" id="landasan">
                                    <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Landasan Filosofis</th>
                                            <th>Landasan Psikologis</th>
                                            <th>Landasan Sosiologis</th>
                                            <th>Landasan IPTEK</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($landasan as $landasan):?>
                                        <tr>
                                           <td><?= $landasan->filosofis?></td>
                                           <td><?= $landasan->psikologis?></td>
                                           <td><?= $landasan->sosiologis?></td>
                                           <td><?= $landasan->iptek?></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="home_with_icon_title">
                                    <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                            
                                            <th>Kode</th>
                                            <th>Profil</th>
                                            <th>Deskripsi Profil</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($profil as $profil):?>
                                        <tr>
                                           <td><?= $profil->kode_lulusan?></td>
                                           <td><?= $profil->profil?></td>
                                           <td><?= $profil->deskripsi?></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                   <br> <div class="table-responsive">
                                <table  class="table table-bordered table-striped table-hover" width="1100px">
                                    <thead>
                                        <tr>
                            
                                            <th>Kode</th>
                                            <th>Aspek</th>
                                            <th width="400px">Deskripsi CPL</th>
                                            <th>Sumber</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($cpl as $cpl):?>
                                        <tr>
                                           <td><?= $cpl['kode_cpl']?></td>
                                           <td><?= $cpl['nama_aspek']?></td>
                                           <td class="align-justify"><?= $cpl['cpl']?></td>
                                           <td class="align-justify"><?= $cpl['sumber']?></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="skl_with_icon_title">
              
                                   <br> <div class="table-responsive">
                                <table  class="table table-bordered table-striped table-hover" width="1100px">
                                    <thead>
                                        <tr>
                            
                                            <th>Kode</th>
                                            <th width="400px">Deskripsi SKL</th>
                                            <th>Kode CPL</th>
           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($skl as $skl):?>
                                        <tr>
                                           <td><?= $skl['kode_skl']?></td>
                                           <td class="align-justify"><?= $skl['skl']?></td>
                                           <td class="align-justify"><?= $skl['kode_cpl']?></td>

                                      
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                                    <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                            
                                            <th>Bahan Kajian</th>
                                            <th>Deskripsi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($kajian as $kajian):?>
                                        <tr>
                                           <td><?= $kajian->nama_kajian?></td>
                                           <td><?= $kajian->deskripsi?></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="settings_with_icon_title">
                                    <b>Mata Kuliah</b>
                                    <div class="table-responsive">
                                <table id="datatablesSimple"  class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tahun Ajaran</th>
                                            <th>Mata Kuliah</th>
                                            <th>Kode Matkul</th>
                                            <th>Semester</th>
                                            <th>Jenis MK</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no =1;
                                        foreach($matkul as $matkul):?>
                                        <tr>
                                           <td><?php echo $no++; ?></td>
                                           <td><?= $matkul->tahun_ajaran?> <?= $matkul->semester_ajaran?></td>
                                            <td><?= $matkul->nama_matkul?></td>
                                            <td><?= $matkul->kode_matkul?></td>
                                            <td><?= $matkul->semester?></td>
                                            <td><?= $matkul->jenis_mk?></td>

                        
                                           
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="dosen">
                                    <b>Data Dosen Prodi</b>
                                    <div class="table-responsive">
                                <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no =1;
                                        foreach($dosen as $dosen):?>
                                        <tr>
                                           <td><?php echo $no++; ?></td>
                                           <td><?= $dosen['nama_dosen']?></td>
                                           <td><?= $dosen['nip']?></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                                    
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="pengampu">
                                    <b>Pengampu MK</b>
                                    <div class="table-responsive">
                                <table id="table_id" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Dosen 1</th>
                                            <th>Nama Dosen 2</th>
                                            <th>Nama Dosen 3</th>
                                            <th>Mata Kuliah</th>
                                            <th>Kelas</th>
                                            <th>Semester</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no =1;
                                        foreach($pengampu as $pengampu):?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?= $pengampu['nama_dosen']?></td>
                                            <?php 
                                                $dosen2 = $pengampu['nama_dosen2'];
                                                $sql = $this->db->query("SELECT nama_dosen FROM dosen where id_dosen = '$dosen2'");
                                               foreach ($sql->result() as $row)
                                                    { 
                                                            
                                                             echo "<td>" . $row->nama_dosen . "</td>";
                                                    }
                                             ?>

                                             <?php 
                                                $dosen3 = $pengampu['nama_dosen3'];
                                                $sql = $this->db->query("SELECT nama_dosen FROM dosen where id_dosen = '$dosen3'");
                                               foreach ($sql->result() as $row)
                                                    { 
                                                            
                                                             echo "<td>" . $row->nama_dosen . "</td>";
                                                    }
                                             ?>
                                            <td><?= $pengampu['nama_matkul']?></td>
                                            <td><?= $pengampu['kelas']?></td>
                                            <td><?= $pengampu['semester']?></td> 
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tim">
                                    <b>Tim Kurikulum</b>
                                    <div class="table-responsive">
                                <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no =1;
                                        foreach($tim as $tim):?>
                                        <tr>
                                           <td><?php echo $no++; ?></td>
                                           <td><?= $tim['nama_dosen']?></td>
                                           <td><?= $tim['nip']?></td>
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

        </div>
</section>