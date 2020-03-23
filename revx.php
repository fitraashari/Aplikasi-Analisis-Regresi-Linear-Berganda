<?php
include 'koneksi.php';
//include 'rata_y.php';
?><script src="http://localhost/eucs_m/assets/lib/chartjs/Chart.min.js" type="text/javascript"></script>
<script src="http://localhost/eucs_m/assets/js/app-charts-chartjs.js" type="text/javascript"></script>
        <div class="page-head">
          <h2 class="page-head-title">Data Capaian</h2>
        </div>
        <div class="main-content container-fluid">
   
 <div class="row">
            <div class="col-sm-12">
			              <div class="panel panel-default">
                <div class="panel-heading"><span class="icon mdi mdi-border-all"></span> Data Capaian </div>
                <div class="tab-container">
                  <ul class="nav nav-tabs ">
                    <li class="active"><a href="#y" data-toggle="tab"><span class="icon mdi mdi-collection-item-1"></span>Capaian</a></li>
                    <li><a href="#grafik" data-toggle="tab"><span class="icon mdi mdi-collection-item-2"></span>Grafik</a></li>

                  </ul>
                  <div class="tab-content">
				  
				  
                    <div id="y" class="tab-pane active cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>Capaian</strong><span class="panel-subtitle">Data Capaian</span></div>
<div class="panel-body"> 
					<table class="table table-condensed table-hover table-bordered table-striped" >
 <thead>
            <tr >
              <th >X1</th>
              <th >Mean</th>
              <th >Capaian</th>
			  
            </tr>
			 </thead>
			 <tbody>
         <?php
         $totl_mean=0;
    for($i=1;$i<4;$i++){
      $qr_mean=mysqli_query($conn,"SELECT ROUND(AVG(x1".$i."),1) as mean FROM x1");
$hasil_mean=mysqli_fetch_assoc($qr_mean);

$qr_capaian=mysqli_query($conn,"SELECT ROUND(((ROUND(AVG(x1".$i."),1))/4 *100),1) as capaian FROM x1");
$hasil_capaian=mysqli_fetch_assoc($qr_capaian);
      echo "<tr><td>X1.".$i."</td><td>".$hasil_mean["mean"]."</td><td>".$hasil_capaian["capaian"]."%</td></tr>";
    }

    $qr_meanx1=mysqli_query($conn,"SELECT ROUND((ROUND(AVG(x11),1)+ROUND(AVG(x12),1)+ROUND(AVG(x13),1))/3,1) totmean FROM x1");
$hasil_meanx1=mysqli_fetch_assoc($qr_meanx1);

$qr_capaianx1=mysqli_query($conn,"SELECT ROUND((ROUND(((ROUND(AVG(x11),1))/4 *100),1)+ROUND(((ROUND(AVG(x12),1))/4 *100),1)+ROUND(((ROUND(AVG(x13),1))/4 *100),1))/3,1) totcapaian FROM x1");
$hasil_capaianx1=mysqli_fetch_assoc($qr_capaianx1);

    ?>   </tbody> <tbody>
    <tr class="primary">
      <td>Total X1</td><td><?php echo $hasil_meanx1['totmean']; ?></td><td><?php echo $hasil_capaianx1['totcapaian']."%"; ?></td></tr>
       </tbody>
      </table>
      <table class="table table-condensed table-hover table-bordered table-striped" >
 <thead>
            <tr >
              <th >X2</th>
              <th >Mean</th>
              <th >Capaian</th>
			  
            </tr>
			 </thead>
			 <tbody>
         <?php
         $totl_mean=0;
    for($i=1;$i<3;$i++){
      $qr_mean=mysqli_query($conn,"SELECT ROUND(AVG(x2".$i."),1) as mean FROM x2");
$hasil_mean=mysqli_fetch_assoc($qr_mean);

$qr_capaian=mysqli_query($conn,"SELECT ROUND(((ROUND(AVG(x2".$i."),1))/4 *100),1) as capaian FROM x2");
$hasil_capaian=mysqli_fetch_assoc($qr_capaian);
      echo "<tr><td>X2.".$i."</td><td>".$hasil_mean["mean"]."</td><td>".$hasil_capaian["capaian"]."%</td></tr>";
    }

    $qr_meanx2=mysqli_query($conn,"SELECT ROUND((ROUND(AVG(x21),1)+ROUND(AVG(x22),1))/2,1) totmean FROM x2");
