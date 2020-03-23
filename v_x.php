<?php
include 'koneksi.php';
?>
        <div class="page-head">
          <h2 class="page-head-title">Analisis Regresi Linear Berganda</h2>
          
        </div>
        <div class="main-content container-fluid">
   
 <div class="row">
            <div class="col-sm-12">
			              <div class="panel panel-default">
                <div class="panel-heading"><span class="icon mdi mdi-border-all"></span> Regresi Linear Berganda</div>
                <div class="tab-container">
                  <ul class="nav nav-tabs ">
                    <li class="active"><a href="#x" data-toggle="tab"><span class="icon mdi mdi-collection-item-1"></span>Total</a></li>
                    <li><a href="#x_2" data-toggle="tab"><span class="icon mdi mdi-collection-item-2"></span>Total^2</a></li>
                    <li><a href="#x_y" data-toggle="tab"><span class="icon mdi mdi-collection-item-3"></span>Total*Y</a></li>
					 <li><a href="#x1_x" data-toggle="tab"><span class="icon mdi mdi-collection-item-4"></span>Total X1*Total</a></li>
					 <li><a href="#x2_x" data-toggle="tab"><span class="icon mdi mdi-collection-item-5"></span>Total X2*Total</a></li>
					 <li><a href="#x3_x" data-toggle="tab"><span class="icon mdi mdi-collection-item-6"></span>Total X3*Total</a></li>
					 <li><a href="#x4_x" data-toggle="tab"><span class="icon mdi mdi-collection-item-7"></span>Total X4*Total</a></li>
					 <li><a href="#x5_x" data-toggle="tab"><span class="icon mdi mdi-collection-item-8"></span>Total X5*Total</a></li>
					 <li><a href="#hasil" data-toggle="tab"><span class="icon mdi mdi-collection-bookmark"></span>Hasil</a></li>

                  </ul>
                  <div class="tab-content">
				  
				  
                    <div id="x" class="tab-pane active cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>Total</strong><span class="panel-subtitle">Data Total</span></div>
<div class="panel-body"> 
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
<thead>
            <tr >
              <th >Responden</th>
              <th >Total X1</th>
              <th >Total X2</th>
              <th >Total X3</th>
              <th >Total X4</th>
              <th >Total X5</th>
			  <th >Total Y</th>

            </tr>
			 </thead><tbody>
                <?php
$tampil=mysqli_query($conn,"SELECT x1.responden, x1.total as x1_total, x2.total as x2_total, x3.total as x3_total, x4.total as x4_total, x5.total as x5_total, y.total as y_total from x1, x2, x3, x4, x5,y where x1.responden=x2.responden and x1.responden=x3.responden and x1.responden=x4.responden and x1.responden=x5.responden and x1.responden=y.responden");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x1_total  = $data['x1_total'];
    $x2_total  = $data['x2_total'];
    $x3_total  = $data['x3_total'];
	$x4_total  = $data['x4_total'];
	$x5_total  = $data['x5_total'];
	$y_total  = $data['y_total'];
	echo "<tr><td>$responden</td><td>$x1_total</td><td>$x2_total</td><td>$x3_total</td><td>$x4_total</td><td>$x5_total</td><td>$y_total</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total) as totx1 from x1");
$data=mysqli_fetch_assoc($tampil);
$totx1=$data["totx1"];
echo $totx1;
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total) as totx2 from x2");
$data=mysqli_fetch_assoc($tampil);
$totx2=$data["totx2"];
echo $totx2;?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total) as totx3 from x3");
$data=mysqli_fetch_assoc($tampil);
$totx3=$data["totx3"];
echo $totx3;?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total) as totx4 from x4");
$data=mysqli_fetch_assoc($tampil);
$totx4=$data["totx4"];
echo $totx4;?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total) as totx5 from x5");
$data=mysqli_fetch_assoc($tampil);
$totx5=$data["totx5"];
echo $totx5;?></td>              

<td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total) as toty from y");
$data=mysqli_fetch_assoc($tampil);
$toty=$data["toty"];
echo $toty;?></td></tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
		  
		  <div id="x_2" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>Total X^2</strong><span class="panel-subtitle">Data Total^2</span></div>
