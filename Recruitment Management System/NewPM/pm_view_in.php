<?php 
include'connect_i.php';
  
if(!$_GET['in']){
$pageid2='1';
}
else{
$pageid2=ereg_replace("[^0-9]","",$_GET['in']);

}

$sql="select id,username from account where username='".$_SESSION['username']."'";
$query=mysqli_query($connection, $sql);
while($row=mysqli_fetch_array($query)){
$pid=$row['id'];
$username=$row['username'];

}
//mysql_free_result($query);




$sql="select id,userid,from_id,from_username,title ,content,recieve_data from pm_imbox where id='$pageid2' AND userid='$pid'";
$query=mysqli_query($connection, $sql);
while($row=mysqli_fetch_array($query)){
$Hid=$row['id'];
$Huserid=$row['userid'];
$Hfrom_id=$row['from_id'];
$Hfrom_username=$row['from_username'];
$Htitle=$row['title'];
$Hcontent=$row["content"];
$Hrecievedata=$row['recieve_date'];

}
//mysql_free_result($query);
$query=mysqli_query($connection, "update pm_imbox set viewed='1' where id='$pageid2'");

?>

<table width="800" border="0">
<tr>


</tr>
</table>
<table width="800" border="1">
<tr>
<td>You are currently logged in as, &nbsp;&nbsp;<?php  echo $username; ?></td>
<tr>
<td><?php require_once"pm_check.php";?></td>
</tr>
</tr>
</table>
<table width="800" border="0">
<tr>
<td width="185">Message Subject:</td>
<td><?php echo $Htitle;   ?></td>

</tr>
<tr>
<td width="185">Message From:</td>
<td><?php print $Hfrom_username ?></td>
</tr>

<tr>
<td width="185">Date Recieved:</td>
<td><?php print $Hrecievedata  ?></td>
</tr>

<tr>
<td width="185">Message Content:</td>
<td><?php print $Hcontent ?></td>

</tr>




</table>








