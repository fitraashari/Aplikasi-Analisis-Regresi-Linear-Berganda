<?php 
include "koneksi.php";

    $pX11 = "KRS Online sudah menyediakan informasi yang sesuai"; 
    $pX12= "Informasi yang disajikan dalam KRS online sudah lengkap"; 
    $pX13 = "Teks yang ditampilkan dalam KRS online mudah dipahami"; 

    $pX21 = "Data output sesuai dengan yang diinputkan"; 
    $pX22 = "Sistem KRS online sedikit kesalahan"; 
	
    $pX31 = "Menu yang ada mudah dimengerti"; 
    $pX32 = "Tata letak konten mudah dimengerti"; 

    $pX41 = "Sistem KRS online mudah digunakan"; 
    $pX42 = "Sistem KRS online menyediakan petunjuk pengisian"; 
    $pX43 = "Sistem dapat diakses kapan (sesuai waktu pengisian) dan dimana saja"; 
    $pX44 = "Tidak memerlukan alat khusus untuk mengakses sistem";
    
    $pX51 = "Saat anda  mengakses KRS Online tidak memerlukan waktu yang lama"; 
    $pX52 = "Data yang ditampilkan adalah data terbaru atau up to date"; 
    $pX53 = "Informasi yang dibutuhkan tepat waktu"; 
    
    $pY1 = "Anda puas dengan sistem karena isi dari informasi yang dihasilkan sesuai dengan kebutuhan anda"; 
    $pY2 = "Anda puas dengan sistem karena memberikan layanan dan data yang akurat"; 
    $pY3 = "Anda puas dengan sistem karena tampilan yang menarik dan user friendly"; 
    $pY4 = "Anda puas dengan sistem karena mudah digunakan"; 
    $pY5 = "Anda puas dengan sistem karena sistem menyelesaikan permasalahan yang anda butuhkan serta informasi yang disajikan up to date"; 



 $tampilac=mysqli_query($conn,"SELECT * from x1 where responden");
$datax1=mysqli_fetch_assoc($tampilx1);

$tampilpsp=mysqli_query($conn,"SELECT * from x2 where responden");
$datax2=mysqli_fetch_assoc($tampilx2);

$tampilta=mysqli_query($conn,"SELECT * from x3 where responden");
$datax3=mysqli_fetch_assoc($tampilx3);

$tampilse=mysqli_query($conn,"SELECT * from x4 where responden");
$datax4=mysqli_fetch_assoc($tampilx4);

$tampilra=mysqli_query($conn,"SELECT * from x5 where responden");
$datax5=mysqli_fetch_assoc($tampilx5);

$tampilgsm=mysqli_query($conn,"SELECT * from y where responden");
$datay=mysqli_fetch_assoc($tampily);


if($datax1){
  $dis = "disabled";
}else{
  $dis = "";
}
?>

	   <div class="page-head">
          <h2 class="page-head-title">Kuesioner Variabel Isi (Content)
		  	<?php if($_GET['status'] == "success"):?>
			<button data-modal="full-success" class="btn btn-space btn-success md-trigger">Success</button>
			<?php endif;?>
		  </h2>
          
        </div>
        <div class="main-content container-fluid">
          <div class="row wizard-row">
            <div class="col-md-12 fuelux">
              <div class="block-wizard panel panel-default">
                <div id="wizard1" class="wizard wizard-ux">
                  <ul class="steps">
                    <li data-step="1" class="active">X1<span class="chevron"></span></li>
                    <li data-step="2">X2<span class="chevron"></span></li>
                    <li data-step="3">X3<span class="chevron"></span></li>
					          <li data-step="4">X4<span class="chevron"></span></li>
					          <li data-step="5">X5<span class="chevron"></span></li>
					          <li data-step="6">Y<span class="chevron"></span></li>
                  </ul>
                  <div class="actions">
                    <button type="button" class="btn btn-xs btn-prev btn-default"><i class="icon mdi mdi-chevron-left"></i>Prev</button>
                    <button type="button" data-last="Finish" class="btn btn-xs btn-next btn-default">Next<i class="icon mdi mdi-chevron-right"></i></button>
                  </div>
				  <form action="sv_ds1.php" method="POST" data-parsley-namespace="data-parsley-" data-parsley-validate="" novalidate="" class="form-horizontal group-border-dashed">
          
                  <div class="step-content">
				  
                    <div data-step="1" class="step-pane active">
                       <fieldset <?php echo $dis; ?>>
                        <div class="form-group no-padding">
                          <div class="col-sm-7">
                            <h3 class="wizard-title">Isi (Content)</h3>
                          </div>
						   
                        </div>
                        <div class="form-group ">
                          <label class="control-label col-sm-6">X1.1 | <?php echo $pX11;?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="ACds11">
						<option  
                          <?php if($dataac['ds11ac'] == "0"):?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds11ac'] == "1"):?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds11ac'] == "2"):?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option  
                          <?php if($dataac['ds11ac'] == "3"):?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option  
                          <?php if($dataac['ds11ac'] == "4"):?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala/prosedur</option>
                          <option  
                          <?php if($dataac['ds11ac'] == "5"):?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
						
                      </div>
					 
                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS1.2 | <?php echo $pACds12;?></label>
						 <div class="col-sm-4">
                        <select class="form-control" name="ACds12">
            <option  
                          <?php if($dataac['ds12ac'] == "0"):?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds12ac'] == "1"):?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds12ac'] == "2"):?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option  
                          <?php if($dataac['ds12ac'] == "3"):?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option  
                          <?php if($dataac['ds12ac'] == "4"):?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala/prosedur</option>
                          <option  
                          <?php if($dataac['ds12ac'] == "5"):?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.3 | <?php echo $pACds13;?></label>
						<div class="col-sm-4">
                        <select class="form-control" name="ACds13">
            <option  
                          <?php if($dataac['ds13ac'] == "0"):?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds13ac'] == "1"):?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds13ac'] == "2"):?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option  
                          <?php if($dataac['ds13ac'] == "3"):?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option  
                          <?php if($dataac['ds13ac'] == "4"):?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala/prosedur</option>
                          <option  
                          <?php if($dataac['ds13ac'] == "5"):?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.4 | <?php echo $pACds14;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="ACds14">
