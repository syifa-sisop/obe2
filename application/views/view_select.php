<html>

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>e-OBE UPNV Jatim</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url()?>assets/dashboard/favicon.ico" type="image/x-icon">

     <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
     <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url()?>assets/dashboard/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url()?>assets/dashboard/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url()?>assets/dashboard/css/themes/all-themes.css" rel="stylesheet" />



<link href="<?php echo base_url()?>assets/dashboard/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script type="text/javascript">

$(function(){

$.ajaxSetup({
type:"POST",
url: "<?php echo base_url('admin/C_coba/ambil_data') ?>",
cache: false,
});

$("#prodi").change(function(){

var value=$(this).val();
if(value>0){
$.ajax({
data:{modul:'dosen',id:value},
success: function(respond){
$("#dosen").html(respond);
}
})
}

});


$("#prodi").change(function(){
var value=$(this).val();
if(value>0){
$.ajax({
data:{modul:'matkul',id:value},
success: function(respond){
$("#matkul").html(respond);
}
})
}
})

$("#prodi").change(function(){
var value=$(this).val();
if(value>0){
$.ajax({
data:{modul:'koordinator',id:value},
success: function(respond){
$("#koordinator").html(respond);
}
})
}
})


})

</script>

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
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="<?php echo base_url('admin/C_profil') ?>">
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
                        height: 250px; }
                </style>
                 <center><div class="image">
                   <img src="<?php echo base_url()?>assets/dashboard/images/logoupnbaru.png" width="120" height="120" alt="User" />
                   <div class="opening"><strong style="color:black;"><h3>UPN "Veteran"</h3></strong></div>
                    <div class="opening"><strong style="color:black;"><h4>Jawa Timur</h4></strong></div>
                    <div class="email"><?php echo $this->session->userdata('nama') ?></div></center>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU UTAMA</li>
                    <li>
                        <a href="<?php echo base_url('admin/C_dashboard') ?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">account_balance</i>
                            <span>Data Prodi</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url('admin/C_prodi') ?>">
                                    <span>Program Studi</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/C_matkul') ?>" >
                                    <span>Mata Kuliah</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('admin/C_dosen') ?>">
                                    <span>Data Dosen Prodi</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('admin/C_pengampu') ?>">
                                    <span>Data Dosen Pengampu MK</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('admin/C_tim') ?>">
                                    <span>Data Tim Kurikulum</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">school</i>
                            <span>Kurikulum</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="" >
                                    <span>Data</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span>Matriks</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="material-icons">local_library</i>
                            <span>RPS</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
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
                                <a href="pages/tables/normal-tables.html">Data</a>
                            </li>
                            <li>
                                <a href="pages/tables/jquery-datatable.html">Matriks</a>
                            </li>
                            <li>
                                <a href="pages/tables/editable-table.html">Ringkasan</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">settings</i>
                            <span>Pengaturan User</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/medias/image-gallery.html">Admin</a>
                            </li>
                            <li>
                                <a href="pages/medias/carousel.html">Dosen</a>
                            </li>
                            <li>
                                <a href="pages/medias/carousel.html">Tim Kurikulum</a>
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

            <section class="content">
        <div class="container-fluid">

                 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <center><h2>
                                Form Tambah Data
                            </h2></center>

                        </div>
                        <form action="<?= base_url()?>admin/C_pengampu/insert" method="post" >
                        <div class="body">
                            

                                <div class='form-group'>
                                    <label>Prodi</label>
                                    <select class='form-control' id='prodi' name="prodi">
                                        <option value='0'>--pilih--</option>
                                        <?php 
                                        foreach ($prodi as $prov) {
                                        echo "<option value='$prov[id_jurusan]'>$prov[nama]</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class='form-group'>
                                    <label>Mata Kuliah</label>
                                    <select class='form-control' id='matkul' name="matkul" required>
                                        <option value='0'>--pilih--</option>
                                    </select>
                                </div>
                                
                                <div class='form-group'>
                                    <label>Dosen</label>
                                    <select class='form-control' id='dosen' name="dosen" required>
                                        <option value='0'>--pilih--</option>
                                    </select>
                                </div>

                                <div class='form-group'>
                                    <label>Koordinator MK</label>
                                    <select class='form-control show-tick' name="koordinator" id='koordinator'>
                                        <option value='0'>--pilih--</option>
                                    </select>
                                </div>

                                <div class='form-group'>
                                    <label>Kelas</label>
                                    <div class="form-line">
                                    <input type="text" name="kelas" class="form-control" required>
                                </div>
                                </div>
                            
                        </div>
                        <div class="card-footer ">
                            <div class="modal-footer justify-content-between">
                                <?php echo anchor('admin/C_pengampu/', '<div class="btn btn-sm btn-danger">Kembali</div>')?>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>

	
 <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url()?>assets/dashboard/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url()?>assets/dashboard/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url()?>assets/dashboard/js/admin.js"></script>
   

    <!-- Demo Js -->
    <script src="<?php echo base_url()?>assets/dashboard/js/demo.js"></script>

</body>

</html>