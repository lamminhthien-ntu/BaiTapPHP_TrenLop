<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Tính diện tích hình tròn</title>
  <style type="text/css">
  body {  
    background-color: beige;
  }
  table{
    border-top-width: 5px;
    border-left-width: 5px;
    border-bottom-width: 5px;
    border-right-width: 5px;
    margin-top: 250px;
    margin-bottom: 5px;
    margin-right: 5px;
    margin-left: 500px;
    padding-top: 3px;
    padding-bottom: 3px;
    background: #ffd94d;
    border:5 solid deeppink;
  }
  thead{
    background: #fff14d;    
  }
  td {
    color: blue;
  }
  h3{
    font-family: verdana;
    margin-top: 20px;
    text-align: center;
    /* text-anchor: middle; */
    color: #ff8100;
    font-size: 30;
  }
</style>
</head>
<body>
  <?php 
  if(isset($_POST['dodaicanh']))  
    $dodaicanh=trim($_POST['dodaicanh']); 
  else $dodaicanh=0;


  if(isset($_POST['tinh']))
    if (is_numeric($dodaicanh) )  
      $dientich=pow($dodaicanh,2)*3.14;
    else {
      echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
      $dientich="";
    }
    else $dientich=0;
    ?>



    <form align='center' action="" method="post">
      <table>
        <thead>
          <th colspan="2" align="center" ><h3
          ">DIỆN TÍCH HÌNH TRÒN</h3></th>
        </thead>
        <tr><td>Độ dài cạnh bán kính</td>
         <td><input type="text" name="dodaicanh" value="<?php  echo $dodaicanh;?> "/></td>
       </tr>


       <tr><td>Diện tích:</td>
         <td><input type="text" name="dientich" disabled="disabled" value="<?php  echo $dientich;?> "/></td>
       </tr>

       <tr>
         <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
       </tr>
     </table>

   </form>

 </body>
 </html>