<option  
                          <?php if($dataac['ds14ac'] == "0"):?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds14ac'] == "1"):?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds14ac'] == "2"):?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option  
                          <?php if($dataac['ds14ac'] == "3"):?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option  
                          <?php if($dataac['ds14ac'] == "4"):?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala/prosedur</option>
                          <option  
                          <?php if($dataac['ds14ac'] == "5"):?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.5 | <?php echo $pACds15;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="ACds15">
<option  
                          <?php if($dataac['ds15ac'] == "0"):?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds15ac'] == "1"):?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds15ac'] == "2"):?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option  
                          <?php if($dataac['ds15ac'] == "3"):?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option  
                          <?php if($dataac['ds15ac'] == "4"):?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala/prosedur</option>
                          <option  
                          <?php if($dataac['ds15ac'] == "5"):?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
												<div class="form-group">
                          <label class="control-label col-sm-6">DS1.6 | <?php echo $pACds16;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="ACds16">
<option  
                          <?php if($dataac['ds16ac'] == "0"):?>
                              Selected
                            <?php endif;?>
                             value="0">0 | Tidak ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds16ac'] == "1"):?>
                              Selected
                            <?php endif;?>
                            value="1">1 | Mulai ada kepedulian</option>
                          <option  
                          <?php if($dataac['ds16ac'] == "2"):?>
                              Selected
                            <?php endif;?>
                            value="2">2 | Ada kesadaran</option>
                          <option  
                          <?php if($dataac['ds16ac'] == "3"):?>
                              Selected
                            <?php endif;?>
                             value="3">3 | Ada tindakan</option>
                          <option  
                          <?php if($dataac['ds16ac'] == "4"):?>
                              Selected
                            <?php endif;?>
                             value="4">4 | Tindakan secara berkala/prosedur</option>
                          <option  
                          <?php if($dataac['ds16ac'] == "5"):?>
                              Selected
                            <?php endif;?>
                             value="5">5 | Paham akan kebutuhan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-5 col-sm-7">
                            <?php //<button class="btn btn-default btn-space">Cancel</button>
                            ?>
                            <button data-wizard="#wizard1" class="btn btn-primary btn-space wizard-next">Next Step</button>
                          </div>
                        </div>
                       </fieldset>
					</div>
                    <div data-step="2" class="step-pane">
                       <fieldset <?php echo $dis; ?>>
                        <div class="form-group no-padding">
                          <div class="col-sm-7">
                            <h3 class="wizard-title">Police, Standar and Procedure</h3>
                          </div>
                        </div>
        <div class="form-group ">
                          <label class="control-label col-sm-6">DS1.1 | <?php echo $pPSPds11;?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="PSPds11">
            <option   
                          <?php if($datapsp['ds11psp'] == "0"):?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada SOP</option>
                          <option    
                          <?php if($datapsp['ds11psp'] == "1"):?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada SOP</option>
                          <option    
                          <?php if($datapsp['ds11psp'] == "2"):?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada SOP sebatas kebutuhan saat ini</option>
                          <option    
                          <?php if($datapsp['ds11psp'] == "3"):?>
                              Selected
                            <?php endif;?>
                               value="3">3 | SOP sudah dimengerti</option>
                          <option    
                          <?php if($datapsp['ds11psp'] == "4"):?>
                              Selected
                            <?php endif;?>
                               value="4">4 | SOP sudah diformalkan</option>
                          <option    
                          <?php if($datapsp['ds11psp'] == "5"):?>
                              Selected
                            <?php endif;?>
                               value="5">5 | SOP sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
						
                      </div>
					 
                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS1.2 | <?php echo $pPSPds12;?></label>
						 <div class="col-sm-4">
                        <select class="form-control" name="PSPds12">
            
            <option   
                          <?php if($datapsp['ds12psp'] == "0"):?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada SOP</option>
                          <option    
                          <?php if($datapsp['ds12psp'] == "1"):?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada SOP</option>
                          <option    
                          <?php if($datapsp['ds12psp'] == "2"):?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada SOP sebatas kebutuhan saat ini</option>
                          <option    
                          <?php if($datapsp['ds12psp'] == "3"):?>
                              Selected
                            <?php endif;?>
                               value="3">3 | SOP sudah dimengerti</option>
                          <option    
                          <?php if($datapsp['ds12psp'] == "4"):?>
                              Selected
                            <?php endif;?>
                               value="4">4 | SOP sudah diformalkan</option>
                          <option    
                          <?php if($datapsp['ds12psp'] == "5"):?>
                              Selected
                            <?php endif;?>
                               value="5">5 | SOP sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.3 | <?php echo $pPSPds13;?></label>
						<div class="col-sm-4">
                        <select class="form-control" name="PSPds13">
            
            <option   
                          <?php if($datapsp['ds13psp'] == "0"):?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada SOP</option>
                          <option    
                          <?php if($datapsp['ds13psp'] == "1"):?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada SOP</option>
                          <option    
                          <?php if($datapsp['ds13psp'] == "2"):?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada SOP sebatas kebutuhan saat ini</option>
                          <option    
                          <?php if($datapsp['ds13psp'] == "3"):?>
                              Selected
                            <?php endif;?>
                               value="3">3 | SOP sudah dimengerti</option>
                          <option    
                          <?php if($datapsp['ds13psp'] == "4"):?>
                              Selected
                            <?php endif;?>
                               value="4">4 | SOP sudah diformalkan</option>
                          <option    
                          <?php if($datapsp['ds13psp'] == "5"):?>
                              Selected
                            <?php endif;?>
                               value="5">5 | SOP sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.4 | <?php echo $pPSPds14;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="PSPds14">
            
            <option   
                          <?php if($datapsp['ds14psp'] == "0"):?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada SOP</option>
                          <option    
                          <?php if($datapsp['ds14psp'] == "1"):?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada SOP</option>
                          <option    
                          <?php if($datapsp['ds14psp'] == "2"):?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada SOP sebatas kebutuhan saat ini</option>
                          <option    
                          <?php if($datapsp['ds14psp'] == "3"):?>
                              Selected
                            <?php endif;?>
                               value="3">3 | SOP sudah dimengerti</option>
                          <option    
                          <?php if($datapsp['ds14psp'] == "4"):?>
                              Selected
                            <?php endif;?>
                               value="4">4 | SOP sudah diformalkan</option>
                          <option    
                          <?php if($datapsp['ds14psp'] == "5"):?>
                              Selected
                            <?php endif;?>
                               value="5">5 | SOP sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.5 | <?php echo $pPSPds15;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="PSPds15">
            
            <option   
                          <?php if($datapsp['ds15psp'] == "0"):?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada SOP</option>
                          <option    
                          <?php if($datapsp['ds15psp'] == "1"):?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada SOP</option>
                          <option    
                          <?php if($datapsp['ds15psp'] == "2"):?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada SOP sebatas kebutuhan saat ini</option>
                          <option    
                          <?php if($datapsp['ds15psp'] == "3"):?>
                              Selected
                            <?php endif;?>
                               value="3">3 | SOP sudah dimengerti</option>
                          <option    
                          <?php if($datapsp['ds15psp'] == "4"):?>
                              Selected
                            <?php endif;?>
                               value="4">4 | SOP sudah diformalkan</option>
                          <option    
                          <?php if($datapsp['ds15psp'] == "5"):?>
                              Selected
                            <?php endif;?>
                               value="5">5 | SOP sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
												<div class="form-group">
                          <label class="control-label col-sm-6">DS1.6 | <?php echo $pPSPds16;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="PSPds16">
            
            <option   
                          <?php if($datapsp['ds16psp'] == "0"):?>
                              Selected
                            <?php endif;?>
                              value="0">0 | Tidak ada SOP</option>
                          <option    
                          <?php if($datapsp['ds16psp'] == "1"):?>
                              Selected
                            <?php endif;?>
                               value="1">1 | Sudah ada SOP</option>
                          <option    
                          <?php if($datapsp['ds16psp'] == "2"):?>
                              Selected
                            <?php endif;?>
                               value="2">2 | Ada SOP sebatas kebutuhan saat ini</option>
                          <option    
                          <?php if($datapsp['ds16psp'] == "3"):?>
                              Selected
                            <?php endif;?>
                               value="3">3 | SOP sudah dimengerti</option>
                          <option    
                          <?php if($datapsp['ds16psp'] == "4"):?>
                              Selected
                            <?php endif;?>
                               value="4">4 | SOP sudah diformalkan</option>
                          <option    
                          <?php if($datapsp['ds16psp'] == "5"):?>
                              Selected
                            <?php endif;?>
                               value="5">5 | SOP sudah digunakan dengan lengkap dan disosialisasikan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-5 col-sm-7">
                           <button data-wizard="#wizard1" class="btn btn-default btn-space wizard-previous">Previous</button>
                            <button data-wizard="#wizard1" class="btn btn-primary btn-space wizard-next">Next Step</button>
                          </div>
                        </div>
                       </fieldset>
                    </div>
                    <div data-step="3" class="step-pane">
                       <fieldset <?php echo $dis; ?>>
                        <div class="form-group no-padding">
                          <div class="col-sm-7">
                            <h3 class="wizard-title">Tools and Automation</h3>
                          </div>
                        </div>
                        <div class="form-group ">
                          <label class="control-label col-sm-6">DS1.1 | <?php echo $pTAds11;?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="TAds11">
            <option    
                          <?php if($datata['ds11ta'] == "0"):?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan perangkat (tools)</option>
                          <option    
                          <?php if($datata['ds11ta'] == "1"):?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada perangkat (tools) tapi belum digunakan</option>
                          <option    
                          <?php if($datata['ds11ta'] == "2"):?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat (tools) digunakan atas inisiatif sendiri</option>
                          <option    
                          <?php if($datata['ds11ta'] == "3"):?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan perangkat (tools)</option>
                          <option    
                          <?php if($datata['ds11ta'] == "4"):?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat (tools) sudah mulai digunakan</option>
                          <option    
                          <?php if($datata['ds11ta'] == "5"):?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat (tools) digunakan untuk perbaikan</option>
                        </select>
						
                      </div>
					 
                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS1.2 | <?php echo $pTAds12;?></label>
						 <div class="col-sm-4">
                        <select class="form-control" name="TAds12">
            <option    
                          <?php if($datata['ds12ta'] == "0"):?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan perangkat (tools)</option>
                          <option    
                          <?php if($datata['ds12ta'] == "1"):?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada perangkat (tools) tapi belum digunakan</option>
                          <option    
                          <?php if($datata['ds12ta'] == "2"):?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat (tools) digunakan atas inisiatif sendiri</option>
                          <option    
                          <?php if($datata['ds12ta'] == "3"):?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan perangkat (tools)</option>
                          <option    
                          <?php if($datata['ds12ta'] == "4"):?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat (tools) sudah mulai digunakan</option>
                          <option    
                          <?php if($datata['ds12ta'] == "5"):?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat (tools) digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.3 | <?php echo $pTAds13;?></label>
						<div class="col-sm-4">
                        <select class="form-control" name="TAds13">
                        <option    
                          <?php if($datata['ds13ta'] == "0"):?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan perangkat (tools)</option>
                          <option    
                          <?php if($datata['ds13ta'] == "1"):?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada perangkat (tools) tapi belum digunakan</option>
                          <option    
                          <?php if($datata['ds13ta'] == "2"):?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat (tools) digunakan atas inisiatif sendiri</option>
                          <option    
                          <?php if($datata['ds13ta'] == "3"):?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan perangkat (tools)</option>
                          <option    
                          <?php if($datata['ds13ta'] == "4"):?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat (tools) sudah mulai digunakan</option>
                          <option    
                          <?php if($datata['ds13ta'] == "5"):?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat (tools) digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.4 | <?php echo $pTAds14;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="TAds14">
            <option    
                          <?php if($datata['ds14ta'] == "0"):?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan perangkat (tools)</option>
                          <option    
                          <?php if($datata['ds14ta'] == "1"):?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada perangkat (tools) tapi belum digunakan</option>
                          <option    
                          <?php if($datata['ds14ta'] == "2"):?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat (tools) digunakan atas inisiatif sendiri</option>
                          <option    
                          <?php if($datata['ds14ta'] == "3"):?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan perangkat (tools)</option>
                          <option    
                          <?php if($datata['ds14ta'] == "4"):?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat (tools) sudah mulai digunakan</option>
                          <option    
                          <?php if($datata['ds14ta'] == "5"):?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat (tools) digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.5 | <?php echo $pTAds15;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="TAds15">
            <option    
                          <?php if($datata['ds15ta'] == "0"):?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan perangkat (tools)</option>
                          <option    
                          <?php if($datata['ds15ta'] == "1"):?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada perangkat (tools) tapi belum digunakan</option>
                          <option    
                          <?php if($datata['ds15ta'] == "2"):?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat (tools) digunakan atas inisiatif sendiri</option>
                          <option    
                          <?php if($datata['ds15ta'] == "3"):?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan perangkat (tools)</option>
                          <option    
                          <?php if($datata['ds15ta'] == "4"):?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat (tools) sudah mulai digunakan</option>
                          <option    
                          <?php if($datata['ds15ta'] == "5"):?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat (tools) digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
												<div class="form-group">
                          <label class="control-label col-sm-6">DS1.6 | <?php echo $pTAds16;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="TAds16">
            <option    
                          <?php if($datata['ds16ta'] == "0"):?>
                              Selected
                            <?php endif;?>
                               value="0">0 | Tidak ada penggunaan perangkat (tools)</option>
                          <option    
                          <?php if($datata['ds16ta'] == "1"):?>
                              Selected
                            <?php endif;?>
                                value="1">1 | Ada perangkat (tools) tapi belum digunakan</option>
                          <option    
                          <?php if($datata['ds16ta'] == "2"):?>
                              Selected
                            <?php endif;?>
                                value="2">2 | Perangkat (tools) digunakan atas inisiatif sendiri</option>
                          <option    
                          <?php if($datata['ds16ta'] == "3"):?>
                              Selected
                            <?php endif;?>
                                value="3">3 | Ada rencana penggunaan perangkat (tools)</option>
                          <option    
                          <?php if($datata['ds16ta'] == "4"):?>
                              Selected
                            <?php endif;?>
                                value="4">4 | Perangkat (tools) sudah mulai digunakan</option>
                          <option    
                          <?php if($datata['ds16ta'] == "5"):?>
                              Selected
                            <?php endif;?>
                                value="5">5 | Perangkat (tools) digunakan untuk perbaikan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-5 col-sm-7">
                            <button data-wizard="#wizard1" class="btn btn-default btn-space wizard-previous">Previous</button>
                            <button data-wizard="#wizard1" class="btn btn-primary btn-space wizard-next">Next Step</button>
                          </div>
                        </div>
                       </fieldset>
                    </div>
					                    <div data-step="4" class="step-pane">
                       <fieldset <?php echo $dis; ?>>
                        <div class="form-group no-padding">
                          <div class="col-sm-7">
                            <h3 class="wizard-title">Skills and Expertise</h3>
                          </div>
                        </div>
                        <div class="form-group ">
                          <label class="control-label col-sm-6">DS1.1 | <?php echo $pSEds11;?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="SEds11">
						<option    
                          <?php if($datase['ds11se'] == "0"):?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada keterampilan</option>
                          <option    
                          <?php if($datase['ds11se'] == "1"):?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada pelatihan keterampilan</option>
                          <option    
                          <?php if($datase['ds11se'] == "2"):?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Pelatihan sesuai dengan kebutuhan kerja</option>
                          <option    
                          <?php if($datase['ds11se'] == "3"):?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Sudah mulai ada pelatihan tapi atas inisiatif sendiri</option>
                          <option    
                          <?php if($datase['ds11se'] == "4"):?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Keterampilan dilakukan secara berkala</option>
                          <option    
                          <?php if($datase['ds11se'] == "5"):?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Keterampilan dikembangkan secara berkala</option>
                        </select>
						
                      </div>
					 
                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS1.2 | <?php echo $pSEds12;?></label>
						 <div class="col-sm-4">
                        <select class="form-control" name="SEds12">
            <option    
                          <?php if($datase['ds12se'] == "0"):?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada keterampilan</option>
                          <option    
                          <?php if($datase['ds12se'] == "1"):?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada pelatihan keterampilan</option>
                          <option    
                          <?php if($datase['ds12se'] == "2"):?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Pelatihan sesuai dengan kebutuhan kerja</option>
                          <option    
                          <?php if($datase['ds12se'] == "3"):?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Sudah mulai ada pelatihan tapi atas inisiatif sendiri</option>
                          <option    
                          <?php if($datase['ds12se'] == "4"):?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Keterampilan dilakukan secara berkala</option>
                          <option    
                          <?php if($datase['ds12se'] == "5"):?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Keterampilan dikembangkan secara berkala</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.3 | <?php echo $pSEds13;?></label>
						<div class="col-sm-4">
                        <select class="form-control" name="SEds13">
