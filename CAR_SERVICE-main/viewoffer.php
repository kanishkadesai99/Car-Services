<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="admin.css" />
<style>
body{
 background-color:#CCCCCC;
 }
td{
 text-align:center;
 color:#000000;
 }
 table{
  margin-top:100px;
  
  }
  a{
  text-decoration:none;
  }
</style>
</head>

<body>
<div class="nav_bar">
		   <h1><font color="#000033">Car<span>Servicing</span></font></h1>
		   <nav>
	           <ul>
	               <li><a href="Vfeedback.php">View Feedback</a></li>
				   <li><a href="viewservice.php">View Services</a></li>
				   <li><a href="viewoffer.php">View Offer</a></li>	
				   <li><a href="Vregister.php">View User</a></li>	
				   <li><a href="adminhome.php">Logout</a></li>	
				  
				   
				 </ul>
			 </nav>
	       </div>
<?php
//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entery first)
//$result = mysql_query(SELECT * FROM users ORDER BY id DESC");
//mysql_query is deprecated

$result = mysqli_query($conn, "SELECT * FROM offer ORDER BY id DESC");//using mysqli_query instead

?>
<html>
<head>
     <title>Home Page</title>
</head>
<body>
  
	<h1><center>View Offer</center></h1><hr />
	<table width="80%" border="2" align="center">
	   <tr bgcolor="#000000">
	       <td style="color:#CCCCCC; font-weight:bold">Offer Name</td>
		   <td style="color:#CCCCCC; font-weight:bold">Offer Description</td>
		   <td style="color:#CCCCCC; font-weight:bold">Offer Period</td>
		   <td style="color:#CCCCCC; font-weight:bold">Update</td>
		</tr>
		<?php
		   while($res=mysqli_fetch_array($result)) {
		       echo"<tr>";
			   echo"<td>".$res['oname']."</td>";
			   echo"<td>".$res['descri']."</td>";
			   echo"<td>".$res['no']."</td>";
			   echo"<td><a href=\"offeredit.php?id=$res[id]\">Edit</a>|
			   <a href=\"offerdelete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
			   }
			   ?>
			   </table>
<br />
<a href="Views.html"><center>BACK</center></a>

</body>
</html>

