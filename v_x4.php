<?php
include 'koneksi.php';
//include 'rata_x4.php';
?>
        <div class="page-head">
          <h2 class="page-head-title">Data Variabel X4 (Ease Of Use)</h2>
        </div>
        <div class="main-content container-fluid">
   
 <div class="row">
            <div class="col-sm-12">
			              <div class="panel panel-default">
                <div class="panel-heading"><span class="icon mdi mdi-border-all"></span> Data X4</div>
                <div class="tab-container">
                  <ul class="nav nav-tabs ">
                    <li class="active"><a href="#x4" data-toggle="tab"><span class="icon mdi mdi-collection-item-1"></span>X4</a></li>
                    <li><a href="#x4_tot" data-toggle="tab"><span class="icon mdi mdi-collection-item-2"></span>X4*Total</a></li>
                    <li><a href="#x4_2" data-toggle="tab"><span class="icon mdi mdi-collection-item-3"></span>X4^2</a></li>

                  </ul>
                  <div class="tab-content">
				  
				  
                    <div id="x4" class="tab-pane active cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>X4</strong><span class="panel-subtitle">Data X4</span></div>
<div class="panel-body"> 
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >x4.1</th>
              <th >x4.2</th>
              <th >x4.3</th>
              <th >x4.4</th>
              <th >total</th>
              <th >total^2</th>
			  
            </tr>
			 </thead>
			 <tbody>
            <?php
 $tampil=mysqli_query($conn,"SELECT * from x4");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x41  = $data['x41'];
    $x42  = $data['x42'];
    $x43  = $data['x43'];
	  $x44  = $data['x44'];
	$totalx4  = $x41+$x42+$x43+$x44;
	$total2x4  = $totalx4*$totalx4;
	
	echo "<tr><td>$responden</td><td>$x41</td><td>$x42</td><td>$x43</td><td>$x44</td><td>$totalx4</td><td>$total2x4</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x41) as totx41 from x4");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx41"];
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x42) as totx42 from x4");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx42"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x43) as totx43 from x4");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx43"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x44) as totx44 from x4");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx44"];?></td>
              
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total_2) as totx4_2 from x4");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx4_2"];?></td></tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
		  
		  
		  <div id="x4_tot" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>X4*Total</strong><span class="panel-subtitle">Data X4*Total</span></div>
<div class="panel-body">
<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >x4.1*total</th>
              <th >x4.2*total</th>
              <th >x4.3*total</th>
			        <th >x4.4*total</th>
              
			  
            </tr>
			 </thead>
			 <tbody>
            <?php
 $tampil=mysqli_query($conn,"SELECT responden, x41*total as x41, x42*total as x42, x43*total as x43, x44*total as x44 from x4");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x41  = $data['x41'];
    $x42  = $data['x42'];
    $x43  = $data['x43'];
	$x43  = $data['x44'];
	
	echo "<tr><td>$responden</td><td>$x41</td><td>$x42</td><td>$x43</td><td>$x44</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x41*total) as totx41 from x4");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx41"];
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x42*total) as totx42 from x4");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx42"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x43*total) as totx43 from x4");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx43"];?></td>
				<td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x44*total) as totx44 from x4");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx44"];?></td>
              
              </tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
		  
		  
<div id="x4_2" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>X4^2</strong><span class="panel-subtitle">Data X4^2</span></div>
<div class="panel-body">
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >x4.1^2</th>
              <th >x4.2^2</th>
              <th >x4.3^2</th>
			  <th >x4.4^2</th>
			  
            </tr>
			 </thead>
			 <tbody>
            <?php
 $tampil=mysqli_query($conn,"SELECT responden, x41*x41 as x41, x42*x42 as x42, x43*x43 as x43, x44*x44 as x44 from x4");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x41  = $data['x41'];
    $x42  = $data['x42'];
    $x43  = $data['x43'];
	$x44  = $data['x44'];
	
	echo "<tr><td>$responden</td><td>$x41</td><td>$x42</td><td>$x43</td><td>$x44</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x41*x41) as totx41 from x4");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx41"];
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x42*x42) as totx42 from x4");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx42"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x43*x43) as totx43 from x4");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx43"];?></td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x44*x44) as totx44 from x4");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx44"];?></td>
              
              </tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
		  
		  
		  
			  	  
			  




            </div>
</div>            </div>
          </div> 