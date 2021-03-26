<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<link rel="icon" href="<?php echo e(asset('/resources/Img/p.png')); ?>">
        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="<?php echo e(asset('/template/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo e(asset('/template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset('/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo e(asset('/template/plugins/jqvmap/jqvmap.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('/template/dist/css/adminlte.min.css')); ?>">
  
  
    <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo e(asset('/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo e(asset('/template/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')); ?>">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo e(asset('/template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo e(asset('/template/plugins/select2/css/select2.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
  <!-- Bootstrap4 Duallistbox -->
  
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo e(asset('/template/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo e(asset('/template/plugins/select2/css/select2.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo e(asset('/template/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')); ?>">

  
        <!-- DataTables -->
  <!--for data table->-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/tabletools/2.0.3/css/TableTools_JUI.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/tabletools/2.0.3/css/TableTools.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
  <!-- Theme style -->
  
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(asset('/template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset('/template/plugins/daterangepicker/daterangepicker.css')); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo e(asset('/template/plugins/summernote/summernote-bs4.min.css')); ?>">
    <?php echo $__env->yieldContent('heading'); ?>
 </head>
<body  class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <?php echo $__env->make('layouts.admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('layouts.admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     
    <div class="content-wrapper">
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-0">
            <div class="col-sm-6">
             
            </div><!-- /.col -->
            <div class="col-sm-6"> 
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
 
  <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
           <?php echo $__env->yieldContent('content'); ?>
         
    <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->

     <?php echo $__env->make('layouts.admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    
 <!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo e(asset('/template/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('/template/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>

<!-- Bootstrap -->
<script src="<?php echo e(asset('/template/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- Select2 -->
<script src="<?php echo e(asset('/template/plugins/select2/js/select2.full.min.js')); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(asset('/template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo e(asset('/template/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')); ?>"></script>


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Sparkline -->
<script src="<?php echo e(asset('/template/plugins/sparklines/sparkline.js')); ?>"></script>
<!-- JQVMap -->
<script src="<?php echo e(asset('/template/plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
<script src="<?php echo e(asset('/template/plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo e(asset('/template/plugins/chart.js/Chart.min.js')); ?>"></script>

<script src="<?php echo e(asset('/template/plugins/inputmask/jquery.inputmask.min.js')); ?>"></script>
<!-- InputMask -->
<script src="<?php echo e(asset('/template/plugins/moment/moment.min.js')); ?>"></script>
<!-- date-range-picker -->
<script src="<?php echo e(asset('/template/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
<!-- bootstrap color picker -->
<script src="<?php echo e(asset('/template/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(asset('/template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>

<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset('/template/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
 <!-- Summernote -->
<!-- daterangepicker -->
  <!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(asset('/template/plugins/summernote/summernote-bs4.min.js')); ?>"></script>

<!-- Bootstrap Switch -->
<script src="<?php echo e(asset('/template/plugins/bootstrap-switch/js/bootstrap-switch.min.js')); ?>"></script>
<!-- BS-Stepper -->
<script src="<?php echo e(asset('/template/plugins/bs-stepper/js/bs-stepper.min.js')); ?>"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo e(asset('/template/plugins/jquery-mousewheel/jquery.mousewheel.js')); ?>"></script>
<script src="<?php echo e(asset('/template/plugins/raphael/raphael.min.js')); ?>"></script>
<script src="<?php echo e(asset('/template/plugins/jquery-mapael/jquery.mapael.min.js')); ?>"></script>
<script src="<?php echo e(asset('/template/plugins/jquery-mapael/maps/usa_states.min.js')); ?>"></script>

<!-- DataTables  & Plugins -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<!--<script type="text/javascript" src="../DataTable/media/js/jquery.dataTables.js"></script>-->
<script type="text/javascript" src="https://cdn.datatables.net/colreorder/1.5.2/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="<?php echo e(asset('/template/plugins/pdfmake/pdfmake.js')); ?>"></script>
<!--<script type="text/javascript" src="../DataTable/pdfmake/vfs_fonts.js"></script>-->
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/tabletools/2.0.3/js/ZeroClipboard.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/tabletools/2.0.3/js/TableTools.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<!--<script src="<?php echo e(asset('/template/plugins/pdfmake/pdfmake.min.js')); ?>"></script>-->
<!--<script src="<?php echo e(asset('/template/plugins/pdfmake/vfs_fonts.js')); ?>"></script>-->
<!--<script src="<?php echo e(asset('/template/plugins/pdfmake/pdfmake.js')); ?>"></script> -->



<!-- AdminLTE App -->
<script src="<?php echo e(asset('/template/dist/js/adminlte.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('/template/dist/js/demo.js')); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset('/template/dist/js/pages/dashboard.js')); ?>"></script>

<!-- Page specific script -->

<script type="text/javascript" charset="utf-8">
        
    pdfMake.fonts = {
    Arial: {
        normal: 'arial.ttf',
        bold: 'arial.ttf',
        italics: 'arial.ttf',
        bolditalics: 'arial.ttf'
       }
    };
    
    $(document).ready(function() {

        $('#example1').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                
                { extend:'excel',
                    orientation: 'landscape', 
                    pageSize: 'LEGAL',
                    filename: 'تقارير أوريست',
                    title: 'تقارير أوريست',
                    // exportOptions: {columns: [10 ,9,8,7,6,5,4,3,2,1,0]},
                    },
                    
                { extend:'pdf',
                    orientation: 'landscape', 
                    pageSize: 'LEGAL',
                    //filename:  'تقارير أوريست',
                    //title: 'تقارير أوريست',
                    exportOptions: {columns: ':visible'}, 
                    
                    customize: function(doc) {
                      doc.defaultStyle.font = 'Arial';
                      doc.defaultStyle.alignment = 'center'; 
                      doc.defaultStyle.fontSize = 10;
                      doc.content[1].margin = [ 10, 0, 10, 0 ];
                     doc.content[1].padding = [ 10, 0, 10, 0 ];
                      doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                    }
                    },
                { extend:'print',
                    orientation: 'landscape', 
                    pageSize: 'LEGAL',
                   // filename:  'تقارير أوريست',
                   // title:  'تقارير أوريست',
                    exportOptions: {columns: ':visible'},
                    },
                    
                { extend:'colvis'}
            ]
        } );
    } );
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservationdate2').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>

    <?php echo $__env->yieldContent('scripts'); ?>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\market\resources\views/layouts/admin/base.blade.php ENDPATH**/ ?>