
<!DOCTYPE html>
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

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url()?>assets/dashboard/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url()?>assets/dashboard/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url()?>assets/dashboard/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url()?>assets/dashboard/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url()?>assets/dashboard/css/style.css" rel="stylesheet">

     <!-- JQuery DataTable Css -->
    <link href="<?php echo base_url()?>assets/dashboard/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url()?>assets/dashboard/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url()?>assets/dashboard/css/themes/all-themes.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-multiselect-checkbox@latest/dist/jquery-multiselect-checkbox.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    

  <script type="text/javascript">
     $(document).ready(function() {
     $('#table_id').dataTable();
     $('#id_table').dataTable();
     });

     $(function(){

         $.ajaxSetup({
         type:"POST",
         url: "<?php echo base_url('admin/C_pengampu/ambil_data') ?>",
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


         })
 </script>

 <script type="text/javascript">

$(function(){

$.ajaxSetup({
type:"POST",
url: "<?php echo base_url('admin/C_coba/ambil_data2') ?>",
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


$("#dosen").change(function(){
var value=$(this).val();
if(value>0){
$.ajax({
data:{modul:'email',id:value},
success: function(respond){
$("#email").html(respond);
}
})
}
})


})

</script>
    
</head>