<div class="panel-body"> 
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
<thead>
            <tr >
              <th >Responden</th>
              <th >Total x1^2</th>
              <th >Total x2^2</th>
              <th >Total x3^2</th>
              <th >Total x4^2</th>
              <th >Total x5^2</th>

            </tr>
			 </thead><tbody>
                <?php
$tampil=mysqli_query($conn,"SELECT x1.responden, x1.total*x1.total as x1_total, x2.total*x2.total as x2_total, x3.total*x3.total as x3_total, x4.total*x4.total as x4_total, x5.total*x5.total as x5_total from x1, x2, x3, x4, x5 where x1.responden=x2.responden and x1.responden=x3.responden and x1.responden=x4.responden and x1.responden=x5.responden ");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x1_2  = $data['x1_total'];
    $x2_2  = $data['x2_total'];
    $x3_2  = $data['x3_total'];
	$x4_2  = $data['x4_total'];
	$x5_2  = $data['x5_total'];
	echo "<tr><td>$responden</td><td>$x1_2</td><td>$x2_2</td><td>$x3_2</td><td>$x4_2</td><td>$x5_2</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total*total) as totx1 from x1");
$data=mysqli_fetch_assoc($tampil);
$totx1_p2=$data["totx1"];
echo $totx1_p2;
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total*total) as totx2 from x2");
$data=mysqli_fetch_assoc($tampil);
$totx2_p2=$data["totx2"];
echo $totx2_p2;?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total*total) as totx3 from x3");
$data=mysqli_fetch_assoc($tampil);
$totx3_p2=$data["totx3"];
echo $totx3_p2;?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total*total) as totx4 from x4");
$data=mysqli_fetch_assoc($tampil);
$totx4_p2=$data["totx4"];
echo $totx4_p2;?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(total*total) as totx5 from x5");
$data=mysqli_fetch_assoc($tampil);
$totx5_p2=$data["totx5"];
echo $totx5_p2;?></td>              </tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
			  
			  
<div id="x_y" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>Total*Y</strong><span class="panel-subtitle">Data Total*Y</span></div>
<div class="panel-body"> 
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
<thead>
            <tr >
              <th >Responden</th>
              <th >Total X1*y</th>
              <th >Total X2*y</th>
              <th >Total X3*y</th>
              <th >Total X4*y</th>
              <th >Total X5*y</th>

            </tr>
			 </thead><tbody>
                <?php
$tampil=mysqli_query($conn,"SELECT x1.responden, x1.total*y.total as x1_total, x2.total*y.total as x2_total, x3.total*y.total as x3_total, x4.total*y.total as x4_total, x5.total*y.total as x5_total from x1, x2, x3, x4, x5, y where x1.responden=x2.responden and x1.responden=x3.responden and x1.responden=x4.responden and x1.responden=x5.responden and x1.responden=y.responden");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x1_y  = $data['x1_total'];
    $x2_y  = $data['x2_total'];
    $x3_y  = $data['x3_total'];
	$x4_y  = $data['x4_total'];
	$x5_y  = $data['x5_total'];
	echo "<tr><td>$responden</td><td>$x1_y</td><td>$x2_y</td><td>$x3_y</td><td>$x4_y</td><td>$x5_y</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x1.total*y.total) as totx1 from x1,y WHERE x1.responden = y.responden");
$data=mysqli_fetch_assoc($tampil);
$totx1_y=$data["totx1"];
echo $totx1_y;
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x2.total*y.total) as totx2 from x2,y WHERE x2.responden = y.responden");
$data=mysqli_fetch_assoc($tampil);
$totx2_y=$data["totx2"];
echo $totx2_y;
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x3.total*y.total) as totx3 from x3,y WHERE x3.responden = y.responden");
$data=mysqli_fetch_assoc($tampil);
$totx3_y=$data["totx3"];
echo $totx3_y;
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x4.total*y.total) as totx4 from x4,y WHERE x4.responden = y.responden");
$data=mysqli_fetch_assoc($tampil);
$totx4_y=$data["totx4"];
echo $totx4_y;
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x5.total*y.total) as totx5 from x5,y WHERE x5.responden = y.responden");
$data=mysqli_fetch_assoc($tampil);
$totx5_y=$data["totx5"];
echo $totx5_y;
?></td>              </tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>		  