$hasil_meanx2=mysqli_fetch_assoc($qr_meanx2);

$qr_capaianx2=mysqli_query($conn,"SELECT ROUND((ROUND(((ROUND(AVG(x21),1))/4 *100),1)+ROUND(((ROUND(AVG(x22),1))/4 *100),1))/2,1) totcapaian FROM x2");
$hasil_capaianx2=mysqli_fetch_assoc($qr_capaianx2);

    ?>   </tbody> <tbody>
    <tr class="primary">
      <td>Total X2</td><td><?php echo $hasil_meanx2['totmean']; ?></td><td><?php echo $hasil_capaianx2['totcapaian']."%"; ?></td></tr>
       </tbody>
      </table>
    
      <table class="table table-condensed table-hover table-bordered table-striped" >
 <thead>
            <tr >
              <th >X3</th>
              <th >Mean</th>
              <th >Capaian</th>
			  
            </tr>
			 </thead>
			 <tbody>
         <?php
         $totl_mean=0;
    for($i=1;$i<4;$i++){
      $qr_mean=mysqli_query($conn,"SELECT ROUND(AVG(x3".$i."),1) as mean FROM x3");
$hasil_mean=mysqli_fetch_assoc($qr_mean);

$qr_capaian=mysqli_query($conn,"SELECT ROUND(((ROUND(AVG(x3".$i."),1))/4 *100),1) as capaian FROM x3");
$hasil_capaian=mysqli_fetch_assoc($qr_capaian);
      echo "<tr><td>X3.".$i."</td><td>".$hasil_mean["mean"]."</td><td>".$hasil_capaian["capaian"]."%</td></tr>";
    }

    $qr_meanx3=mysqli_query($conn,"SELECT ROUND((ROUND(AVG(x31),1)+ROUND(AVG(x32),1)+ROUND(AVG(x33),1))/3,1) totmean FROM x3");
$hasil_meanx3=mysqli_fetch_assoc($qr_meanx3);

$qr_capaianx3=mysqli_query($conn,"SELECT ROUND((ROUND(((ROUND(AVG(x31),1))/4 *100),1)+ROUND(((ROUND(AVG(x32),1))/4 *100),1)+ROUND(((ROUND(AVG(x33),1))/4 *100),1))/3,1) totcapaian FROM x3");
$hasil_capaianx3=mysqli_fetch_assoc($qr_capaianx3);

    ?>   </tbody> <tbody>
    <tr class="primary">
      <td>Total X3</td><td><?php echo $hasil_meanx3['totmean']; ?></td><td><?php echo $hasil_capaianx3['totcapaian']."%"; ?></td></tr>
       </tbody>
      </table>

            <table class="table table-condensed table-hover table-bordered table-striped" >
 <thead>
            <tr >
              <th >X4</th>
              <th >Mean</th>
              <th >Capaian</th>
			  
            </tr>
			 </thead>
			 <tbody>
         <?php
         $totl_mean=0;
    for($i=1;$i<5;$i++){
      $qr_mean=mysqli_query($conn,"SELECT ROUND(AVG(x4".$i."),1) as mean FROM x4");
$hasil_mean=mysqli_fetch_assoc($qr_mean);

$qr_capaian=mysqli_query($conn,"SELECT ROUND(((ROUND(AVG(x4".$i."),1))/4 *100),1) as capaian FROM x4");
$hasil_capaian=mysqli_fetch_assoc($qr_capaian);
      echo "<tr><td>X4.".$i."</td><td>".$hasil_mean["mean"]."</td><td>".$hasil_capaian["capaian"]."%</td></tr>";
    }

    $qr_meanx4=mysqli_query($conn,"SELECT ROUND((ROUND(AVG(x41),1)+ROUND(AVG(x42),1)+ROUND(AVG(x43),1)+ROUND(AVG(x44),1))/4,1) totmean FROM x4");
$hasil_meanx4=mysqli_fetch_assoc($qr_meanx4);

