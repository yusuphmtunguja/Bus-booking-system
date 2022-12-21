<?php


include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}

include 'header.php';

$source = $_POST['source'];
$dest = $_POST['dest'];

$seat = $_POST['seat'];
$no = $_POST['number'];




if ($source == $dest)
{
  echo"<h1><center>Selected source and destination same , Please refill the details  </center></h1><br><br>";
  echo'<center>

<td><form action="bookBUS.php"><button style="background-color: black; padding: 25px 70px; type="submit"; align=center;"><span style=color:white;><h3>Go back</h3></span></a></td></button></form><br><br>';
}
else{
$sql_price="SELECT * FROM pricebus WHERE `source` LIKE '$source' AND `dest` LIKE '$dest' AND `seat` LIKE '$seat'";
$result = $connect->query($sql_price);
while($row = $result->fetch_assoc()){
$final = $row["Price"]*$no  ;
$busnum = $row["Bus_No."]  ;
$seat1 = $row['seat'];

echo "<br><br><br><h1><center>Total fare of bus number <b>".$busnum."</b> from <b>".$source." to ".$dest."</b> is  : Tsh <b>".$final."</b>  seat No. <b>".$seat1."</b></center></h1><br><br>";
echo'<center>
<td><form action="buspay.php"><button style="background-color: black; padding: 25px 70px; type="submit"; align=center;"><span style=color:white;><h3>Checkout</h3></span></a></td></button></form><br><br>

<td><form action="bookBUS.php"><button style="background-color: black; padding: 25px 70px; type="submit"; align=center;"><span style=color:white;><h3>Go back</h3></span></a></td></button></form><br><br>';
 }
$_SESSION['final']= $final ;
$_SESSION['source']=$source;
$_SESSION['dest']=$dest;
$_SESSION['seat']=$seat;
$_SESSION['busnum']=$busnum;
$_SESSION['NoOfpass']=$no;
}
?>