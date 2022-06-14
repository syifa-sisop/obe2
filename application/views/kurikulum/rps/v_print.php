<div class="container-fluid">

                <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover" width="100px">
                      <thead>
                       
                        <tr>
                                <th width="200px"><img src="<?php echo base_url()?>uploads/logoupnbaru.png" style="width: 60%;" align="left"></th>
                                <th><h6 class="text-center">UNIVERSITAS PEMBANGUNAN NASIONAL VETERAN JAWA TIMUR</h6>  
                                <h6 class="text-center">Fakultas <?= $data->nama_fakultas ?></h6> <h6 class="text-center">Prodi <?= $data->nama ?></h6><h6 class="text-center">Rencana Pembelajaran</h6></th>
                        </tr>
                       
                       </thead>
                   </table>   
                   </div>  

                   <div class="table-responsive">
                  <table class="table table-bordered table-striped ">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Mata Kuliah</th>
                                            <th>Kode</th>
                                            <th>Rumpun MK</th>
                                            <th colspan="2">Bobot</th>
                                            <th>Semester</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                
                                        <tr>
                                           <td><?= $data->nama_matkul?></td>
                                           <td><?= $data->kode_matkul?></td>
                                           <td><?= $data->rumpun_mk?></td>
                                                 <td>Teori : <?= $data->sks_teori?></td>
                                                  <td>Praktek : <?= $data->sks_praktek?></td>
                                           <td><?= $data->semester?></td>
                                        </tr>
        
                                    </tbody>

                            
                                    <thead>
                                        <tr>
                            
                                            <th>Otoritas</th>
                                            <th colspan="2">Koordinator MK</th>
                                            <th>Koordinator Program Studi</th>
                                            <th colspan="2">Pengembang RP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td></td>
                                        <td colspan="2"><?= $data->koordinator?></td>
                                        <td><?= $data->koordinator_jurusan?></td>
                                        <td colspan="2">
                                        <?php foreach($rinci as $rinci):?>
                                           <?= $rinci->nama_dosen?><br>
                                        <?php endforeach;?>
                                        </td>
                                           
                                        </tr>
                                       
                                 
                                    </tbody>
                            </table>
                            <table class="table table-bordered table-striped ">

                                    <thead>
                                        <tr>
                            
                                            <th>Capaian Pembelajaran</th>
                                            <th colspan="5">CPL- PRODI yang dibebankan pada Mata Kuliah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($cplmk as $cpl):?>
                                        <tr>
                                           <td></td>
                                           <td><?= $cpl->kode_cpl?></td><td colspan="4"><?= $cpl->cpl?></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>

                                    <thead>
                                        <tr>
                            
                                            <th></th>
                                            <th colspan="5">Capaian Pembelajaran Mata Kuliah (CP-MK)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($cpmk as $cplmk):?>
                                        <tr>
                                           <td></td>
                                           <td><?= $cplmk->kode_cpmk?></td><td colspan="4"><?= $cplmk->cpmk?></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>

                                    <thead>
                                        <tr>
                            
                                            <th></th>
                                            <th colspan="5">Kemampuan Akhir Tiap Tahapan belajar Sub CPMK</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($subcpmk as $subcpmk):?>
                                        <tr>
                                           <td></td>
                                           <td><?= $subcpmk->kode_subcpmk?></td><td colspan="4"><?= $subcpmk->subcpmk?></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table> 

                                <table class="table table-bordered table-striped ">

                                    <thead>
                                        <tr>
                                            <th colspan="2">Deskripsi Singkat MK</th>
                                            <?php foreach ($data3 as $data3) : ?>
                                            <td colspan="3"><?= $data3->deskripsi_mk?></td>
                                            <?php endforeach; ?>
                                        </tr>
                                    </thead>


                                     <thead>
                                        <tr>
                                            <th>Mata Kuliah syarat</th>
                                            <?php foreach ($syarat as $syarat) : ?>
                                            <td colspan="5"><?= $syarat->syarat?></td>
                                            <?php endforeach; ?>
                                        </tr>
                                    </thead>

                                     <thead>
                                        <tr>
                                            <th colspan="2">Bahan Kajian Materi Pembelajaran</th>
                                            <td colspan="3">
                                            <?php 
                                             $no=1;
                                            foreach ($kajian as $kajian) : ?>
                                            <?= $no++;?>. <?= $kajian->bahan_kajian?><br>
                                            <?php endforeach; ?>
                                            </td>
                                        </tr>
                                    </thead>

                                    <thead>
                                        <tr>
                            
                                            <th>Pustaka</th>
                                            <th colspan="5">Utama</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                       
                                        foreach($utama as $utama):?>
                                        <tr>
                                           <td></td>
                                           <td colspan="4"><?= $no++;?>. <?= $utama->pustaka_utama?></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>

                                    <thead>
                                        <tr>
                            
                                            <th></th>
                                            <th colspan="5">Pendukung</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                       
                                        foreach($pendukung as $pendukung):?>
                                        <tr>
                                           <td></td>
                                           <td colspan="4"><?= $no++;?>. <?= $pendukung->pustaka_pendukung?></td>
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>

                                </table>  

                                <table class="table table-bordered table-striped ">

                                   
                                    <thead>
                                        <tr class="text-center">
                            
                                            <th>Minggu ke-</th>
                                            <th>Subcpmk</th>
                                            <th colspan="2">Penilian</th>
                                            <th colspan="2" width="1000px">Bantuk Pembelajaran; Metode Pembelajaran;
                                                            Penugasan Mahasiswa;
                                                            [ Estimasi Waktu]</th>
        
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

                                           <td><strong>Indikator : </strong><?= $detail->indikator?></td>
                                           <td><strong>Kriteria & Bentuk : </strong><?= $detail->kriteria?></td>

                                           <td width="100px"><strong>Luring : </strong><?= $detail->luring?></td>
                                           <td><strong>Daring : </strong><?= $detail->daring?></td>

                                           <td><?= $detail->materi?></td>
                                           <td><?= $detail->bobot?></td>

                                                
                                           
                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                </table>
                   </div> 

                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col text-left">
                  
                  <b><p class="text-end"></p>
                  <br>
                  
                </div>

               
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <br><br><table>
                    <thead>
                      

                    </thead>
                  
                  </table>

                  </tbody> 

                  </thead>
                </table>

                  <script type="text/javascript">
                   var css = '@page { size: landscape; }',
                        head = document.head || document.getElementsByTagName('head')[0],
                        style = document.createElement('style');

                    style.type = 'text/css';
                    style.media = 'print';

                    if (style.styleSheet){
                      style.styleSheet.cssText = css;
                    } else {
                      style.appendChild(document.createTextNode(css));
                    }

                    head.appendChild(style);

                   window.print();
                  </script>
                
                </div>
                <!-- /.col -->
              </div><br><br>
            </div>

                
         </div>