<div id="x1_x" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>Total X1*Total</strong><span class="panel-subtitle">Data Total X1*Total</span></div>
<div class="panel-body"> 
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
<thead>
            <tr >
              <th >Responden</th>
              <th >Total x1*x1</th>
              <th >Total x1*x2</th>
              <th >Total x1*x3</th>
              <th >Total x1*x4</th>
              <th >Total x1*x5</th>

            </tr>
			 </thead><tbody>
                <?php
$tampil=mysqli_query($conn,"SELECT x1.responden, x1.total*x1.total as x1_total, x2.total*x1.total as x2_total, x3.total*x1.total as x3_total, x4.total*x1.total as x4_total, x5.total*x1.total as x5_total from x1, x2, x3, x4, x5 where x1.responden=x2.responden and x1.responden=x3.responden and x1.responden=x4.responden and x1.responden=x5.responden");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x1_total  = $data['x1_total'];
    $x2_total  = $data['x2_total'];
    $x3_total  = $data['x3_total'];
	$x4_total  = $data['x4_total'];
	$x5_total  = $data['x5_total'];
	echo "<tr><td>$responden</td><td>$x1_total</td><td>$x2_total</td><td>$x3_total</td><td>$x4_total</td><td>$x5_total</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x1.total*x1.total) as totx1 from x1");
$data=mysqli_fetch_assoc($tampil);
$totx1_x1 = $data["totx1"];
echo $totx1_x1;
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x2.total*x1.total) as totx2 from x2,x1 WHERE x1.responden = x2.responden");
$data=mysqli_fetch_assoc($tampil);
$totx2_x1 = $data["totx2"];
echo $totx2_x1;
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x3.total*x1.total) as totx3 from x3,x1 WHERE x1.responden = x3.responden");
$data=mysqli_fetch_assoc($tampil);
$totx3_x1 = $data["totx3"];
echo $totx3_x1;
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x4.total*x1.total) as totx4 from x4,x1 WHERE x1.responden = x4.responden");
$data=mysqli_fetch_assoc($tampil);
$totx4_x1 = $data["totx4"];
echo $totx4_x1;
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x5.total*x1.total) as totx5 from x5,x1 WHERE x1.responden = x5.responden");
$data=mysqli_fetch_assoc($tampil);
$totx5_x1 = $data["totx5"];
echo $totx5_x1;
?></td>              </tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
<div id="x2_x" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>Total X2*Total</strong><span class="panel-subtitle">Data Total X2*Total</span></div>
<div class="panel-body"> 
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
<thead>
            <tr >
              <th >Responden</th>
              <th >Total x2*x1</th>
              <th >Total x2*x2</th>
              <th >Total x2*x3</th>
              <th >Total x2*x4</th>
              <th >Total x2*x5</th>

            </tr>
			 </thead><tbody>
                <?php
$tampil=mysqli_query($conn,"SELECT x1.responden, x1.total*x2.total as x1_total, x2.total*x2.total as x2_total, x3.total*x2.total as x3_total, x4.total*x2.total as x4_total, x5.total*x2.total as x5_total from x1, x2, x3, x4, x5 where x1.responden=x2.responden and x1.responden=x3.responden and x1.responden=x4.responden and x1.responden=x5.responden");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x1_total  = $data['x1_total'];
    $x2_total  = $data['x2_total'];
    $x3_total  = $data['x3_total'];
	$x4_total  = $data['x4_total'];
	$x5_total  = $data['x5_total'];
	echo "<tr><td>$responden</td><td>$x1_total</td><td>$x2_total</td><td>$x3_total</td><td>$x4_total</td><td>$x5_total</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>

              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x1.total*x2.total) as totx1 from x1,x2 WHERE x2.responden = x1.responden");
$data=mysqli_fetch_assoc($tampil);
$totx1_x2 = $data["totx1"];
echo $totx1_x2;
?></td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x2.total*x2.total) as totx2 from x2");
$data=mysqli_fetch_assoc($tampil);
$totx2_x2 = $data["totx2"];
echo $totx2_x2;
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x3.total*x2.total) as totx3 from x3,x2 WHERE x2.responden = x3.responden");
$data=mysqli_fetch_assoc($tampil);
$totx3_x2 = $data["totx3"];
echo $totx3_x2;
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x4.total*x2.total) as totx4 from x4,x2 WHERE x2.responden = x4.responden");
$data=mysqli_fetch_assoc($tampil);
$totx4_x2 = $data["totx4"];
echo $totx4_x2;
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x5.total*x2.total) as totx5 from x5,x2 WHERE x2.responden = x5.responden");
$data=mysqli_fetch_assoc($tampil);
$totx5_x2 = $data["totx5"];
echo $totx5_x2;
?></td>              </tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
<div id="x3_x" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>Total X3*Total</strong><span class="panel-subtitle">Data Total X3*Total</span></div>
<div class="panel-body"> 
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
<thead>
            <tr >
              <th >Responden</th>
              <th >Total x3*x1</th>
              <th >Total x3*x2</th>
              <th >Total x3*x3</th>
              <th >Total x3*x4</th>
              <th >Total x3*x5</th>

            </tr>
			 </thead><tbody>
                <?php
