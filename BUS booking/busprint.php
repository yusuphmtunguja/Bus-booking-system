     
           <?php

session_start();


?>


           <h1 align="center"><mark>Ticket Details</h1></mark>
           <br>


			<style >
$black: #343434;

.ticket {

    font-family: Montserrat, sans-serif;
}

.ticketdesign {
  background: linear-gradient(to bottom, #FFC107 0%, #FFC107 19%, #d9d9d9 19%, #d9d9d9 100%);
  height: 30em;
  float: left;
  object-position: center;
  padding: 1em;
  margin-top: 100px;

}


.ticketstructure {
  align-content: center;
  border-top-left-radius: 8px;
  border-bottom-left-radius: 8px;
   border-top-right-radius: 8px;
   border-bottom-right-radius: 8px;



  width: 75em;
}

h1 {
  font-size: 40px;
  margin-top: 0;
      font-family: Montserrat, sans-serif;

 
}
h2 h3 {
  font-size: 20px;
  margin-top: 0;
      font-family: Montserrat, sans-serif;
      color:black;
}
span {
  color: black;
}
#options {
	align-content:center;
	align-items:center;
    text-align: center;
}
.printable {
   padding-left: 
   10px;text-align:left;
}
</style>


<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=800, height=600, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
   setTimeout(function(){
   	docprint.close()
   },750)
}
</script>
<strong>Click here to danlowd ticket<br><br>
<a href="javascript:Clickheretoprint()">DANLOWD</a>
<div id="print_content" style="width: 400px;">

           <?php
          include 'connect.php';

		  $pid=$_GET['pid'];
    
			
			$sel="SELECT * FROM `bustransactions` WHERE `T_No.` =$pid";
			$rs=$connect->query($sel);
			while($row=$rs->fetch_assoc())
			{

				?>


				<div class="ticket " id="printable">
  <div class="ticketdesign ticketstructure" >

<h1 align="left"><b>BUS BOOKING TICKET</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Bus-Ticket</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Ticket No : <?php echo $row['T_No.'] ?> </h1></span>
    <div class="title">
    	<br>
   <h1 align="center"><span><?php echo $row['source'] ?> &nbsp&nbsp To &nbsp&nbsp <?php echo $row['dest'] ?>  </span></h1>
   <h2 align="left"><span>Name : &nbsp <?php echo $row['Name'] ?></span></h2>
   <h2 align="left"><span>Date & Time : &nbsp <?php echo $row['Date'] ?></span></h2>
   
   <h2 align="left"><span>Bus No : &nbsp <?php echo $row['Bus_No'] ?></span></h2>
   <h2 align="left"><span>No of Passengers :&nbsp <?php echo $row['NoOfpass'] ?> </span></h2>
   <h2 align="left"><span>Amount : &nbsp Tsh<?php echo $row['Amt'] ?> </span></h2>
    <h2 align="left"><span>seat : &nbsp No. <?php echo $_SESSION['seat']?> </span></h2>
   <h2 align="center"><span>Wish you happy & safe journey</span> </h2>
</div>
    </div>
</div>


			<?php
		}
		?>

</div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
    <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
    <br>
  <br>
  <br>
  <br>
  
