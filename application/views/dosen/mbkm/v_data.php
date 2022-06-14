<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>MBKM / Data</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2><?php foreach($setting as $data) :?>
                                Data MBKM Prodi <?php echo $data->nama; ?>
                            </h2>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">home</i> MK MBKM dalam PT
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">swap_horiz</i> MK MBKM luar PT
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">work</i> Program MBKM Non-PT
                                    </a>
                                </li>

                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                    
                                    <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>SKS</th>
                                            <th>Semester</th>
                                            <th>Fakultas</th>
                                            <th>Prodi</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($mbkm as $mbkm):?>
                                        <tr>
                                           <td><?= $mbkm->kode_mbkm?></td>
                                           <td><?= $mbkm->nama_mbkm?></td>
                                           <td><?= $mbkm->sks_mbkm?></td>
                                           <td><?= $mbkm->semester_mbkm?></td>
                                           <td><?= $mbkm->nama_fakultas?></td>
                                           <td><?= $mbkm->nama?></td>
                                           <td><?= $mbkm->status_mbkm?></td>

                                        </tr>
                                         <?php endforeach;?>
                                    </tbody>
                                    </table>
                                    </div>


                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">

                                    <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            
                                    <thead>
                                        <tr>
                            
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>SKS</th>
                                            <th>Semester</th>
                                            <th>Fakultas</th>
                                            <th>Prodi</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($luar as $luar):?>
                                        <tr>
                                           <td><?= $luar->kode_mbkm?></td>
                                           <td><?= $luar->nama_mbkm?></td>
                                           <td><?= $luar->sks_mbkm?></td>
                                           <td><?= $luar->semester_mbkm?></td>
                                           <td><?= $luar->nama_fakultas?></td>
                                           <td><?= $luar->nama?></td>
                                           <td><?= $luar->status_mbkm?></td>
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
                            
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>SKS</th>
                                            <th>Semester</th>
                                            <th>Fakultas</th>
                                            <th>Prodi</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       
                                        foreach($non as $non):?>
                                        <tr>
                                           <td><?= $non->kode_mbkm?></td>
                                           <td><?= $non->nama_mbkm?></td>
                                           <td><?= $non->sks_mbkm?></td>
                                           <td><?= $non->semester_mbkm?></td>
                                           <td><?= $non->nama_fakultas?></td>
                                           <td><?= $non->nama?></td>
                                           <td><?= $non->status_mbkm?></td>
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
            <!-- #END# Tabs With Icon Title -->
            
        <?php endforeach; ?>
        </div>
    </section>