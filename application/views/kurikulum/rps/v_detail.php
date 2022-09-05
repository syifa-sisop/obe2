<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>RPS</h2>
            </div>
            <div class="row clearfix">
                <!-- Basic Examples -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                               Tentang Mata Kuliah                        
                            </h2>

                        </div>
                        <div class="body">
                            <table class="table">
                                <?php 
                                    $sks = $data->sks_teori + $data->sks_praktek;
                                    $matkul = $data->id_matkul;
        
                                    ?>
                                    <thead>
                                        <tr>
                                            <th >Prodi MK</th>
                                            <th>: <?= $data->nama ?> <?= $data->nama_fakultas?></th>
                                        </tr>
                                        <tr>
                                            <th >Kode MK</th>
                                            <th>: <?= $data->kode_matkul ?></th>
                                        </tr>
                                        <tr>
                                            <th >Nama MK</th>
                                            <th>: <?= $data->nama_matkul ?></th>
                                        </tr>
                                        <tr>
                                            <th >SKS MK</th>
                                            <th>: <?= $sks ?></th>
                                        </tr>
                                        <tr>
                                            <th >Semester MK</th>
                                            <th>: <?= $data->semester ?></th>
                                        </tr>
                                        <tr>
                                            <th >Kategori MK</th>
                                            <th>: <?= $data->jenis_mk ?></th>
                                        </tr>
                                        <tr>
                                            <th >Koordinator MK</th>
                                            <th>: <?= $data->koordinator ?></th>
                                        </tr>
                                        <?php foreach($data2 as $data2):?>
                                        <tr>
                                            <th >Dosen Pengampu MK</th>
                                            <th>: <?= $data2->nama_dosen; ?></th>
                                        </tr>
                                        <?php endforeach ?>

                                    </thead>
                            </table>
                            <div class="header bg-grey">
                            <h2>
                               Rumpun dan Deskripsi Singkat MK    
                            </h2>
                            </div>
                            <table class="table">
                                    <thead>
                                        <?php foreach ($data3 as $data3) : ?>
                                        <tr>
                                            <th >Rumpun MK</th>
                                            <th>: <?= $data3->rumpun_mk?></th>
                                        </tr>
                                        <tr>
                                            <th >Deskripsi MK</th>
                                            <th>: <?= $data3->deskripsi_mk ?></th>
                                        </tr>
                                    <?php endforeach; ?>
                                    </thead>
                            </table>

                        
                        </div>
                    </div>
                </div>


                <!-- #END# Basic Examples -->
                <!-- With Icons -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                                CPL Prodi yang dibebankan pada MK
                            </h2>

                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Aspek</th>
                                            <th>Kode CPL</th>
                                            <th>CPL</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                       
                                        foreach($cplmk as $cpl):?>
                                        <tr>
                                           <td><?= $cpl->nama_aspek?></td>
                                           <td><?= $cpl->kode_cpl?></td>
                                           <td><?= $cpl->cpl?></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                <!-- #END# With Icons -->
            </div>

            <div class="row clearfix">
                <!-- Basic Examples -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                               CPMK                   
                            </h2>

                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Kode CPMK</th>
                                            <th>Deskripsi</th>
                                            <th>CPL Prodi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                       
                                        foreach($cpmk as $cpmk):?>
                                            
                                        <tr>
                                           <td><?= $cpmk->kode_cpmk?></td>
                                           <td><?= $cpmk->cpmk?></td>
                                           <td><?= $cpmk->kode_cpl?></td>

                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                               
                       </div>
                    </div>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                                Sub-CPMK 

                            </h2>

                        </div>
                        <div class="body">
                            <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Kode Sub-CPMK</th>
                                            <th>Deskripsi</th>
                                            <th>CPMK</th>
                                            <th>CPL Prodi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($subcpmk as $subcpmk):?>
                                        <tr>
                                           <td><?= $subcpmk->kode_subcpmk?></td>
                                           <td><?= $subcpmk->subcpmk?></td>
                                           <td><?= $subcpmk->kode_baru?></td>
                                           <td><?= $subcpmk->kode_cpl?></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                </div>

                <div class="row clearfix">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                                Bahan Kajian Materi Pembelajaran 
                            </h2>

                        </div>
                        <div class="body">
                            <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>No</th>
                                            <th>Bahan Kajian</th>
                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                       
                                        foreach($kajian as $kajian):?>
                                        <tr>
                                           <td><?= $no++;?></td>
                                           <td><?= $kajian->bahan_kajian?></td>
                                           
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                                Syarat Mata Kuliah 

                            </h2>

                        </div>
                        <div class="body">
                            <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>No</th>
                                            <th>Syarat</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                       
                                        foreach($syarat as $syarat):?>
                                        <tr>
                                           <td><?= $no++;?></td>
                                           <td><?= $syarat->syarat?></td>
                                           
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                                Pustaka Pendukung 

                            </h2>

                        </div>
                        <div class="body">
                            <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>No</th>
                                            <th>Pustaka Pendukung</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                       
                                        foreach($pendukung as $pendukung):?>
                                        <tr>
                                           <td><?= $no++;?></td>
                                           <td><?= $pendukung->pustaka_pendukung?></td>
                                           
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                                Pustaka Utama 

                            </h2>

                        </div>
                        <div class="body">
                            <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>No</th>
                                            <th>Pustaka Utama</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                       
                                        foreach($utama as $utama):?>
                                        <tr>
                                           <td><?= $no++;?></td>
                                           <td><?= $utama->pustaka_utama?></td>
                                           
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                                Media Pembelajaran 

                            </h2>

                        </div>
                        <div class="body">
                            <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>No</th>
                                            <th>Media Pembelajaran</th>
                                            <th>Jenis</th>
                                           
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                       
                                        foreach($media as $media):?>
                                        <tr>
                                           <td><?= $no++;?></td>
                                           <td><?= $media->media?></td>
                                           <td><?= $media->jenis_media?></td>
                                           
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="card">
                        <div class="header bg-grey">
                            <h2>
                                Detail RPS 

                            </h2>

                        </div>
                        <div class="body">
                            <table id="datatablesSimple" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Minggu</th>
                                            <th>Subcpmk</th>
                                            <th>Indikator</th>
                                            <th>Kriteria & Bentuk</th>
                                            <th>Luring</th>
                                            <th>Daring</th>
                                            <th>Materi Pembelajaran</th>
                                            <th>Bobot Penilaian</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($detail as $detail):?>
                                        <tr>
                                           <td><?= $detail->minggu?></td>
                                           <td><?= $detail->subcpmk?></td>
                                           <td><?= $detail->indikator?></td>
                                           <td><?= $detail->kriteria?></td>
                                           <td><?= $detail->luring?></td>
                                           <td><?= $detail->daring?></td>
                                           <td><?= $detail->materi?></td>
                                           <td><?= $detail->bobot?></td>

                                                
                                           
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