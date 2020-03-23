<?php
include 'koneksi.php';
//include 'rata_x3.php';
?>
        <div class="page-head">
          <h2 class="page-head-title">Data Variabel X3 (Format)</h2>
        </div>
        <div class="main-content container-fluid">
   
 <div class="row">
            <div class="col-sm-12">
			              <div class="panel panel-default">
                <div class="panel-heading"><span class="icon mdi mdi-border-all"></span> Data X3</div>
                <div class="tab-container">
                  <ul class="nav nav-tabs ">
                    <li class="active"><a href="#x3" data-toggle="tab"><span class="icon mdi mdi-collection-item-1"></span>X3</a></li>
                    <li><a href="#x3_tot" data-toggle="tab"><span class="icon mdi mdi-collection-item-2"></span>X3*Total</a></li>
                    <li><a href="#x3_2" data-toggle="tab"><span class="icon mdi mdi-collection-item-3"></span>X3^2</a></li>

                  </ul>
                  <div class="tab-content">
				  
				  
                    <div id="x3" class="tab-pane active cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>X3</strong><span class="panel-subtitle">Data X3</span></div>
<div class="panel-body"> 
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >x3.1</th>
              <th >x3.2</th>
              <th >x3.3</th>
              <th >total</th>
              <th >total^2</th>
			  
            </tr>
			 </thead>
			 <tbody>
            <?php
 $tampil=mysqli_query($conn,"SELECT * from x3");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x31  = $data['x31'];
    $x32  = $data['x32'];
    $x33  = $data['x33'];
	$totalx3  = $x31+$x32+$x33;
	$total2x3  = $totalx3*$totalx3;
	
	echo "<tr><td>$responden</td><td>$x31</td><td>$x32</td><td>$x33</td><td>$totalx3</td><td>$total2x3</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x31) as totx31 from x3");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx31"];
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x32) as totx32 from x3");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx32"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x33) as totx33 from x3");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx33"];?></td>
              
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total) as totx3 from x3");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx3"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total_2) as totx3_2 from x3");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx3_2"];?></td></tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
		  
		  
		  <div id="x3_tot" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>X3*Total</strong><span class="panel-subtitle">Data X3*Total</span></div>
<div class="panel-body">
<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >x3.1*total</th>
              <th >x3.2*total</th>
              <th >x3.3*total</th>
			  
            </tr>
			 </thead>
			 <tbody>
            <?php
 $tampil=mysqli_query($conn,"SELECT responden, x31*total as x31, x32*total as x32, x33*total as x33 from x3");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x31  = $data['x31'];
    $x32  = $data['x32'];
    $x33  = $data['x33'];
	
	echo "<tr><td>$responden</td><td>$x31</td><td>$x32</td><td>$x33</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x31*total) as totx31 from x3");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx31"];
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x32*total) as totx32 from x3");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx32"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x33*total) as totx33 from x3");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx33"];?></td>
              
              
              </tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
		  
		  
<div id="x3_2" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>X3^2</strong><span class="panel-subtitle">Data X3^2</span></div>
<div class="panel-body">
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >x3.1^2</th>
              <th >x3.2^2</th>
              <th >x3.3^2</th>
              			  
            </tr>
			 </thead>
			 <tbody>
            <?php
 $tampil=mysqli_query($conn,"SELECT responden, x31*x31 as x31, x32*x32 as x32, x33*x33 as x33 from x3");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x31  = $data['x31'];
    $x32  = $data['x32'];
    $x33  = $data['x33'];
	
	echo "<tr><td>$responden</td><td>$x31</td><td>$x32</td><td>$x33</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x31*x31) as totx31 from x3");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx31"];
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x32*x32) as totx32 from x3");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx32"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x33*x33) as totx33 from x3");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx33"];?></td>
              
              
              </tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
		  
		  
		  
			  	  
			  




            </div>
</div>            </div>
          </div> 