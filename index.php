<?php
error_reporting(0);
include 'func_deter.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>Regresi Linear Berganda </title>
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="assets/lib/datatables/css/dataTables.bootstrap.min.css"/>
	  <link rel="stylesheet" type="text/css" href="assets/lib/select2/css/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap-slider/css/bootstrap-slider.css"/>
	  <link rel="stylesheet" type="text/css" href="assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/jqvmap/jqvmap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
	
  </head>
  <body>
   <div class="be-wrapper be-nosidebar-left ">
      <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
                <div class="be-right-navbar ">
            
            <div class="page-title"><span><i>Analisis Regresi Linear Berganda</i></span></div>
            
          </div>
         
          
          <div id="be-navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle">Data <span class="mdi mdi-caret-down"></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li ><a href="index.php?page=x1">X1 (Content)</a>
                      </li>
					  <li ><a href="index.php?page=x2">X2 (Accuracy)</a>
                      </li>
					  <li ><a href="index.php?page=x3">X3 (Format)</a>
                      </li>
					  <li ><a href="index.php?page=x4">X4 (Ease of Use)</a>
                      </li>
					  <li ><a href="index.php?page=x5">X5 (Timeliness)</a>
                      </li><li ><a href="index.php?page=y">Y (User Satisfaction)</a>
                      </li>
				
                </ul>
              </li>
              <li ><a href="index.php?page=revx">Capaian</a></li>
              <li ><a href="index.php?page=total">Regresi Linear Berganda</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="be-content">

		
<?php
                if (!isset($_GET['page']))
    {
          include "home1.php";

    } else {    
        $page = $_GET['page'];  
        switch($page)
        {
            case 'x1':
                include "v_x1.php";
                break;
            case 'x2':
                include "v_x2.php";
                break;                  
			case 'x3':
                include "v_x3.php";
                break;  
				case 'x4':
                include "v_x4.php";
                break;  
				case 'x5':
                include "v_x5.php";
                break; 
case 'y':
                include "v_y.php";
                break;				
				case 'total':
                include "v_x.php";
                break;  
				
			case 'form_x1':
                include "f_x1.php";
                break; 
			case 'form_ds5':
                include "f_ds5.php";
                break; 				
			case 'form_x11':
                include "f_x11.php";
                break; 
                case 'grafik_x1':
                include "graf_x1.php";
                break; 
                case 'grafik_ds5':
                include "graf_ds5.php";
                break; 
                case 'grafik_x11':
                include "graf_x11.php";
                break; 
        case 'form_user':
                include "f_user.php";
                break;    
        case 'user':
                include "v_user.php";
                break;
                case 'edit_user':
                include "e_user.php";
                break;      
                case 'revx':
                include "revx.php";
                break;    
        }
    }
                
                ?>
		
		<div id="full-success" class="modal-container modal-full-color modal-full-color-success modal-effect-8">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center"><span class="modal-main-icon mdi mdi-check"></span>
                         <?php if($_GET['act'] == "insert"):?>
						  <h3>Berhasil</h3>
                          <p>Data yang anda masukan Berhasil Tersimpan</p>
						  <?php endif;?>
						   <?php if($_GET['act'] == "delete"):?>
						  <h3>Berhasil</h3>
                          <p>Data Berhasil Dihapus.</p>
						  <?php endif;?>
                          <div class="xs-mt-50">
                          <button type="button" data-dismiss="modal" class="btn btn-success btn-space modal-close">OK</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
				  <div id="full-danger" class="modal-container modal-full-color modal-full-color-danger modal-effect-8">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><span class="mdi mdi-close"></span></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center"><span class="modal-main-icon mdi mdi-close-circle-o"></span>
                         <?php if($_GET['act'] == "insert"):?>
						  <h3>Gagal</h3>
                          <p>Data Gagal Tersimpan.</p>
						  <?php endif;?>
						   <?php if($_GET['act'] == "delete"):?>
						  <h3>Gagal</h3>
                          <p>Gagal Menghapus Data.</p>
						  <?php endif;?>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-success btn-space modal-close">OK</button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer"></div>
                    </div>
                  </div>
                 
				  <div class="modal-overlay"></div>
				  
				  
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/dataTables.buttons.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.html5.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.flash.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.print.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.colVis.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/plugins/buttons/js/buttons.bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/app-tables-datatables.js" type="text/javascript"></script>
	    <script src="assets/lib/fuelux/js/wizard.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
	
    <script src="assets/js/app-form-wizard.js" type="text/javascript"></script>
	    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
    <script src="assets/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
    <script src="assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="assets/js/app-form-elements.js" type="text/javascript"></script>
	<script src="assets/lib/jquery.niftymodals/dist/jquery.niftymodals.js" type="text/javascript"></script>
	    <script src="assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="assets/js/app-dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
	$.fn.niftyModal('setDefaults',{
      	overlaySelector: '.modal-overlay',
      	closeSelector: '.modal-close',
      	classAddAfterOpen: 'modal-show',
      });
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dataTables();
		App.wizard();
		App.formElements();
		App.dashboard();
      });
	$(document).ready(function() {
		$('table.display').DataTable();
    $('form').parsley();
	} );
	//$("#full-success").niftyModal("show");
    </script>
	<?php if($_GET['status'] == "success"):?>
  <script> $("#full-success").niftyModal("show");</script>
<?php endif;?>
<?php if($_GET['status'] == "failed"):?>
  <script> $("#full-danger").niftyModal("show");</script>
<?php endif;?>
  </body>
</html>