$qr_capaianx4=mysqli_query($conn,"SELECT ROUND((ROUND(((ROUND(AVG(x41),1))/4 *100),1)+ROUND(((ROUND(AVG(x42),1))/4 *100),1)+ROUND(((ROUND(AVG(x43),1))/4 *100),1)+ROUND(((ROUND(AVG(x44),1))/4 *100),1))/4,1) totcapaian FROM x4");
$hasil_capaianx4=mysqli_fetch_assoc($qr_capaianx4);

    ?>   </tbody> <tbody>
    <tr class="primary">
      <td>Total X4</td><td><?php echo $hasil_meanx4['totmean']; ?></td><td><?php echo $hasil_capaianx4['totcapaian']."%"; ?></td></tr>
       </tbody>
      </table>
      
      <table class="table table-condensed table-hover table-bordered table-striped" >
 <thead>
            <tr >
              <th >X5</th>
              <th >Mean</th>
              <th >Capaian</th>
			  
            </tr>
			 </thead>
			 <tbody>
         <?php
         $totl_mean=0;
    for($i=1;$i<4;$i++){
      $qr_mean=mysqli_query($conn,"SELECT ROUND(AVG(x5".$i."),1) as mean FROM x5");
$hasil_mean=mysqli_fetch_assoc($qr_mean);

$qr_capaian=mysqli_query($conn,"SELECT ROUND(((ROUND(AVG(x5".$i."),1))/4 *100),1) as capaian FROM x5");
$hasil_capaian=mysqli_fetch_assoc($qr_capaian);
      echo "<tr><td>X3.".$i."</td><td>".$hasil_mean["mean"]."</td><td>".$hasil_capaian["capaian"]."%</td></tr>";
    }

    $qr_meanx5=mysqli_query($conn,"SELECT ROUND((ROUND(AVG(x51),1)+ROUND(AVG(x52),1)+ROUND(AVG(x53),1))/3,1) totmean FROM x5");
$hasil_meanx5=mysqli_fetch_assoc($qr_meanx5);

$qr_capaianx5=mysqli_query($conn,"SELECT ROUND((ROUND(((ROUND(AVG(x51),1))/4 *100),1)+ROUND(((ROUND(AVG(x52),1))/4 *100),1)+ROUND(((ROUND(AVG(x53),1))/4 *100),1))/3,1) totcapaian FROM x5");
$hasil_capaianx5=mysqli_fetch_assoc($qr_capaianx5);

    ?>   </tbody> <tbody>
    <tr class="primary">
      <td>Total X5</td><td><?php echo $hasil_meanx5['totmean']; ?></td><td><?php echo $hasil_capaianx5['totcapaian']."%"; ?></td></tr>
       </tbody>
      </table>


      <table class="table table-condensed table-hover table-bordered table-striped" >
 <thead>
            <tr >
              <th >Y</th>
              <th >Mean</th>
              <th >Capaian</th>
			  
            </tr>
			 </thead>
			 <tbody>
         <?php
         $totl_mean=0;
    for($i=1;$i<6;$i++){
      $qr_mean=mysqli_query($conn,"SELECT ROUND(AVG(y".$i."),1) as mean FROM y");
$hasil_mean=mysqli_fetch_assoc($qr_mean);

$qr_capaian=mysqli_query($conn,"SELECT ROUND(((ROUND(AVG(y".$i."),1))/4 *100),1) as capaian FROM y");
$hasil_capaian=mysqli_fetch_assoc($qr_capaian);
      echo "<tr><td>Y.".$i."</td><td>".$hasil_mean["mean"]."</td><td>".$hasil_capaian["capaian"]."%</td></tr>";
    }

    $qr_meany=mysqli_query($conn,"SELECT ROUND((ROUND(AVG(y1),1)+ROUND(AVG(y2),1)+ROUND(AVG(y3),1)+ROUND(AVG(y4),1)+ROUND(AVG(y5),1))/5,1) totmean FROM y");
$hasil_meany=mysqli_fetch_assoc($qr_meany);

$qr_capaiany=mysqli_query($conn,"SELECT ROUND((ROUND(((ROUND(AVG(y1),1))/4 *100),1)+ROUND(((ROUND(AVG(y2),1))/4 *100),1)+ROUND(((ROUND(AVG(y3),1))/4 *100),1)+ROUND(((ROUND(AVG(y4),1))/4 *100),1)+ROUND(((ROUND(AVG(y5),1))/4 *100),1))/5,1) totcapaian FROM y");
$hasil_capaiany=mysqli_fetch_assoc($qr_capaiany);

    ?>   </tbody> <tbody>
    <tr class="primary">
      <td>Total Y</td><td><?php echo $hasil_meany['totmean']; ?></td><td><?php echo $hasil_capaiany['totcapaian']."%"; ?></td></tr>
       </tbody>
      </table>
		                 </div>
		   </div>
              </div>
		  
              
		  <div id="grafik" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>Grafik</strong><span class="panel-subtitle">Grafik</span></div>