$tampil=mysqli_query($conn,"SELECT x1.responden, x1.total*x3.total as x1_total, x2.total*x3.total as x2_total, x3.total*x3.total as x3_total, x4.total*x3.total as x4_total, x5.total*x3.total as x5_total from x1, x2, x3, x4, x5 where x1.responden=x2.responden and x1.responden=x3.responden and x1.responden=x4.responden and x1.responden=x5.responden");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x1_total  = $data['x1_total'];
    $x2_total  = $data['x2_total'];
    $x3_total  = $data['x3_total'];
	$x4_total  = $data['x4_total'];
	$x5_total  = $data['x5_total'];
	echo "<tr><td>$responden</td><td>$x1_total</td><td>$x2_total</td><td>$x3_total</td><td>$x4_total</td><td>$x5_total</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>

              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x1.total*x3.total) as totx1 from x1,x3 WHERE x3.responden = x1.responden");
$data=mysqli_fetch_assoc($tampil);
$totx1_x3 = $data["totx1"];
echo $totx1_x3;
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x2.total*x3.total) as totx2 from x2,x3 WHERE x3.responden = x2.responden");
$data=mysqli_fetch_assoc($tampil);
$totx2_x3 = $data["totx2"];
echo $totx2_x3;
?></td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x3.total*x3.total) as totx3 from x3");
$data=mysqli_fetch_assoc($tampil);
$totx3_x3 = $data["totx3"];
echo $totx3_x3;
?></td>

              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x4.total*x3.total) as totx4 from x4,x3 WHERE x3.responden = x4.responden");
$data=mysqli_fetch_assoc($tampil);
$totx4_x3 = $data["totx4"];
echo $totx4_x3;
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x5.total*x3.total) as totx5 from x5,x3 WHERE x3.responden = x5.responden");
$data=mysqli_fetch_assoc($tampil);
$totx5_x3 = $data["totx5"];
echo $totx5_x3;
?></td>              </tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
			  <div id="x4_x" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>Total X4*Total</strong><span class="panel-subtitle">Data Total X4*Total</span></div>
<div class="panel-body"> 
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
<thead>
            <tr >
              <th >Responden</th>
              <th >Total x4*x1</th>
              <th >Total x4*x2</th>
              <th >Total x4*x3</th>
              <th >Total x4*x4</th>
              <th >Total x4*x5</th>

            </tr>
			 </thead><tbody>
                <?php
$tampil=mysqli_query($conn,"SELECT x1.responden, x1.total*x4.total as x1_total, x2.total*x4.total as x2_total, x3.total*x4.total as x3_total, x4.total*x4.total as x4_total, x5.total*x4.total as x5_total from x1, x2, x3, x4, x5 where x1.responden=x2.responden and x1.responden=x3.responden and x1.responden=x4.responden and x1.responden=x5.responden");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x1_total  = $data['x1_total'];
    $x2_total  = $data['x2_total'];
    $x3_total  = $data['x3_total'];
	$x4_total  = $data['x4_total'];
	$x5_total  = $data['x5_total'];
	echo "<tr><td>$responden</td><td>$x1_total</td><td>$x2_total</td><td>$x3_total</td><td>$x4_total</td><td>$x5_total</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>

              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x1.total*x4.total) as totx1 from x1,x4 WHERE x4.responden = x1.responden");
$data=mysqli_fetch_assoc($tampil);
$totx1_x4 = $data["totx1"];
echo $totx1_x4;
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x2.total*x4.total) as totx2 from x2,x4 WHERE x4.responden = x2.responden");
$data=mysqli_fetch_assoc($tampil);
$totx2_x4 = $data["totx2"];
echo $totx2_x4;
?></td>

              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x3.total*x4.total) as totx3 from x3,x4 WHERE x4.responden = x3.responden");
