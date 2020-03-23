<?php
include 'koneksi.php';
//include 'rata_x5.php';
?>
        <div class="page-head">
          <h2 class="page-head-title">Data Variabel X5 (Timeliness)</h2>
        </div>
        <div class="main-content container-fluid">
   
 <div class="row">
            <div class="col-sm-12">
			              <div class="panel panel-default">
                <div class="panel-heading"><span class="icon mdi mdi-border-all"></span> Data X5</div>
                <div class="tab-container">
                  <ul class="nav nav-tabs ">
                    <li class="active"><a href="#x5" data-toggle="tab"><span class="icon mdi mdi-collection-item-1"></span>X5</a></li>
                    <li><a href="#x5_tot" data-toggle="tab"><span class="icon mdi mdi-collection-item-2"></span>X5*Total</a></li>
                    <li><a href="#x5_2" data-toggle="tab"><span class="icon mdi mdi-collection-item-3"></span>X5^2</a></li>

                  </ul>
                  <div class="tab-content">
				  
				  
                    <div id="x5" class="tab-pane active cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>X5</strong><span class="panel-subtitle">Data X5</span></div>
<div class="panel-body"> 
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >x5.1</th>
              <th >x5.2</th>
              <th >x5.3</th>
              <th >total</th>
              <th >total^2</th>
			  
            </tr>
			 </thead>
			 <tbody>
            <?php
 $tampil=mysqli_query($conn,"SELECT * from x5");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x51  = $data['x51'];
    $x52  = $data['x52'];
    $x53  = $data['x53'];
	$totalx5  = $x51+$x52+$x53;
	$total2x5  = $totalx5*$totalx5;
	
	echo "<tr><td>$responden</td><td>$x51</td><td>$x52</td><td>$x53</td><td>$totalx5</td><td>$total2x5</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x51) as totx51 from x5");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx51"];
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x52) as totx52 from x5");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx52"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x53) as totx53 from x5");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx53"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total) as totx5 from x5");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx5"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total_2) as totx5_2 from x5");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx5_2"];?></td></tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
		  
		  
		  <div id="x5_tot" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>X5*Total</strong><span class="panel-subtitle">Data X5*Total</span></div>
<div class="panel-body">
<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >x5.1*total</th>
              <th >x5.2*total</th>
              <th >x5.3*total</th>
			  
            </tr>
			 </thead>
			 <tbody>
            <?php
 $tampil=mysqli_query($conn,"SELECT responden, x51*total as x51, x52*total as x52, x53*total as x53 from x5");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x51  = $data['x51'];
    $x52  = $data['x52'];
    $x53  = $data['x53'];
	
	echo "<tr><td>$responden</td><td>$x51</td><td>$x52</td><td>$x53</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x51*total) as totx51 from x5");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx51"];
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x52*total) as totx52 from x5");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx52"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x53*total) as totx53 from x5");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx53"];?></td>
              </tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
		  
		  
<div id="x5_2" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>X5^2</strong><span class="panel-subtitle">Data X5^2</span></div>
<div class="panel-body">
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >x5.1^2</th>
              <th >x5.2^2</th>
              <th >x5.3^2</th>
			  
            </tr>
			 </thead>
			 <tbody>
            <?php
 $tampil=mysqli_query($conn,"SELECT responden, x51*x51 as x51, x52*x52 as x52, x53*x53 as x53 from x5");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x51  = $data['x51'];
    $x52  = $data['x52'];
    $x53  = $data['x53'];
	
	echo "<tr><td>$responden</td><td>$x51</td><td>$x52</td><td>$x53</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x51*x51) as totx51 from x5");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx51"];
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x52*x52) as totx52 from x5");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx52"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x53*x53) as totx53 from x5");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx53"];?></td>

              </tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
		  
		  
		  
			  	  
			  




            </div>
</div>            </div>
          </div> 