
        <div class="container-fluid">

                <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                <h3 class="text-center">VI. Portofolio Penilaian & Evaluasi proses dan hasil belajar setiap Mahasiswa</h3></th><br>
                <?php foreach($evaluasi as $evaluasi):?>
                <h5>Nama : <?= $evaluasi->nama_mhs?></h5>
                <h5>NPM  : <?= $evaluasi->npm?></h5>
              <?php endforeach; ?>

              <div class="table-responsive">
                <table class="table table-bordered table-striped ">
                            
                    <thead>
                      <tr>
                        <th>Minggu Ke</th>
                        <th>CPL</th>
                        <th>CPMK</th>
                        <th>Sub-CPMK</th>
                        <th>Indikator</th>
                        <th>Bentuk Soal</th>
                        <th>Bobot Sub-CPMK (%)</th>
                        <th>Nilai Mhs (0-100)</th>
                        <th>&Sigma; (Nilai x Bobot)</th>
                        
                      </tr>
                    </thead>

                    <tbody>
                      <?php foreach($ambil_data as $ambil_data):?>
                      <tr>
                        <td><?= $ambil_data->minggu?></td>
                        <td><?= $ambil_data->kode_cpl?></td>
                        <td><?= $ambil_data->kode_baru?></td>
                        <td><?= $ambil_data->kode_subcpmk?></td>
                        <td><?= $ambil_data->indikator?></td>
                        <td><?= $ambil_data->asesmen?></td>
                        <td><?= $ambil_data->bobot?></td>
                        <td><?= $ambil_data->nilai_mhs?></td>
                        <td><?= $ambil_data->bobot_mhs?></td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>

                 <div class="table-responsive">
                <table class="table table-bordered table-striped ">
                            
                    <thead>
                      <tr>
                        <th>Kode CPL</th>
                        <th>Total Bobot CPL (Mhs)</th>
                        <th>Total Bobot CPL</th>
                        <th>Hasil CPL</th>
                        <th>Ketercapaian CPL pada MK</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php foreach($bobot as $bobot):?>
                      <tr>
                        <td><?= $bobot->kode_cpl?></td>
                        <td><?= $bobot->nilai_cpl?></td>
                        <td><?= $bobot->total_bobot?></td>
                        <td><?= $bobot->hasil_cpl?></td>
                        <td><?= $bobot->ket_cpl?></td>
                      </tr>
                       <?php endforeach; ?>
                    </tbody>

                  </table>
                </div>
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
            </div>
          </div>
        </div>