$data=mysqli_fetch_assoc($tampil);
$totx3_x4 = $data["totx3"];
echo $totx3_x4;
?></td>
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x4.total*x4.total) as totx4 from x4 ");
$data=mysqli_fetch_assoc($tampil);
$totx4_x4 = $data["totx4"];
echo $totx4_x4;
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x5.total*x4.total) as totx5 from x5,x4 WHERE x4.responden = x5.responden");
$data=mysqli_fetch_assoc($tampil);
$totx5_x4 = $data["totx5"];
echo $totx5_x4;
?></td>              </tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
<div id="x5_x" class="tab-pane cont">
					<div class="panel">
<div class="panel-heading  text-primary"><strong>Total X5*Total</strong><span class="panel-subtitle">Data Total X5*Total</span></div>
<div class="panel-body"> 
					<table id="table1" class="display table table-striped table-hover table-fw-widget" >
<thead>
            <tr >
              <th >Responden</th>
              <th >Total x5*x1</th>
              <th >Total x5*x2</th>
              <th >Total x5*x3</th>
              <th >Total x5*x4</th>
              <th >Total x5*x5</th>

            </tr>
			 </thead><tbody>
                <?php
$tampil=mysqli_query($conn,"SELECT x1.responden, x1.total*x5.total as x1_total, x2.total*x5.total as x2_total, x3.total*x5.total as x3_total, x4.total*x5.total as x4_total, x5.total*x5.total as x5_total from x1, x2, x3, x4, x5 where x1.responden=x2.responden and x1.responden=x3.responden and x1.responden=x4.responden and x1.responden=x5.responden");
while ($data=mysqli_fetch_assoc($tampil))
{
 $responden  = $data['responden'];
    $x1_total  = $data['x1_total'];
    $x2_total  = $data['x2_total'];
    $x3_total  = $data['x3_total'];
	$x4_total  = $data['x4_total'];
	$x5_total  = $data['x5_total'];
	echo "<tr><td>$responden</td><td>$x1_total</td><td>$x2_total</td><td>$x3_total</td><td>$x4_total</td><td>$x5_total</td></tr>";
}
?>
          </tbody>
		  <tbody><tr class="primary">
              <td>Total</td>

              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x1.total*x5.total) as totx1 from x1,x5 WHERE x5.responden = x1.responden");
$data=mysqli_fetch_assoc($tampil);
$totx1_x5 = $data["totx1"];
echo $totx1_x5;
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x2.total*x5.total) as totx2 from x2,x5 WHERE x5.responden = x2.responden");
$data=mysqli_fetch_assoc($tampil);
$totx2_x5 = $data["totx2"];
echo $totx2_x5;
?></td>

              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x3.total*x5.total) as totx3 from x3,x5 WHERE x5.responden = x3.responden");
$data=mysqli_fetch_assoc($tampil);
$totx3_x5 = $data["totx3"];
echo $totx3_x5;
?></td>
              <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x4.total*x5.total) as totx4 from x4,x5 WHERE x5.responden = x4.responden");
$data=mysqli_fetch_assoc($tampil);
$totx4_x5 = $data["totx4"];
echo $totx4_x5;?></td> 
			  <td><?php 
$tampil=mysqli_query($conn,"SELECT sum(x5.total*x5.total) as totx5 from x5");
$data=mysqli_fetch_assoc($tampil);
$totx5_x5 = $data["totx5"];
echo $totx5_x5;
?></td>
             </tr> </tbody> 
		  </table>
		  
		                 </div>
		   </div>
              </div>
			  <div id="hasil" class="tab-pane">
<div class="panel-heading panel-heading-divider text-primary">Determinan Matrix
                  
                </div>
				<div class="panel-body">
                  <table class="table table-condensed table-striped">
                    <thead>
		  <tr >
		  <th >
		  Variabel
		  </th>
		  <th>
		  Nilai
		  </th>
		  </tr>
		  </thead>
		  <tbody>
		  <?php
      $tampil=mysqli_query($conn,"select count(*) as jum_res from x1, x2, x3, x4, x5 where x1.responden=x2.responden and x1.responden=x3.responden and x1.responden=x4.responden and x1.responden=x5.responden");