<option    
                          <?php if($datase['ds13se'] == "0"):?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada keterampilan</option>
                          <option    
                          <?php if($datase['ds13se'] == "1"):?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada pelatihan keterampilan</option>
                          <option    
                          <?php if($datase['ds13se'] == "2"):?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Pelatihan sesuai dengan kebutuhan kerja</option>
                          <option    
                          <?php if($datase['ds13se'] == "3"):?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Sudah mulai ada pelatihan tapi atas inisiatif sendiri</option>
                          <option    
                          <?php if($datase['ds13se'] == "4"):?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Keterampilan dilakukan secara berkala</option>
                          <option    
                          <?php if($datase['ds13se'] == "5"):?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Keterampilan dikembangkan secara berkala</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.4 | <?php echo $pSEds14;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="SEds14">
<option    
                          <?php if($datase['ds14se'] == "0"):?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada keterampilan</option>
                          <option    
                          <?php if($datase['ds14se'] == "1"):?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada pelatihan keterampilan</option>
                          <option    
                          <?php if($datase['ds14se'] == "2"):?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Pelatihan sesuai dengan kebutuhan kerja</option>
                          <option    
                          <?php if($datase['ds14se'] == "3"):?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Sudah mulai ada pelatihan tapi atas inisiatif sendiri</option>
                          <option    
                          <?php if($datase['ds14se'] == "4"):?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Keterampilan dilakukan secara berkala</option>
                          <option    
                          <?php if($datase['ds14se'] == "5"):?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Keterampilan dikembangkan secara berkala</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.5 | {<?php echo $pSEds15;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="SEds15">
<option    
                          <?php if($datase['ds15se'] == "0"):?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada keterampilan</option>
                          <option    
                          <?php if($datase['ds15se'] == "1"):?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada pelatihan keterampilan</option>
                          <option    
                          <?php if($datase['ds15se'] == "2"):?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Pelatihan sesuai dengan kebutuhan kerja</option>
                          <option    
                          <?php if($datase['ds15se'] == "3"):?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Sudah mulai ada pelatihan tapi atas inisiatif sendiri</option>
                          <option    
                          <?php if($datase['ds15se'] == "4"):?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Keterampilan dilakukan secara berkala</option>
                          <option    
                          <?php if($datase['ds15se'] == "5"):?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Keterampilan dikembangkan secara berkala</option>
                        </select>
                      </div>
                        </div>
												<div class="form-group">
                          <label class="control-label col-sm-6">DS1.6 | <?php echo $pSEds16;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="SEds16">
<option    
                          <?php if($datase['ds16se'] == "0"):?>
                              Selected
                            <?php endif;?>
                                 value="0">0 | Tidak ada keterampilan</option>
                          <option    
                          <?php if($datase['ds16se'] == "1"):?>
                              Selected
                            <?php endif;?>
                                  value="1">1 | Belum ada pelatihan keterampilan</option>
                          <option    
                          <?php if($datase['ds16se'] == "2"):?>
                              Selected
                            <?php endif;?>
                                  value="2">2 | Pelatihan sesuai dengan kebutuhan kerja</option>
                          <option    
                          <?php if($datase['ds16se'] == "3"):?>
                              Selected
                            <?php endif;?>
                                  value="3">3 | Sudah mulai ada pelatihan tapi atas inisiatif sendiri</option>
                          <option    
                          <?php if($datase['ds16se'] == "4"):?>
                              Selected
                            <?php endif;?>
                                  value="4">4 | Keterampilan dilakukan secara berkala</option>
                          <option    
                          <?php if($datase['ds16se'] == "5"):?>
                              Selected
                            <?php endif;?>
                                  value="5">5 | Keterampilan dikembangkan secara berkala</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-5 col-sm-7">
                            <button data-wizard="#wizard1" class="btn btn-default btn-space wizard-previous">Previous</button>
                            <button data-wizard="#wizard1" class="btn btn-primary btn-space wizard-next">Next Step</button>
                          </div>
                        </div>
                       </fieldset>
                    </div>
					                    <div data-step="5" class="step-pane">
                       <fieldset <?php echo $dis; ?>>
                        <div class="form-group no-padding">
                          <div class="col-sm-7">
                            <h3 class="wizard-title">Responsibility and Accountability</h3>
                          </div>
                        </div>
<div class="form-group ">
                          <label class="control-label col-sm-6">DS1.1 | <?php echo $pRAds11;?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="RAds11">
						<option     
                          <?php if($datara['ds11ra'] == "0"):?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada pertanggungjawaban</option>
                          <option     
                          <?php if($datara['ds11ra'] == "1"):?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option     
                          <?php if($datara['ds11ra'] == "2"):?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option     
                          <?php if($datara['ds11ra'] == "3"):?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option     
                          <?php if($datara['ds11ra'] == "4"):?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option     
                          <?php if($datara['ds11ra'] == "5"):?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
						
                      </div>
					 
                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS1.2 | <?php echo $pRAds12;?></label>
						 <div class="col-sm-4">
                        <select class="form-control" name="RAds12">
            <option     
                          <?php if($datara['ds12ra'] == "0"):?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada pertanggungjawaban</option>
                          <option     
                          <?php if($datara['ds12ra'] == "1"):?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option     
                          <?php if($datara['ds12ra'] == "2"):?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option     
                          <?php if($datara['ds12ra'] == "3"):?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option     
                          <?php if($datara['ds12ra'] == "4"):?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option     
                          <?php if($datara['ds12ra'] == "5"):?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.3 | <?php echo $pRAds13;?></label>
						<div class="col-sm-4">
                        <select class="form-control" name="RAds13">
            <option     
                          <?php if($datara['ds13ra'] == "0"):?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada pertanggungjawaban</option>
                          <option     
                          <?php if($datara['ds13ra'] == "1"):?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option     
                          <?php if($datara['ds13ra'] == "2"):?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option     
                          <?php if($datara['ds13ra'] == "3"):?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option     
                          <?php if($datara['ds13ra'] == "4"):?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option     
                          <?php if($datara['ds13ra'] == "5"):?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.4 | <?php echo $pRAds14;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="RAds14">
            <option     
                          <?php if($datara['ds14ra'] == "0"):?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada pertanggungjawaban</option>
                          <option     
                          <?php if($datara['ds14ra'] == "1"):?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option     
                          <?php if($datara['ds14ra'] == "2"):?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option     
                          <?php if($datara['ds14ra'] == "3"):?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option     
                          <?php if($datara['ds14ra'] == "4"):?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option     
                          <?php if($datara['ds14ra'] == "5"):?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.5 | <?php echo $pRAds15;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="RAds15">
            <option     
                          <?php if($datara['ds15ra'] == "0"):?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada pertanggungjawaban</option>
                          <option     
                          <?php if($datara['ds15ra'] == "1"):?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option     
                          <?php if($datara['ds15ra'] == "2"):?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option     
                          <?php if($datara['ds15ra'] == "3"):?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option     
                          <?php if($datara['ds15ra'] == "4"):?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option     
                          <?php if($datara['ds15ra'] == "5"):?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
												<div class="form-group">
                          <label class="control-label col-sm-6">DS1.6 | <?php echo $pRAds16;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="RAds16">
            <option     
                          <?php if($datara['ds16ra'] == "0"):?>
                              Selected
                            <?php endif;?>
                                   value="0">0 | Tidak ada pertanggungjawaban</option>
                          <option     
                          <?php if($datara['ds16ra'] == "1"):?>
                              Selected
                            <?php endif;?>
                                    value="1">1 | Tanggung jawab belum jelas</option>
                          <option     
                          <?php if($datara['ds16ra'] == "2"):?>
                              Selected
                            <?php endif;?>
                                    value="2">2 | Tanggung jawab masih informal</option>
                          <option     
                          <?php if($datara['ds16ra'] == "3"):?>
                              Selected
                            <?php endif;?>
                                    value="3">3 | Tanggung jawab sudah diinformasikan</option>
                          <option     
                          <?php if($datara['ds16ra'] == "4"):?>
                              Selected
                            <?php endif;?>
                                    value="4">4 | Tanggung jawab sudah diinformasikan dan disosialisasikan</option>
                          <option     
                          <?php if($datara['ds16ra'] == "5"):?>
                              Selected
                            <?php endif;?>
                                    value="5">5 | Tanggung jawab sudah dijalankan dan diterapakan</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-5 col-sm-7">
                            <button data-wizard="#wizard1" class="btn btn-default btn-space wizard-previous">Previous</button>
                            <button data-wizard="#wizard1" class="btn btn-primary btn-space wizard-next">Next Step</button>
                          </div>
                        </div>
                       </fieldset>
                    </div>
					                    <div data-step="6" class="step-pane">
                       <fieldset <?php echo $dis; ?>>
                        <div class="form-group no-padding">
                          <div class="col-sm-7">
                            <h3 class="wizard-title">Goal Setting and Easurement</h3>
                          </div>
                        </div>
                        <div class="form-group ">
                          <label class="control-label col-sm-6">DS1.1 | <?php echo $pGSMds11;?></label>
                          <div class="col-sm-4">
                        <select class="form-control" name="GSMds11">
						<option      
                          <?php if($datagsm['ds11gsm'] == "0"):?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Tidak ada pengukuran</option>
                          <option      
                          <?php if($datagsm['ds11gsm'] == "1"):?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Belum ada rencana pengukuran</option>
                          <option      
                          <?php if($datagsm['ds11gsm'] == "2"):?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option      
                          <?php if($datagsm['ds11gsm'] == "3"):?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option      
                          <?php if($datagsm['ds11gsm'] == "4"):?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Pengukuran telah disepakati</option>
                          <option      
                          <?php if($datagsm['ds11gsm'] == "5"):?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Sudah ada pengukuran secara rutin dan berkala</option>
                        </select>
						
                      </div>
					 
                       </div>
                        <div class="form-group">
                          <label class="control-label col-sm-6">DS1.2 | <?php echo $pGSMds12;?></label>
						 <div class="col-sm-4">
                        <select class="form-control" name="GSMds12">
             <option      
                          <?php if($datagsm['ds12gsm'] == "0"):?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Tidak ada pengukuran</option>
                          <option      
                          <?php if($datagsm['ds12gsm'] == "1"):?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Belum ada rencana pengukuran</option>
                          <option      
                          <?php if($datagsm['ds12gsm'] == "2"):?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option      
                          <?php if($datagsm['ds12gsm'] == "3"):?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option      
                          <?php if($datagsm['ds12gsm'] == "4"):?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Pengukuran telah disepakati</option>
                          <option      
                          <?php if($datagsm['ds12gsm'] == "5"):?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Sudah ada pengukuran secara rutin dan berkala</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.3 | <?php echo $pGSMds13;?></label>
						<div class="col-sm-4">
                        <select class="form-control" name="GSMds13">
           <option      
                          <?php if($datagsm['ds13gsm'] == "0"):?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Tidak ada pengukuran</option>
                          <option      
                          <?php if($datagsm['ds13gsm'] == "1"):?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Belum ada rencana pengukuran</option>
                          <option      
                          <?php if($datagsm['ds13gsm'] == "2"):?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option      
                          <?php if($datagsm['ds13gsm'] == "3"):?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option      
                          <?php if($datagsm['ds13gsm'] == "4"):?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Pengukuran telah disepakati</option>
                          <option      
                          <?php if($datagsm['ds13gsm'] == "5"):?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Sudah ada pengukuran secara rutin dan berkala</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.4 | <?php echo $pGSMds14;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="GSMds14">
           <option      
                          <?php if($datagsm['ds14gsm'] == "0"):?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Tidak ada pengukuran</option>
                          <option      
                          <?php if($datagsm['ds14gsm'] == "1"):?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Belum ada rencana pengukuran</option>
                          <option      
                          <?php if($datagsm['ds14gsm'] == "2"):?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option      
                          <?php if($datagsm['ds14gsm'] == "3"):?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option      
                          <?php if($datagsm['ds14gsm'] == "4"):?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Pengukuran telah disepakati</option>
                          <option      
                          <?php if($datagsm['ds14gsm'] == "5"):?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Sudah ada pengukuran secara rutin dan berkala</option>
                        </select>
                      </div>
                        </div>
						<div class="form-group">
                          <label class="control-label col-sm-6">DS1.5 | <?php echo $pGSMds15;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="GSMds15">
           <option      
                          <?php if($datagsm['ds15gsm'] == "0"):?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Tidak ada pengukuran</option>
                          <option      
                          <?php if($datagsm['ds15gsm'] == "1"):?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Belum ada rencana pengukuran</option>
                          <option      
                          <?php if($datagsm['ds15gsm'] == "2"):?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option      
                          <?php if($datagsm['ds15gsm'] == "3"):?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option      
                          <?php if($datagsm['ds15gsm'] == "4"):?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Pengukuran telah disepakati</option>
                          <option      
                          <?php if($datagsm['ds15gsm'] == "5"):?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Sudah ada pengukuran secara rutin dan berkala</option>
                        </select>
                      </div>
                        </div>
												<div class="form-group">
                          <label class="control-label col-sm-6">DS1.6 | <?php echo $pGSMds16;?></label>
						  <div class="col-sm-4">
                        <select class="form-control" name="GSMds16">
           <option      
                          <?php if($datagsm['ds16gsm'] == "0"):?>
                              Selected
                            <?php endif;?>
                                     value="0">0 | Tidak ada pengukuran</option>
                          <option      
                          <?php if($datagsm['ds16gsm'] == "1"):?>
                              Selected
                            <?php endif;?>
                                      value="1">1 | Belum ada rencana pengukuran</option>
                          <option      
                          <?php if($datagsm['ds16gsm'] == "2"):?>
                              Selected
                            <?php endif;?>
                                      value="2">2 | Mulai ada Pengukuran</option>
                          <option      
                          <?php if($datagsm['ds16gsm'] == "3"):?>
                              Selected
                            <?php endif;?>
                                      value="3">3 | Pengukuran telah diinformasikan</option>
                          <option      
                          <?php if($datagsm['ds16gsm'] == "4"):?>
                              Selected
                            <?php endif;?>
                                      value="4">4 | Pengukuran telah disepakati</option>
                          <option      
                          <?php if($datagsm['ds16gsm'] == "5"):?>
                              Selected
                            <?php endif;?>
                                      value="5">5 | Sudah ada pengukuran secara rutin dan berkala</option>
                        </select>
                      </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-5 col-sm-7">
                            <button data-wizard="#wizard1" class="btn btn-default btn-space wizard-previous">Previous</button>
                            <button data-wizard="#wizard1" class="btn btn-success btn-space">Complete</button>
                          </div>
                        </div>
                       </fieldset>
                    </div>
                  </div>

				  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
     