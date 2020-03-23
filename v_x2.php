<?php
include 'koneksi.php';
//include 'rata_x2.php';
?>
        <div class="page-head">
          <h2 class="page-head-title">Data Variabel X2 (Accuracy)</h2>
        </div>
        <div class="main-content container-fluid">
   
 <div class="row">
            <div class="col-sm-12">
			              <div class="panel panel-default">
                <div class="panel-heading"><span class="icon mdi mdi-border-all"></span> Data X2</div>
                <div class="tab-container">
                  <ul class="nav nav-tabs ">
                    <li class="active"><a href="#x2" data-toggle="tab"><span class="icon mdi mdi-collection-item-1"></span>X2</a></li>
                    <li><a href="#x2_tot" data-toggle="tab"><span class="icon mdi mdi-collection-item-2"></span>X2*Total</a></li>
                    <li><a href="#x2_2" data-toggle="tab"><span class="icon mdi mdi-collection-item-3"></span>X2^2</a></li>

                  </ul>
                  <div class="tab-content">
				  
				  
                    <div id="x2" class="tab-pane active cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>X2</strong><span class="panel-subtitle">Data X2</span></div>
<div class="panel-body"> 
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >x2.1</th>
              <th >x2.2</th>
             
              <th >total</th>
              <th >total^2</th>
			  
            </tr>
			 </thead>
			 <tbody>
            <?php
 $tampil=mysqli_query($conn,"SELECT * from x2");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x21  = $data['x21'];
    $x22  = $data['x22'];
	$totalx2  = $x21+$x22;
	$total2x2  = $totalx2*$totalx2;
	
	echo "<tr><td>$responden</td><td>$x21</td><td>$x22</td><td>$totalx2</td><td>$total2x2</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x21) as totx21 from x2");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx21"];
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x22) as totx22 from x2");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx22"];?></td>             
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total) as totx2 from x2");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx2"];?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total_2) as totx2_2 from x2");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx2_2"];?></td></tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
		  
		  
		  <div id="x2_tot" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>X2*Total</strong><span class="panel-subtitle">Data X2*Total</span></div>
<div class="panel-body">
<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >x2.1*total</th>
              <th >x2.2*total</th>
              		  
            </tr>
			 </thead>
			 <tbody>
            <?php
 $tampil=mysqli_query($conn,"SELECT responden, x21*total as x21, x22*total as x22 from x2");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x21  = $data['x21'];
    $x22  = $data['x22'];
	
	echo "<tr><td>$responden</td><td>$x21</td><td>$x22</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x21*total) as totx21 from x2");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx21"];
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x22*total) as totx22 from x2");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx22"];?></td>
              
              </tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
		  
		  
<div id="x2_2" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>X2^2</strong><span class="panel-subtitle">Data X2^2</span></div>
<div class="panel-body">
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
 <thead>
            <tr >
              <th >Responden</th>
              <th >x2.1^2</th>
              <th >x2.2^2</th>
              
			  
            </tr>
			 </thead>
			 <tbody>
            <?php
 $tampil=mysqli_query($conn,"SELECT responden, x21*x21 as x21, x22*x22 as x22 from x2");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x21  = $data['x21'];
    $x22  = $data['x22'];
	
	echo "<tr><td>$responden</td><td>$x21</td><td>$x22</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x21*x21) as totx21 from x2");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx21"];
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x22*x22) as totx22 from x2");
$data=mysqli_fetch_assoc($tampil);
echo $data["totx22"];?></td>
              
              
              </tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
		  

            </div>
</div>            </div>
          </div> 