<body class="theme-green">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">e-OBE</a>
                <blink><a class="navbar-brand">Tahun Pelajaran : <?php echo $tahun->tahun_ajaran ?> (<?php echo $tahun->semester_ajaran ?>)</a><blink>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="<?php echo base_url('dosen/C_profil') ?>">
                            <i class="material-icons">account_circle</i>
                        </a>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="<?php echo base_url('C_registrasi/logout') ?>">
                            <i class="material-icons">input</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
<!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <style type="text/css">
                    .sidebar .user-info  {
                        padding: 13px 15px 12px 15px;
                        white-space: nowrap;
                        position: relative;
                        border-bottom: 1px solid #e9e9e9;
                        background: url("<?php echo base_url()?>assets/dashboard/images/hijau1.jpg") no-repeat no-repeat;
                        height: 300px; }
                </style>
                 <center><div class="image">
                   <img src="<?php echo base_url()?>assets/dashboard/images/logoupnbaru.png" width="120" height="120" alt="User" />
                   <div class="opening"><strong style="color:black;"><h3>Program Studi</h3></strong></div>
                    <?php foreach($user as $user) :?>
                    <div class="opening"><strong style="color:black;"><h4><?php echo $user->nama; ?></h4></strong></div>
                    <div class="email"><?php echo $user->nama_dosen; ?></div>
                    <div class="email"><?php echo $data->nama_matkul; ?></div>
                    <?php if($user->level == 1) {?>
                    <div class="email">Login sebagai : Admin</div></center>
                    <?php  }if($user->level ==2 ){?>
                    <div class="email">Login sebagai : Tim Kurikulum</div></center>
                    <?php  }if($user->level ==3 ){?>
                    <div class="email">Login sebagai : Dosen Pengampu</div></center>
                    <?php  }if($user->level ==4 ){?>
                    <div class="email">Login sebagai : Mahasiswa</div></center>
                    <?php  }?>
                <?php endforeach; ?>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU UTAMA</li>
                    <li>
                        <a href="<?php echo base_url('dosen/C_dashboard') ?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('dosen/C_prodi')?>">
                            <i class="material-icons">account_balance</i>
                            <span>Prodi</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">school</i>
                            <span>Kurikulum</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url('dosen/C_data') ?>" >
                                    <span>Data</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('dosen/C_matriks') ?>">
                                    <span>Matriks</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <?php foreach($abcd as $abcd) :?>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">local_library</i>
                            <span>RPS</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url('dosen/C_rps/index/'.$abcd->id_matkul.'/'.$abcd->id_pengampu) ?>" >
                                    <span>RPS</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('dosen/C_histori/index/'.$abcd->id_matkul.'/'.$abcd->id_pengampu) ?>">
                                    <span>History RPS</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Evaluasi</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url('dosen/C_evaluasi/index/'.$abcd->id_matkul.'/'.$abcd->id_pengampu) ?>" >
                                    <span>Evaluasi RPS</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('dosen/C_evaluasimhs/index/'.$abcd->id_matkul.'/'.$abcd->id_pengampu) ?>">
                                    <span>Evaluasi RPS (Mhs)</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                <?php endforeach; ?>

                    <li>
                        <a href="<?php echo base_url('dosen/C_statistik') ?>">
                            <i class="material-icons">insert_chart</i>
                            <span>Statistik</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">collections_bookmark</i>
                            <span>MBKM</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url('dosen/mbkm/C_data') ?>">Data</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('dosen/mbkm/C_matriks') ?>">Matriks</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('dosen/mbkm/C_ringkasan') ?>">Ringkasan</a>
                            </li>
                        </ul>
                    </li>
                
                    <li>
                        <a href="<?php echo base_url('C_registrasi/logout') ?>">
                            <i class="material-icons">exit_to_app</i>
                            <span>Logout</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2022 <a href="javascript:void(0);">e-OBE UPNV Jatim</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
            </aside>