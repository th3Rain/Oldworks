<?php
include"connect_i.php";
$sql="select id,username from account";
$result=mysqli_query($connection, $sql);

$options="";

while($row=mysqli_fetch_array($result)){
$USERid=$row['id'];
$USERname=$row['username'];
$options.="<OPTION VALUE=\"$USERid\">".$USERname."</OPTION>";
}
?>
<?php
$username=$_SESSION['username'];

?>
<table width="800" border="0">

</table>
<table width="800" border="1">
<tr>
<td>You are currently logged in as, &nbsp;&nbsp;<?php  echo $username; ?></td>
<tr>
<td><?php require_once"pm_check.php";?></td>
</tr>
</tr>
</table>
<form action="pm_send_to.php" id="form" method="post" onSubmit="return validate_form();">
<tr>
<td width="185">select user</td>
<td width="605"><select name="to_userid" id="to_userid">
<?php echo $options;?>
</OPTION></select></td>
</tr>
<tr> <td colspan="2"><input type="submit" id="submit" value="select user"/></td>
</tr>
</form>
</table>









