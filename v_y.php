<?php
include 'koneksi.php';
//include 'rata_y.php';
?>
        <div class="page-head">
          <h2 class="page-head-title">Data Variabel Y (User Satisfaction)</h2>
        </div>
        <div class="main-content container-fluid">
   
 <div class="row">
            <div class="col-sm-12">
			              <div class="panel panel-default">
                <div class="panel-heading"><span class="icon mdi mdi-border-all"></span> Data Y </div>
                <div class="tab-container">
                  <ul class="nav nav-tabs ">
                    <li class="active"><a href="#y" data-toggle="tab"><span class="icon mdi mdi-collection-item-1"></span>Y</a></li>
                    <li><a href="#y_tot" data-toggle="tab"><span class="icon mdi mdi-collection-item-2"></span>Y*Total</a></li>
                    <li><a href="#y_2" data-toggle="tab"><span class="icon mdi mdi-collection-item-3"></span>Y^2</a></li>

                  </ul>
                  <div class="tab-content">
				  
				  
                    <div id="y" class="tab-pane active cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>Y</strong><span class="panel-subtitle">Data Y</span></div>
<div class="panel-body"> 
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >y.1</th>
              <th >y.2</th>
              <th >y.3</th>
              <th >y.4</th>
			  <th >y.5</th>
              <th >total</th>
              <th >total^2</th>
			  
            </tr>
			 </thead>
			 <tbody>
            <?php
 $tampil=mysqli_query($conn,"SELECT * from y");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $y1  = $data['y1'];
    $y2  = $data['y2'];
    $y3  = $data['y3'];
    $y4  = $data['y4'];
	$y5  = $data['y5'];
	$totaly  = $y1+$y2+$y3+$y4+$y5;
	$total2y  = $totaly*$totaly;
	
	echo "<tr><td>$responden</td><td>$y1</td><td>$y2</td><td>$y3</td><td>$y4</td><td>$y5</td><td>$totaly</td><td>$total2y</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(y1) as toty1 from y");
$data=mysqli_fetch_assoc($tampil);
echo $data["toty1"];
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(y2) as toty2 from y");
$data=mysqli_fetch_assoc($tampil);
echo $data["toty2"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(y3) as toty3 from y");
$data=mysqli_fetch_assoc($tampil);
echo $data["toty3"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(y4) as toty4 from y");
$data=mysqli_fetch_assoc($tampil);
echo $data["toty4"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(y5) as toty5 from y");
$data=mysqli_fetch_assoc($tampil);
echo $data["toty5"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total) as toty from y");
$data=mysqli_fetch_assoc($tampil);
echo $data["toty"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total_2) as toty_2 from y");
$data=mysqli_fetch_assoc($tampil);
echo $data["toty_2"];?></td></tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
		  
		  
		  <div id="y_tot" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>Y*Total</strong><span class="panel-subtitle">Data Y*Total</span></div>
<div class="panel-body">
<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >y.1*total</th>
              <th >y.2*total</th>
              <th >y.3*total</th>
              <th >y.4*total</th>
			  <th >y.5*total</th>
			  
            </tr>
			 </thead>
			 <tbody>
            <?php
 $tampil=mysqli_query($conn,"SELECT responden, y1*total as y1, y2*total as y2, y3*total as y3, y4*total as y4, y5*total as y5 from y");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $y1  = $data['y1'];
    $y2  = $data['y2'];
    $y3  = $data['y3'];
    $y4  = $data['y4'];
	$y5  = $data['y5'];
	echo "<tr><td>$responden</td><td>$y1</td><td>$y2</td><td>$y3</td><td>$y4</td><td>$y5</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(y1*total) as toty1 from y");
$data=mysqli_fetch_assoc($tampil);
echo $data["toty1"];
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(y2*total) as toty2 from y");
$data=mysqli_fetch_assoc($tampil);
echo $data["toty2"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(y3*total) as toty3 from y");
$data=mysqli_fetch_assoc($tampil);
echo $data["toty3"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(y4*total) as toty4 from y");
$data=mysqli_fetch_assoc($tampil);
echo $data["toty4"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(y5*total) as toty5 from y");
$data=mysqli_fetch_assoc($tampil);
echo $data["toty5"];?></td>
              </tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
		  
		  
<div id="y_2" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>Y^2</strong><span class="panel-subtitle">Data Y^2</span></div>
<div class="panel-body">
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >y.1*2</th>
              <th >y.2*2</th>
              <th >y.3*2</th>
              <th >y.4*2</th><th >y.5*2</th>
			  
            </tr>
			 </thead>
			 <tbody>
            <?php
 $tampil=mysqli_query($conn,"SELECT responden, y1*y1 as y1, y2*y2 as y2, y3*y3 as y3, y4*y4 as y4, y5*y5 as y5 from y");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $y1  = $data['y1'];
    $y2  = $data['y2'];
    $y3  = $data['y3'];
    $y4  = $data['y4'];
	$y5  = $data['y5'];
	
	echo "<tr><td>$responden</td><td>$y1</td><td>$y2</td><td>$y3</td><td>$y4</td><td>$y5</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(y1*y1) as toty1 from y");
$data=mysqli_fetch_assoc($tampil);
echo $data["toty1"];
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(y2*y2) as toty2 from y");
$data=mysqli_fetch_assoc($tampil);
echo $data["toty2"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(y3*y3) as toty3 from y");
$data=mysqli_fetch_assoc($tampil);
echo $data["toty3"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(y4*y4) as toty4 from y");
$data=mysqli_fetch_assoc($tampil);
echo $data["toty4"];?></td>              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(y5*y5) as toty5 from y");
$data=mysqli_fetch_assoc($tampil);
echo $data["toty5"];?></td>
              </tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
		  
		  
		  
			  	  
			  




            </div>
</div>            </div>
          </div> 