<div class="panel-body">
<div class="widget widget-fullwidth be-loading">
                <div class="widget-head">
                  
                  <span class="title ">Grafik Mean</span>
                </div>
                <div class="widget-chart-container">
  
                     <div class="widget-counter-group widget-counter-group-right">
    
                                  <div class="widget-chart-info">
                            <canvas id="chartMEAN" width="1000" height="350"></canvas>           
                  </div>
                  </div>
                  
                  
                </div>

                <div class="be-spinner">
              
                </div>
              </div>
              <div class="widget widget-fullwidth be-loading">
                <div class="widget-head">
                  
                  <span class="title ">Grafik Capaian</span>
                </div>
                <div class="widget-chart-container">
  
                     <div class="widget-counter-group widget-counter-group-right">
    
                                  <div class="widget-chart-info">
                            <canvas id="chartCAPAIAN" width="1000" height="350"></canvas>           
                  </div>
                  </div>
                  
                  
                </div>

                <div class="be-spinner">
              
                </div>
              </div>
              <script>
            var ctx = document.getElementById("chartMEAN");
            var chartMEAN = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["X1","X2","X3","X4","X5","Y"],
                    datasets: [{
                            label: 'MEAN',
                            data: [<?php echo $hasil_meanx1['totmean']; ?>,<?php echo $hasil_meanx2['totmean']; ?>,<?php echo $hasil_meanx3['totmean']; ?>,<?php echo $hasil_meanx4['totmean']; ?>,<?php echo $hasil_meanx5['totmean']; ?>,<?php echo $hasil_meany['totmean']; ?>],
                            backgroundColor: [
                              'rgba(54, 162, 235, 0.5)',
                                'rgba(54, 162, 235, 0.5)',
                                'rgba(54, 162, 235, 0.5)',
                                'rgba(54, 162, 235, 0.5)',
                                'rgba(54, 162, 235, 0.5)',
                                'rgba(54, 162, 235, 0.5)'
                            ],
                            borderColor: [
                              'rgba(54, 162, 235, 1)',
                              'rgba(54, 162, 235, 1)',
                              'rgba(54, 162, 235, 1)',
                              'rgba(54, 162, 235, 1)',
                              'rgba(54, 162, 235, 1)',
                              'rgba(54, 162, 235, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
        
                options: {
          responsive:false,
          legend: {
            display: false
         },
                    scales: {
                        yAxes: [{
                                ticks: {
                  suggestedMax: 5,
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script> 
		  <script>
            var ctx = document.getElementById("chartCAPAIAN");
            var chartCAPAIAN = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["X1","X2","X3","X4","X5","Y"],
                    datasets: [{
                            label: 'capaian',
                            data: [<?php echo $hasil_capaianx1['totcapaian']; ?>,<?php echo $hasil_capaianx2['totcapaian']; ?>,<?php echo $hasil_capaianx3['totcapaian']; ?>,<?php echo $hasil_capaianx4['totcapaian']; ?>,<?php echo $hasil_capaianx5['totcapaian']; ?>,<?php echo $hasil_capaiany['totcapaian']; ?>],
                            backgroundColor: [
                              'rgba(255, 206, 86, 0.5)',
                                'rgba(255, 206, 86, 0.5)',
                                'rgba(255, 206, 86, 0.5)',
                                'rgba(255, 206, 86, 0.5)',
                                'rgba(255, 206, 86, 0.5)',
                                'rgba(255, 206, 86, 0.5)'
                            ],
                            borderColor: [
                              'rgba(255, 206, 86, 1)',
                              'rgba(255, 206, 86, 1)',
                              'rgba(255, 206, 86, 1)',
                              'rgba(255, 206, 86, 1)',
                              'rgba(255, 206, 86, 1)',
                              'rgba(255, 206, 86, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
        
                options: {
          responsive:false,
          legend: {
            display: false
         },
                    scales: {
                        yAxes: [{
                                ticks: {
                  suggestedMax: 100,
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script> 
		                 </div>
		   </div>
              </div>
		  
		  
		  
			  	  
			  




            </div>
</div>            </div>
          </div> 