$data=mysqli_fetch_assoc($tampil);

$n = $data["jum_res"];
$A = deterM($n,$totx1,$totx2,$totx3,$totx4,$totx5,
  $totx1,$totx1_x1,$totx2_x1,$totx3_x1,$totx4_x1,$totx5_x1,
  $totx2,$totx1_x2,$totx2_x2,$totx3_x2,$totx4_x2,$totx5_x2,
  $totx3,$totx1_x3,$totx2_x3,$totx3_x3,$totx4_x3,$totx5_x3,
  $totx4,$totx1_x4,$totx2_x4,$totx3_x4,$totx4_x4,$totx5_x4,
  $totx5,$totx1_x5,$totx2_x5,$totx3_x5,$totx4_x5,$totx5_x5);

$A0 = deterM($toty,$totx1_y,$totx2_y,$totx3_y,$totx4_y,$totx5_y,
  $totx1,$totx1_x1,$totx2_x1,$totx3_x1,$totx4_x1,$totx5_x1,
  $totx2,$totx1_x2,$totx2_x2,$totx3_x2,$totx4_x2,$totx5_x2,
  $totx3,$totx1_x3,$totx2_x3,$totx3_x3,$totx4_x3,$totx5_x3,
  $totx4,$totx1_x4,$totx2_x4,$totx3_x4,$totx4_x4,$totx5_x4,
  $totx5,$totx1_x5,$totx2_x5,$totx3_x5,$totx4_x5,$totx5_x5);

$A1 = deterM($n,$totx1,$totx2,$totx3,$totx4,$totx5,
  $toty,$totx1_y,$totx2_y,$totx3_y,$totx4_y,$totx5_y,
  $totx2,$totx1_x2,$totx2_x2,$totx3_x2,$totx4_x2,$totx5_x2,
  $totx3,$totx1_x3,$totx2_x3,$totx3_x3,$totx4_x3,$totx5_x3,
  $totx4,$totx1_x4,$totx2_x4,$totx3_x4,$totx4_x4,$totx5_x4,
  $totx5,$totx1_x5,$totx2_x5,$totx3_x5,$totx4_x5,$totx5_x5);

$A2 = deterM($n,$totx1,$totx2,$totx3,$totx4,$totx5,
  $totx1,$totx1_x1,$totx2_x1,$totx3_x1,$totx4_x1,$totx5_x1,
  $toty,$totx1_y,$totx2_y,$totx3_y,$totx4_y,$totx5_y,
  $totx3,$totx1_x3,$totx2_x3,$totx3_x3,$totx4_x3,$totx5_x3,
  $totx4,$totx1_x4,$totx2_x4,$totx3_x4,$totx4_x4,$totx5_x4,
  $totx5,$totx1_x5,$totx2_x5,$totx3_x5,$totx4_x5,$totx5_x5);

$A3 = deterM($n,$totx1,$totx2,$totx3,$totx4,$totx5,
  $totx1,$totx1_x1,$totx2_x1,$totx3_x1,$totx4_x1,$totx5_x1,
  $totx2,$totx1_x2,$totx2_x2,$totx3_x2,$totx4_x2,$totx5_x2,
  $toty,$totx1_y,$totx2_y,$totx3_y,$totx4_y,$totx5_y,
  $totx4,$totx1_x4,$totx2_x4,$totx3_x4,$totx4_x4,$totx5_x4,
  $totx5,$totx1_x5,$totx2_x5,$totx3_x5,$totx4_x5,$totx5_x5);

$A4 = deterM($n,$totx1,$totx2,$totx3,$totx4,$totx5,
  $totx1,$totx1_x1,$totx2_x1,$totx3_x1,$totx4_x1,$totx5_x1,
  $totx2,$totx1_x2,$totx2_x2,$totx3_x2,$totx4_x2,$totx5_x2,
  $totx3,$totx1_x3,$totx2_x3,$totx3_x3,$totx4_x3,$totx5_x3,
  $toty,$totx1_y,$totx2_y,$totx3_y,$totx4_y,$totx5_y,
  $totx5,$totx1_x5,$totx2_x5,$totx3_x5,$totx4_x5,$totx5_x5);

