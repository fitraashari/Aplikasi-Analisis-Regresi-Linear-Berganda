<?php
include 'koneksi.php';
//include 'rata_x1.php';
?>
        <div class="page-head">
          <h2 class="page-head-title">Data Variabel X1 (Content)</h2>
        </div>
        <div class="main-content container-fluid">
   
 <div class="row">
            <div class="col-sm-12">
			              <div class="panel panel-default">
                <div class="panel-heading"><span class="icon mdi mdi-border-all"></span> Data X1</div>
                <div class="tab-container">
                  <ul class="nav nav-tabs ">
                    <li class="active"><a href="#x1" data-toggle="tab"><span class="icon mdi mdi-collection-item-1"></span>X1</a></li>
                    <li><a href="#x1_tot" data-toggle="tab"><span class="icon mdi mdi-collection-item-2"></span>X1*Total</a></li>
                    <li><a href="#x1_2" data-toggle="tab"><span class="icon mdi mdi-collection-item-3"></span>X1^2</a></li>

                  </ul>
                  <div class="tab-content">
				  
				  
                    <div id="x1" class="tab-pane active cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>X1</strong><span class="panel-subtitle">Data X1</span></div>
<div class="panel-body"> 
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >x1.1</th>
              <th >x1.2</th>
              <th >x1.3</th>
              <th >total</th>
              <th >total^2</th>
            </tr>
			 </thead>
			 <tbody>
            <?php
 $tampil=mysqli_query($conn,"SELECT * from x1");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x11  = $data['x11'];
    $x12  = $data['x12'];
    $x13  = $data['x13'];
	$totalx1  = $x11+$x12+$x13;
	$total2x1  = $totalx1*$totalx1;
	
	echo "<tr><td>$responden</td><td>$x11</td><td>$x12</td><td>$x13</td><td>$totalx1</td><td>$total2x1</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x11) as totx11 from x1");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx11"];
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x12) as totx12 from x1");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx12"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x13) as totx13 from x1");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx13"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total) as totx1 from x1");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx1"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total_2) as totx1_2 from x1");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx1_2"];?></td></tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
		  
		  
		  <div id="x1_tot" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>X1*Total</strong><span class="panel-subtitle">Data X1*Total</span></div>
<div class="panel-body">
<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >x1.1*total</th>
              <th >x1.2*total</th>
              <th >x1.3*total</th>
      		  
            </tr>
			 </thead>
			 <tbody>
            <?php
 $tampil=mysqli_query($conn,"SELECT responden, x11*total as x11, x12*total as x12, x13*total as x13 from x1");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x11  = $data['x11'];
    $x12  = $data['x12'];
    $x13  = $data['x13'];
	
	echo "<tr><td>$responden</td><td>$x11</td><td>$x12</td><td>$x13</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x11*total) as totx11 from x1");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx11"];
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x12*total) as totx12 from x1");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx12"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x13*total) as totx13 from x1");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx13"];?></td>
          
              </tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
		  
		  
<div id="x1_2" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>X1^2</strong><span class="panel-subtitle">Data X1^2</span></div>
<div class="panel-body">
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >x1.1^2</th>
              <th >x1.2^2</th>
              <th >x1.3^2</th>
          
			  
            </tr>
			 </thead>
			 <tbody>
            <?php
 $tampil=mysqli_query($conn,"SELECT responden, x11*x11 as x11, x12*x12 as x12, x13*x13 as x13 from x1");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x11  = $data['x11'];
    $x12  = $data['x12'];
    $x13  = $data['x13'];
    
	
	echo "<tr><td>$responden</td><td>$x11</td><td>$x12</td><td>$x13</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x11*x11) as totx11 from x1");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx11"];
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x12*x12) as totx12 from x1");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx12"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x13*x13) as totx13 from x1");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx13"];?></td>
              
              </tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
		  
		  
		  
			  	  
			  




            </div>
</div>            </div>
          </div> 