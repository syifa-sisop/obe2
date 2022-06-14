<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>e-OBE UPNV Jatim</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url()?>assets/dashboard/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url()?>assets/dashboard/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url()?>assets/dashboard/css/themes/all-themes.css" rel="stylesheet" />

     <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url()?>assets/dashboard/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
</head>
<body>

	<div class="container-fluid">
            <div class="block-header">
              <?php 
              $session = $_SESSION;
              foreach($setting as $data) :?>
                <h2>Matriks Kurikulum / Edit Profil & CPL</h2>
            </div>

  

  <div class="panel panel-default">
    <div class="panel-heading">Edit Data</div>
    <div class="panel-body">
    
       <?php echo form_open_multipart('kurikulum/C_matriks/insert'); ?>
  
          <div class="form-group control-group">
            <label for="matkul">Profil Lulusan</label>
                                
                                    <div class="form-line">
                                         <input type="hidden" name="id_profil_cpl">
                                         <input type="hidden" name="id_jurusan" id="id_jurusan" value="<?php echo $data->id_jurusan; ?>">
                                         <input type="hidden" name="id_user" id="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">

                                          <select name="id_lulusan" class="form-control" required>
                                                <option value="">-- Pilih Profil Lulusan --</option>
                                         <?php foreach($profil2 as $profil2):?>
                                                <option value="<?= $profil2['id_lulusan']; ?>"><?= $profil2['kode_lulusan']; ?> <?= $profil2['profil']; ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                    </div>
                                

           </div>

           <div class="form-group control-group">
             <?php foreach($cpl2 as $cpl2):?>

            <input type="checkbox" class="filled-in" name="id_cpl[]" value="<?= $cpl2['id_cpl']; ?>" id="ig_checkbox">
                                            <label for="ig_checkbox"><?= $cpl2['kode_cpl']; ?>. <?= $cpl2['cpl']; ?></label><br>

            <?php endforeach; ?>
              
          </div>

	        
	        <div class="control-group text-center">
	            <br>
	           <?php echo anchor('kurikulum/C_matriks/', '<button type="button" class="btn btn-danger waves-effect">Kembali</button>')?>
               <button type="submit" class="btn btn-success waves-effect">Simpan</button>
	        </div>
<?php echo form_close() ?>
 
<?php endforeach; ?>
    </div>
  </div>

</div>



<!-- Jquery Core Js -->
    <script src="<?php echo base_url()?>assets/dashboard/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url()?>assets/dashboard/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url()?>assets/dashboard/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url()?>assets/dashboard/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url()?>assets/dashboard/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo base_url()?>assets/dashboard/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo base_url()?>assets/dashboard/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url()?>assets/dashboard/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="<?php echo base_url()?>assets/dashboard/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo base_url()?>assets/dashboard/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url()?>assets/dashboard/js/admin.js"></script>
    <script src="<?php echo base_url()?>assets/dashboard/js/pages/index.js"></script>
    <script src="<?php echo base_url()?>assets/dashboard/js/pages/charts/chartjs.js"></script>

     <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url()?>assets/dashboard/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>assets/dashboard/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url()?>assets/dashboard/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()?>assets/dashboard/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url()?>assets/dashboard/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>

    <script src="<?php echo base_url()?>assets/dashboard/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url()?>assets/dashboard/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()?>assets/dashboard/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Demo Js -->
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="<?php echo base_url()?>assets/dashboard/js/datatables-simple-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="<?php echo base_url()?>assets/dashboard/js/datatables-simple-demo.js"></script>

    <script src="<?php echo base_url()?>assets/dashboard/js/pages/forms/basic-form-elements.js"></script>

    <script>
      window.setTimeout(function() {
         $(".alert").fadeTo(500,0).slideUp(500, function() {
            $(this).remove();
         });
      }, 3000)
    </script>
</body>
</html>