$A5 = deterM($n,$totx1,$totx2,$totx3,$totx4,$totx5,
  $totx1,$totx1_x1,$totx2_x1,$totx3_x1,$totx4_x1,$totx5_x1,
  $totx2,$totx1_x2,$totx2_x2,$totx3_x2,$totx4_x2,$totx5_x2,
  $totx3,$totx1_x3,$totx2_x3,$totx3_x3,$totx4_x3,$totx5_x3,
  $totx4,$totx1_x4,$totx2_x4,$totx3_x4,$totx4_x4,$totx5_x4,
  $toty,$totx1_y,$totx2_y,$totx3_y,$totx4_y,$totx5_y);

$konstanta = number_format($A0/$A,3);
$b1 = number_format($A1/$A,3);
$b2 = number_format($A2/$A,3);
$b3 = number_format($A3/$A,3);
$b4 = number_format($A4/$A,3);
$b5 = number_format($A5/$A,3);


			echo "<tr><td>A</td><td>".$A."</td></tr>";
      echo "<tr><td>A0</td><td>".$A0."</td></tr>";
      echo "<tr><td>A1</td><td>".$A1."</td></tr>";
      echo "<tr><td>A2</td><td>".$A2."</td></tr>";
      echo "<tr><td>A3</td><td>".$A3."</td></tr>";
      echo "<tr><td>A4</td><td>".$A4."</td></tr>";
      echo "<tr><td>A5</td><td>".$A5."</td></tr>";
			?>
			</tbody>
                  </table></div>
<div class="panel-heading panel-heading-divider text-primary">Regresi Linear Berganda
                         </div>
<div class="panel-body"><table class="table table-condensed table-striped">
                    <thead>
                <tr>
                  <th>Keterangan</th>
                  <th>Hasil</th>
                  <th>Rumus</th>

                </tr>
				</thead>
				<tbody>
                <tr>
                  <td>Konstanta (a)</td>
                  <td><?php
                        echo $konstanta;
                      ?>                  
                  </td>
                  <td>= A0 / A<br>
                      <?php
                        echo "= ".$A0." / ".$A;
                       echo "<br>= ".$konstanta;?></td>

                </tr>
                <tr>
                  <td>B1</td>
                  <td><?php
                        echo $b1;
                      ?>                  
                  </td>
                  <td>= A1 / A<br>
                      <?php
                        echo "= ".$A1." / ".$A;
                       echo "<br>= ".$b1;?></td>

                </tr>
                  <tr>
                  <td>B2</td>
                  <td><?php
                        echo $b2;
                      ?>                  
                  </td>
                  <td>= A2 / A<br>
                      <?php
                        echo "= ".$A2." / ".$A;
                       echo "<br>= ".$b2;?></td>

                </tr>
                 <tr>
                  <td>B3</td>
                  <td><?php
                        echo $b3;
                      ?>                  
                  </td>
                  <td>= A3 / A<br>
                      <?php
                        echo "= ".$A3." / ".$A;
                       echo "<br>= ".$b3;?></td>

                </tr>
                <tr>
                  <td>B4</td>
                  <td><?php
                        echo $b4;
                      ?>                  
                  </td>
                  <td>= A4 / A<br>
                      <?php
                        echo "= ".$A4." / ".$A;
                       echo "<br>= ".$b4;?></td>

                </tr>
                                <tr>
                  <td>B5</td>
                  <td><?php
                        echo $b5;
                      ?>                  
                  </td>
                  <td>= A5 / A<br>
                      <?php
                        echo "= ".$A5." / ".$A;
                       echo "<br>= ".$b5;?></td>

                </tr>
			</tbody>
                  </table></div>
                  <div class="panel-heading panel-heading-divider text-primary">Persamaan Regresi Linear Berganda
                  
                </div><div class="panel-body">

                  <div role="alert" class="alert alert-success alert-icon alert-icon-colored alert-dismissible">
                    <div class="icon"><span class="mdi mdi-check"></span></div>
                    <div class="message">
                  <?php
                  echo "<p><h4><strong>Y</strong> = a + b1 X1 + b2 X2 + b3 X3 + b4 X4 + b5 X5</h4></p>";
                  echo "<p><h4><strong>Y</strong> = ".$konstanta." + ".$b1." X1 + ".$b2." X2 + ".$b3." X3 + ".$b4." X4 + ".$b5." X5</h4></p>";
                  ?>
                    </div>
                  </div>
                  </div>
				  
				  
				  
                </div>
            </div>
</div>            </div>
          </div> 